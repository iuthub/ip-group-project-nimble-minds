<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
use App\SimpleUser;
use App\Constants\Colors;
use App\Constants\Times;
use App\Constants\Points;


class TaskController extends Controller
{

    public function index()
    {
        $users=SimpleUser::all();
        $statuses=Task::getList();
        $points=Points::getList();
        $times=Times::getList();
        $colors=Colors::getList();
        $tasks=Task::all();

       return view('admin.task.index',compact('tasks','users','statuses','points','times','colors'));


    }

    public function create()
    {
        $users=SimpleUser::all();
        $colors=Colors::getList();
        $times=Times::getList();
        $points=Points::getList();

        return view('admin.task.create',compact('users','colors','times','points'));
    }


    public function store(Request $request)
    {
       $taskData=$request->all();
       $taskData['status']=0;
       Task::create($taskData);
        return redirect(route('home'));
    }


    public function show(Task $task)
    {

        $statuses=Task::getList();
        $user=SimpleUser::where('id',$task->user_id)->first();
        $task['user_name']=$user['name'];
        $task['color']=Colors::getList()[$task['color_id']];
        $task['point']=Points::getList()[$task['start_time_id']];
        $task['time']=Times::getList()[$task['time_id']];


        return view('admin.task.show',compact('task','statuses'));
    }

    public function edit(Task $task)
    {
        $user=SimpleUser::where('id',$task->user_id)->first();
        $task['user_name']=$user['name'];
        $task['color']=Colors::getList()[$task['color_id']];
        $task['point']=Points::getList()[$task['start_time_id']];
        $task['time']=Times::getList()[$task['time_id']];
        $users=SimpleUser::all();
        $colors=Colors::getList();
        $times=Times::getList();
        $points=Points::getList();
        $statuses=Task::getList();
        return view('admin.task.edit',compact('task','users','colors','times','points','statuses'));
    }


    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('home');

    }


    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('home');
    }

}
