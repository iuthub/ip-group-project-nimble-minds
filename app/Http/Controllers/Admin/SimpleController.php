<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
use App\SimpleUser;
use App\Constants\Colors;
use App\Constants\Times;
use App\Constants\Points;
class SimpleController extends Controller
{

    public function add_task($id)
    {
        $user=SimpleUser::where('id',$id)->first();

        $colors = Colors::getList();
        $times = Times::getList();
        $points = Points::getList();

        return view('admin.task.add', compact('user', 'colors', 'times', 'points'));
    }
}











