<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\AdminDetails;
use App\Models\CustomerDetails;
use App\Models\Orders;
use App\Models\Events;
use App\Models\AccessCodes;
use App\Models\Ads;
use App\Models\ProfileTypes;
use App\Models\BrainCodeResults;
use App\Models\DimensionQuestions;
use App\Models\Questions;
use App\Models\StarRatings;
use App\Models\VideoTips;


use File;
use Mail;
use Image;
use PDF;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        if($request->isMethod('get')){
            return view('admin::login');
         }
         if($request->isMethod('post')){
            $this->validate($request, [
                'email'   => 'required',
                'password'  => 'required'
               ]);

               $user_data = array(
                'email'  => $request->get('email'),
                'status'  => "active",
                'user_role'  => 1,
                'password' => $request->get('password')
               );

               if(Auth::attempt($user_data))
               {
                return redirect('admin/dashboard');
               }
               else
               {
                return back()->with('fail', 'Wrong Login Details');
               }
         }
    }
    public function dashboard()
    {
        return view('admin::dashboard');
    }
    public function add_admin(Request $request)
    { if($request->isMethod('get')){
        return view('admin::add_admin');
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'name'   => 'required',
            'phone'   => 'required',
            'email'   => 'required | email | unique:users',
            "password" => "required | confirmed | min:6",
           ]);

           DB::beginTransaction();
           $user = User::create([
              "email" => $request->email,
              "password" => Hash::make($request->password),
              "user_role" => 1,
              "status" => "active"
           ]);

           $userDetails = new AdminDetails();
           $userDetails->user_id =$user->id;
           $userDetails->name = $request->name;
           $userDetails->phone = $request->phone;
           $userDetails->save();
           DB::commit();
            return back()->with('success', 'Admin Successfully Added');

    }

    }
    public function admins()
    {
        $admins = User::where('user_role','1')->get();
        return view('admin::admins',['admins' => $admins]);
    }
    public function deactivate_admin($id){
        $user = User::find($id);
        $user->status = "inactive";
        $user->update();
        return back()->with('success', 'Admin Deactivated');

    }
    public function activate_admin($id){
        $user = User::find($id);
        $user->status = "active";
        $user->update();
        return back()->with('success', 'Admin Activated');

    }

    public function edit_admin($id,Request $request)
    {
    if($request->isMethod('get')){
    $login_details = User::where('id',$id)->get();
    $other_details = AdminDetails::where('user_id',$id)->get();
    return view('admin::edit_admin', ['login_details' => $login_details,'other_details' => $other_details]);
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'name'   => 'required',
            'email'   => 'required',
            'phone'  => 'required',
    ]);

    if(!$request->current_password == null || !$request->password == null || !$request->password_confirmation == null){
        $this->validate($request, [
            "password" => "required | confirmed | min:6",
            "current_password" => "required",
           ]);
           if (Hash::check($request->input('current_password'), User::where('id', $id)->value('password'))) {
            if(User::where("id", "=", $id)->where("email", "=", $request->email)->exists()){
                $email = $request->email;
            }
            elseif(User::where("email", "=", $request->email)->exists()){
             return back()->with('fail', 'This email is already in use');
            }
            else{
             $email = $request->email;
            }

            $userDetails =  AdminDetails::where('user_id', '=', $id)->first();;
            $userDetails->name = $request->name;
            $userDetails->phone = $request->phone;
            $userDetails->update();
            $user = User::find($id);
            $user->email = $email;
            $user->password = Hash::make($request->input('password'));
            $user->update();
            return back()->with('success', 'Admin Details Successfully  Updated');
           }
           else{
            return back()->with('fail', 'Current password is incorrect.');
        }
    }
    else{
        if(User::where("id", "=", $id)->where("email", "=", $request->email)->exists()){
            $email = $request->email;
        }
        elseif(User::where("email", "=", $request->email)->exists()){
         return back()->with('fail', 'This email is already in use');
        }
        else{
         $email = $request->email;
        }

        $userDetails =  AdminDetails::where('user_id', '=', $id)->first();;
        $userDetails->name = $request->name;
        $userDetails->phone = $request->phone;
        $userDetails->update();
        $user = User::find($id);
        $user->email = $email;
        $user->update();
        return back()->with('success', 'Admin Details Successfully  Updated');
    }


    }

    }

    public function events()
    {
        $events = Events::get();
        return view('admin::events',['events' => $events]);
    }
    public function add_event(Request $request)
    { if($request->isMethod('get')){
        return view('admin::add_event');
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'name'   => 'required',
            'date'   => 'required',
            'start_time'   => 'required',
            "end_time" => "required",
           ]);

           if($request->featured_image == null){
            $imag_name =  null;
            }
            else{
            $imag_name = time().'-featured-.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('db_files/events/featured'), $imag_name);
            }

           $event = new Events();
           $event->name =$request->name;
           $event->date = $request->date;
           $event->start_time = $request->start_time;
           $event->end_time = $request->end_time;
           $event->event_type = $request->event_type;
           $event->featured_image = $imag_name;
           $event->description = $request->description;
           $event->status = "active";
           $event->save();

        return back()->with('success', 'Event Created');

    }

    }
    public function deactivate_event($id){
        $event = Events::find($id);
        $event->status = "inactive";
        $event->update();
        return back()->with('success', 'Event Deactivated');

    }
    public function activate_event($id){
        $event = Events::find($id);
        $event->status = "active";
        $event->update();
        return back()->with('success', 'Event Activated');

    }
    public function edit_event($id,Request $request)
    { if($request->isMethod('get')){
        $event_details = Events::where('id',$id)->first();
        return view('admin::edit_event', ['event_details' => $event_details]);
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'name'   => 'required',
            'date'   => 'required',
            'start_time'   => 'required',
            "end_time" => "required",
           ]);

           if($request->featured_image == null){
            $imag_name =  Events::where('id',$id)->value('featured_image');
            }
            else{
            $imag_name = time().'-featured-.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('db_files/events/featured'), $imag_name);
            }

           $event = Events::where('id',$id)->first();
           $event->name =$request->name;
           $event->date = $request->date;
           $event->start_time = $request->start_time;
           $event->end_time = $request->end_time;
           $event->event_type = $request->event_type;
           $event->featured_image = $imag_name;
           $event->description = $request->description;
           $event->update();

        return back()->with('success', 'Event Updated');

    }

    }
    public function access_codes()
    {
        $codes = AccessCodes::where('status', 'active')->get();
        return view('admin::access_codes',['codes' => $codes]);
    }
    public function create_access_codes(Request $request)
    { if($request->isMethod('get')){
        return view('admin::create_access_codes');
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'package'   => 'required',
            'codes_count'   => 'required',
           ]);

        $codesCount = $request->codes_count;

        for ($i = 0; $i < $codesCount; $i++) {
            $code = $this->generateUniqueCode();

            $new_code = new AccessCodes();
            $new_code->package =$request->package;
            $new_code->code = $code;
            $new_code->status = "active";
            $new_code->save();
        }

        return redirect('admin/access-codes')->with('success', 'Access Codes Created');

    }

    }
    
    private function generateUniqueCode()
    {
    do {
        $code = strtoupper(Str::random(6));
    } while (AccessCodes::where('code', $code)->exists());

    return $code;
    }

    public function ads()
    {
        $ads = Ads::get();
        return view('admin::ads',['ads' => $ads]);
    }
    public function add_ad(Request $request)
    { if($request->isMethod('get')){
        return view('admin::add_ad');
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'title'   => 'required',
            'link'   => 'required',
            'featured_image'   => 'required',
           ]);

        $imag_name = time().'-featured-.'.$request->featured_image->extension();
        $request->featured_image->move(public_path('db_files/ads/featured'), $imag_name);


           $ad = new Ads();
           $ad->title =$request->title;
           $ad->link = $request->link;
           $ad->featured_image = $imag_name;
           $ad->status = "active";
           $ad->save();

        return back()->with('success', 'Ad Created');

    }

    }

    public function deactivate_ad($id){
        $ad = Ads::find($id);
        $ad->status = "inactive";
        $ad->update();
        return back()->with('success', 'Ad Deactivated');

    }
    public function activate_ad($id){
        $ad = Ads::find($id);
        $ad->status = "active";
        $ad->update();
        return back()->with('success', 'Ad Activated');

    }
    public function edit_ad($id,Request $request)
    { if($request->isMethod('get')){
        $ad_details = Ads::where('id',$id)->first();
        return view('admin::edit_ad', ['ad_details' => $ad_details]);
    }
    if($request->isMethod('post')){
        $this->validate($request, [
            'title'   => 'required',
            'link'   => 'required',
           ]);

           if($request->featured_image == null){
            $imag_name =  Ads::where('id',$id)->value('featured_image');
            }
            else{
            $imag_name = time().'-featured-.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('db_files/ads/featured'), $imag_name);
            }

           $ad = Ads::where('id',$id)->first();
           $ad->title =$request->title;
           $ad->link = $request->link;
           $ad->featured_image = $imag_name;
           $ad->update();

        return back()->with('success', 'Ad Updated');

    }

    }
    public function brain_profiles()
    {
        $profiles = ProfileTypes::get();
        return view('admin::brain_profiles',['profiles' => $profiles]);
    }
    public function edit_brain_profile($id,Request $request)
    { 
    if($request->isMethod('get')){
        $brain_details = ProfileTypes::where('id',$id)->first();
        return view('admin::edit_brain_profile', ['brain_details' => $brain_details]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'code'   => 'required',
            'name'   => 'required',
        ]);
        
        $brain = ProfileTypes::where('id',$id)->first();
        $brain->code =$request->code;
        $brain->name = $request->name;
        $brain->update();

        return back()->with('success', 'Brain Profile Updated');

    }

    }
    public function brain_code_results()
    {
        $results = BrainCodeResults::get();
        return view('admin::brain_code_results',['results' => $results]);
    }
    public function edit_brain_code_results($id,Request $request)
    { 
    if($request->isMethod('get')){
        $result_details = BrainCodeResults::where('id',$id)->first();
        return view('admin::edit_brain_code_results', ['result_details' => $result_details]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'description'   => 'required',
        ]);
        
        $result = BrainCodeResults::where('id',$id)->first();
        $result->description =$request->description;
        $result->update();

        return back()->with('success', 'Brain Result Updated');

    }

    }
    public function dimension_questions()
    {
        $questions = DimensionQuestions::get();
        return view('admin::dimension_questions',['questions' => $questions]);
    }
    public function edit_dimension_question($id,Request $request)
    { 
    if($request->isMethod('get')){
        $question_details = DimensionQuestions::where('id',$id)->first();
        return view('admin::edit_dimension_question', ['question_details' => $question_details]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'question'   => 'required',
            'l1_analyst_answer'   => 'required',
            'l1_realist_answer'   => 'required',
            'l2_stalwart_answer'   => 'required',
            'l2_organizer_answer'   => 'required',
            'r1_strategist_answer'   => 'required',
            'r1_imagineer_answer'   => 'required',
            'r2_empathizer_answer'   => 'required',
            'r2_empathizer_answer'   => 'required'
        ]);
        
        $q = DimensionQuestions::where('id',$id)->first();
        $q->question =$request->question;
        $q->l1_analyst_answer =$request->l1_analyst_answer;
        $q->l1_realist_answer =$request->l1_realist_answer;
        $q->l2_stalwart_answer =$request->l2_stalwart_answer;
        $q->l2_organizer_answer =$request->l2_organizer_answer;
        $q->r1_strategist_answer =$request->r1_strategist_answer;
        $q->r1_imagineer_answer =$request->r1_imagineer_answer;
        $q->r2_empathizer_answer =$request->r2_empathizer_answer;
        $q->r2_empathizer_answer =$request->r2_empathizer_answer;
        $q->update();

        return back()->with('success', 'Dimension Question Updated');

    }

    }
    public function normal_questions()
    {
        $questions = Questions::get();
        return view('admin::normal_questions',['questions' => $questions]);
    }

    public function edit_normal_question($id,Request $request)
    { 
    if($request->isMethod('get')){
        $question_details = Questions::where('id',$id)->first();
        return view('admin::edit_normal_question', ['question_details' => $question_details]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'question'   => 'required',
            'l1_answer'   => 'required',
            'l2_answer'   => 'required',
            'r1_answer'   => 'required',
            'r2_answer'   => 'required',
        ]);
        
        $q = Questions::where('id',$id)->first();
        $q->question =$request->question;
        $q->answer_1 =$request->l1_answer;
        $q->answer_2 =$request->l2_answer;
        $q->answer_3 =$request->r1_answer;
        $q->answer_4 =$request->r2_answer;
        $q->update();

        return back()->with('success', 'Normal Question Updated');

    }

    }
    public function star_ratings()
    {
        $ratings = StarRatings::get();
        return view('admin::star_ratings',['ratings' => $ratings]);
    }
    public function add_star_rating(Request $request)
    { if($request->isMethod('get')){
        $profiles = ProfileTypes::get();
        return view('admin::add_star_rating',['profiles' => $profiles]);
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'brain_profile'   => 'required',
            'category'   => 'required',
            'title'   => 'required',
            'rating'   => 'required',
           ]);


           $star = new StarRatings();
           $star->brain_profile_id =$request->brain_profile;
           $star->category = $request->category;
           $star->title = $request->title;
           $star->rating = $request->rating;
           $star->description = $request->description;
           $star->save();

        return back()->with('success', 'Star Rating Created');

    }

    }
    public function edit_star_rating($id,Request $request)
    { 
    if($request->isMethod('get')){
        $rating_details = StarRatings::where('id',$id)->first();
        $profiles = ProfileTypes::get();
        return view('admin::edit_star_rating', ['rating_details' => $rating_details,'profiles' => $profiles]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'brain_profile'   => 'required',
            'category'   => 'required',
            'title'   => 'required',
            'rating'   => 'required',
           ]);
        
        $star = StarRatings::where('id',$id)->first();
        $star->brain_profile_id =$request->brain_profile;
        $star->category = $request->category;
        $star->title = $request->title;
        $star->rating = $request->rating;
        $star->description = $request->description;
        $star->update();

        return back()->with('success', 'Star Rating Updated');

    }

    }
    public function video_tips()
    {
        $tips = VideoTips::get();
        return view('admin::video_tips',['tips' => $tips]);
    }
    public function add_video_tip(Request $request)
    { if($request->isMethod('get')){
        $profiles = ProfileTypes::get();
        return view('admin::add_video_tip',['profiles' => $profiles]);
    }
    if($request->isMethod('post')){
    $this->validate($request, [
            'brain_profile'   => 'required',
            'category'   => 'required',
            'title'   => 'required',
            'video'   => 'required',
            'featured_image'   => 'required',
           ]);

           $imag_name = time().'-featured-.'.$request->featured_image->extension();
           $request->featured_image->move(public_path('db_files/tips/featured'), $imag_name);

           $tip = new VideoTips();
           $tip->brain_profile_id =$request->brain_profile;
           $tip->category = $request->category;
           $tip->title = $request->title;
           $tip->video = $request->video;
           $tip->featured_image = $imag_name;
           $tip->description = $request->description;
           $tip->save();

        return back()->with('success', 'Star Rating Created');

    }

    }
    public function edit_video_tip($id,Request $request)
    { 
    if($request->isMethod('get')){
        $tip_details = VideoTips::where('id',$id)->first();
        $profiles = ProfileTypes::get();
        return view('admin::edit_video_tip', ['tip_details' => $tip_details,'profiles' => $profiles]);
    }
    if($request->isMethod('post')){

        $this->validate($request, [
            'brain_profile'   => 'required',
            'category'   => 'required',
            'title'   => 'required',
            'video'   => 'required'
           ]);
       
           if($request->featured_image == null){
            $imag_name =  VideoTips::where('id',$id)->value('featured_image');
            }
            else{
            $imag_name = time().'-featured-.'.$request->featured_image->extension();
            $request->featured_image->move(public_path('db_files/tips/featured'), $imag_name);
            }


        $tip = VideoTips::where('id',$id)->first();
        $tip->brain_profile_id =$request->brain_profile;
        $tip->category = $request->category;
        $tip->title = $request->title;
        $tip->video = $request->video;
        $tip->featured_image = $imag_name;
        $tip->description = $request->description;
        $tip->update();

        return back()->with('success', 'Star Rating Updated');

    }

    }
    function logout()
    {
     Auth::logout();
     return redirect('admin');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
