<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\DesignExpController;
use App\Http\Controllers\Admin\FrameworkController;
use App\Http\Controllers\Admin\Localization\BackendLanguageController;
use App\Http\Controllers\Admin\Localization\ChangeLanguageController;
use App\Http\Controllers\Admin\Localization\LanguageController;
use App\Http\Controllers\Admin\LogoIconController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\Pages\HomepageSettingController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectTypeController;
use App\Http\Controllers\Admin\Role\RoleAndPermissionController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\Settings\MaintenanceModeController;
use App\Http\Controllers\Admin\SubServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ThemeSettingController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\ValuesController;
use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::controller(AdminAuthController::class)->group(function () {
        Route::post('/forget-password', 'forgetPassword')->name('forget_password');
        Route::get('/reset-password', 'resetPasswordIndex')->name('reset_password');
        Route::post('/reset-password', 'resetPasswordUpdate')->name('reset_password');
    });
    Route::controller(AdminLoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'handleLogin')->name('login');
        Route::get('/logout', 'handleLogout')->name('logout');
        Route::get('/dashboard', 'index')->name('index')->middleware('admin', 'adminStatusCheck');
        Route::get('/admin-profile', 'adminProfile')->name('profile')->middleware('admin', 'adminStatusCheck');
        Route::post('/update-basic-info', 'updateBasicInfo')->name('basicInfo')->middleware('admin', 'adminStatusCheck');
        Route::post('/update-password', 'updatePassword')->name('update_basic_info')->middleware('admin', 'adminStatusCheck');
    });

    Route::middleware('admin', 'adminStatusCheck')->group(function () {
        //user routes
        Route::resource('user', UserController::class)->except(['craete', 'show']);
        Route::controller(UserController::class)->name('user.')->prefix('user')->group(function () {
            Route::get('/update/status/{id}/{status}', 'updateStatus')->name('user_status');
        });

        //roles and permissions
        Route::resource('role', RoleAndPermissionController::class)->except(['craete', 'show']);
        Route::controller(RoleAndPermissionController::class)->name('role.')->prefix('role')->group(function () {
            Route::get('/get-user-permissions/{id}', 'getUserPermission')->name('getUserPermission');
            Route::post('/give-user-permissions', 'giveUserPermission')->name('giveUserPermission');
        });

        //language controller
        Route::resource('language', LanguageController::class)->except(['craete', 'show']);
        Route::controller(LanguageController::class)->name('language.')->prefix('language')->group(function () {
            Route::get('/update/status/{id}/{status}', 'updateStatus')->name('language_status');
        });

        //backend language controller
        Route::resource('backend/language', BackendLanguageController::class, ['as' => 'backend'])->except(['craete', 'show', 'edit', 'distroy']);
        Route::controller(BackendLanguageController::class)->name('backend.language.')->prefix('backend/language')->group(function () {
            Route::post('/store/translate/string', 'storeTranslateString')->name('storeTranslateString');
            Route::post('/store/apikey', 'storeApikey')->name('storeApikey');
        });
        Route::get('/change/language/{lang}', ChangeLanguageController::class)->name('changeLanguage');

        //settings
        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('/maintenance-mode', [MaintenanceModeController::class, 'maintenanceMode'])->name('server.maintenanceMode');
            Route::post('/maintenance-mode-on', [MaintenanceModeController::class, 'maintenanceModeOn'])->name('server.maintenanceModeOn');
            // Route::get('/server/down',[MaintenanceModeController::class,'down'])->name('server.down');
            Route::get('/server/up', [MaintenanceModeController::class, 'up'])->name('server.up');
            Route::get('/secret-code/delete/{id}', [MaintenanceModeController::class, 'destroy'])->name('secret-code.delete');
            Route::get('/secret-code/delete-all', [MaintenanceModeController::class, 'destroyAll'])->name('secret-code.delete-all');

            /** Logo Start */
            Route::resource('logo', LogoIconController::class)->except('create', 'show', 'store');
            /** Logo End */
            Route::controller(ContentController::class)->prefix('content')->group(function(){
                Route::get('/','index')->name('contentIndex');
                Route::put('/update/{id}','update')->name('contentUpdate');
            });
            Route::controller(ThemeSettingController::class)->prefix('theme')->group(function(){
                Route::get('/','index')->name('themeIndex');
                Route::put('/update/{id}','update')->name('themeUpdate');
            });
        });

        Route::prefix('pages')->name('pages.')->group(function () {
            Route::controller(HomepageSettingController::class)->prefix('homepage')->name('homepage.')->group(function () {
                Route::get('/main-slider', 'mainSlider')->name('main_slider');
                Route::post('/main-slider', 'mainSliderStore')->name('main_slider_store');
                Route::get('/main-slider-delete/{id}', 'mainSliderDelete')->name('main_slider_delete');
                Route::get('/slider/update/status/{id}/{status}', 'updateSliderStatus');
                Route::get('/slider/{id}/edit', 'edit');
                Route::put('/slider/{id}', 'update');
                Route::delete('/slider/{id}', 'destroySlider');

                /** Video Part Start */
                Route::get('/main-video', 'mainVideo')->name('main_video');
                Route::post('/main-video', 'mainVideoStore')->name('main_video_store');
                Route::get('/main-video-delete/{id}', 'mainVideoDelete')->name('main_video_delete');
                Route::get('/video/update/status/{id}/{status}', 'updateVideoStatus');
                Route::get('/video/{id}/edit', 'editVideo');
                Route::put('/video/{id}', 'updateVideo');
                Route::delete('/video/{id}', 'destroyVideo');
                /** Video Part End */
            });
            Route::prefix('homepage')->name('homepage.')->group(function () {
                /** Counter Start */
                Route::resource('counter', CounterController::class)->except('create', 'show');
                Route::controller(CounterController::class)->prefix('counter')->group(function () {
                    Route::get('/update/status/{id}/{status}', 'updateStatus');
                });
            });
            /** Counter End */

            /** Project Type Start */
            Route::resource('project-type', ProjectTypeController::class)->except('create', 'show');
            Route::controller(ProjectTypeController::class)->prefix('project-type')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
            });
            /** Project Type End */

            /** Project Start */
            Route::resource('project', ProjectController::class)->except('create', 'show');
            Route::controller(ProjectController::class)->prefix('project')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
                Route::get('/get/sub-service/{id}', 'getSubService');
            });
            /** Project End */

            /** Blog Start */
            Route::resource('blog', BlogController::class)->except('create', 'show');
            Route::controller(BlogController::class)->prefix('blog')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
            });
            /** Blog End */

            /** Team Start */
            Route::resource('team', TeamController::class)->except('create', 'show');
            Route::controller(TeamController::class)->prefix('team')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
                Route::post('/update/team/info', 'updateTeamInfo')->name('updateTeamInfo');
            });
            /** Team End */

            /** Design Expertise Start */
            Route::resource('designexp', DesignExpController::class)->except('create', 'show');
            Route::controller(DesignExpController::class)->prefix('designexp')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
                Route::post('/update/team/info', 'updateTeamInfo')->name('updateTeamInfo');
            });
            /** Design Expertise End */

            Route::controller(ContactUsController::class)->prefix('contact-us')->group(function () {
                Route::get('/update/contact-us', 'contactUs')->name('contactUs');
                Route::post('/update/contact-us', 'updateContactUs')->name('updateContactUs');
                Route::get('/messages', 'contactUsMessages')->name('contactUsMessages');
                Route::get('/messages/update/status/{id}/{status}', 'updateMessageStatus')->name('updateMessageStatus');
                Route::delete('/messages/delete/{id}', 'deleteMessage')->name('deleteMessage');
            });

            Route::controller(AboutUsController::class)->prefix('about-us')->group(function () {
                Route::get('/update/about-us', 'aboutUs')->name('aboutUs');
                Route::post('/update/about-us', 'updateAboutUs')->name('updateAboutUs');
            });

            /** Services Start */
            Route::resource('service', ServiceController::class)->except('create', 'show');
            Route::controller(ServiceController::class)->prefix('service')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
            });
            /** Services End */

            /** Sub Services Start */
            Route::resource('sub-service', SubServiceController::class)->except('create', 'show');
            Route::controller(SubServiceController::class)->prefix('sub-service')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
            });
            /** Sub Services End */

            /** Framework Start */
            Route::resource('framework', FrameworkController::class)->except('create', 'show');
            Route::controller(FrameworkController::class)->prefix('framework')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
            });
            /** Framework End */

            /** Our Values Start */
            Route::resource('values', ValuesController::class)->except('create', 'show');
            Route::controller(ValuesController::class)->prefix('values')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
            });
            /** Our Values End */

            /** Partner Start */
            Route::resource('partner', PartnerController::class)->except('create', 'show');
            Route::controller(PartnerController::class)->prefix('partner')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
            });
            /** Partner End */

            /** Client Start */
            Route::resource('client', ClientController::class)->except('create', 'show');
            Route::controller(ClientController::class)->prefix('client')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
            });
            /** Client End */

            /** Notification Start */
            Route::resource('notification', NotificationController::class)->except('create', 'show');
            Route::controller(NotificationController::class)->prefix('notification')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
            });
            /** Notification End */

            /** Award Start */
            Route::resource('award', AwardController::class)->except('create', 'show');
            Route::controller(AwardController::class)->prefix('award')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
            });
            /** Award End */

            /** Career Start */
            Route::resource('career', CareerController::class)->except('create', 'show');
            Route::controller(CareerController::class)->prefix('career')->group(function () {
                Route::get('/update/status/{id}/{status}', 'updateStatus');
                Route::get('/job/applications', 'jobApplications')->name('jobApplications');
                Route::get('/job/applications/delete/{id}', 'jobApplicationsDelete')->name('jobApplicationsDelete');
            });
            /** Career End */
        });
    });
    Route::get('/translate-string', function () {
        $data = [];
        $langs = getLangs();
        foreach ($langs as $lang) {
            $darr =  GoogleTranslate::trans(request()->tdata, $lang->lang, 'en');
            array_push($data, $darr);
        }
        return [
            'tdata' => $data,
            'langs' => $langs
        ];
    })->name('translateString');
});
