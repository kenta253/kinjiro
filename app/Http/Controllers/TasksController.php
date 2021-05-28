<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;


class TasksController extends Controller
{

public function home()
{
   return view('tasks.index');
}

}
