<?php

use App\Http\Controllers\GenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use LaravelQRCode\Facades\QRCode;
use App\Http\Controllers\QrController;
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
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/', function () {
    return view('landing');
});
Route::get('/documentation', function () {
    return view('documentation');
})->name('documentation');

Route::get('/eventqr', function () { return view('createevent'); })->name('eventqr');

Route::get('/dashboard', [QrController::class, 'viewDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


                        /*
|--------------------------------------------------------------------------
| The routes below handles qr code generations
|--------------------------------------------------------------------------
|
|
*/


Route::get('/qrhome', [QrController::class, 'index'])->middleware(['auth', 'verified'])->name('qrhome');

Route::get('/createurlqr', [QrController::class, 'createQrurl'])->middleware(['auth', 'verified'])->name('createqr.url');
Route::get('/createurllqr', [QrController::class, 'createQrurll'])->middleware(['auth', 'verified'])->name('createqr.urll');

Route::get('/createfileqr', [QrController::class, 'createFileqr'])->middleware(['auth', 'verified'])->name('createqr.file');

Route::post('/generateqr', [QrController::class, 'generateQr'])->middleware(['auth', 'verified'])->name('generate.qr');
Route::post('/deleteqr', [QrController::class, 'deleteQr'])->middleware(['auth', 'verified'])->name('delete.qr');

Route::get('/fileqroute/{url}', [QrController::class, 'fileqrroute'])->middleware(['auth', 'verified'])->name('fileroute.qr');

Route::get('/downloadqrpdf/{url}', [QrController::class, 'downloadqrpdf'])->middleware(['auth', 'verified'])->name('downloadf.qr');


// =====================================================
// QR code fetch
// =========================================================
Route::get('/viewallqr', [QrController::class, 'viewAll'])->middleware(['auth', 'verified'])->name('viewallqr');
Route::get('/viewqr/{id}', [QrController::class, 'viewOne'])->middleware(['auth', 'verified'])->name('viewqr.id');



                        /*
|--------------------------------------------------------------------------
| The routes below is responsible for decoding qr codes
|--------------------------------------------------------------------------
|
|
*/
Route::get('/scanqr', [QrController::class, 'showscanqrp'])->middleware(['auth', 'verified'])->name('showscanp.qr');
Route::post('/decodeqr', [QrController::class, 'decodeqr'])->middleware(['auth', 'verified'])->name('decode.qr');










require __DIR__.'/auth.php';
