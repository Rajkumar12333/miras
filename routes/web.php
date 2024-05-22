<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AplicantController;
use App\Http\Controllers\DocumentController;
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
Route::post('/{id}/visa_tracking-delete', [AplicantController::class, 'destroy'])->name("visa_tracking.destroy");
Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/crud-view-page', [CrudController::class, 'crud_view_page'])->name("crud.view_page");
Route::get('/crud-add-page', [CrudController::class, 'crud_add_page'])->name("crud.add_page");
Route::get('/crud/{id}/edit-page', [CrudController::class, 'crud_edit_page'])->name('crud.edit_page');
// Route::get('/add_applicant', function () {
//     return view('add_applicant');
// })->name('add_applicant');
// Route::get('/visa_tracking',function () {
//     return view('visa_tracking');
// })->name('visa_tracking');
Route::get('/visa_tracking', [AplicantController::class, 'visa_tracking'])->name('visa_tracking');
Route::get('/add_agent',function () {
    return view('add_agent');
})->name('add_agent');
Route::get('/list_agent',function () {
    return view('list_agent');
})->name('list_agent');
Route::get('/add_applicant_page', [AplicantController::class, 'add_page'])->name('applicant.add_page');
Route::post('/add_applicant/store', [AplicantController::class, 'store'])->name('applicant.store');


Route::post('/crud-add', [CrudController::class, 'crud_add'])->name("crud.add");
Route::post('/{id}/crud-update', [CrudController::class, 'crud_update'])->name("crud.update");
Route::post('/{id}/crud-delete', [CrudController::class, 'crud_destroy'])->name("crud.crud_destroy");