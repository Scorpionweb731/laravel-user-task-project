<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskdata = DB::table('users')
        ->join('tasks', 'users.id', '=', 'tasks.user_id' )
        -> get();
        return view('task.list', ['taskdata' => $taskdata]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userdata =  DB::table('users')->get();
        return view('task.add',['userdata' => $userdata]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'userid' => 'required',
            'task_detail' => 'required', 
            'task_type' => 'required',
        ]);

        DB::table('tasks')->insert([
            'user_id' => $request->input('userid'),
            'task_detail' => $request->input('task_detail'),
            'task_type' => $request->input('task_type'),
        ]);
        return redirect()->back()->with('success', 'Task added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
