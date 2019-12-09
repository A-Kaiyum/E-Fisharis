<?php



Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){
    Route::get('dashboard','DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('employee','EmployeeController');
    Route::resource('worker','WorkerController');
    Route::resource('project','ProjectController');
});

Auth::routes([
    'register'=>false,
    'reset'=>false,
    'verify'=>false,
]);

