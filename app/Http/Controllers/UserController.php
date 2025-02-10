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
use Illuminate\Support\Facades\Http;
use File;
use Mail;
use PDF;
use Image;
use Redirect;
use Session;

use App\Models\User;
use App\Models\Questions;
use App\Models\DimensionQuestions;
use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use App\Models\CustomerDetails;
use App\Models\BrainScores;
use App\Models\DimensionalQuestionAnswerMain;
use App\Models\DimensionalQuestionAnswers;
use App\Models\AccessCodes;
use App\Models\WPUsers;

use App\Http\Controllers\BrainResultsController;

class UserController extends Controller
{
//     public function sign_in(Request $request) {

//     if ($request->isMethod('get')) {
//         return view('user/sign_in');
//     }

//     if ($request->isMethod('post')) {
       
//         $this->validate($request, [
//             'user_name' => 'required',
//             'password'  => 'required',
//         ]);

        
//         $firstUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/get_nonce/?controller=user&method=generate_auth_cookie';
//         $firstResponse = $this->performCurlRequest($firstUrl);
        
//         if ($firstResponse) {
//             $res2_data = json_decode($firstResponse, true);

            
//             $secondUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/user/generate_auth_cookie/';
//             $secondUrlWithParams = $secondUrl . '?' . http_build_query([
//                 'username' => $request->user_name,
//                 'password' => $request->password,
//                 'nonce'    => $res2_data['nonce'],
//             ]);

//             $secondResponse = $this->performCurlRequest($secondUrlWithParams);

//             if ($secondResponse) {
//                 $data = json_decode($secondResponse, true);

//                 if ($data['status'] === 'ok') {
                  
//                     session(['user_id' => $data['user']['id']]);
//                     session(['user_details' => $data['user']]);
//                     $auth_cookie = $data['cookie']; 
//                     session(['auth_cookie' => $auth_cookie]);
                    
//                     $userId = $data['user']['id'];
//                     $metaUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/user/get_user_meta/';
//                     $metaUrlWithParams = $metaUrl . '?' . http_build_query([
//                         'user_id' => $userId,
//                         'meta_key' => 'dob',
//                         'cookie' => session('auth_cookie')
//                     ]);
                    
//                     $metaResponse = $this->performCurlRequest($metaUrlWithParams);
                    
//                   if ($metaResponse) {
//                         $metaData = json_decode($metaResponse, true);
                    
                    
//                         if (isset($metaData['dob']) && is_array($metaData['dob'])) {
//                             $dob = $metaData['dob'][0];
                            
//                             session(['user_dob' => $dob]);
//                         }
//                     }
//                   // return var_dump(session('user_dob'));
                    
//                     if (session('answer_main_id')) {
//                         if (QuestionAnswerMain::where("user_id", session('user_id'))->exists()) {
//                             QuestionAnswerMain::where("id", session('answer_main_id'))->delete();
//                             QuestionAnswers::where("answer_main_id", session('answer_main_id'))->delete();
//                             $request->session()->forget(['answer_main_id']);
//                         } else {
//                             $QuestionAnswerMain = QuestionAnswerMain::where('id', session('answer_main_id'))->first();
//                             if ($QuestionAnswerMain) {
//                                 $QuestionAnswerMain->user_id = session('user_id');
//                                 $QuestionAnswerMain->update();

//                                 $BrainResultsController = new BrainResultsController();
//                                 $BrainResultsController->add_brain_results(session('answer_main_id'));

//                                 $request->session()->forget(['answer_main_id']);
//                             }
//                         }
//                     }

                  
//                     if (session('d_answer_main_id')) {
//                         $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();
                        
//                         if ($DimensionalQuestionAnswerMain) {
//                             $DimensionalQuestionAnswerMain->user_id = session('user_id');
//                             $DimensionalQuestionAnswerMain->update();

//                             $BrainResultsController = new BrainResultsController();
//                             $BrainResultsController->add_dimensional_brain_results(session('d_answer_main_id'));

//                             $request->session()->forget(['d_answer_main_id']);
//                         }
//                     }

//                     // Redirect based on brain_profile_id
//                     if (WPUsers::where('user_id', session('user_id'))->value('brain_profile_id') == null) {
//                         return redirect('intro');
//                     } else {
//                         return redirect('dashboard');
//                     }

//                 } else {
//                     return back()->with('fail', $data['error']);
//                 }
//             }
//         }
//     }
// }


public function sign_in(Request $request)
{
    if ($request->isMethod('get')) {
        return view('user/sign_in');
    }

    if ($request->isMethod('post')) {
        $this->validate($request, [
            'user_name' => 'required',
            'password'  => 'required',
        ]);


        $payload = [
            'username' => $request->user_name,
            'password' => $request->password,
        ];

        $response = $this->performCurlRequest('https://dev.zebra-brain.com/wp-json/custom/v1/login', true, $payload);

        if ($response && isset($response['status']) && $response['status'] === 'success') {

            $user_id = $response['user_id'];
            session(['user_id' => $user_id]);
            
            
            $url = 'https://dev.zebra-brain.com/wp-json/custom/v1/user?user_id='.$user_id.'';
            $response2 = $this->performCurlRequest($url);
            
            
            if ($response2 && isset($response2['status']) && $response2['status'] === 'success') {
                $userData = $response2['data'] ?? null;
                  if ($userData) {
                        session(['user_details' => $userData]);
                        session(['user_dob' => $userData['date_of_birth']]);
 
                    }
            }
            else {
            $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
            return back()->with('fail', $errorMessage);
            }

            if (session('answer_main_id')) {
                if (QuestionAnswerMain::where("user_id", session('user_id'))->exists()) {
                    QuestionAnswerMain::where("id", session('answer_main_id'))->delete();
                    QuestionAnswers::where("answer_main_id", session('answer_main_id'))->delete();
                    $request->session()->forget(['answer_main_id']);
                } else {
                    $QuestionAnswerMain = QuestionAnswerMain::where('id', session('answer_main_id'))->first();
                    if ($QuestionAnswerMain) {
                        $QuestionAnswerMain->user_id = session('user_id');
                        $QuestionAnswerMain->update();

                        $BrainResultsController = new BrainResultsController();
                        $BrainResultsController->add_brain_results(session('answer_main_id'));

                        $request->session()->forget(['answer_main_id']);
                    }
                }
            }

            if (session('d_answer_main_id')) {
                $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();

                if ($DimensionalQuestionAnswerMain) {
                    $DimensionalQuestionAnswerMain->user_id = session('user_id');
                    $DimensionalQuestionAnswerMain->update();

                    $BrainResultsController = new BrainResultsController();
                    $BrainResultsController->add_dimensional_brain_results(session('d_answer_main_id'));

                    $request->session()->forget(['d_answer_main_id']);
                }
            }
            
          

            if (WPUsers::where('user_id', session('user_id'))->value('brain_profile_id') == null) {
                return redirect('intro');
            } else {
                return redirect('dashboard');
            }
        } else {

            $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
            return back()->with('fail', $errorMessage);
        }
    }

    return back()->with('fail', 'Invalid request method.');
}



// public function sign_up(Request $request) {
//     if ($request->isMethod('get')) {
//         return view('user/sign_up');
//     }

//     if ($request->isMethod('post')) {
//         $this->validate($request, [
//             'first_name' => 'required',
//             'last_name' => 'required',
//             'user_name' => 'required',
//             'dob' => 'required|date',
//             'email' => 'required|email',
//             'password_confirmation' => 'required',
//             'password' => 'required|confirmed|min:6',
//         ]);

//         $nonce = $this->getNonce();
//         if (!$nonce) {
//             return back()->with('fail', "Unable to get nonce. Please try again later.");
//         }

//         $registration = $this->registerUser($request, $nonce);
//         if (!$registration || $registration['status'] !== 'ok') {
//             return back()->with('fail', $registration['error'] ?? "User registration failed.");
//         }
//         var_dump($registration);

//         $wp_user = new WPUsers();
//         $wp_user->user_id = $registration['user_id'];
//         $wp_user->save();

//         $auth_cookie = $this->generateAuthCookie($request);
//         if (!$auth_cookie || $auth_cookie['status'] !== 'ok') {
//             return back()->with('fail', $auth_cookie['error'] ?? "Unable to generate auth cookie.");
//         }

//         session(['user_id' => $auth_cookie['user']['id']]);
//         session(['user_details' => $auth_cookie['user']]);
//         session(['auth_cookie' => $auth_cookie['cookie']]);
        
//         $userId = $auth_cookie['user']['id'];
//         $metaUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/user/get_user_meta/';
//         $metaUrlWithParams = $metaUrl . '?' . http_build_query([
//             'user_id' => $userId,
//             'meta_key' => 'dob',
//             'cookie' => session('auth_cookie')
//         ]);
        
//         $metaResponse = $this->performCurlRequest($metaUrlWithParams);
        
//       if ($metaResponse) {
//             $metaData = json_decode($metaResponse, true);
        
        
//             if (isset($metaData['dob']) && is_array($metaData['dob'])) {
//                 $dob = $metaData['dob'][0];
                
//                 session(['user_dob' => $dob]);
//             }
//         }

//         $this->handleUserSessions($request);

//         if (WPUsers::where('user_id', session('user_id'))->value('brain_profile_id') == null) {
//             // return redirect('questions/q1');
//             return redirect('intro');
//         } else {
//             return redirect('dashboard');
//         }
//     }
// }


public function sign_up(Request $request) {
    if ($request->isMethod('get')) {
        return view('user/sign_up');
    }

    if ($request->isMethod('post')) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required',
            'dob' => 'required|date',
            'email' => 'required|email',
            'password_confirmation' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $payload = [
            'username' => $request->user_name,
            'email' => $request->email,
            'display_name' => $request->first_name . ' ' . $request->last_name,
            'date_of_birth' => $request->dob,
            'password' => $request->password,
        ];

        $response = $this->performCurlRequest('https://dev.zebra-brain.com/wp-json/custom/v1/register', true, $payload);

        if ($response && isset($response['status']) && $response['status'] === 'success') {
            
            $user_id = $response['user_id'];
            session(['user_id' => $user_id]);
            
            $url = 'https://dev.zebra-brain.com/wp-json/custom/v1/user?user_id='.$user_id.'';
            $response2 = $this->performCurlRequest($url);
            
            
            if ($response2 && isset($response2['status']) && $response2['status'] === 'success') {
                $userData = $response2['data'] ?? null;
                  if ($userData) {
                        session(['user_details' => $userData]);
                        session(['user_dob' => $userData['date_of_birth']]);
 
                    }
            }
            else {
            $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
            return back()->with('fail', $errorMessage);
            }
            
            if (session('answer_main_id')) {
                if (QuestionAnswerMain::where("user_id", session('user_id'))->exists()) {
                    QuestionAnswerMain::where("id", session('answer_main_id'))->delete();
                    QuestionAnswers::where("answer_main_id", session('answer_main_id'))->delete();
                    $request->session()->forget(['answer_main_id']);
                } else {
                    $QuestionAnswerMain = QuestionAnswerMain::where('id', session('answer_main_id'))->first();
                    if ($QuestionAnswerMain) {
                        $QuestionAnswerMain->user_id = session('user_id');
                        $QuestionAnswerMain->update();

                        $BrainResultsController = new BrainResultsController();
                        $BrainResultsController->add_brain_results(session('answer_main_id'));

                        $request->session()->forget(['answer_main_id']);
                    }
                }
            }

            if (session('d_answer_main_id')) {
                $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();

                if ($DimensionalQuestionAnswerMain) {
                    $DimensionalQuestionAnswerMain->user_id = session('user_id');
                    $DimensionalQuestionAnswerMain->update();

                    $BrainResultsController = new BrainResultsController();
                    $BrainResultsController->add_dimensional_brain_results(session('d_answer_main_id'));

                    $request->session()->forget(['d_answer_main_id']);
                }
            }
            
            $dob = session('user_dob'); 
            $age = \Carbon\Carbon::parse($dob)->age;

            $wp_user = new WPUsers();
            $wp_user->user_id = session('user_id');
            $wp_user->email = session('user_details')['email'];
            $wp_user->display_name = session('user_details')['display_name'];
            $wp_user->date_of_birth = session('user_details')['date_of_birth'];
            $wp_user->age = $age;
            $wp_user->save();

            if (WPUsers::where('user_id', session('user_id'))->value('brain_profile_id') == null) {
                return redirect('intro');
            } else {
                return redirect('dashboard');
            }
            
        } else {

            $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
            return back()->with('fail', $errorMessage);
        }
            
    
    }
}
    public function profile(Request $request){
        if ($request->isMethod('get')) {
            // $login_details = User::where('id', Auth::user()->id)->first();
            // $other_details = CustomerDetails::where('user_id', Auth::user()->id)->first();

            // return view('dashboard/profile', ['login_details' => $login_details, 'other_details' => $other_details]);
             return view('dashboard/profile');

        }
        if($request->isMethod('post')){
            
            if ($request->submit_type === 'basic_details') {
            
            $this->validate($request, [
                'name'   => 'required',
                'date_of_birth'   => 'required',
                'email'   => 'required | email',
                'password'   => 'required',
            ]);
            
            $token_payload = [
            'username' => session('user_details')['username'],
            'password' => $request->password,
            ];
            
            
            $token_response = $this->performCurlRequest('https://dev.zebra-brain.com/wp-json/jwt-auth/v1/token', true, $token_payload);
            
            if ($token_response) {
                $token =  $token_response['token'];
                
                $payload = [
                'email' => $request->email,
                'display_name' => $request->name,
                'date_of_birth' => $request->date_of_birth,
                'user_id' => session('user_id'),
                ];
                
        
                $response = $this->performCurlRequest('https://dev.zebra-brain.com/wp-json/custom/v1/update', true, $payload,$token);
        
                if ($response && isset($response['status']) && $response['status'] === 'success') {
                    
                    $url = 'https://dev.zebra-brain.com/wp-json/custom/v1/user?user_id='.session('user_id').'';
                    $response2 = $this->performCurlRequest($url);
                    
                    
                    if ($response2 && isset($response2['status']) && $response2['status'] === 'success') {
                        $userData = $response2['data'] ?? null;
                          if ($userData) {
                                session(['user_details' => $userData]);
                                session(['user_dob' => $userData['date_of_birth']]);
         
                            }
                    }
                    else {
                    $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
                    return back()->with('fail', $errorMessage);
                    }
                    
                    return back()->with('success', 'Profile Updated');
                    
                    $wp_user = WPUsers::where('user_id',session('user_id'))->first();
                    $wp_user->email = session('user_details')['email'];
                    $wp_user->display_name = session('user_details')['display_name'];
                    $wp_user->date_of_birth = session('user_details')['date_of_birth'];
                    $wp_user->update();
                    
                } else {
    
                $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
                return back()->with('fail', $errorMessage);
                }
            }
            else{
                $errorMessage = $response['message'] ?? 'Something went wrong. Please try again.';
                return back()->with('fail', $errorMessage); 
            }
            
            
            }
            if ($request->submit_type === 'change_password') {
                
            $this->validate($request, [
                'current_password' => 'required',
                'password_confirmation' => 'required',
                'password' => 'required|confirmed|min:6',
            ]);
            
             $token_payload = [
            'username' => session('user_details')['username'],
            'password' => $request->current_password
            ];
            
            
            $token_response = $this->performCurlRequest('https://dev.zebra-brain.com/wp-json/jwt-auth/v1/token', true, $token_payload);
            
            if ($token_response) {
                $token =  $token_response['token'];
                
                $payload = [
                'current_password' => $request->current_password,
                'new_password' => $request->password,
                'user_id' => session('user_id'),
                ];
                
        
                $response = $this->performCurlRequest('https://dev.zebra-brain.com/wp-json/custom/v1/change-password', true, $payload,$token);
        
                if ($response && isset($response['status']) && $response['status'] === 'success') {
                    
                    $url = 'https://dev.zebra-brain.com/wp-json/custom/v1/user?user_id='.session('user_id').'';
                    $response2 = $this->performCurlRequest($url);
                    
                    
                    if ($response2 && isset($response2['status']) && $response2['status'] === 'success') {
                        $userData = $response2['data'] ?? null;
                          if ($userData) {
                                session(['user_details' => $userData]);
                                session(['user_dob' => $userData['date_of_birth']]);
         
                            }
                    }
                    else {
                    $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
                    return back()->with('fail', $errorMessage);
                    }
                    
                    return back()->with('success', 'Password Updated');
                    
                } else {
    
                $errorMessage = $response['message'] ?? 'Login failed. Please try again.';
                return back()->with('fail', $errorMessage);
                }
            }
            else{
                $errorMessage = $response['message'] ?? 'Something went wrong. Please try again.';
                return back()->with('fail', $errorMessage); 
            }
            
                
            }
            return back()->withErrors(['fail' => 'Invalid form submission.']);
            }
    }
    public function buy_package($package, Request $request){
        if($request->isMethod('get')){
            $user = User::where('id',session('user_id'))->first();
            $user->package = $package;
            $user->activated_date = date('Y-m-d');
            $user->update();
            return back()->with('success', 'Package activated');
        }
        if($request->isMethod('post')){
         return redirect('questions/q6');
        }
    }
    public function check_user_package($type,Request $request){
        $user_package = Auth::user()->package;
        if($user_package == "paid"){

        }
        else{

        }
    }
    public function enter_access_code(Request $request){
        if($request->isMethod('get')){
            return view('user/enter_access_code');
        }
        if($request->isMethod('post')){
            $this->validate($request, [
                'access_code'   => 'required',
            ]);

            if(AccessCodes::where("status", "active")->where("code", $request->access_code)->exists()){
                $code = AccessCodes::where("code", $request->access_code)->first();
                $code->used_by = Auth::user()->id;
                $code->status = "used";
                $code->update();

                $user = User::where('id',Auth::user()->id)->first();
                $user->package = $code->package;
                $user->activated_date = date('Y-m-d');
                $user->update();

                return back()->with('success', 'Access code accepted');
            }
            else{
                return back()->with('fail', 'Invalid Access Code');
            }
            
        }
    }
    
// private function performCurlRequest($url) {
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     $response = curl_exec($ch);

//     if(curl_errno($ch)) {
//         curl_close($ch);
//         return null;
//     }

//     curl_close($ch);
//     return $response;
// }

// private function performCurlPostRequest($url, $formData) {
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_POST, true);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($formData));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, [
//         'Content-Type: application/json',
//     ]);
//     $response = curl_exec($ch);
//     if(curl_errno($ch)) {
//         return 'Error:' . curl_error($ch);
//     }
//     curl_close($ch);
//     return $response;
// }

private function getNonce() {
    $url = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/get_nonce/?json=get_nonce&controller=user&method=register';
    $response = $this->performCurlRequest($url);
    if ($response) {
        $data = json_decode($response, true);
        return $data['nonce'] ?? null;
    }
    return null;
}

private function registerUser($request, $nonce) {
    $url = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/user/register/';
    $formData = [
        'username' => $request->user_name,
        'email' => $request->email,
        'nonce' => $nonce,
        'notify' => 'both',
        'display_name' => $request->first_name . ' ' . $request->last_name,
        'user_pass' => $request->password,
        'firstname' => $request->first_name,
        'lastname' => $request->last_name,
        'custom_fields[dob]' => $request->dob,
    ];
    $urlWithParams = $url . '?' . http_build_query($formData);
    $response = $this->performCurlRequest($urlWithParams, true); // Send data as URL parameters
    return $response ? json_decode($response, true) : null;
}

private function generateAuthCookie($request) {
    $nonceUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/get_nonce/?controller=user&method=generate_auth_cookie';
    $nonceResponse = $this->performCurlRequest($nonceUrl);
    if ($nonceResponse) {
        $nonce_data = json_decode($nonceResponse, true);
        $loginUrl = 'https://projects.genaitech.dev/zebrabrain-wordpress-api/api/v1/user/generate_auth_cookie/';
        $loginUrlWithParams = $loginUrl . '?' . http_build_query([
            'username' => $request->user_name,
            'password' => $request->password,
            'nonce' => $nonce_data['nonce'],
        ]);

        $loginResponse = $this->performCurlRequest($loginUrlWithParams);
        return $loginResponse ? json_decode($loginResponse, true) : null;
    }
    return null;
}

private function handleUserSessions($request) {
    if (session('answer_main_id')) {
        if (QuestionAnswerMain::where("user_id", session('user_id'))->exists()) {
            QuestionAnswerMain::where("id", session('answer_main_id'))->delete();
            QuestionAnswers::where("answer_main_id", session('answer_main_id'))->delete();
            $request->session()->forget(['answer_main_id']);
        } else {
            $QuestionAnswerMain = QuestionAnswerMain::where('id', session('answer_main_id'))->first();
            $QuestionAnswerMain->user_id = session('user_id');
            $QuestionAnswerMain->update();

            $BrainResultsController = new BrainResultsController();
            $BrainResultsController->add_brain_results(session('answer_main_id'));

            $request->session()->forget(['answer_main_id']);
        }
    }

    if (session('d_answer_main_id')) {
        $DimensionalQuestionAnswerMain = DimensionalQuestionAnswerMain::where('id', session('d_answer_main_id'))->first();
        $DimensionalQuestionAnswerMain->user_id = session('user_id');
        $DimensionalQuestionAnswerMain->update();
        
        $BrainResultsController = new BrainResultsController();
        $BrainResultsController->add_dimensional_brain_results(session('d_answer_main_id'));

        $request->session()->forget(['d_answer_main_id']);
    }
}

private function performCurlRequest($url, $isPost = false, $payload = [], $token = null)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $headers = [
        'Content-Type: application/json',
        'Accept: application/json',
    ];

    if ($token) {
        $headers[] = 'Authorization: Bearer ' . $token;
    }

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    if ($isPost) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    }
    
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        curl_close($ch);
        return null;
    }

    curl_close($ch);
    return json_decode($response, true);
}

    function logout(Request $request)
    {
        // Auth::logout();
        $request->session()->forget(['user_id']);
        $request->session()->forget(['user_details']);
        $request->session()->forget(['auth_cookie']);
        $request->session()->forget(['user_dob']);
        return redirect('sign-in');
    }

}
