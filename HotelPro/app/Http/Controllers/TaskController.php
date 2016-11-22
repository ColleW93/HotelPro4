<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use App\Task;

use Illuminate\Support\Facades\Input;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('makeTask');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /*$task = new Task;

        DB::table('tasks')->insert(
        ['task_name' => Input::get('task_name')],
        ['room_no' => Input::get('room_no')],
        ['user_name' => Input::get('user_name')],
        ['user_id' => Input::get('user_id')]);

        return view('welcome');*/

        $data = array(
        'task_name' => Input::get('task_name'),
        'room_no' => Input::get('room_no'),
        'user_name' => Input::get('user_name'),
        'user_id' => Input::get('user_id'),
        );
        DB::table('tasks')->insert($data);
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*return Task::create([
            'task_name' => $data['task_name'],
            'room_no' => $data['room_no'],
            'user_name' => $data['user_name'],
            'user_id' => $data['user_id'],

        ]);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tasks = DB::table('tasks')->get();

        return view('tasks', ['tasks' => $tasks]);
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
}
