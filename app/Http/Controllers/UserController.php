<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function activate($id)
    {
        $user = User::find($id);
        $user->active=true;
        $user->update();
        return redirect()->back();
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect()->back();
    }
}
