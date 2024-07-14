<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomersController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [AuthController::class, 'login'] );
Route::get('forgot', [AuthController::class, 'forgot'] );

Route::post('login_post', [AuthController::class,'login_post']);

Route::post('forgot_post', [AuthController::class,'forgot_post']);

Route::group(['middleware'=>'admin'], function(){
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'] );
Route::get('/admin/customers', [CustomersController::class, 'customers'] );
Route::get('/admin/customers/add_customers', [CustomersController::class, 'add'] );
Route::post('/admin/customers/add_customers', [CustomersController::class, 'insert_add_customers'] );
Route::get('/admin/customers/edit_customers/{id}', [CustomersController::class, 'edit'] );
Route::post('/admin/customers/edit_customers/{id}', [CustomersController::class, 'update_customers'] );
Route::get('/admin/customers/delete/{id}', [CustomersController::class, 'delete_customers'] );

});

Route::get('logout', [AuthController::class, 'logout']);



