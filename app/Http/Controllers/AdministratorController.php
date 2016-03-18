<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Models\Privileges;
use App\Models\Roles;
use App\Models\Groups;

use Auth;
use Illuminate\Database\Eloquent\Collection;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = User::find(Auth::User()->id);
        $canView = $account->checkOperation(\Request::route()->getName());
        if(!$canView)
            redirect()->back();

        return view('administrator.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function users()
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


    public function groups()
    {
        $data['groups'] = Groups::all();
        $data['account'] = User::find(Auth::User()->id);

        return view('administrator.groups.index', $data);
    }

    public function tmp() {
        $roles = Roles::where('name', 's');
        $accounts = new Collection();

        foreach($roles as $role) {
            $accounts->add($role->accounts());
        }
        dd($this->users());
        dd($accounts->unique('name')->flatten()->count());
    }
}