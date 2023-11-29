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
use App\Http\Controllers\examReports\examReportController;
use App\Http\Controllers\library\libraryController;
use App\Http\Controllers\transport\transportController;
use App\Http\Controllers\hostel\hostelController;

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
Route::get('/login-user', [authController::class, 'loginUser'])->name('login-user');

Route::get('/logout', [authController::class, "logout"]);

// registration admin 
Route::post('/register/admin', [authController::class, 'store'])->name('users.store');
Route::get('/register/admin', [authController::class, 'register']);






// Route group for dashboard
Route::prefix('/')->group(function () {
    // dashboard home 
    Route::get('/dashboard', [dashboardController::class, 'dashboard']);


    //student routes
    Route::get('/student-list', [studentController::class, 'studentList']);
    Route::get('/add-student', [studentController::class, 'addStudentForm']);
    Route::get('/get-sections/{className}', [studentController::class, 'getSections']);
    Route::get('/get-studentlist/{className}', [studentController::class, 'getClassSection']);
    Route::post('/create-student', [studentController::class, 'addStudent'])->name('student.add');

    //human resource
    Route::get('/teachers',[humanResourceController::class, 'teachers']);
    Route::get('/addteacher',[humanResourceController::class, 'addTeachers']);
    Route::get('/staffs',[humanResourceController::class, 'staff']);
    Route::get('/staff-list',[humanResourceController::class, 'staffList']);
    Route::get('/designation',[humanResourceController::class, 'designation']);
    Route::get('/department',[humanResourceController::class, 'department']);
    
    // academics 
    Route::get('/class',[academicController::class, 'class']);
    Route::get('/section',[academicController::class, 'section']);
    Route::get('/subject',[academicController::class, 'subject']);
    Route::post('/class-create',[academicController::class, 'class_post'])->name('class.classpost');
    Route::post('/create-section',[academicController::class, 'section_post'])->name('create-section');
    Route::post('/create-subject',[academicController::class, 'subject_post'])->name('create-subject');
  
    
    // attendence 
    Route::get('/attendence',[attendenceController::class, 'attendence']);
    Route::get('/update-attendence',[attendenceController::class, 'updateAttendence']);
    
    // fee collection 
    Route::get('/invoice-list',[feeCollectionController::class, 'invoiceList']);
    Route::get('/invoice-individual',[feeCollectionController::class, 'invoiceIndividual']);
    Route::get('/create-invoice',[feeCollectionController::class, 'createInvoice']);
    Route::post('/create-invoice',[feeCollectionController::class, 'invoicecreate'])->name('Invoice');
    
    // examination 
    Route::get('/exam-list',[examController::class, 'examList']);
    Route::get('/mark-import',[examController::class, 'markImport']);
    Route::post('/exam-create',[examController::class, 'exam_list'])->name('exam_create');

    // exam-Reports 
    Route::get('/transcript',[examReportController::class, 'transcript']);
    Route::get('/possion-list',[examReportController::class, 'possoinList']);
    Route::get('/pass-list',[examReportController::class, 'passList']);
    Route::get('/fail-list',[examReportController::class, 'failList']);
    
    
    //library
    Route::get('/add-rack',[libraryController::class, 'addRack']);
    Route::get('/book-list',[libraryController::class, 'bookList']);
    Route::get('/issue-return',[libraryController::class, 'issueReturn']);
    
    // transport    
    Route::get('/route',[transportController::class, 'route']);
    Route::get('/vehicles',[transportController::class, 'vehicles']);
    
    // hostel 
    Route::get('/fees-collection',[hostelController::class, 'feesCollection']);
    Route::get('/hostel',[hostelController::class, 'hostel']);
    Route::get('/member',[hostelController::class, 'member']);



});