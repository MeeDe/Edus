<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Models\Groups;

class UserController extends Controller
{
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
            $data['groups'] = Groups::all();

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
