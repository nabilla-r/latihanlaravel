<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class TaskController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
        // $this->middleware('verified');
        $this->middleware('is_admin');

    }

    public function index(Request $request){
        //index = manggil semua data
        //untuk menampilkan data dari suatu model atau resource

        if ($request->search) {
            $tasks =Task::where('tasks', 'LIKE', "%$request->search%")
            ->paginate(3);

            return view('task.index', [
            'data' => $tasks
        ]);
        }

        $tasks = Task::paginate(3);
        return view('task.index', [
            'data' => $tasks
        ]);
    }


    public function store(TaskRequest $request){

        // $request->validate([
        //     'tasks' => ['required'],
        //     'user'  => ['required']
        // ]);


    Task::create([
        'tasks'=> $request->tasks,
        'user'=> $request->user
    ]);


    return redirect('/tasks');
    }

    public function show($id){
       //manggil data per id

       $tasks = Task::find($id);
       return $tasks;
    }

    public function update(TaskRequest $request, $id ){
        $tasks = Task::find($id);

        $tasks->update([
            'tasks' => $request->tasks,
            'user'=> $request->user
        ]);

        return redirect('/tasks');
    }

    public function destroy($id){
        $tasks = Task::find($id);
        $tasks->delete();

        return redirect('/tasks');
    }

    public function create()
{
    return view('task.create');

}

    public function edit($id)
    {
        $tasks = Task::find($id);
        return view('task.edit', compact('tasks'));
    }

    public function rules()
    {
    }

}

