<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\authController;
use App\Http\Controllers\admin\studentController;
use App\Http\Controllers\humanResource\humanResourceController;
use App\Http\Controllers\academics\academicController;
use App\Http\Controllers\attendence\attendenceController;
use App\Http\Controllers\feeCollection\feeCollectionController;
use App\Http\Controllers\examination\examController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [homeController::class, 'home']);
Route::get('/about', [aboutController::class, 'about']);
Route::get('/contact', [contactController::class, 'contact']);
Route::get('/login', [authController::class, 'login']);
Route::get('/register', [authController::class, 'register']);



// Route group for dashboard
Route::prefix('/')->group(function () {
    // dashboard home 
    Route::get('/dashboard', [dashboardController::class, 'dashboard']);


    //student routes
    Route::get('/student-list', [studentController::class, 'studentList']);
    Route::get('/add-student', [studentController::class, 'addStudent']);

    //human resource
    Route::get('/teachers',[humanResourceController::class, 'teachers']);
    Route::get('/staffs',[humanResourceController::class, 'staff']);
    Route::get('/staff-list',[humanResourceController::class, 'staffList']);
    Route::get('/designation',[humanResourceController::class, 'designation']);
    Route::get('/department',[humanResourceController::class, 'department']);
    
    // academics 
    Route::get('/class',[academicController::class, 'class']);
    Route::get('/section',[academicController::class, 'section']);
    Route::get('/subject',[academicController::class, 'subject']);
    
    // attendence 
    Route::get('/attendence',[attendenceController::class, 'attendence']);
    Route::get('/update-attendence',[attendenceController::class, 'updateAttendence']);
    
    // fee collection 
    Route::get('/invoice-list',[feeCollectionController::class, 'invoiceList']);
    Route::get('/invoice-individual',[feeCollectionController::class, 'invoiceIndividual']);
    Route::get('/create-invoice',[feeCollectionController::class, 'createInvoice']);
    
    // examination 
    Route::get('/exam-list',[examController::class, 'examList']);
    Route::get('/mark-import',[examController::class, 'markImport']);

});