<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\VotersController;
use App\Http\Controllers\VotesController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index']);


Route::get('/candidate', [CandidateController::class, 'index']);
Route::get('/candidate/create', [CandidateController::class, 'create']);
Route::get('/election', [ElectionController::class, 'index']);
Route::get('/voters', [VotersController::class, 'index']);
Route::get('/votes', [VotesController::class, 'index']);
