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

# users
Route::get('/view_users', 'App\Http\Controllers\UsersController@view');
Route::get('/show_users', 'App\Http\Controllers\UsersController@show');
Route::post('/save_users', 'App\Http\Controllers\UsersController@saveUsers');
Route::get('/delete_user/{id}', 'App\Http\Controllers\UsersController@delete');
Route::get('/view_users/{id}', 'App\Http\Controllers\UsersController@edit');

# officies
Route::get('/view_officies', 'App\Http\Controllers\OfficiesController@view');
Route::get('/show_officies', 'App\Http\Controllers\OfficiesController@show');
Route::post('/save_officies', 'App\Http\Controllers\OfficiesController@saveOfficies');
Route::get('/delete_officies/{id}', 'App\Http\Controllers\OfficiesController@delete');
Route::get('/view_officies/{id}', 'App\Http\Controllers\OfficiesController@edit');

# companies
Route::get('/view_companies', 'App\Http\Controllers\CompaniesController@view');
Route::get('/show_companies', 'App\Http\Controllers\CompaniesController@show');
Route::post('/save_companies', 'App\Http\Controllers\CompaniesController@saveCompanies');
Route::get('/delete_companies/{id}', 'App\Http\Controllers\CompaniesController@delete');
Route::get('/view_companies/{id}', 'App\Http\Controllers\CompaniesController@edit');


# times
Route::get('/view_times', 'App\Http\Controllers\TimesController@view');
Route::get('/show_times', 'App\Http\Controllers\TimesController@show');
Route::post('/save_times', 'App\Http\Controllers\TimesController@saveTimes');
Route::get('/delete_times/{id}', 'App\Http\Controllers\TimesController@delete');
Route::get('/view_times/{id}', 'App\Http\Controllers\TimesController@edit');

# professionals
Route::get('/view_professionals', 'App\Http\Controllers\ProfessionalsController@view');
Route::get('/show_professionals', 'App\Http\Controllers\ProfessionalsController@show');
Route::post('/save_professionals', 'App\Http\Controllers\ProfessionalsController@saveProfessionals');
Route::get('/delete_professionals/{id}', 'App\Http\Controllers\ProfessionalsController@delete');
Route::get('/view_professionals/{id}', 'App\Http\Controllers\ProfessionalsController@edit');

# specialties
Route::get('/view_specialties', 'App\Http\Controllers\SpecialtiesController@view');
Route::get('/show_specialties', 'App\Http\Controllers\SpecialtiesController@show');
Route::post('/save_specialties', 'App\Http\Controllers\SpecialtiesController@saveSpecialties');
Route::get('/delete_specialties/{id}', 'App\Http\Controllers\SpecialtiesController@delete');
Route::get('/view_specialties/{id}', 'App\Http\Controllers\SpecialtiesController@edit');

# patient
Route::get('/view_patient', 'App\Http\Controllers\PatientController@view');
Route::get('/show_patient', 'App\Http\Controllers\PatientController@show');
Route::post('/save_patient', 'App\Http\Controllers\PatientController@savePatient');
Route::get('/delete_patient/{id}', 'App\Http\Controllers\PatientController@delete');
Route::get('/view_patient/{id}', 'App\Http\Controllers\PatientController@edit');

# holidays
Route::get('/view_holidays', 'App\Http\Controllers\HolidaysController@view');
Route::get('/show_holidays', 'App\Http\Controllers\HolidaysController@show');
Route::post('/save_holidays', 'App\Http\Controllers\HolidaysController@saveHolidays');
Route::get('/delete_holidays/{id}', 'App\Http\Controllers\HolidaysController@delete');
Route::get('/view_holidays/{id}', 'App\Http\Controllers\HolidaysController@edit');

# companyPatients
Route::get('/view_companyPatient', 'App\Http\Controllers\CompanyPatientController@view');
Route::get('/show_companyPatient', 'App\Http\Controllers\CompanyPatientController@show');
Route::post('/save_companyPatient', 'App\Http\Controllers\CompanyPatientController@saveCompanyPatient');
Route::get('/delete_companyPatient/{id}', 'App\Http\Controllers\CompanyPatientController@delete');
Route::get('/view_companyPatient/{id}', 'App\Http\Controllers\CompanyPatientController@edit');
