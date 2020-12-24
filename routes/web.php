<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Auth;

// load controllers
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;   
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\CompetitionsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StableController;
use App\Http\Controllers\HorseController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\SlotController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\RidingClassController;

// App Owner Controller
use App\Http\Controllers\AppOwner\DashboardController;
use App\Http\Controllers\AppOwner\BankPaymentController;
use App\Http\Controllers\AppOwner\HorseSexController;
use App\Http\Controllers\AppOwner\HorseBreedController;
use App\Http\Controllers\AppOwner\PackageApprovalController;
use App\Http\Controllers\AppOwner\StableApprovalController;
use App\Http\Controllers\AppOwner\UserPaymentApprovalController;


route::get('/', function () {
    return redirect()->route('competitions.index');
});
route::get('home', function () {
    return redirect()->route('competitions.index');
});
route::get('test', function () {
    return view('riding_class.history-pay');
});

// App Owner Route


Auth::routes(['verify, true']);
// User Route

// Auth::routes(['verify' => true, 'logout' => false, 'password']);
Route::name('login.')->group(function () {
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('loginForm');
    Route::get('error', [LoginController::class, 'error'])->name('error');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('register', [RegisterController::class, 'register'])->name('register');
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('registerForm');
    Route::get('send-reset-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('reset.reqpassword');
    Route::post('send-reset-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('reset.sendpassword');
    Route::get('reset-password', [ResetPasswordController::class, 'showResetForm'])->name('reset.password');
    Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('store.reset.password');
});

Route::group(['middleware' => ['auth', 'cekstatus:0']], function () {
    Route::name('verifikasi.')->group(function () {
        Route::get('verifikasi', [VerificationController::class, 'verifikasi'])->name('index');
    });
});
Route::group(['middleware' => ['auth', 'cekstatus:1']], function () {

    // App Owner
    Route::group(['prefix' => 'owner'], function(){

        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('owner.dashboard');
    
        // Bank Account
        Route::group(['prefix' => 'bank'], function(){
    
            Route::get('/', [BankPaymentController::class, 'index'])->name('owner.bank');
            route::get('list/json', [BankPaymentController::class, 'listJson'])->name('owner.bank.list.json');
            Route::post('store', [BankPaymentController::class, 'store'])->name('owner.bank.store');
            Route::get('edit/{id}', [BankPaymentController::class, 'edit'])->name('owner.bank.edit');
            Route::patch('update', [BankPaymentController::class, 'update'])->name('owner.bank.update');
            Route::delete('delete', [BankPaymentController::class, 'delete'])->name('owner.bank.delete');
    
        });
        // Horse Sex
        Route::group(['prefix' => 'horse-sex'], function(){
    
            Route::get('/', [HorseSexController::class, 'index'])->name('owner.horse-sex');
            route::get('list/json', [HorseSexController::class, 'listJson'])->name('owner.horse-sex.list.json');
            Route::post('store', [HorseSexController::class, 'store'])->name('owner.horse-sex.store');
            Route::get('edit/{id}', [HorseSexController::class, 'edit'])->name('owner.horse-sex.edit');
            Route::patch('update', [HorseSexController::class, 'update'])->name('owner.horse-sex.update');
            Route::delete('delete', [HorseSexController::class, 'delete'])->name('owner.horse-sex.delete');
    
        });
    
        // Horse Breed
        Route::group(['prefix' => 'horse-breed'], function(){
    
            Route::get('/', [HorseBreedController::class, 'index'])->name('owner.horse-breed');
            route::get('list/json', [HorseBreedController::class, 'listJson'])->name('owner.horse-breed.list.json');
            Route::post('store', [HorseBreedController::class, 'store'])->name('owner.horse-breed.store');
            Route::get('edit/{id}', [HorseBreedController::class, 'edit'])->name('owner.horse-breed.edit');
            Route::patch('update', [HorseBreedController::class, 'update'])->name('owner.horse-breed.update');
            Route::delete('delete', [HorseBreedController::class, 'delete'])->name('owner.horse-breed.delete');
    
        });
        
        // User Payment Approval
        Route::group(['prefix' => 'userpayment'], function () {
            route::get('/', [UserPaymentApprovalController::class, 'index'])->name('owner.userpayment.index');
            route::get('list/approve/booking', [UserPaymentApprovalController::class, 'listJsonApprov'])->name('owner.userpayment.listJson.approv');
            route::get('list/unapprov/booking', [UserPaymentApprovalController::class, 'listJsonUnapprov'])->name('owner.userpayment.listJson.unapprov');
            route::get('detail/booking/{id}', [UserPaymentApprovalController::class, 'detailBooking'])->name('owner.userpayment.detail.booking');
            route::patch('approv/booking/{id}', [UserPaymentApprovalController::class, 'approvBooking'])->name('owner.userpayment.approv.booking');
            route::patch('unapprov/booking/{id}', [UserPaymentApprovalController::class, 'unapprovBooking'])->name('owner.userpayment.unapprov.booking'); 
        });

        Route::name('stable_approval.')->prefix('stable_approval')->group(function () {
            route::get('/', [StableApprovalController::class, 'index'])->name('index');
            route::get('list/approve/stable', [StableApprovalController::class, 'listJsonApprov'])->name('listJson.approv');
            route::get('list/unapprov/stable', [StableApprovalController::class, 'listJsonUnapprov'])->name('listJson.unapprov');
            route::get('detail/stable/{id}', [StableApprovalController::class, 'detailStable'])->name('detail.stable');
            route::patch('approv/stable/{id}', [StableApprovalController::class, 'approvStable'])->name('approv.stable');
            route::patch('unapprov/stable/{id}', [StableApprovalController::class, 'unapprovStable'])->name('unapprov.stable');
        });
        
        Route::name('package_approval.')->prefix('package_approval')->group(function () {
            route::get('/', [PackageApprovalController::class, 'index'])->name('index');
            route::get('list/approve/package', [PackageApprovalController::class, 'listJsonApprov'])->name('listJson.approv');
            route::get('list/unapprov/package', [PackageApprovalController::class, 'listJsonUnapprov'])->name('listJson.unapprov');
            route::get('detail/package/{id}', [PackageApprovalController::class, 'detailPackage'])->name('detail.package');
            route::patch('approv/package/{id}', [PackageApprovalController::class, 'approvPackage'])->name('approv.package');
            route::patch('unapprov/package/{id}', [PackageApprovalController::class, 'unapprovPackage'])->name('unapprov.package');
        });
    });


    // User
    Route::name('competitions.')->prefix('competitions')->group(function () {
        Route::get('data-competitions', [CompetitionsController::class, 'index'])->name('index');
    });

    Route::name('profile.')->prefix('profile')->group(function () {
        route::get('/', [ProfileController::class, 'index'])->name('index');
        route::get('city', [ProfileController::class, 'getCity'])->name('city');
        route::get('district', [ProfileController::class, 'getDistrict'])->name('district');
        route::get('village', [ProfileController::class, 'getVillage'])->name('village');
    });

    Route::name('stable.')->prefix('stable')->group(function () {
        route::get('/', [StableController::class, 'index'])->name('index');        
        route::get('menu', [StableController::class, 'menu'])->name('menu');
        route::post('store', [StableController::class, 'store'])->name('store');
        route::put('update', [StableController::class, 'update'])->name('update');
    });

    Route::name('horse.')->prefix('horse')->group(function () {
        route::get('/', [HorseController::class, 'index'])->name('index');
        route::get('list/json', [HorseController::class, 'listJson'])->name('list.json');
        route::get('create', [HorseController::class, 'create'])->name('create');
        route::post('store', [HorseController::class, 'store'])->name('store');
        route::get('edit/{id}', [HorseController::class, 'edit'])->name('edit');
        route::put('update', [HorseController::class, 'update'])->name('update');
        route::delete('delete', [HorseController::class, 'delete'])->name('delete');
    });

    Route::name('package.')->prefix('package')->group(function () {
        route::get('/', [PackageController::class, 'index'])->name('index');
        route::get('list/json', [PackageController::class, 'listJson'])->name('list.json');
        route::get('create', [PackageController::class, 'create'])->name('create');
        route::post('store', [PackageController::class, 'store'])->name('store');
        route::get('edit/{id}', [PackageController::class, 'edit'])->name('edit');
        route::post('update', [PackageController::class, 'update'])->name('update');
        route::delete('delete', [PackageController::class, 'delete'])->name('delete');
       
        Route::name('slot.')->group(function () {
            route::get('slot/json', [SlotController::class, 'detail_index_json'])->name('detail.index.json');
            route::post('slot/store', [SlotController::class, 'detail_store'])->name('detail.store');
            route::get('slot/show', [SlotController::class, 'detail_show'])->name('detail.show');
            route::post('slot/update', [SlotController::class, 'detail_update'])->name('detail.update');
            route::delete('slot/delete', [SlotController::class, 'detail_delete'])->name('detail.delete');
        });
    });

    Route::name('schedule.')->prefix('schedule')->group(function () {
        route::get('/', [SlotController::class, 'index'])->name('index');
        route::get('schedule/json', [SlotController::class, 'listJson'])->name('index.json');
        route::get('create', [SlotController::class, 'create'])->name('create');
        route::post('store', [SlotController::class, 'store'])->name('store');
        route::get('detail/schedule', [SlotController::class, 'detailSchedule'])->name('detail.schedule');
        route::get('detail/show', [SlotController::class, 'detailShow'])->name('detail.show');
        route::delete('delete', [SlotController::class, 'delete'])->name('delete');
    });


    Route::name('coach.')->prefix('coach')->group(function () {
        route::get('/', [CoachController::class, 'index'])->name('index');
        route::get('list/json', [CoachController::class, 'listJson'])->name('list.json');
        route::get('create', [CoachController::class, 'create'])->name('create');
        route::post('store', [CoachController::class, 'store'])->name('store');
        route::get('edit/{id}', [CoachController::class, 'edit'])->name('edit');
        route::put('update', [CoachController::class, 'update'])->name('update');
        route::delete('delete', [CoachController::class, 'delete'])->name('delete');
    });

    Route::name('club.')->prefix('club')->group(function () {
        route::get('/', [ClubController::class, 'index'])->name('index');
        route::get('menu', [ClubController::class, 'menu'])->name('menu');
        route::get('create', [ClubController::class, 'create'])->name('create');
        route::post('store', [ClubController::class, 'store'])->name('store');
    });


    Route::name('riding_class.')->prefix('riding_class')->group(function () {
        route::get('search/list/class', [RidingClassController::class, 'search_list_class'])->name('search_class');
        route::get('search/booking/class', [RidingClassController::class, 'booking_class'])->name('booking_class');
        route::post('add/package', [RidingClassController::class, 'addToCart'])->name('booking.addCart');
        route::get('pesan/package', [RidingClassController::class, 'pesanToCart'])->name('pesan.addCart');
        route::post('booking/payment', [RidingClassController::class, 'booking_payment'])->name('booking.payment');
        route::get('booking/detail', [RidingClassController::class, 'booking_detail'])->name('booking.detail');
        route::post('confirmation/payment', [RidingClassController::class, 'history_order'])->name('confirmasion.payment');
        route::get('booking/list', [RidingClassController::class, 'booking_list_qrcode'])->name('booking.list.qrcode');
        route::get('history/order', [RidingClassController::class, 'historyorderDetail'])->name('history.order');
    });
        // untuk close package
        route::get('booking-detail/{id}/confirmation', [StableController::class, 'stable_close'])->name('index');
        route::post('close/json', [StableController::class, 'close'])->name('close');

    
});


//app owner
