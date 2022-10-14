<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/index', function () {
    return view('appointments-reserved');
}); 

Route::post('/valida-user', 'App\Http\Controllers\UsersController@loginIsValid');
Route::get('/exit', 'App\Http\Controllers\UsersController@exit');

# usuarios
Route::get('/view_users', 'App\Http\Controllers\UsersController@view');
Route::get('/show_users', 'App\Http\Controllers\UsersController@show');

# officies
Route::get('/view_officies', 'App\Http\Controllers\OfficiesController@view');
Route::get('/show_office', 'App\Http\Controllers\OfficiesController@show');

# companies
Route::get('/view_companies', 'App\Http\Controllers\CompaniesController@view');
Route::get('/show_company', 'App\Http\Controllers\CompaniesController@show');

# times
Route::get('/view_times', 'App\Http\Controllers\TimesController@view');
Route::get('/show_time', 'App\Http\Controllers\TimesController@show');

# professionals
Route::get('/view_professionals', 'App\Http\Controllers\ProfessionalsController@view');
Route::get('/show_professional', 'App\Http\Controllers\ProfessionalsController@show');

# specialties
Route::get('/view_specialties', 'App\Http\Controllers\SpecialtiesController@view');
Route::get('/show_specialty', 'App\Http\Controllers\SpecialtiesController@show');

# patients
Route::get('/view_patients', 'App\Http\Controllers\PatientsController@view');
Route::get('/show_patient', 'App\Http\Controllers\PatientsController@show');

# holidays
Route::get('/view_holidays', 'App\Http\Controllers\HolidaysController@view');
Route::get('/show_holiday', 'App\Http\Controllers\HolidaysController@show');

# companyPatients
Route::get('/view_companyPatients', 'App\Http\Controllers\CompanyPatientsController@view');
Route::get('/show_companyPatient', 'App\Http\Controllers\CompanyPatientsController@show');