<?php
//Start backend controller
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DeshboardController;
use App\Http\Controllers\backend\TeacherController;
use App\Http\Controllers\backend\StudentController;
use App\Http\Controllers\backend\InstitiuteController;
use App\Http\Controllers\backend\ClassController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\SubjectController;
use App\Http\Controllers\backend\RoutineController;
use App\Http\Controllers\backend\FeetypeController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\SectionController;
use App\Http\Controllers\backend\AttendanceController;
use App\Http\Controllers\backend\Student_paymentController;
use App\Http\Controllers\auth\LoginController;

//End backend controller

//<--start frontrand controller-->

use App\Http\Controllers\frontrand\FrontrandController;
use App\Http\Controllers\frontrand\AdmissionController;


//<--End frontrandcontroller-->

 
Route::group(['middleware'=>['auth','isAdmin']],function(){
Route::get('/controll_panel',[DeshboardController::class,'admin'])->name('deshboard');
Route::get('/logout-login',[LoginController::class,'logout'])->name('Logout');

        // TeacherController
Route::get('/teacher_create',[TeacherController::class,'create']);
Route::post('/storedata',[TeacherController::class,'store']);
Route::get('/teacher_Data_show',[TeacherController::class,'show'])->name('shows');
Route::get('/edit/{teacher_id}',[TeacherController::class,'edit']);
Route::put('/update/{id}',[TeacherController::class,'update']);
Route::get('teacher/delete/{id}',[TeacherController::class,'destroy'])->name('teacher.delete');



       //StudentController
Route::get('/student-create',[StudentController::class,'create']);
Route::post('/student_store',[StudentController::class,'store'])->name('student.store');
Route::get('student_show',[StudentController::class,'show'])->name('view');
Route::get('/student-edit/{student_id}',[StudentController::class,'edits'])->name('student.edit');
Route::put('/student-update/{id}', [StudentController::class,'update'])->name('student.update');
Route::get('student-delete/{id}',[StudentController::class,'destroy'])->name('student.delete');



        //InstitiuteController
Route::get('/institiute_create',[InstitiuteController::class,'create'])->name('school.create');
Route::post('/institiute-stocks',[InstitiuteController::class,'stocks'])->name('stocks.data');
Route::get('/institiute_info_show',[InstitiuteController::class,'show'])->name('school.show');
Route::get('/editees/{institiute_id}',[InstitiuteController::class,'editer'])->name('institiute.edit');


       //ClassController

Route::get('/classList_view',[ClassController::class,'classList'])->name('class.show');       
Route::get('/class_form',[ClassController::class,'form']);       
Route::post('/class_store',[ClassController::class,'store'])->name('store.data');       
Route::get('/editer/{class_id}',[ClassController::class,'editer'])->name('edit.class');       
Route::put('/update-data/{id}',[ClassController::class,'updates']); 
Route::get('/delete-class/{id}',[ClassController::class,'destroy']);  


      //DepartmentController
Route::get('/department-form',[DepartmentController::class,'dpform']);     
Route::post('/department-store',[DepartmentController::class,'dpstore'])->name('department.store');     
Route::get('/departmentList-show',[DepartmentController::class,'dptList'])->name('dptList.show');     
Route::get('/department-edit/{id}',[DepartmentController::class,'dptedit']);     
Route::put('/department-update/{id}',[DepartmentController::class,'dptupdate'])->name('department.update');     
Route::get('/delete/{id}',[DepartmentController::class,'destroy'])->name('delete.department');


     //SubjectController
Route::get('/subject-form',[SubjectController::class,'form'])->name('subject.form');
Route::post('/subject-store',[SubjectController::class,'store'])->name('subject.store');
Route::get('/subject-show',[SubjectController::class,'show'])->name('subject.show');
Route::get('/subjectEdit-page/{id}',[SubjectController::class,'edit'])->name('subject.edit');
Route::put('/subject-update/{id}',[SubjectController::class,'update'])->name('update.subject');
Route::get('/subject-delete/{id}',[SubjectController::class,'destroy'])->name('subject.delete');


     //RoutineController
Route::get('/classRoutine-form',[RoutineController::class,'form'])->name('classRoutine.form');         
Route::post('/classRoutine-store',[RoutineController::class,'store'])->name('routine.store');         
Route::get('/classRoutine-show',[RoutineController::class,'show'])->name('classRoutine.show');     
Route::get('/classRoutine-edit/{id}',[RoutineController::class,'edit'])->name('classRoutine.edit');     
Route::put('/classRoutine-update/{id}',[RoutineController::class,'update'])->name('routine.update');     
Route::get('/classRoutine-delete/{id}',[RoutineController::class,'delete'])->name('delete.routine');     




     //AttendanceController
Route::get('/attendance-form',[AttendanceController::class,'create']);
Route::post('/attendance-store',[AttendanceController::class,'store'])->name('attendance.store');     
Route::get('/attendance-show',[AttendanceController::class,'view'])->name('student.attendance');       
Route::get('/attendance-edit/{id}',[AttendanceController::class,'edit'])->name('attendance.edit');
Route::put('/attendance-update/{id}',[AttendanceController::class,'update'])->name('update.attendance');          
Route::get('/attendance-delete/{id}',[AttendanceController::class,'delete'])->name('attendance.delete');     








       //FeetypeController

Route::get('/feetype-form',[FeetypeController::class,'ftform'])->name('feetype.form');
Route::post('/feetype-store',[FeetypeController::class,'store'])->name('feeType.store');
Route::get('/feetype-views',[FeetypeController::class,'views'])->name('feetype.views');
Route::get('/feetype-edit/{id}',[FeetypeController::class,'edit'])->name('feetype.edit');
Route::put('/feetype-update/{id}',[FeetypeController::class,'update'])->name('update.data');
Route::get('/feetype-delete/{id}',[FeetypeController::class,'destroy'])->name('feetype.delete');



       //PaymentMethod Controller

 Route::get('/create-form',[PaymentController::class,'create'])->name('method.form');      
 Route::post('/paymentMethod-store',[PaymentController::class,'stock'])->name('paymentMethod.store');      
 Route::get('/paymentMethod_view',[PaymentController::class,'view'])->name('paymentMethod.show');      
 Route::get('/paymentMethod_edit/{id}',[PaymentController::class,'edit'])->name('method.edit');      
 Route::put('/paymentMethod_update/{id}',[PaymentController::class,'update'])->name('update.method');      
 Route::get('/paymentMethod_delete/{id}',[PaymentController::class,'destroy'])->name('method.delete'); 
 
     
      //Student_paymentController
Route::post('/payment-store',[Student_paymentController::class,'store'])->name('student.payment');      
Route::get('/paymentList-show',[Student_paymentController::class,'view'])->name('paymentList.show');      
Route::get('/paymentList-edit/{id}',[Student_paymentController::class,'edit'])->name('payment.edit');      
Route::put('/paymentList-update/{id}',[Student_paymentController::class,'update'])->name('payment.update');      
Route::get('/paymentList-delete/{id}',[Student_paymentController::class,'delete'])->name('payment.delete');      




       //SectionController
Route::get('/section-form',[SectionController::class,'create']); 
Route::post('section-store',[SectionController::class,'case'])->name('section.store');
Route::get('section_show',[SectionController::class,'show'])->name('section.show');
Route::get('section-edit/{id}',[SectionController::class,'edit'])->name('section.edit');
Route::put('section-update/{id}',[SectionController::class,'update'])->name('update.section');
Route::get('section-delete/{id}',[SectionController::class,'destroy'])->name('section.delete');
       
});  



Route::get('/', function () {
    return view('welcome');
});



//<--Starting Here From Backend Controller-->

        // DeshboardController



      //LoginController

      
   Route::get('/login',[LoginController::class,'login'])->name('login');
   Route::post('/login-store',[LoginController::class,'store'])->name('login.admin');


   Route::get('/register',[LoginController::class,'register'])->name('register');
   Route::post('/register-store',[LoginController::class,'stock'])->name('user.register');
   


  

//<--There are now backend controller end-->



//<--starting here from frontrand controller-->

      //FrontrandController


Route::get('home-page',[FrontrandController::class,'home'])->name('content.show');
Route::get('about-page',[FrontrandController::class,'about'])->name('about.show');
Route::get('contact-page',[FrontrandController::class,'contact'])->name('contact.show');
Route::get('gellery-page',[FrontrandController::class,'gellery'])->name('gellery.show');
Route::get('notice-page',[FrontrandController::class,'notice'])->name('notice.show');
Route::get('result-page',[FrontrandController::class,'result'])->name('result.show');
Route::get('student-fee',[FrontrandController::class,'fee'])->name('student.fee');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
 


     //AdmissionController


//Route::resource('admission', AdmissionController::class);

Route::post('student-admission',[AdmissionController::class,'store'])->name('Admission.student');     
Route::get('admission-show',[AdmissionController::class,'view'])->name('Admission.view');
Route::get('/admission-edit/{id}',[AdmissionController::class,'edit'])->name('edit.data');
Route::put('/admission-update/{id}',[AdmissionController::class,'update'])->name('Admission.update');
Route::get('/admission-delete/{id}',[AdmissionController::class,'destroy'])->name('delete.data');


     


       