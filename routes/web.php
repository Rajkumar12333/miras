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
Route::post('/{id}/visa_tracking-update', [AplicantController::class, 'update'])->name("visa_tracking.update");
Route::get('/visa_tracking/{id}/edit-page', [AplicantController::class, 'edit_page'])->name('visa_tracking.edit_page');
Route::get('/dashboard', function () {
    return redirect()->route('index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::post('/{id}/visa_tracking-delete', [AplicantController::class, 'destroy'])->name("visa_tracking.destroy");
Route::get('/', function () {
    return view('welcome');
})->name('index');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

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
Route::get('/update_mail',function () {
    return view('update_mail');
})->name('update_mail');
Route::get('/fee_mail',function () {
    return view('fee_mail');
})->name('fee_mail');
Route::get('/news',function () {
    return view('news');
})->name('news');
Route::get('/add_news',function () {
    return view('add_news');
})->name('add_news');
Route::get('/visa_form',function () {
    return view('visa_form');
})->name('visa_form');
Route::get('/add_visa',function () {
    return view('add_visa');
})->name('add_visa');
Route::get('/add_visa_info',function () {
    return view('add_visa_info');
})->name('add_visa_info');
Route::get('/visa_info',function () {
    return view('visa_info');
})->name('visa_info');
Route::get('/add_country_info',function () {
    return view('add_country_info');
})->name('add_country_info');
Route::get('/country_info',function () {
    return view('country_info');
})->name('country_info');
Route::get('/add_company',function () {
    return view('add_company');
})->name('add_company');
Route::get('/company_info',function () {
    return view('company_info');
})->name('company_info');
Route::get('/add_ticker',function () {
    return view('add_ticker');
})->name('add_ticker');
Route::get('/interview',function () {
    return view('interview');
})->name('interview');
Route::get('/delete_entry',function () {
    return view('delete_entry');
})->name('delete_entry');
Route::get('/company_bill',function () {
    return view('company_bill');
})->name('company_bill');
Route::get('/courier',function () {
    return view('courier');
})->name('courier');
Route::get('/add_courier',function () {
    return view('add_courier');
})->name('add_courier');
Route::get('/add_users',function () {
    return view('add_users');
})->name('add_users');
Route::get('/users',function () {
    return view('users');
})->name('users');
Route::get('/add_applicant_page', [AplicantController::class, 'add_page'])->name('applicant.add_page');
Route::post('/add_applicant/store', [AplicantController::class, 'store'])->name('applicant.store');


Route::post('/crud-add', [CrudController::class, 'crud_add'])->name("crud.add");
Route::post('/{id}/crud-update', [CrudController::class, 'crud_update'])->name("crud.update");
Route::post('/{id}/crud-delete', [CrudController::class, 'crud_destroy'])->name("crud.crud_destroy");