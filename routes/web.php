<?php
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComparisonController;
use App\Http\Controllers\SkillTestController;
use App\Http\Controllers\IntrovertExtrovertQuestionController;
use Illuminate\Http\Request;
use App\Http\Middleware\AuthCustomer;
use App\Http\Middleware\AuthQuestionAnswered;
use App\Http\Middleware\checkUserPacakge;
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
$router->aliasMiddleware('authCustomer', AuthCustomer::class);
$router->aliasMiddleware('AuthQuestionAnswered', AuthQuestionAnswered::class);
$router->aliasMiddleware('checkUserPacakge', checkUserPacakge::class);

Route::match(['get', 'post'],'/', [MainController::class, 'index']);
Route::match(['get', 'post'],'/intro', [QuestionsController::class, 'intro']);
Route::match(['get', 'post'],'/questions/{question}', [QuestionsController::class, 'question'])->middleware('authCustomer');
Route::match(['get', 'post'],'/childquestions/{question}', [QuestionsController::class, 'childquestions']);
Route::match(['get', 'post'],'/questions-completed', [QuestionsController::class, 'thankyou']);

Route::match(['get', 'post'],'/start-dimentaional-questions', [QuestionsController::class, 'start_dimentational_questions']);

Route::match(['get', 'post'],'/save-answers', [QuestionsController::class, 'save_answers']);
Route::match(['get', 'post'],'/save-child-answers', [QuestionsController::class, 'save_child_answers']);

Route::match(['get', 'post'],'/questions/game/game-1', [QuestionsController::class, 'game_1']);
Route::match(['get', 'post'],'/questions/game/game-2', [QuestionsController::class, 'game_2']);
Route::match(['get', 'post'],'/questions/game/game-3', [QuestionsController::class, 'game_3']);
Route::match(['get', 'post'],'/questions/game/game-4', [QuestionsController::class, 'game_4']);
Route::match(['get', 'post'],'/questions/game/game-5', [QuestionsController::class, 'game_5']);
Route::match(['get', 'post'],'/sign-in', [UserController::class, 'sign_in']);
Route::match(['get', 'post'],'/sign-up', [UserController::class, 'sign_up']);
Route::match(['get', 'post'],'/logout', [UserController::class, 'logout']);
Route::match(['get', 'post'],'/packages', [MainController::class, 'packages'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/buy-package/{package}', [UserController::class, 'buy_package'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/dashboard', [MainController::class, 'dashboard'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/tips', [MainController::class, 'tips'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/consultation-booking', [MainController::class, 'consultationBooking'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/internships', [MainController::class, 'internships'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/scholarships', [MainController::class, 'scholarships'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/university-programs', [MainController::class, 'universityPrograms'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/test-attempt', [MainController::class, 'testAttempt'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/supar-future-club', [MainController::class, 'suparFutureClub'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/profile', [UserController::class, 'profile'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/profile-settings', [UserController::class, 'profile_settings'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/events', [MainController::class, 'events'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');

Route::match(['get', 'post'],'/test-attempt-2', [MainController::class, 'testAttempt_2'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::match(['get', 'post'],'/parent-community', [MainController::class, 'parentCommunity'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::match(['get', 'post'],'/view-tip/{id}', [MainController::class, 'tipInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/view-university/{id}', [MainController::class, 'uniInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/view-internship/{id}', [MainController::class, 'internInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/view-scholarship/{id}', [MainController::class, 'scholarshipInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/super-futer-inner', [MainController::class, 'superFutureInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/search-buddy', [MainController::class, 'searchBuddy'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/jobs', [MainController::class, 'jobs'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/jobs-inner', [MainController::class, 'jobsInner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/consultation-booking-step-2', [MainController::class, 'consultStepTwo'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');

Route::match(['get', 'post'],'/about-us', [MainController::class, 'aboutus']);
Route::match(['get', 'post'],'/blogs', [MainController::class, 'blogs']);
Route::match(['get', 'post'],'/braintour', [MainController::class, 'braintour']);
Route::match(['get', 'post'],'/blog-inner', [MainController::class, 'bloginner']);
Route::match(['get', 'post'],'/our-marketplace', [MainController::class, 'ourmarketplace']);
Route::match(['get', 'post'],'/marketplace-inner', [MainController::class, 'marketplaceinner']);
Route::match(['get', 'post'],'/home-events', [MainController::class, 'homeevents']);
Route::match(['get', 'post'],'/event/{slug}', [MainController::class, 'homeeventsinner']);
Route::match(['get', 'post'],'/sweta-adatia', [MainController::class, 'swetaadatia']);
Route::match(['get', 'post'],'/hussain-ghadiyali', [MainController::class, 'hussain']);
Route::match(['get', 'post'],'/partnered-consultant', [MainController::class, 'partneredconsultant']);

Route::match(['get', 'post'],'/multi-tasking', [MainController::class, 'multitasking']);
Route::match(['get', 'post'],'/multi-task-inner', [MainController::class, 'multitaskinginner']);


Route::match(['get', 'post'],'/basic-report-template', [MainController::class, 'basic_report_template'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');




Route::match(['get', 'post'], '/retake', [QuestionsController::class, 'retake']);







Route::match(['get', 'post'],'/download-brain-results', [MainController::class, 'download_brain_results'])->middleware('authCustomer')->middleware('checkUserPacakge');
Route::match(['get', 'post'],'/stars-filter/{type}', [MainController::class, 'stars_filter']);
Route::match(['get', 'post'],'/event-filter', [MainController::class, 'event_filter']);

Route::match(['get', 'post'],'/save-dimensional-answers', [QuestionsController::class, 'save_dimensional_answers']);
Route::match(['get', 'post'],'/enter-access-code', [UserController::class, 'enter_access_code'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::match(['get', 'post'],'/comparison-request', [ComparisonController::class, 'comparison_request'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/accept-comparison-request/{id}', [ComparisonController::class, 'accept_comparison_request'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/reject-comparison-request/{id}', [ComparisonController::class, 'reject_comparison_request'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/compare-results/{id}', [ComparisonController::class, 'compare_results'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::get('/new-dashboard', [MainController::class, 'newDashboard']);
Route::get('/comparison-page', function () {
    return view('comparison.compare_results');
});

Route::get('/careers-inner-page-1', function () {
    return view('careers.inner_page_1');
});

Route::get('/careers-inner-page-2', function () {
    return view('careers.inner_page_2');
});

Route::get('/profile-new', function () {
    return view('profile');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/events-new', function () {
    return view('events_new');
});

Route::get('/contact-form', function () {
    return view('contact_form');
});

Route::get('/dashboard-new', function () {
    return view('dashboard.dashboard-new');
});


Route::get('/intro-extro', function () {
    return view('new_pages.intro_extro');
});

Route::get('/skill-report', function () {
    return view('new_pages.skill_report');
});

Route::get('/content', function () {
    return view('new_pages.content');
});


Route::match(['get', 'post'],'/skill-test/{question}', [SkillTestController::class, 'skill_test'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/save-skill-test-answers', [SkillTestController::class, 'save_skill_test_answers'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::match(['get', 'post'],'/introvert-extrovert-question/{question}', [IntrovertExtrovertQuestionController::class, 'introvert_extrovert_question'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/save-introvert-extrovert-answers', [IntrovertExtrovertQuestionController::class, 'save_introvert_extrovert_answers'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');


Route::match(['get', 'post'],'/careers', [MainController::class, 'careers'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');

Route::match(['get', 'post'],'/careers-inner', [MainController::class, 'careers_inner'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');
Route::match(['get', 'post'],'/billing', [MainController::class, 'billing'])->middleware('authCustomer')->middleware('AuthQuestionAnswered');



Route::match(['get', 'post'], '/reset-questions', [QuestionsController::class, 'reset_questions']);
Route::match(['get', 'post'], '/introvert-or-extrovert', [MainController::class, 'introvert_or_extrovert']);
Route::match(['get', 'post'], '/skill-assestment', [MainController::class, 'skill_assestment']);

Route::match(['get', 'post'], '/report/{type}', [MainController::class, 'report']);


// Route::get('/report', function () {
//     return view('report.report');
// });

Route::get('/report-error/{type}', function () {
    return view('report.report-error');
});

Route::match(['get', 'post'], '/download-report', [MainController::class, 'download_report']);