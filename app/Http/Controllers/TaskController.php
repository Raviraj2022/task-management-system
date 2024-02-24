<?php

namespace App\Http\Controllers;

use App\Models\TaskModel;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function create()
    {
        $task = new TaskModel();
        $url = url('/store_task');
        $title = "Create New Task";
        $data = compact('url', 'title', 'task');
        return view('tasks.taskForm')->with($data);
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required|string|max:255',
            'due_date' => 'required',
            // 'type' => 'required',
        ]);
        // print_r($validated);
        $task = new TaskModel();
        $task->title = trim($request->input('title'));
        $task->description = ($request->input('description'));
        $task->due_date = $request->input('due_date');
        // $task->type = $request->input('type');
        $task->save();
        return redirect('/')->with('message', 'Task Created Successfully!');

    }
    public function edit($id)
    {
        $task = TaskModel::find($id);
        if (is_null($task)) {
            return redirect('/');
        } else {
            $url = url('task/update') . "/" . $id;
            $title = "Update task";
            $data = compact('task', 'url', 'title');
            return view('tasks.taskForm')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $task = TaskModel::find($id);
        $task->title = trim($request->input('title'));
        $task->description = ($request->input('description'));
        $task->due_date = $request->input('due_date');
        // $task->type = $request->input('type');
        $task->save();
        return redirect('/')->with('message', 'Task Updated Successfully!');
    }

    public function destroy($id)
    {
        $task = TaskModel::find($id);
        if (!is_null($task)) {
            $task->delete();
        }
        return redirect('/');
    }
}
