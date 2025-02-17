<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Carbon\Carbon;

use File;
use Mail;
use PDF;
use Image;
use Redirect;
use Session;

use App\Models\User;
use App\Models\WPUsers;
use App\Models\Questions;
use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use App\Models\CustomerDetails;
use App\Models\BrainScores;
use App\Models\Events;
use App\Models\StarRatings;
use App\Models\VideoTips;

use App\Http\Controllers\BrainResultsController;

class MainController extends Controller
{
    public function index(){



        return view('home');
    }
    public function packages(){

        return view('dashboard/packages');
    }
    public function dashboard(){
        $events_data = Events::where('status', 'active')->get();
        $brain_profile_id = WPUsers::where('user_id', session('user_details')['id'])->value('brain_profile_id');
        $management_tips = VideoTips::where('category', "management")->where('brain_profile_id', $brain_profile_id)->get();
        $sport_tips = VideoTips::where('category', "sport")->where('brain_profile_id', $brain_profile_id)->get();
        $creative_tips = VideoTips::where('category', "creative-thinking")->where('brain_profile_id', $brain_profile_id)->get();
        $self_tips = VideoTips::where('category', "self-learning")->where('brain_profile_id', $brain_profile_id)->get();
        $events = [];
        foreach ($events_data as $event) {
            $start_date_time = $event->date . ' ' . $event->start_time;
            $end_date_time = $event->date . ' ' . $event->end_time;

            $final_start_date = Carbon::createFromFormat('Y-m-d H:i:s', $start_date_time);
            $final_end_date = Carbon::createFromFormat('Y-m-d H:i:s', $end_date_time);

            $events[] = [
                'title' => $event->name,
                'start' =>  $final_start_date,
                'end' => $final_end_date,
                'url' => url('events/'.$event->slug.'')
            ];
        }
        return view('dashboard/dashboard',['events' => $events,'management_tips' => $management_tips,'sport_tips' => $sport_tips,
        'creative_tips' => $creative_tips,'self_tips' => $self_tips]);
    }
    public function tips(){
        
        $brain_profile_id = WPUsers::where('user_id', session('user_details')['id'])->value('brain_profile_id');
        $management_tips = VideoTips::where('category', "management")->where('brain_profile_id', $brain_profile_id)->get();
        $sport_tips = VideoTips::where('category', "sport")->where('brain_profile_id', $brain_profile_id)->get();
        $creative_tips = VideoTips::where('category', "creative-thinking")->where('brain_profile_id', $brain_profile_id)->get();
        $self_tips = VideoTips::where('category', "self-learning")->where('brain_profile_id', $brain_profile_id)->get();
        
        return view('dashboard/tips',['management_tips' => $management_tips,'sport_tips' => $sport_tips,
        'creative_tips' => $creative_tips,'self_tips' => $self_tips]);

    }

    public function consultationBooking(){

        return view('dashboard/consultation-booking');
    }

    public function multitasking(){
        return view('dashboard/multi-tasking');
        
    }

    public function multitaskinginner(){
        return view('dashboard/multi-task-inner');
        
    }
    public function internships(){
         $brain_profile_id = WPUsers::where('user_id', session('user_details')['id'])->value('brain_profile_id');
        $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'internships')->get();
        return view('dashboard/internships',['star_ratings' => $star_ratings]);
    }
    public function scholarships(){
        $brain_profile_id = WPUsers::where('user_id', session('user_details')['id'])->value('brain_profile_id');
        $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'scholarships')->get();
        return view('dashboard/scholarships',['star_ratings' => $star_ratings]);
    }
    public function universityPrograms(){
        $brain_profile_id = WPUsers::where('user_id', session('user_details')['id'])->value('brain_profile_id');
        $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'university-programs')->get();
        return view('dashboard/university-programs',['star_ratings' => $star_ratings]);

    }
    public function testAttempt(){

        $attempts = QuestionAnswerMain::where("user_id", session('user_id'))->where('status', 'complete')->get();
        return view('dashboard/test-attempt',['attempts' => $attempts]);

    }
    
    public function testAttempt_2(){
    $dob = session('user_dob'); 
    $age = \Carbon\Carbon::parse($dob)->age;

    // if($age < 14) {
    //     return view('dashboard/test-attempt-1');
    // } 
    // elseif($age >= 14 && $age < 20) {
    //     return view('dashboard/test-attempt-2');
    // } 
    // else {  
    //     return view('dashboard/test-attempt-3');
    // }
     
    $attempts = QuestionAnswerMain::where("user_id", session('user_id'))->where('status', 'complete')->get();

    return view('dashboard/test-attempt-2',['attempts' => $attempts]);
    
    
    
}

    
    
    public function suparFutureClub(){

        return view('dashboard/supar-future-club');
    }

    public function events(){
        $events = Events::where('status', 'active')->get();
        return view('dashboard/event',['events' => $events]);
    }
    public function parentCommunity(Request $request){
        if ($request->isMethod('get')) {
         return view('dashboard/parent-community');
        }
        if ($request->isMethod('post')) {
         return back()->with('success', 'Your message has been sent');
        }
       
    }
    public function tipInner($id,Request $request){
        $tip_details = VideoTips::where('id', $id)->first();
        $other_tips = VideoTips::where('category', $tip_details->category)->get();
        return view('dashboard/tip-inner',['tip_details' => $tip_details,'other_tips' => $other_tips]);
    }
    public function uniInner($id,Request $request){
        $uni_details = StarRatings::where('id', $id)->first();
        return view('dashboard/university-inner',['uni_details' => $uni_details]);
    }
    public function internInner($id,Request $request){

        $internship_details = StarRatings::where('id', $id)->first();
        return view('dashboard/internship-inner',['internship_details' => $internship_details]);

    }
    public function scholarshipInner($id,Request $request){

        $scholar_details = StarRatings::where('id', $id)->first();
        return view('dashboard/scholarship-inner',['scholar_details' => $scholar_details]);
 
    }
    public function superFutureInner(){

        return view('dashboard/super-futer-inner');
    }
    public function consultStepTwo(){

        return view('dashboard/consultation-booking-step-2');
    }
    public function searchBuddy(){

        return view('dashboard/search-buddy');
    }
    public function jobs(){

        return view('dashboard/jobs');
    }
    public function jobsInner(){

        return view('dashboard/jobs-inner');
    }

    public function aboutus(){

        return view('aboutus');
    }

    public function blogs(){

        return view('blogs');
    }

    public function braintour(){

        return view('braintour');
    }

    public function bloginner(){

        return view('bloginner');
    }

    public function ourmarketplace(){

        return view('ourmarketplace');
    }

    public function marketplaceinner(){

        return view('marketplaceinner');
    }

    public function homeevents(){

        return view('homeevents');
    }

    public function homeeventsinner($slug){

        $event_details = Events::where('slug', $slug)->first();
        return view('homeeventsinner',['event_details' => $event_details]);

    }


    public function swetaadatia(){

        return view('swetaadatia');
    }

    public function hussain(){

        return view('hussain');
    }

    public function partneredconsultant(){

        return view('partneredconsultant');
    }


    
    public function download_brain_results(Request $request)
    {
        if(QuestionAnswerMain::where("user_id",session('user_id'))->where('status', 'complete')->exists()){
            $answer_main_id = QuestionAnswerMain::where("user_id",session('user_id'))->where('status', 'complete')->value('id');
            $brain_score = BrainScores::where("answer_main_id", $answer_main_id)->first();
            $contact_details = CustomerDetails::where("user_id", session('user_id'))->first();
            $user_details = User::where("id", session('user_id'))->first();
    
            $pdf = PDF::loadView('pdfs.brain_results',['brain_score' => $brain_score,'contact_details' => $contact_details,'user_details' => $user_details]);
            return $pdf->download('brain_results_'.session('user_id').'.pdf');
        }
        else{
            return redirect('questions/q1');
        }
       
    }
    public function stars_filter($type,Request $request){
         $brain_profile_id = WPUsers::where('user_id', session('user_details')['id'])->value('brain_profile_id');
       if($type == "internships"){
        if($request->stars == "all"){
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'internships')->get();
        }
        else{
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'internships')->where('rating', $request->stars)->get();
        }
        $data = '';
        if($star_ratings->isEmpty()){
            $data .= 'No data avilable';
            
        }
        else{
            foreach ($star_ratings as $star_rating) {
                $data .= '<div class="d-flex flex-column mt-3 mb-3">
    
                <div class="d-flex w-100 d-flex justify-content-between">
                    <h3 class="section-title2  text-purple" style="font-weight: 500 !important">
                        '.$star_rating->title.'
                    </h3>
                    <span class="rating-stars">';
    
                    for ($i = 0; $i < 5; $i++){
                    if ($i < $star_rating->rating){
                    $data .= '<i class="bi bi-star-fill"></i>';
                    }
                    else{
                    $data .= '<i class="bi bi-star"></i>';
                    }
                    }
                     $data .= '</span>
                </div>
                <p class="section-description-intentship mt-1 pe-lg-5">
                '.$star_rating->description.'
                </p>
                <div class="d-flex w-100 d-flex justify-content-end">
                    <a href="'.url('view-internship/'.$star_rating->id).'" class="see-more-link">See more</a>
                </div>
            </div>';
            }
        }
       }
       else if($type == "scholarships"){
        if($request->stars == "all"){
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'scholarships')->get();
        }
        else{
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'scholarships')->where('rating', $request->stars)->get();
        }
        $data = '';
        if($star_ratings->isEmpty()){
            $data .= 'No data avilable';
            
        }
        else{
            foreach ($star_ratings as $star_rating) {
                $data .= '<div class="d-flex flex-column mt-3 mb-3">
    
                <div class="d-flex w-100 d-flex justify-content-between">
                    <h3 class="section-title2  text-purple" style="font-weight: 500 !important">
                        '.$star_rating->title.'
                    </h3>
                    <span class="rating-stars">';
    
                    for ($i = 0; $i < 5; $i++){
                    if ($i < $star_rating->rating){
                    $data .= '<i class="bi bi-star-fill"></i>';
                    }
                    else{
                    $data .= '<i class="bi bi-star"></i>';
                    }
                    }
                     $data .= '</span>
                </div>
                <p class="section-description-intentship mt-1 pe-lg-5">
                '.$star_rating->description.'
                </p>
                <div class="d-flex w-100 d-flex justify-content-end">
                    <a href="'.url('view-scholarship/'.$star_rating->id).'" class="see-more-link">See more</a>
                </div>
            </div>';
            }
        }
       }
       else{
          
        if($request->stars == "all"){
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'university-programs')->get();
        }
        else{
            $star_ratings = StarRatings::where('brain_profile_id', $brain_profile_id)->where('category', 'university-programs')->where('rating', $request->stars)->get();
        }
        $data = '';
        if($star_ratings->isEmpty()){
            $data .= 'No data avilable';
            
        }
        else{
            foreach ($star_ratings as $star_rating) {
                $data .= '<div class="d-flex flex-column mt-3 mb-3">
    
                <div class="d-flex w-100 d-flex justify-content-between">
                    <h3 class="section-title2  text-purple" style="font-weight: 500 !important">
                        '.$star_rating->title.'
                    </h3>
                    <span class="rating-stars">';
    
                    for ($i = 0; $i < 5; $i++){
                    if ($i < $star_rating->rating){
                    $data .= '<i class="bi bi-star-fill"></i>';
                    }
                    else{
                    $data .= '<i class="bi bi-star"></i>';
                    }
                    }
                     $data .= '</span>
                </div>
                <p class="section-description-intentship mt-1 pe-lg-5">
                '.$star_rating->description.'
                </p>
                <div class="d-flex w-100 d-flex justify-content-end">
                    <a href="'.url('view-university/'.$star_rating->id).'" class="see-more-link">See more</a>
                </div>
            </div>';
            }
        }
       }
       echo json_encode(array("status"=> "success","data"=> $data));
    }
    
    public function event_filter(Request $request){

        if($request->type == "all"){
            $events = Events::where('status', 'active')->get();
        }
        else{
            $events = Events::where('status', 'active')->where('event_type', $request->type)->get();
        }
        $data = '';
        if($events->isEmpty()){
            $data .= 'No data avilable';
            
        }
        else{
            foreach ($events as $event) {
                $data .= ' <div class="col p-2">
                    <div class="eventcard p-3">
                        <div class="eventImgWrapper">
                            <a href="'.url('event/'.$event->slug).'"><img src="'.asset('db_files/events/featured/'.$event->featured_image).'" class="w-100 eventImage"
                                style="border-radius: 10px"></a>
                        </div>
                        <a href="'.url('event/'.$event->slug).'"><p class="yellow-text-lg mt-3 px-2" style="font-weight: 700">
                           '.$event->name.'
                        </p></a>
                        <p class="white-text-lg  px-2">'.$event->short_description.'</p>
                        <div class="d-flex justify-content-between px-2 pt-5">
                            <p class="eventDateTime">'.$event->date.'</p>
                            <p class="eventDateTime">'.$event->start_time.' - '.$event->end_time.'</p>
                        </div>
                    </div>
                </div>';
            }
        }
       
       
       echo json_encode(array("status"=> "success","data"=> $data));
    }
    
    public function basic_report_template(){

        return view('report_templates/basic_report_template');
    }
    
    public function newDashboard()
{
    return view('new-dashboard');
}
  
}
