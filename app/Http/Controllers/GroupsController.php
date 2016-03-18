<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Groups;
use App\Models\Roles;
use App\Models\Groups_int_Roles;
use App\User;

class GroupsController extends Controller
{
    public function show($id)
    {
        $data['group'] = Groups::where('id', $id)->first();
        return view('administrator.groups.edit.index', $data);
    }

    public function create(Request $request)
    {
        if($request->method()=="GET") {
            $data['roles'] = Roles::all();
            return view('administrator.groups.create.index', $data);
        }

        $group = Groups::create($request->all());

        foreach($request['role'] as $role) {
            Groups_int_Roles::create(['role_id'=>$role, 'group_id'=>$group->id]);
        }
        return redirect()->back();
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
