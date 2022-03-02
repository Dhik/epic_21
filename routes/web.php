<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminCompetitionController;
use App\Http\Controllers\Admin\AdminSponsorshipController;
use App\Http\Controllers\Admin\AdminExhibitionController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminTalkshowController;
use App\Http\Controllers\Admin\AdminJudgeController;
use App\Http\Controllers\Admin\AdminFinalistController;

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
Route::get('/','HomeController@index')->name('landing');
Route::get('/history','PageController@history')->name('history');
Route::get('/competition','PageController@competition')->name('competition');
Route::get('/art_exhibition','PageController@art_ex')->name('art_ex');
Route::get('/contact','PageController@contact')->name('contact');
Route::get('/sponsorship','PageController@sponsorship')->name('sponsorship');
Route::get('/coming_soon','PageController@coming_soon')->name('coming_soon');

Route::post('/contact', 'HomeController@sendContact')->name('contact.send');

Route::prefix('admin')->group(function () {
    
    Route::get('login', 'Admin\AdminAuthController@showFormLogin')->name('login');
    Route::post('login', 'Admin\AdminAuthController@login'); 
    // Route::get('register', 'Admin\AdminAuthController@showFormRegister')->name('register');
    // Route::post('register', 'Admin\AdminAuthController@register');

    Route::group(['middleware' => 'auth'], function () {
        
        Route::get('/', [AdminHomeController::class, 'index'])->name('home');
        Route::get('logout', 'Admin\AdminAuthController@logout')->name('logout');

        Route::prefix('message')->group(function () {
            Route::get('/', [AdminMessageController::class, 'index']);
            Route::post('/delete', [AdminMessageController::class, 'destroy']);
        });

        Route::prefix('competition')->group(function () {
            Route::get('/', [AdminCompetitionController::class, 'index']);
            Route::get('/edit/{id}', [AdminCompetitionController::class, 'edit']);
            Route::post('/update/{id}', [AdminCompetitionController::class, 'update']);
        });

        Route::prefix('sponsorship')->group(function () {
            Route::get('/', [AdminSponsorshipController::class, 'index']);
            Route::get('/create', [AdminSponsorshipController::class, 'create']);
            Route::post('/store', [AdminSponsorshipController::class, 'store']);
            Route::get('/edit/{id}', [AdminSponsorshipController::class, 'edit']);
            Route::post('/update/{id}', [AdminSponsorshipController::class, 'update']);
            Route::post('/delete', [AdminSponsorshipController::class, 'destroy']);
        });

        Route::prefix('exhibition')->group(function () {
            Route::get('/', [AdminExhibitionController::class, 'index']);
            Route::get('/create', [AdminExhibitionController::class, 'create']);
            Route::post('/store', [AdminExhibitionController::class, 'store']);
            Route::get('/edit/{id}', [AdminExhibitionController::class, 'edit']);
            Route::post('/update/{id}', [AdminExhibitionController::class, 'update']);
            Route::post('/delete', [AdminExhibitionController::class, 'destroy']);
        });

        Route::prefix('user')->group(function () {
            Route::get('/', [AdminUserController::class, 'index']);
            Route::get('/create', [AdminUserController::class, 'create']);
            Route::post('/store', [AdminUserController::class, 'store']);
            Route::get('/edit/{id}', [AdminUserController::class, 'edit']);
            Route::post('/update/{id}', [AdminUserController::class, 'update']);
            Route::post('/delete', [AdminUserController::class, 'destroy']);
        });

        Route::prefix('talkshow')->group(function () {
            Route::get('/', [AdminTalkshowController::class, 'index']);
            Route::get('/create', [AdminTalkshowController::class, 'create']);
            Route::post('/store', [AdminTalkshowController::class, 'store']);
            Route::get('/edit/{id}', [AdminTalkshowController::class, 'edit']);
            Route::post('/update/{id}', [AdminTalkshowController::class, 'update']);
            Route::post('/delete', [AdminTalkshowController::class, 'destroy']);
        });

        Route::prefix('judge')->group(function () {
            Route::get('/', [AdminJudgeController::class, 'index']);
            Route::get('/create', [AdminJudgeController::class, 'create']);
            Route::post('/store', [AdminJudgeController::class, 'store']);
            Route::get('/edit/{id}', [AdminJudgeController::class, 'edit']);
            Route::post('/update/{id}', [AdminJudgeController::class, 'update']);
            Route::post('/delete', [AdminJudgeController::class, 'destroy']);
        });

        Route::prefix('finalist')->group(function () {
            Route::get('/', [AdminFinalistController::class, 'index']);
            Route::get('/create', [AdminFinalistController::class, 'create']);
            Route::post('/store', [AdminFinalistController::class, 'store']);
            Route::get('/edit/{id}', [AdminFinalistController::class, 'edit']);
            Route::post('/update/{id}', [AdminFinalistController::class, 'update']);
            Route::post('/delete', [AdminFinalistController::class, 'destroy']);
        });
    });
});

Route::get('/the-9th-pprf','PageController@pprf')->name('pprf');
Route::get('/the-9th-pprf_theme','PageController@pprf_theme')->name('pprf_theme');
Route::get('/the-9th-pprf_registration','PageController@pprf_registration')->name('pprf_registration');
Route::get('/the-9th-pprf_FAQTrivia','PageController@pprf_faqtrivia')->name('pprf_faqtrivia');

Route::get('/research-mindedness','PageController@remind')->name('remind');
Route::get('/research-mindedness_theme','PageController@remind_theme')->name('remind_theme');
Route::get('/research-mindedness_registration','PageController@remind_registration')->name('remind_registration');
Route::get('/research-mindedness_FAQTrivia','PageController@remind_faqtrivia')->name('remind_faqtrivia');

Route::get('/ideation','PageController@ideation')->name('ideation');
Route::get('/ideation_theme','PageController@ideation_theme')->name('ideation_theme');
Route::get('/ideation_registration','PageController@ideation_registration')->name('ideation_registration');
Route::get('/ideation_FAQTrivia','PageController@ideation_faqtrivia')->name('ideation_faqtrivia');

Route::get('/tell-a-vision','PageController@tav')->name('tav');
Route::get('/tell-a-vision_theme','PageController@tav_theme')->name('tav_theme');
Route::get('/tell-a-vision_registration','PageController@tav_registration')->name('tav_registration');
Route::get('/tell-a-vision_FAQTrivia','PageController@tav_faqtrivia')->name('tav_faqtrivia');


Route::get('/mediation','PageController@mediation')->name('mediation');
Route::get('/mediation_theme','PageController@mediation_theme')->name('mediation_theme');
Route::get('/mediation_registration','PageController@mediation_registration')->name('mediation_registration');
Route::get('/mediation_FAQTrivia','PageController@mediation_faqtrivia')->name('mediation_faqtrivia');

Route::get('/liblicious','PageController@liblicious')->name('liblicious');
Route::get('/liblicious_theme','PageController@liblicious_theme')->name('liblicious_theme');
Route::get('/liblicious_registration','PageController@liblicious_registration')->name('liblicious_registration');
Route::get('/liblicious_FAQTrivia','PageController@liblicious_faqtrivia')->name('liblicious_faqtrivia');

Route::get('/parade-jurnalistik','PageController@parjur')->name('parjur');
Route::get('/parade-jurnalistik_theme','PageController@parjur_theme')->name('parjur_theme');
Route::get('/parade-jurnalistik_registration','PageController@parjur_registration')->name('parjur_registration');
Route::get('/parade-jurnalistik_FAQTrivia','PageController@parjur_faqtrivia')->name('parjur_faqtrivia');

Route::get('/pre_event','PageController@pre_event')->name('pre_event');
Route::get('/main_event','PageController@main_event')->name('main_event');
Route::get('/closing','PageController@closing')->name('closing');