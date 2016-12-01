<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index() 
    {
    	$users = DB::table('users')->get();

        return view('users', ['users' => $users]);
    }


    public function create()
    {
        //return view('admin.users.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return 'succes';
        return $request->all();
    }


    public function show()
    {
        $users = DB::table('users')->get();
        $ret = '{"users":' . json_encode($users) . '}';
        return $ret; 
    }

}
