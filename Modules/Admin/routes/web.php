<?php
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Middleware\AdminAuthenticated;
use Illuminate\Http\Request;
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
$router->aliasMiddleware('authAdmin', AdminAuthenticated::class);
Route::prefix('admin')->group(function() {
    Route::get( '/logout', [AdminController::class, 'logout']);
    Route::match(['get', 'post'],'/', [AdminController::class, 'login']);
    Route::match(['get', 'post'],'/admins', [AdminController::class, 'admins'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/dashboard', [AdminController::class, 'dashboard'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/add-admin', [AdminController::class, 'add_admin'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-admin/{user_id}', [AdminController::class, 'edit_admin'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/deactivate-admin/{user_id}', [AdminController::class, 'deactivate_admin'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/activate-admin/{user_id}', [AdminController::class, 'activate_admin'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/events', [AdminController::class, 'events'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/add-event', [AdminController::class, 'add_event'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-event/{id}', [AdminController::class, 'edit_event'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/deactivate-event/{id}', [AdminController::class, 'deactivate_event'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/activate-event/{id}', [AdminController::class, 'activate_event'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/access-codes', [AdminController::class, 'access_codes'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/create-access-codes', [AdminController::class, 'create_access_codes'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/ads', [AdminController::class, 'ads'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/add-ad', [AdminController::class, 'add_ad'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-ad/{id}', [AdminController::class, 'edit_ad'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/deactivate-ad/{id}', [AdminController::class, 'deactivate_ad'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/activate-ad/{id}', [AdminController::class, 'activate_ad'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/brain-profiles', [AdminController::class, 'brain_profiles'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-brain-profile/{id}', [AdminController::class, 'edit_brain_profile'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/brain-code-results', [AdminController::class, 'brain_code_results'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-brain-code-results/{id}', [AdminController::class, 'edit_brain_code_results'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/dimension-questions', [AdminController::class, 'dimension_questions'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-dimension-question/{id}', [AdminController::class, 'edit_dimension_question'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/normal-questions', [AdminController::class, 'normal_questions'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-normal-question/{id}', [AdminController::class, 'edit_normal_question'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/star-ratings', [AdminController::class, 'star_ratings'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/add-star-rating', [AdminController::class, 'add_star_rating'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-star-rating/{id}', [AdminController::class, 'edit_star_rating'])->middleware('authAdmin');

    Route::match(['get', 'post'],'/video-tips', [AdminController::class, 'video_tips'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/add-video-tip', [AdminController::class, 'add_video_tip'])->middleware('authAdmin');
    Route::match(['get', 'post'],'/edit-video-tip/{id}', [AdminController::class, 'edit_video_tip'])->middleware('authAdmin');
});
