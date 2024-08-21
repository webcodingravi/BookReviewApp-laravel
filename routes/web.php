<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AccountController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/book/{id}', [HomeController::class, 'detail'])->name('book.detail');
Route::post('/save-review', [HomeController::class, 'saveReview'])->name('book.saveReview');
Route::get('/forgot-password', [AccountController::class, 'forgotPassword'])->name('account.forgotPassword');
Route::post('/process-forgot-password', [AccountController::class, 'processForgotPassword'])->name('account.processForgotPassword');
Route::get('/reset-password/{token}', [AccountController::class, 'resetPassword'])->name('account.resetPassword');
Route::post('/process-reset-password', [AccountController::class, 'processResetPassword'])->name('account.processResetPassword');







Route::prefix("account")->group(function() {
    Route::group(["middleware" => "guest"], function() {
        Route::get('/register', [AccountController::class, 'register'])->name('account.register');
        Route::post('/process-register', [AccountController::class, 'processRegister'])->name('account.processRegister');
        Route::get('/login', [AccountController::class, 'login'])->name('account.login');
        Route::post('/process-login', [AccountController::class, 'authenticate'])->name('account.authenticate');
    
    });  
  
        Route::group(["middleware" => "auth"], function() {
        Route::get('/profile', [AccountController::class, 'profile'])->name('account.profile');
        Route::get('/logout', [AccountController::class, 'logout'])->name('account.logout');
        Route::post('/update-profile', [AccountController::class, 'updateProfile'])->name('account.updateProfile');
        Route::get('/update-password', [AccountController::class, 'updatePassword'])->name('account.updatePassword');
        Route::post('/process-update-password', [AccountController::class, 'processUpdatePassword'])->name('account.processUpdatePassword');


        
       
        Route::group(["middleware" => "check-admin"], function() {
            Route::resource("/books",BookController::class);
            Route::get('/reviews', [ReviewController::class, 'index'])->name('account.reviews');
            Route::get('/reviews/{id}', [ReviewController::class, 'edit'])->name('account.reviews.edit');
            Route::put('/update-reviews/{id}', [ReviewController::class, 'updateReview'])->name('account.reviews.updateReview');
            Route::delete('/delete-reviews', [ReviewController::class, 'deletReview'])->name('account.reviews.deletReview');

        });
   


        Route::get('/my-reviews', [AccountController::class, 'myReviews'])->name('account.myReview');
        Route::get('/edit-my-reviews/{id}', [AccountController::class, 'edit'])->name('account.myReview-edit');
        Route::put('/update-my-reviews/{id}', [AccountController::class, 'updateReview'])->name('account.myReview.updateReview');
        Route::delete('/delete-my-reviews', [AccountController::class, 'deletReview'])->name('account.myReview.deletReview');



        


    });
   




});

