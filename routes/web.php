<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);


//membuat url baru dengan route
Route::get('/about', function(){
    return view('about');
});

//menampilkan data secara langsung melalui route
Route::get('/hello', function(){
    $dataArray = [
        'message' => 'Hello, World'
    ];

    return $dataArray;
    // return response()->json([
    //     'message' => 'Hello, World'
    });



    //fungsi debugging u/ menampilkan response
    Route::get('/debug', function(){
         $dataArray = [
           'message' => 'Hello, World'
         ];
         ddd(request());
    });


Route::get('/tasks', [TaskController::class, 'index']);

// Route::get('/tasks' , function() use($taskList){
//     return $taskList;
// });

Route::get('/tasks/{id}', [TaskController::class, 'show']);

//menggunakan method post
Route::post('/tasks', [TaskController::class, 'store']);


//menggunakan method patch
Route::patch('/tasks/{id}', [TaskController::class, 'update']);


// // //menggunakan method put
// // Route::put('/tasks/{key}' , function($key) use($taskList){
// //     $taskList[$key] = request()->task;
// //     return $taskList;
// // });


//menggunakan method delete
Route::delete('/tasks/{id}' ,[TaskController::class, 'destroy']);


//route view
Route::get('/tasks/data/create', [TaskController::class, 'create']);
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);



// //menggunakan method put
// Route::put('/tasks/{key}', function($key) use($taskList){
//     $taskList[$key] = request()->task;
//     return $taskList;
// });

// //menggunakan method delete
// Route::delete('/tasks/{key}', function($key) use($taskList){
//     unset($taskList[$key]);
//     return $taskList;
// });

// });
