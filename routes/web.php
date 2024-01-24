<?php

use App\Http\Controllers\Administration\AuthoriserController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\galaryController;
use App\Http\Controllers\admissionController;
use App\Http\Controllers\NEDUBD\AdminController;
use App\Http\Controllers\noticeController;
use App\Http\Controllers\resultController;
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
Route::get('/galary', [galaryController::class, 'galary']);
Route::get('/admission', [admissionController::class, 'admission']);
Route::get('/notice', [noticeController::class, 'notice']);
Route::get('/result', [resultController::class, 'Result']);
Route::get('/login', [authController::class, 'login']);
Route::get('/login-user', [authController::class, 'loginUser'])->name('login-user');

Route::get('/logout', [authController::class, "logout"]);

// registration admin 
Route::post('/register/admin', [authController::class, 'store'])->name('users.store');
Route::get('/register/admin', [authController::class, 'register']);



// Route group for dashboard
Route::prefix('/')->group(function () {


    // dashboard home 
    Route::get('/dashboard', [dashboardController::class, 'dashboard'])->middleware('all');


 // NEDUBD 
    Route::get('/superAdmin', [AdminController::class,'allAdmin'])->middleware('admin');

    Route::get('/allAdmin/{adminId}', [AdminController::class,'viewAdmin']);

    Route::put('/allAdmin/{adminId}', [AdminController::class,'updateAdmin']);

    //student routes
    Route::get('/student-list', [studentController::class, 'studentList'])->middleware('all');
    Route::get('/add-student', [studentController::class, 'addStudentForm'])->middleware('admin');
    Route::get('/get-sections/{className}', [studentController::class, 'getSections']);
    Route::get('/get-studentlist/{className}', [studentController::class, 'getClassSection']);
    Route::post('/create-student', [studentController::class, 'addStudent'])->name('student.add');
    Route::delete('/students/{id}', [studentController::class, 'DeleteStudent'])->name('students.delete');
    // update student 
    Route::get('/students/{id}/edit', [studentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{id}/update', [studentController::class, 'update'])->name('students.update');
    // view student
    Route::get('/students/{id}/view', [studentController::class, 'view'])->name('students.view');

// Administration controller 

Route::get('/authoriser',[AuthoriserController::class,'authoriser'])->middleware('all');
Route::get('/addHeadTeacher',[AuthoriserController::class,'addHeadTeacher']);
Route::post('/addHeadTeacher',[AuthoriserController::class,'storeHeadTeacher'])->name('HeadTeacher.store');
Route::get('/updateHeadTeacher/{id}', [AuthoriserController::class, 'updateHeadteacher']);
Route::put('/updatePrincipal/{id}',[AuthoriserController::class,"updatePrincipal"])->name('updatePrincipal');



    //human resource
    Route::get('/teachers',[humanResourceController::class, 'teachers'])->name('teachers')->middleware('all');//teacher list
    Route::get('/addteacher',[humanResourceController::class, 'addTeachers']);//add teacher
    Route::post('/create-teacher', [humanResourceController::class, 'addteacher'])->name('teacher.add');//add teacher
    Route::get('/staffs',[humanResourceController::class, 'staff']);//add staff
    Route::post('/addstaff',[humanResourceController::class, 'addstaff'])->name('staff.add');//add staff
    Route::get('/staff-list',[humanResourceController::class, 'staffList'])->name('staff_list')->middleware('all');
    
    //update teacher
    Route::get('/teacher/{id}/edit', [humanResourceController::class, 'edit'])->name('teachers.edit');
    Route::put('/teacher/{id}/update', [humanResourceController::class, 'update'])->name('teachers.update');
    //view teacher
    Route::get('/teachers/{id}/teacherview', [humanResourceController::class, 'view'])->name('teachers.view');
    //delete teacher
    Route::delete('/techers/{id}', [humanResourceController::class, 'Deleteteacher'])->name('teacher.delete');


    //update staff
    Route::get('/staff/{id}/edit', [humanResourceController::class, 'staffedit'])->name('staffs.edit');
    Route::put('/staff/{id}/update', [humanResourceController::class, 'staffupdate'])->name('staffs.update');
    //view staff
    Route::get('/staff/{id}/staffview', [humanResourceController::class, 'staffview'])->name('staffs.view');
    //delete teacher
    Route::delete('/staff/{id}', [humanResourceController::class, 'Deletestaff'])->name('staff.delete');


    // academics 
    Route::get('/class',[academicController::class, 'class']);
    Route::get('/section',[academicController::class, 'section']);
    Route::get('/subject',[academicController::class, 'subject']);
    Route::post('/class-create',[academicController::class, 'class_post'])->name('class.classpost');
    Route::post('/create-section',[academicController::class, 'section_post'])->name('create-section');
    Route::post('/create-subject',[academicController::class, 'subject_post'])->name('create-subject');
    //update class
    Route::get('/class/{id}/edit', [academicController::class, 'classEdit'])->name('class.edit');
    Route::put('/class/{id}/update', [academicController::class, 'classupdate'])->name('class.update');
    //delete class
    Route::delete('/class/{id}', [academicController::class, 'Deleteclass'])->name('class.delete');

    //update section
    Route::get('/section/{id}/edit', [academicController::class, 'sectionEdit'])->name('section.edit');
    Route::put('/section/{id}/update', [academicController::class, 'sectionupdate'])->name('section.update');
    //delete class
    Route::delete('/section/{id}', [academicController::class, 'Deletesection'])->name('section.delete');


    // attendence 
    Route::get('/attendence',[attendenceController::class, 'attendence']);
    Route::get('/update-attendence',[attendenceController::class, 'updateAttendence']);
    Route::post('/attendance/save', [attendenceController::class, 'saveAttendance'])->name('saveAttendance');
    
    // fee collection 
    Route::get('/invoice-list',[feeCollectionController::class, 'invoiceList']);
    Route::get('/invoice-individual',[feeCollectionController::class, 'invoiceIndividual']);
    Route::get('/create-invoice',[feeCollectionController::class, 'createInvoice']);
    Route::post('/create-invoice',[feeCollectionController::class, 'invoicecreate'])->name('Invoice');
    Route::delete('/invoice/{id}', [feeCollectionController::class, 'DeleteInvoice'])->name('invoice.delete');
    
    // examination 
    Route::get('/exam-list',[examController::class, 'examList'])->middleware('all');
    Route::get('/mark-import',[examController::class, 'markImport']);
    Route::post('/exam-create',[examController::class, 'exam_list'])->name('exam_create');

    // exam-Reports 
    Route::get('/transcript',[examReportController::class, 'transcript']);
    Route::get('/possion-list',[examReportController::class, 'possoinList']);
    Route::get('/pass-list',[examReportController::class, 'passList']);
    Route::get('/fail-list',[examReportController::class, 'failList']);
    
    
    //library
    Route::get('/add-rack',[libraryController::class, 'addRack']);
    Route::get('/book-list',[libraryController::class, 'bookList'])->middleware('all');
    Route::get('/issue-return',[libraryController::class, 'issueReturn']);
    
    // transport    
    Route::get('/route',[transportController::class, 'route'])->middleware('all');
    Route::get('/vehicles',[transportController::class, 'vehicles'])->middleware('all');
    
    // hostel 
    Route::get('/fees-collection',[hostelController::class, 'feesCollection']);
    Route::get('/hostel',[hostelController::class, 'hostel'])->middleware('all');
    Route::get('/member',[hostelController::class, 'member']);



});