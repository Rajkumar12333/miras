<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/crud-view-page', [CrudController::class, 'crud_view_page'])->name("crud.view_page");
Route::get('/crud-add-page', [CrudController::class, 'crud_add_page'])->name("crud.add_page");
Route::get('/crud/{id}/edit-page', [CrudController::class, 'crud_edit_page'])->name('crud.edit_page');
<<<<<<< HEAD
Route::get('/add_applicant', function () {
    return view('add_applicant');
})->name('add_applicant');
Route::get('/visa_tracking',function () {
    return view('visa_tracking');
})->name('visa_tracking');
=======
// Route::get('/add_applicant', function () {
//     return view('add_applicant');
// })->name('add_applicant');
Route::get('/add_applicant_page', [DocumentController::class, 'add_page'])->name('applicant.add_page');
Route::post('/add_applicant', [DocumentController::class, 'store'])->name('applicant.store');

>>>>>>> 9c3f0b9c2347713a888ab5dc48ec330a972b2dac

Route::post('/crud-add', [CrudController::class, 'crud_add'])->name("crud.add");
Route::post('/{id}/crud-update', [CrudController::class, 'crud_update'])->name("crud.update");
Route::post('/{id}/crud-delete', [CrudController::class, 'crud_destroy'])->name("crud.crud_destroy");