<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class ListController extends Controller
{
    public function index(){
      $tasks= Task::all();
      return view('welcome', ['tasks' => $tasks]);
    }

    public function create(Request $request){
      if($request->input('task')){
        $task = new Task;
        $task->content = $request->input('task');
        $task->save();
      }
      return redirect('/');
    }

    public function update($id){
      $task = Task::find($id);
      $task->toggleStatus();
      $task->save();
      return redirect()->back();
    }

    public function delete($id){
        $task = Task::find($id);
         if ($task != null) {
        $task->delete();
      }
      return redirect('/');
    }
}
