<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CoursesController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\TestimonialController;
use App\Http\Controllers\Frontend\ErrorController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\SigninController;
use App\Http\Controllers\Frontend\CustomAuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CoursesCRUDContoller;

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


Route::get('/',[HomeController::Class, 'index']);
Route::get('/about',[AboutController::Class, 'index']);
Route::get('/contact',[ContactController::Class, 'index']);
Route::get('/courses',[CoursesController::Class, 'index']);
Route::get('/team',[TeamController::Class, 'index']);
Route::get('/testimonial',[TestimonialController::Class, 'index']);
Route::get('/error',[ErrorController::Class, 'index']);



Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register');
Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('/signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::Class, 'index']); 
    Route::get('/admin-home', [DashboardController::Class, 'adminHome'])->name('admin-home'); 
    
    Route::get('/admin-home/user',[UsersController::Class, 'index']);
    Route::get('/admin-home/user-create',[UsersController::Class, 'create'])->name('user.create');
    Route::get('/admin-home/user-show/{id}',[UsersController::Class, 'show'])->name('user.show');
    Route::get('/admin-home/user-edit/{id}',[UsersController::Class, 'edit'])->name('user.edit');
    Route::post('/admin-home/user-store',[UsersController::Class, 'store'])->name('user.store');
    Route::patch('/admin-home/user-update',[UsersController::Class, 'update'])->name('user.update');
    Route::delete('/admin-home/user-destroy/{id}',[UsersController::Class, 'destroy'])->name('user.destroy');
    
    Route::get('/admin-home/course',[CoursesCRUDContoller::Class, 'index'])->name('course.index');
    Route::get('/admin-home/course-create',[CoursesCRUDContoller::Class, 'create'])->name('course.create');
    Route::get('/admin-home/course-show/{id}',[CoursesCRUDContoller::Class, 'show'])->name('course.show');
    Route::get('/admin-home/course-edit/{id}',[CoursesCRUDContoller::Class, 'edit'])->name('course.edit');
    Route::post('/admin-home/course-store',[CoursesCRUDContoller::Class, 'store'])->name('course.store');
    Route::put('/admin-home/course-update/{course}',[CoursesCRUDContoller::Class, 'update'])->name('course.update');
    Route::delete('/admin-home/course-destroy/{id}',[CoursesCRUDContoller::Class, 'destroy'])->name('course.destroy');
    
});

//Route::resource('/admin-home/user',UsersController::Class);
 
//Route::resource('/course',CoursesCRUDContoller::class);

