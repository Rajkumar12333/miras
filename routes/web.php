<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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
});
Route::get('/crud-view-page', [CrudController::class, 'crud_view_page'])->name("crud.view_page");
Route::get('/crud-add-page', [CrudController::class, 'crud_add_page'])->name("crud.add_page");
Route::get('/crud/{id}/edit-page', [CrudController::class, 'crud_edit_page'])->name('crud.edit_page');
// Route::get('/add_applicant', function () {
//     return view('add_applicant');
// })->name('add_applicant');
Route::post('/add_applicant', 'DocumentController@store')->name('applicant.store');


Route::post('/crud-add', [CrudController::class, 'crud_add'])->name("crud.add");
Route::post('/{id}/crud-update', [CrudController::class, 'crud_update'])->name("crud.update");
Route::post('/{id}/crud-delete', [CrudController::class, 'crud_destroy'])->name("crud.crud_destroy");