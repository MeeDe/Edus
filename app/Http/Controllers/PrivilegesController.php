<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Privileges;
use App\Models\Roles;
use App\Models\Roles_int_Privileges as RIP;

class PrivilegesController extends Controller
{
    public function index()
    {
        $data['privileges'] = new Privileges();
        $data['roles'] = Roles::all();
        return view('administrator.privileges.index', $data);
    }

    public function show()
    {

    }

    public function store(Request $request)
    {
        $role = Roles::where('id', $request['priv_role']);
        if($role->count() > 0) {
            $role = $role->first();
            $privilege = new Privileges();
            $privilege->route = $request['priv_name'];

            $operations = '';
            foreach($request['rights'] as $right) {
                $operations .= $right;
            }

            $privilege->operations = $operations;
            if($privilege->save()) {
                $RIP = new RIP();
                $RIP->role_id = $role->id;
                $RIP->priv_id = $privilege->id;
                if($RIP->save()) {
                    return redirect()->back()->withInput($request->input());
                }
                return back()->withErrors('error');
            }
            return back()->withErrors('error');
        }
        return back()->withErrors('error');
    }

    public function delete()
    {

    }
}
