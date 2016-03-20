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

        $role = new Roles;
        $role->name=$role_name;
        $role->descr=$role_desc;
        $role->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        Roles::destroy($id);
        return back();
    }
}
