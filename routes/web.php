<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Reservation\CourseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

    
})->name('welcome');

Route::post('/auth/user', function(){
    if (Auth::check()) {
        $user = Auth::user();

        return response()->json([
            'id' => $user->id,
            'check' => Auth::check(),
        ]);
    }

    return response()->json([
        'check' => false
    ]);
});

Route::view('/about', 'pages.about')->name('about');

Route::view('/contact', 'pages.contact')->name('contact');

Route::view('/services', 'pages.services')->name('services');

Route::view('/pricings', 'pages.pricings')->name(('pricings'));

Route::view('/discover', 'pages.discover')->name(('discover'));

Route::view('/initiate', 'pages.initiate')->name(('initiate'));
Route::view('/activities', 'pages.activities')->name(('activities'));

Route::prefix('courses')->group(function(){

    Route::name("courses")->group(function(){
        Route::get('', [CourseController::class, 'index'])
        ->name('.index');
    
    });

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
