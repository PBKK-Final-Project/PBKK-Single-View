<?php

use App\Http\Controllers\BidangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [DashboardController::class, 'index']);
Route::get('/python-course', [CourseController::class, 'index']);
Route::get('/courses', [CourseController::class, 'index']);

foreach (scandir($path = app_path('Module')) as $dir) {
  if (file_exists($filepath = "{$path}/{$dir}/Course/Presentation/web.php")) {
      require $filepath;
  }
}