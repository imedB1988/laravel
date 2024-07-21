<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\InvoicesController;
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
//login password
Route::get('/', [AuthController::class, 'login'] );
Route::get('forgot', [AuthController::class, 'forgot'] );

Route::post('login_post', [AuthController::class,'login_post']);

Route::post('forgot_post', [AuthController::class,'forgot_post']);
//admin/customers
Route::group(['middleware'=>'admin'], function(){
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'] );
Route::get('/admin/customers', [CustomersController::class, 'customers'] );
Route::get('/admin/customers/add_customers', [CustomersController::class, 'add'] );
Route::post('/admin/customers/add_customers', [CustomersController::class, 'insert_add_customers'] );
Route::get('/admin/customers/edit_customers/{id}', [CustomersController::class, 'edit'] );
Route::post('/admin/customers/edit_customers/{id}', [CustomersController::class, 'update_customers'] );
Route::get('/admin/customers/delete/{id}', [CustomersController::class, 'delete_customers'] );
//admin/products
Route::get('/admin/products', [ProductsController::class, 'products'] );
Route::get('/admin/products/add_products', [ProductsController::class, 'add'] );
Route::post('/admin/products/add_products', [ProductsController::class, 'insert_add_products'] );
Route::get('/admin/products/edit_products/{id}', [ProductsController::class, 'edit'] );
Route::post('/admin/products/edit_products/{id}', [ProductsController::class, 'update_products'] );
Route::get('/admin/products/delete/{id}', [ProductsController::class, 'delete_products'] );
// product stock
Route::get('/admin/productstock', [ProductStockController::class, 'productstock'] );
Route::get('admin/productstock/add_stock', [ProductStockController::class, 'add'] );
Route::post('/admin/productstock/add_stock', [ProductStockController::class, 'insert_add_productstock'] );
Route::get('admin/productstock/delete/{id}', [ProductStockController::class, 'delete_productstock'] );
Route::get('admin/productstock/edit_stock/{id}', [ProductStockController::class, 'edit_productstock']);
Route::post('admin/productstock/edit_stock/{id}', [ProductStockController::class, 'update_productstock']);

//suppliers
Route::get('/admin/suppliers', [SuppliersController::class, 'suppliers'] );
Route::get('admin/suppliers/add_suppliers', [SuppliersController::class, 'add'] );
Route::post('/admin/suppliers/add_suppliers', [SuppliersController::class, 'insert_add_suppliers'] );
Route::get('admin/suppliers/delete/{id}', [SuppliersController::class, 'delete_suppliers'] );
Route::get('admin/suppliers/edit_suppliers/{id}', [SuppliersController::class, 'edit']);
Route::post('admin/suppliers/edit_suppliers/{id}', [SuppliersController::class, 'update_suppliers']);

//invoices
Route::get('/admin/invoices/', [InvoicesController::class, 'invoices'] );
Route::get('admin/invoices/add_invoices', [InvoicesController::class, 'add'] );
Route::post('admin/invoices/add_invoices', [InvoicesController::class, 'insert_add_invoices'] );
Route::get('admin/invoices/delete/{id}', [InvoicesController::class, 'delete_invoices'] );
Route::get('admin/invoices/edit_invoice/{id}', [InvoicesController::class, 'edit_invoices']);
Route::post('admin/invoices/edit_invoice/{id}', [InvoicesController::class, 'update_invoices']);


Route::get('logout', [AuthController::class, 'logout']);



});