<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

use Auth;

use DB;

class AdministratorController extends Controller
{
    public function index()
    {
        $account = User::find(Auth::User()->id);
        $canView = $account->checkOperation(\Request::route()->getName());
        if(!$canView)
            redirect()->back();

        return view('administrator.index');
    }

    public function test()
    {
        DB::connection()->enableQueryLog();
        foreach (User::with('masks')->get() as $m)
        {
            dump($m->masks);
        }
        $queries = DB::getQueryLog();
        dd($queries);
    }
}