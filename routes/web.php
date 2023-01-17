<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

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

Route::get('/', [PatientController::class, "index"]);
Route::get('add-patient', [PatientController::class, "add_patient"]);
Route::post('save-student', [PatientController::class, "save_patient"]);
Route::get('edit-patient/{id}', [PatientController::class, "edit_patient"]);
Route::post('update-student', [PatientController::class, "update_patient"]);
Route::get('delete-patient/{id}', [PatientController::class, "delete_patient"]);
