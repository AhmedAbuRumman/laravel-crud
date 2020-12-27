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


Route::get('/', function () {
    return view('welcome');
});

Route::post('studentsList', 'StudentController@create');

Route::get('studentsList', 'StudentController@index');


// Route::get('studentsList', function () {
//     return redirect('studentsList');
// });


Route::get('register', function () {
    return view('registration');
});



// Route::get('admin/studentsTable', function () {
//     return view('studentsTable');
// });

Route::get('admin', 'StudentController@AdminIndex');

Route::post('admin', 'StudentController@AdminLogin');


Route::get('studentsTable/{id}', 'StudentController@destroy');


Route::get('editStudent/{id}', 'StudentController@edit');


Route::post('editStudent/studentsTable/{id}', 'StudentController@updateValidation');


Route::get('singleStudent/{id}', 'StudentController@show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
