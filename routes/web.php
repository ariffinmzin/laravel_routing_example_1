<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimetableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo "<h1>Hello World</h1>";
});

Route::redirect('/v2','/');

Route::get('/lecturer/{name}', function ($name) {

    echo "<h1>Hello $name</h1>";

});

Route::view('/admin','admin',[ 'admin' => 'Ariffin']);   // router, blade, variable

Route::get('/student/{name?}', function ($name="Guest") {

    echo "<h1>Hello $name</h1>";

});

Route::get('/form', function () {

    return view('form');

});

Route::post('/formsubmission', function () {

    echo "<h1>Thank you for your submission</h1>";

});

Route::get('/timetable/{subject}',[TimetableController::class, 'index']);

Route::prefix('admin')->name('admin.')->group(function(){

    // name: admin.index
    // url: admin/user
    Route::get('/user', [UserController::class, 'index'])->name('index');

    // name: admin.show
    // url: admin/user/id
    Route::get('/user/{id}', [UserController::class, 'show'])->name('show');

    // name: admin.create
    // url: admin/user
    Route::post('/user', [UserController::class, 'create'])->name('create');

    // name: admin.edit
    // url: admin/user/id/edit
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('edit');

    // name: admin.update
    // url: admin/user/id
    Route::put('/user/{id}', [UserController::class, 'update'])->name('update');

});

// php artisan route:list
