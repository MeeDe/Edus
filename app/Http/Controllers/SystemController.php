<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Classes\Helpers\DBO;

class SystemController extends Controller
{
    public function index()
    {
        $data['tables'] = DBO::tables();
        return view('administrator.system.index', $data);
    }

    public function csv()
    {

    }

    public function pdf()
    {

    }

    public function sql()
    {

    }

    public function xml()
    {

    }

    public function json()
    {

    }
}
