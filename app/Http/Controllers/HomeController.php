<?php

namespace App\Http\Controllers;

use App\Constants\Colors;
use App\Constants\Points;
use App\Constants\Times;
use App\SimpleUser;
use App\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=SimpleUser::all();
        $tasks=Task::all();
        $colors=Colors::getList();
        $times=Times::getList();
        $points=Points::getList();
        return view('home',compact('users','tasks','colors','times','points'));
    }
}
