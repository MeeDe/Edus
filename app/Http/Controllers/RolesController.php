<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Roles;
use App\Models\Privileges;
use App\Models\Roles_int_Privileges as RIP;

class RolesController extends Controller
{
    public function index()
    {
        $data['roles'] = new Roles;
        return view('administrator.roles.index', $data);
    }

    public function show($id)
    {
        $data['role'] = Roles::find($id);
        return view('administrator.roles.view.index', $data);
    }

    public function store(Request $request)
    {
        $role_name = $request['role_name'];
        $role_desc = $request['role_desc'];
        $role_route_name = $request['role_route'];
        $role_route_rights = $request['rights'];

        $role = new Roles;
        $role->name=$role_name;
        $role->descr=$role_desc;
        $role->save();

        $operations = '';
        foreach($role_route_rights as $right) {
            $operations .= $right;
        }

        $privilege = new Privileges;
        $privilege->route = $role_route_name;
        $privilege->operations = $operations;
        $privilege->save();

        $intersection = new RIP;
        $intersection->role_id = $role->id;
        $intersection->priv_id = $privilege->id;
        $intersection->save();

        return redirect()->back();
    }
}
