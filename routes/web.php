<?php

use App\Http\Controllers\GenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use LaravelQRCode\Facades\QRCode;

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

Route::get('example/url', function () 
{
    return  QRCode::url('werneckbh.github.io/qr-code/')
                  ->setSize(8)
                  ->setMargin(2)
                  ->png();
                    
});  

Route::get('/test', [GenController::class, 'index']);

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
