<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Groups;
use App\Models\Roles;
use App\Models\Groups_int_Roles as GIR;
use App\User;
use Auth;

class GroupsController extends Controller
{
    public function index()
    {
        $data['groups'] = Groups::all();
        $data['account'] = User::find(Auth::User()->id);

        return view('administrator.groups.index', $data);
    }

    public function show($id)
    {
        $data['roles'] = Roles::all();
        $ids = $data['roles']->pluck('id');

        $data['group'] = Groups::where('id', $id)->first();
        $data['group_roles'] = $data['group']->roles();

        $data['checked'] = [];

        foreach ($data['group_roles']->get() as $group_role) {
            if(in_array($group_role->id, $ids->toArray())) {
                array_push($data['checked'], $group_role->id);
            }
        }

        return view('administrator.groups.edit.index', $data);
    }

    public function create()
    {
        $data['roles'] = Roles::all();
        return view('administrator.groups.create.index', $data);
    }

    public function store(Request $request)
    {
        $group = Groups::create($request->all());
        if(count($request['role'])>0) {
            foreach($request['role'] as $role) {
                GIR::create(['role_id'=>$role, 'group_id'=>$group->id]);
            }
        }

        $data['roles'] = Roles::all();
        return view('administrator.groups.create.index', $data);
    }

    public function edit(Request $request, $id)
    {
        if(isset($request['delete'])) {
            return $this->delete($id);
        }
        if(isset($request['block'])) {
            dd('Work in progress');
        }
        if(isset($request['edit'])) {

            $group = Groups::find($id);
            $group->fill($request->all());

            $pre_roles = $group->roles();

            $pre_roles = $pre_roles->get()->pluck(['id'])->toArray();
            $post_roles = $request['role'];

            $roles_to_delete = [];
            $roles_to_add = [];

            if(count($post_roles)>0) {
                foreach($post_roles as $post_role) {
                    if(!in_array($post_role, $pre_roles)) {
                        array_push($roles_to_add, $post_role);
                    }
                }
                if(count($pre_roles) > 0) {
                    foreach($pre_roles as $pre_role) {
                        if(!in_array($pre_role, $post_roles)) {
                            array_push($roles_to_delete, $pre_role);
                        }
                    }
                }
            }

            foreach ($roles_to_delete as $role_to_delete) {
                GIR::where('role_id', $role_to_delete)->where('group_id', $id)->delete();
            }

            foreach ($roles_to_add as $role_to_add) {
                GIR::create(['role_id'=>$role_to_add, 'group_id'=>$id]);
            }

            $group->update();
            return redirect()->back();
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        Groups_int_Roles::where('group_id', $id)->delete();
        Groups::destroy($id);

        return redirect()->back();
    }
}
