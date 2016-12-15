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
     * Display the makeTask index.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexMT()
    {
        return view('makeTask');
    }

    /**
     * Display the tasks view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = DB::table('tasks')->get();

        return view('tasks', ['tasks' => $tasks]);
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
        return Task::update([
            'status' => $data['status'],
        ]);
    }

    /**
     * Display all tasks.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $tasks = DB::table('tasks')->get();
        $ret = '{"tasks":' . json_encode($tasks) . '}';
        return $ret; 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showUnFinished()
    {
        $tasks = DB::table('tasks')->where('status', '=', 'Not Finished')->get();
        $ret = '{"tasks":' . json_encode($tasks) . '}';
        return $ret; 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showfinished()
    {
        $tasks = DB::table('tasks')->where('status', '=', 'Finished')->get();
        $ret = '{"tasks":' . json_encode($tasks) . '}';
        return $ret; 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSingle($id)
    {
        /*return response()->json(
            Task::where('id', $id)
            ->first());*/

        $getTaskByID = DB::table('tasks')->where('id', $id)->first();
        $ret = '{"task":' . json_encode($getTaskByID) . '}';
        return $ret;

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('updateTask');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateWeb(Request $request)
    {
       $data = array(
        'id' => Input::get('id'));
        $update = array('status' => Input::get('status'));
        DB::table('tasks')->where('id', $data)->update($update);

        return view('welcome');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
       $data = array(
        'id' => Input::get('id'));
        $update = array('status' => Input::get('status'));
        DB::table('tasks')->where('id', $data)->update($update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = array(
        'id' => Input::get('id'));
        DB::table('tasks')->where('id', $data)->delete();

        return view('welcome');
    }

    /**
     * Remove all resources from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function clear()
    {
        DB::table('tasks')->truncate();

        return view('welcome');
    }
}
