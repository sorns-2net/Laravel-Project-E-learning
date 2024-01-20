<?php

use App\Http\Controllers\InstructorController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideController;

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
Route::get('/',[HomeController::class, 'home']);
Route::get('/instructor/createCourse',[HomeController::class,'createCourse']);
Route::post('/instructor/createCourse',[HomeController::class, 'upload']);
Route::get('/instructor/myCourse',[HomeController::class,'myCourse']);
Route::get('/user/userinfor', [HomeController::class, 'userinfor']);
// Route::get('/user/becometoinstructor', [HomeController::class, 'becometoinstructor']);

Route::get('/admin/post/index', [PostController::class, 'index']);
Route::get('/admin/post/delete/{id}', [PostController::class, 'destroy']);
Route::get('/instructor/delete/{id}', [VideoController::class, 'destroy']);
Route::get('/search', [PostController::class, 'search']);

Route::get('showDetail/{id}', [HomeController::class, 'showDetail']);
Route::resource('/admin/post', PostController::class);
// Route::post('/user/becometoinstructor',[InstructorController::class, 'upload']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirects',[HomeController::class, 'index']);

Route::get('/instructor/myVideo/{id}',[VideoController::class, 'index'])->name('myVideo');
Route::get('/admin/video/allVideo',[VideoController::class, 'allVideo']);
Route::get('/instructor/addVideo',[VideoController::class, 'addVideo']);
Route::post('/instructor/addVideo',[VideoController::class, 'upload']);
Route::get('/viewVideo/{id}', [HomeController::class, 'viewVideo']);
// Route::resource('/instructor', VideoController::class);
