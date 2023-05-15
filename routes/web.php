<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CoorDashboardController;
use App\Http\Controllers\ProfDashboardController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ClassSchedulesController;
use App\Http\Controllers\ClassWithSubsController;
use App\Http\Controllers\CoorClassSchedulesController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\CoordinatorProfileController;
use App\Http\Controllers\CoorProfSchedulesController;
use App\Http\Controllers\CourseListController;
use App\Http\Controllers\CoorRoomSchedulesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileCoorController;
use App\Http\Controllers\ProfileProfController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolConfigController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\PasswordProfController;
use App\Http\Controllers\PasswordCoorController;
use App\Http\Controllers\PasswordCoordinatorController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfConfigController;
use App\Http\Controllers\ProfessorDashboardSchedulesController;
use App\Http\Controllers\ProfessorSchedulesController;
use App\Http\Controllers\RoomSchedulesController;
use App\Http\Controllers\SubjectListController;
use Illuminate\Support\Facades\Artisan;
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

Route::middleware('splade')->group(function () 
{
    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    // Linking storage path
    Route::get('linkstorage', function () 
    {
        Artisan::call('storage:link');
    });

    Route::get('editform', function () 
    {
        return view('editan');
    })->name('editan');

    Route::middleware('auth')->group(function () 
    {
        Route::middleware('school')->group(function () 
        {
            // Route::get('dashboard', function () 
            // {
            //     return view('dashboard');
            // })->middleware(['verified'])->name('dashboard');

            Route::get('dashboard', [AdminDashboardController::class, 'create'])->middleware(['verified'])->name('dashboard');

            Route::get('profile', [ProfileController::class, 'edit'])->middleware(['verified'])->name('profile.edit');
            Route::patch('profile', [ProfileController::class, 'update'])->middleware(['verified'])->name('profile.update');
            Route::delete('profile', [ProfileController::class, 'destroy'])->middleware(['verified'])->name('profile.destroy');
            
            Route::resource('subjects', SubjectController::class)->middleware(['verified']);
            Route::resource('department', DepartmentController::class)->middleware(['verified']);
            
            Route::get('generate/{course}',[GenerateController::class, 'create'])->name('generate');

            Route::resource('coordinator',CoordinatorController::class)->middleware(['verified']);

            Route::get('subject/import-sub', function () 
            {
                return view('subjects.import-sub');
            })->middleware(['verified'])->name('import-sub');

            Route::post('subject', [SubjectController::class, 'import'])->name('import')->middleware(['verified']);

            Route::get('professor-schedules', [ProfessorSchedulesController::class, 'showSchedules'])->middleware(['verified'])->name('superadmin-prof-sched');
            Route::get('room-schedules', [RoomSchedulesController::class, 'showRoomSchedules'])->middleware(['verified'])->name('superadmin-room-sched');
            Route::get('class-schedules', [ClassSchedulesController::class, 'showClassSchedules'])->middleware(['verified'])->name('superadmin-class-sched');

            Route::get('editLogo', [SchoolController::class, 'editLogo'])->name('editLogo')->middleware(['verified']);
            Route::post('schoolLogo', [SchoolController::class, 'imageStore'])->name('schoolLogo')->middleware(['verified']);

            Route::get('profileCoor', [ProfileCoorController::class, 'edit']);
            Route::post('profileUpdateCoor', [ProfileCoorController::class, 'update']);

            Route::get('schoolConfig', [SchoolConfigController::class, 'index']);
            Route::post('storeSchooltime', [SchoolConfigController::class, 'store']);

            Route::get('administrator/update/password', [PasswordCoorController::class, 'show'])->name('update-password-administrator');
            Route::post('administrator/update/password', [PasswordCoorController::class, 'updatePassword'])->name('save-password-administrator');
        
            Route::resource('courselist', CourseListController::class)->middleware(['verified']);

            Route::get('generate-pdf/{Prof_sched}', [PDFController::class, 'generatePDF'])->name('prof-generate-pdf')->middleware(['verified']);

            Route::get('room-generate-pdf/{Room_sched}', [PDFController::class, 'generatePdfRoomSched'])->name('room-generate-pdf')->middleware(['verified']);

            Route::get('class-generate-pdf/{Stud_sched}/{Stud_year}/{Stud_Section}', [PDFController::class, 'generatePdfClassSched'])->name('class-generate-pdf')->middleware(['verified']);

        });
        
        Route::resource('school', SchoolController::class)->middleware(['verified']);

        Route::get('setup-school', [SchoolController::class, 'setupSchool'])->name('setupSchool')->middleware(['verified']);

    });

    require __DIR__.'/auth.php';

    Route::middleware('auth:prof')->group(function () 
    {
        // Route::get('prof/dashboard', function () 
        // {
        //     return view('prof.dashboard');
        // })->name('prof.dashboard');

        Route::get('prof/dashboard', [ProfDashboardController::class, 'create'])->name('prof.dashboard');

        Route::get('prof/profile', [AdminProfileController::class, 'edit'])->name('prof.profile.edit');
        Route::patch('prof/profile', [AdminProfileController::class, 'update'])->name('prof.profile.update');
        Route::delete('prof/profile', [AdminProfileController::class, 'destroy'])->name('prof.profile.destroy');

        Route::get('profconfigs', [ProfConfigController::class, 'index'])->name('prof-save-time');
        Route::post('profconfigs', [ProfConfigController::class, 'store'])->name('save-configs');

        Route::get('prof/subjects', function () 
        {
            return view('prof.subjects');
        })->name('prof-subjects');

        Route::get('professor/class/calendar', [ProfessorDashboardSchedulesController::class, 'professorSchedules'])->name('prof-class-calendar');

        Route::get('prof', [ProfileProfController::class, 'edit'])->name('prof-update');
        Route::post('prof', [ProfileProfController::class, 'update'])->name('save-profile');

        Route::get('password', [PasswordProfController::class, 'show'])->name('update-password');
        Route::post('password', [PasswordProfController::class, 'updatePassword'])->name('save-password');

        Route::get('professor-pdf', [PDFController::class, 'generatePdfProfSched'])->name('professor-pdf');

    });

    Route::middleware('auth:coor')->group(function () 
    {
        // Route::get('coor/dashboard', function () 
        // {
        //     return view('coor.dashboard');
        // })->name('coor.dashboard');

        Route::get('coor/dashboard', [CoorDashboardController::class, 'create'])->name('coor.dashboard');

        Route::get('coor/profile', [AdminProfileController::class, 'edit'])->name('coor.profile.edit');
        Route::patch('coor/profile', [AdminProfileController::class, 'update'])->name('coor.profile.update');
        Route::delete('coor/profile', [AdminProfileController::class, 'destroy'])->name('coor.profile.destroy');

        Route::resource('subjectlist', SubjectListController::class);
        Route::resource('courses', CourseController::class);
        Route::resource('professors', ProfessorController::class);
        Route::resource('rooms', RoomController::class);

        Route::get('addCourse/{subject}', [ClassWithSubsController::class, 'index'])->name('addCourses');
        Route::post('saveCourse', [ClassWithSubsController::class, 'create'])->name('save');

        Route::get('professor/schedules', [CoorProfSchedulesController::class, 'showSchedules'])->name('prof-sched');
        Route::get('room/schedules', [CoorRoomSchedulesController::class, 'showRoomSchedules'])->name('room-sched');
        Route::get('class/schedules', [CoorClassSchedulesController::class, 'showClassSchedules'])->name('class-sched');

        Route::get('coordinator/update/password', [PasswordCoordinatorController::class, 'show'])->name('coordinator-update-password');
        Route::post('coordinator/update/password', [PasswordCoordinatorController::class, 'updatePassword'])->name('coordinator-new-password');

        Route::get('coordinator/update/profile', [CoordinatorProfileController::class, 'edit'])->name('coordinator-update-profile');
        Route::post('coordinator/update/profile', [CoordinatorProfileController::class, 'update'])->name('coordinator-save-profile');

        Route::get('coor-prof-pdf/{Prof_Name}/{Prof_School}', [PDFController::class,'generateCoorProfPdf'])->name('coor-prof-pdf');

        Route::get('coor-room-pdf/{Room_Number}/{Room_School}', [PDFController::class, 'generateCoorRoomPdf'])->name('coor-room-pdf');

        Route::get('coor-class-pdf/{Course}/{Year}/{Section}/{School}', [PDFController::class, 'generateCoorClassPdf'])->name('coor-class-pdf');

        Route::get('delete/class/course/{ClassCourseId}/{ClassCourse}/{ClassYear}/{ClassSection}/{ClassSem}/{ClassSchool}', [ClassWithSubsController::class, 'destroy'])->name('delete-addcourse-coor');


    });

    require __DIR__.'/prof_auth.php';
    require __DIR__.'/coor_auth.php';

});
