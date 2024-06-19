<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemilihanController;
use App\Http\Controllers\SessionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SessionController::class, 'login'])->name('login');
    Route::post('/login', [SessionController::class, 'login_action']);

    Route::get('/register', [SessionController::class, 'index']);
    Route::post('/register/create', [SessionController::class, 'register']);
});
Route::middleware(['auth'])->group(function () {

    Route::get('/home', function () {
        return redirect('/dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/kandidat', [KandidatController::class, 'index']);
    Route::get('/kandidat/tambah', [KandidatController::class, 'tambah']);
    Route::get('/pemilihan', [PemilihanController::class, 'index']);
});
