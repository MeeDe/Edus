<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Http\Requests;

use App\User;
use App\Models\Groups;
use App\Models\Roles;

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
        if($request->method()=="GET") {
            $data['groups'] = $data['account']->groups()->get();
            $data['roles']=new Collection();
            foreach ($data['groups'] as $group) {
                $data['roles']->push($group->roles()->get());
            }

            $data['roles']=$data['roles']->flatten();

            return view('administrator.users.edit.index', $data);
        }
        else {
            $valid = $data['account']->validate($request->input());
            if($valid->fails())
                return back()->withErrors($valid->errors())->withInput();

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
