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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/customers', 'App\Http\Controllers\CustomerController@getCustomers')->middleware('auth');
Route::get('/newcustomer', 'App\Http\Controllers\CustomerController@showNewCustomer')->middleware('auth');
Route::post('/customers', 'App\Http\Controllers\CustomerController@postCustomer');
//employees
Route::get('/employees', 'App\Http\Controllers\EmployeesController@getEmployees')->middleware('auth');
Route::get('/newemployee', 'App\Http\Controllers\EmployeesController@showNewEmployees')->middleware('auth');
Route::post('/employees', 'App\Http\Controllers\EmployeesController@postEmployees');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'getProducts'])->middleware('auth');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'postProducts']);
Route::put('/products', [App\Http\Controllers\ProductController::class, 'putProduct']);
Route::delete('/products/{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct']);
Route::get('/listproducts', [App\Http\Controllers\ProductController::class, "listProducts"])->name('listproduct');
Route::get('/newproduct', [App\Http\Controllers\ProductController::class, "newProducts"]);
Route::get('/editproduct/{id}', [App\Http\Controllers\ProductController::class, "editProduct"]);

Route::get('/offerts', [App\Http\Controllers\ProductController::class, 'viweOfferts']);

Route::get('/ajaxcustomerlist', [App\Http\Controllers\AjaxCustomerController::class, 'showCustomerList'])->middleware('auth')->name('ajaxcustomerslist');
Route::get('/ajaxnewcustomer', [App\Http\Controllers\AjaxCustomerController::class, 'showNewCustomer'])->middleware('auth');
Route::get('/ajaxcustomers', [App\Http\Controllers\AjaxCustomerController::class, 'getCustomers'])->middleware('auth');
Route::get('/ajaxcustomers/{id}', [App\Http\Controllers\AjaxCustomerController::class, 'getCustomerById'])->middleware('auth');
Route::post('/ajaxcustomers', [App\Http\Controllers\AjaxCustomerController::class, 'postCustomer'])->middleware('auth');
Route::put('/ajaxcustomers', [App\Http\Controllers\AjaxCustomerController::class, 'putCustomer'])->middleware('auth');
Route::get('/ajaxeditcustomer/{id}', [App\Http\Controllers\AjaxCustomerController::class, "editAjaxCustomer"]);
//employee
Route::get('/ajaxemployeelist', [App\Http\Controllers\AjaxEmployeeController::class, 'showEmployeeList'])->middleware('auth')->name('ajaxemployeeslist');
Route::get('/ajaxnewemployee', [App\Http\Controllers\AjaxEmployeeController::class, 'showNewEmployee'])->middleware('auth');
Route::get('/ajaxemployees', [App\Http\Controllers\AjaxEmployeeController::class, 'getEmployees'])->middleware('auth');
Route::get('/ajaxemployees/{id}', [App\Http\Controllers\AjaxEmployeeController::class, 'getEmployeeById'])->middleware('auth');
Route::post('/ajaxemployees', [App\Http\Controllers\AjaxEmployeeController::class, 'postEmployee'])->middleware('auth');
Route::put('/ajaxemployees', [App\Http\Controllers\AjaxEmployeeController::class, 'putEmployee'])->middleware('auth');
Route::get('/ajaxeditemployee/{id}', [App\Http\Controllers\AjaxEmployeeController::class, "editAjaxEmployee"]);

Route::get('/invoiceform', [App\Http\Controllers\InvoiceController::class, 'showNewInvoice']);
Route::get('/invoices/{id}', [App\Http\Controllers\InvoiceController::class, 'getInvoice']);
Route::post('/invoices', [App\Http\Controllers\InvoiceController::class, 'postInvoice']);
