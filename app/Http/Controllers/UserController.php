<?php

namespace App\Http\Controllers;

use App\Models\Mask;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Http\Requests;

use App\User;
use App\Models\Groups;
use App\Models\Roles;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        $roles = Roles::all();
        $roles = new Collection(['teachers' => $roles->where('name', 'teachers'),
            'students' => $roles->where('name', 'students'),
            'admins'   => $roles->where('name', 'Technical Administrator')]);

        $counter = [];
        foreach($roles as $k=>$role) {
            $counter[$k]= 0;
        }

        foreach($roles as $k=>$role) {
            foreach($role as $subrole) {
                if($subrole !== null) {
                    $counter[$k]+=$subrole->accounts()->unique('name')->count();
                }
            }
        }

        $data['user_amount']=$counter;
        $data['inactive_amount'] = User::where('active', false)->count();
        $data['users'] = new User;

        return view('administrator.users.index', $data);
    }

    public function activate($id)
    {
        $user = User::find($id);
        $user->active=true;
        $user->update();
        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        $data['account'] = User::find($id);
        $data['groups'] = $data['account']->groups()->get();
        $data['roles']=new Collection();
        foreach ($data['groups'] as $group) {
            $data['roles']->push($group->roles()->get());
        }
        $data['roles']=$data['roles']->flatten();

        $exclusive_privs    = $data['account']->masks()->get();
        $privs              = $data['account']->privileges_collection();

        // Overwrite privileges
        foreach($privs as $k=>$priv)
        {
            foreach ($exclusive_privs as $exclusive_priv) {
                if($priv['route']==$exclusive_priv['route'])
                    $privs[$k]=['route'=>$exclusive_priv['route'],
                        'privilege'=>($exclusive_priv['operations'])];

            }
        }

        $data['privileges']=$privs;

        if($request->method()=="GET") {
            return view('administrator.users.edit.index', $data);
        }
        else {
            $valid = $data['account']->validate($request->input());
            if($valid->fails())
                return back()->withErrors($valid->errors())->withInput();


            // Get checked
            $pre = $data['privileges'];
            $pre_checked = $pre->where('privilege', 'Y')->pluck(['route'])->toArray();
            $pre_unchecked = $pre->where('privilege', 'N')->pluck(['route'])->toArray();

            $post = $request['privilege'];

            $kept = [];
            $removed = [];
            $added = [];

            foreach ($post as $p) {
                if(in_array($p, $pre_checked)) {
                    array_push($kept, $p);
                }
                if(in_array($p, $pre_unchecked)) {
                    array_push($added, $p);
                }
            }

            $removed = array_diff($pre_checked, $kept);
            $masks = $data['account']->masks();

            foreach ($added as $add) {
                $m = $masks->where('route', $add);
                if($m->count()==0) {
                    Mask::create(['route' => $add,
                        'operations' => 'Y',
                        'user_id' => $id]);
                }
                else {
                    $m->update(['operations'=>'Y']);
                }
            }

            foreach ($removed as $remove) {
                $m = $masks->where('route', $remove);
                if($m->count()==0) {
                    Mask::create(['route' => $remove,
                        'operations' => 'N',
                        'user_id' => $id]);
                }
                else {
                    $m->update(['operations'=>'N']);
                }
            }

            $data['account']->fill($request->input());
            $data['account']->update();
            return back();
        }
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect()->back();
    }
}
