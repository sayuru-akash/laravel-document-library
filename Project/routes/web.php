<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EssayController;

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

Route::get('/add-document',[EssayController::class,'addEssay']);
Route::get('/admin',[EssayController::class,'getEssay']);
Route::post('/create-essay',[EssayController::class,'createEssay'])->name('essay.add');
Route::get('/essay-approval/{id}',[EssayController::class,'getEssayByID']);
Route::get('/search',[EssayController::class,'searchEssay'])->name('essay.search');
Route::get('/',[EssayController::class,'getEssayApproved']);
Route::get('/view-document/{id}',[EssayController::class,'getEssayApprovedByID']);
Route::get('/delete-essay/{id}',[EssayController::class,'deleteEssay']);
Route::get('/approve-essay/{id}',[EssayController::class,'approveEssay']);

Route::get('/login', function () {
    return view('/login');
});
Route::get('/logout',[EssayController::class,'logout']);
Route::post('/login/addCredentials', [EssayController::class,'addCredentials'])->name('certificate.login');
