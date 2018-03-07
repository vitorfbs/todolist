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
        $task = new Task;
        $task->title = $request->get('title');
        $task->content = $request->get('content');
        $task->save();
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
