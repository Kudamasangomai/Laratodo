<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

 
    // redirect to the login page
    Route::get('/', function () {  return view('auth.login');});

     Route::middleware('auth')->group(function () {
        
        Route::get('/dashboard',DashboardController::class)->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::resource('todos',TodoController::class);
        Route::put('/todos/{todo}/completed',[TodoController::class,'completed'])->name('todos.completed');;
        

        Route::middleware('can:is_admin')->group(function (){
        Route::resource('users',UserController::class);
        Route::get('/users/{user:slug}', [UserController::class, 'show'])->name('users.show');
        Route::get('/users/{user:slug}/edit', [UserController::class, 'edit'])->name('users.edit');
        });
    });

    require __DIR__.'/auth.php';
});
