<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class UsersController extends Controller
{
    public function index() 
    {
    	$users = [
		'0' => [
			'firstname' => 'Nicole',
			'lastname' => 'Weirauch',
			'location' => 'Roskilde'
		],

		'1' => [
			'firstname' => 'Eucheria',
			'lastname' => 'Innocent',
			'location' => 'Roskilde'
		]
	];

	return view('admin.users.index', compact('users'));
    }


    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return 'succes';
        return $request->all();
    }

}
