<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'welcome');



Route::get('user/{id}/comment/{user_id}', function ($id,$user_id) {
   // echo $id + $id2;
   // echo $id2;
});

Route::get('user{id?}{user_id?}', function ($id=null,$user_id=null) {
     echo $id + $user_id;
     echo $user_id;
});

Route::get('task', function () {
    $select = App\Task::all(); // вся таблица
    return view('task.index', compact('select'));
});

Route::get('task/{id}', function ($id) {
//    $select = App\Task::all();
    $id = \Illuminate\Support\Facades\DB::table('tasks')->find($id); // строка
    return view('task.task', compact('id'));
});