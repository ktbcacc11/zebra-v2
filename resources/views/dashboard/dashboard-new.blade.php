@include('layouts.dashboard-header')
<style>
    .report-heading{
        font-size: 22px;
        color: #000000;
        font-family: "Maven Pro", Sans-serif;
        font-weight: 700;
        padding: 0;
        margin: 0;
    }  
    .report-normal-text{
        padding: 0;
        margin-bottom: 0;
        color: #000000;
        font-family: "Maven Pro", Sans-serif;
        font-size: 16px;
        font-weight: 400;
    }
    .report-opertunities-card{
        padding:15px 35px 15px 15px;
        border-radius:15px;
        border:2px solid #000;
        margin-bottom:15px;
        position: relative;
        margin-right:15px;
    }
    
    .report-opertunities-card .title{
        font-size: 22px;
        color: #000000;
        font-family: "Maven Pro", Sans-serif;
        font-weight: 400;
        padding: 0;
        margin: 0;
    }
    .report-opertunities-card .short-description{
        font-size: 16px;
        color: #000000;
        font-family: "Maven Pro", Sans-serif;
        font-weight: 400;
        padding: 0;
        margin: 0;
    }
    .bg-orange{
        background:#f1935d;
    }
    .bg-yellow{
        background:#f6c94c;
    }
    .bg-blue{
        background:#9ae4e3;
    }
    .bg-green{
        background:#84d6a5;
    }
    .report-opertunities-card .lock-icon{
       border-radius: 50%;
        padding: 7px;
        background: #000;
        color: #fff;
        height: 12px;
        width: 12px;
        position: absolute;
        right: -15px;
        top: 35%;
    }
    
    .report-progress-bar .progress {
        color:#000;
    }
    .report-progress-bar .progress-bar{
        color:#000;
    }
    .report_modal .modal-header{
        border:none;
    }
    .report_modal .modal-body {
        padding: 0rem;
    }
    .report_modal .modal-content {
        border: 2px solid #000;
        border-radius: 15px;
    }
    .report_modal .modal-body {
        padding: 25px 25px 25px 25px;
    }
    .report_modal .box-data{
        background-color: #fff;
        border: 1px solid #000;
        text-align: center;
    }
    .report_modal .box-data p{
        color:#000;
    }
    .report_modal .box-data h3{
        color:#000;
    }
    
    .report_modal .modal-dialog {
      margin-top: 100px;
      margin-bottom: 70px;
    }
    .square-progress .step {
        background: linear-gradient(342deg, rgba(128, 125, 125, 1) 0%, rgba(0, 0, 0, 1) 95%);
        border: 1px solid #626060;
        height: 25px;
        width: 50px;
        transform: skewX(-20deg); 
        display: flex; 
        align-items: center; 
        justify-content: center; 
    }
    .square-progress .step.filled{
        background:#f6c94c;
    
    }
    
    .brain-img-top{
        width: 100px !important;
        height: auto !important;
    }
    
    .custom-button {
                background-color: #e28d5c; 
                color: #000; 
                font-weight: bold; 
                font-size: 18px; 
                padding: 12px 48px; 
                border: none; 
                border-radius: 25px; 
                cursor: pointer; 
                text-align: center; 
            }
            
            
     .centered-container {
                padding-top:70px;
                display: flex;
                flex-direction: column; 
                justify-content: center; 
                align-items: center; 
                height: 100vh; 
                text-align: center; 
            }
    
            /* Heading styling */
            .centered-container h3 {
                color: black;
                font-weight: 600;
                margin-bottom: 30px; 
            }
            
    .centered-container img {
                margin-top: 30px;
                width: 380px; 
                height: auto; 
            }
    
    @media screen and (max-width: 1024px) {
      .side-img-desktop {
        width:100% !important;
        height: auto !important;
      }
      
      .side-img-desktop2{
          width:50% !important;
          height: auto !important;
      }
      
      .centered-container {
                padding-top:70px;
                display: flex;
                flex-direction: column; 
                justify-content: center; 
                align-items: center; 
                height: 70vh; 
                text-align: center; 
            }
    }
    
    @media (min-width: 780px) and (max-width: 2800px) {
        
        .dashboard-page-content {
        min-height: 100vh;
        /* padding-top: 120px; */
        padding-left: 0px;
        padding-bottom: 0px;
        margin-left: 20px;
    }
    
    .middle-content {
        margin-left: 20px;
    }
      
    }
    
    @media screen and (min-width: 1025px) {
        
        .report-opertunities-card .title{
        min-height:80px !important;
        font-size: 22px;
        color: #000000;
        font-family: "Maven Pro", Sans-serif;
        font-weight: 400;
        padding: 0;
        margin: 0;
    }
      .side-img-desktop {
        width:60% !important;
        height: auto !important;
      }
      
      .side-img-desktop2{
          width:30% !important;
          height: auto !important;
      }
      
      .desktop-img-respon{
        display: flex;
        justify-content: center;
        align-items:center;
      }
    }
    
    @media screen and (max-width: 400px) {
        .centered-container {
                padding-top:70px;
                display: flex;
                flex-direction: column; 
                justify-content: center; 
                align-items: center; 
                height: 90vh; 
                text-align: center; 
            }
        
    }
    
    </style>
<?php
use App\Models\WPUsers;
use App\Models\BrainScores;
use App\Models\SkillBrainScores;
use App\Models\QuestionAnswerMain;
use App\Models\SkillTestAnswersMain;
$attempt = QuestionAnswerMain::where("user_id", session('user_id'))->where('status', 'complete')->first();
$skill_tests = SkillTestAnswersMain::where("user_id", session('user_id'))->where('status', 'complete')->get();
$introvert_extrovert = WPUsers::where('user_id',session('user_id'))->value('introverted_extroverted');
?>


<?php
 
    $brain_score = BrainScores::where("answer_main_id", $attempt->id)->first(); 

?>

<div class="container-fluid">
    <div class="main-wrapper mb-5 mb-lg-0 mb-xl-0">
        <div>
            <h2 class="page-title">Dashboard</h2>
            <p class="page-description">Overview of all limitless activities.</p>
        </div>


        <div class="dashbaord-new-page">

            {{-- section 1 --}}
            <div class="row mb-4">
                <!-- Card 1 -->
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card" style="background-color: #9AE4E3">
                        <a href="{{ url('/comparison-page') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center header-tab pe-5 me-4 gap-4">
                                    <div class="header-tab-image">
                                        <img src="{{ asset('assets/images/double-head.png') }}" alt="">
                                    </div>
                                    <div class="header-tab-text">
                                        <h5 class="tab-content-title">Brain Connect</h5>
                                        <p class="tab-content-subtitle">Match your brain</p>
                                    </div>
                                </div>
                                <div class="position-absolute lock-icon">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card" style="background-color: #F1935D">
                        <a href="">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center header-tab pe-5 me-4 gap-4">
                                    <div class="header-tab-image">
                                        <img src="{{ asset('assets/images/Brain- based growth-01.png') }}" alt="">
                                    </div>
                                    <div class="header-tab-text">
                                        <h5 class="tab-content-title">Learn More About You</h5>
                                        <p class="tab-content-subtitle">Match your brain</p>
                                    </div>
                                </div>
                                <div class="position-absolute lock-icon">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card" style="background-color: #85D6A5">
                        <a href="{{ url('/careers-inner-page-1') }}">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center header-tab pe-5 me-4 gap-4">
                                    <div class="header-tab-image">
                                        <img src="{{ asset('assets/images/Brain- based growth-01.png') }}" alt="">
                                    </div>
                                    <div class="header-tab-text">
                                        <h5 class="tab-content-title">Find Your Career Preferences</h5>
                                        <p class="tab-content-subtitle">Match your brain</p>
                                    </div>
                                </div>
                                <div class="position-absolute lock-icon">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>

            {{-- section 2 --}}
            <div class="row activities mb-4">
                <h3 class="dashbaord-section-title">Activities</h3>
                <!-- Card 1 -->


                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card">
                        <a href="">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-10 justify-content-center align-items-center">
                                        <div>
                                            <h5 class="activity-notification">Your Skill assessment Awaits!</h5>
                                            <h6 class="activity-notification-text">Start Upgrading your Skills....</h6>
                                        </div>
                                    </div>
                                    <div class="col-2 flex-column align-items-center">

                                        <img src="{{ asset('assets/images/diagonal-arrow-50.png') }}" alt="">

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>



                <!-- Card 2 -->
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card">
                        <a href="">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-10 justify-content-center align-items-center">
                                        <div>
                                            <h5 class="activity-notification">Are you a Introvert or a extrovert?</h5>
                                            <h6 class="activity-notification-text">Find our here!</h6>
                                        </div>
                                    </div>
                                    <div class="col-2 flex-column align-items-center">

                                        <img src="{{ asset('assets/images/diagonal-arrow-50.png') }}" alt="">

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


                {{-- card 3 --}}
                <div class="col-12 col-md-4 d-flex justify-content-center mb-3">
                    <div class="card position-relative header-tab-card">
                        <a href="{{ url('/pricing') }}">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="col-10 justify-content-center align-items-center">
                                        <div>
                                            <h5 class="activity-notification">Upgrade your membership</h5>
                                            <h6 class="activity-notification-text">Find out here!</h6>
                                        </div>
                                    </div>
                                    <div class="col-2 flex-column align-items-center">
                                        <img src="{{ asset('assets/images/diagonal-arrow-50.png') }}" alt="">
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            {{-- section 3 --}}
            <div class="row mb-4">

                {{-- brain img --}}
                <div class="col-12 col-md-3 text-center">
                    <img src="{{ asset('assets/images/brain-cartoon.png') }}" class="brain-img img-fluid">
                </div>

                {{-- data boxes --}}
                <div class="col-12 col-md-3 px-0">
                    <div class="row d-flex">
                        <h5 class="text-center text-lg-start text-md-start dashbaord-section-title">Basic Brain Report</h5>
                    </div>

                    <div class="row dashboard-data-box-row">
                        <div class="row data-box-row d-flex">
                            <div class="box-data px-4 m-1" style="background-color: #f6c94c; color: black;">
                                <p class="mb-0" style="color: black;">
                                    Candid
                                </p>
                                <p class="mb-0" style="color: black;">
                                    (Analytical Brain)
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    {{$brain_score->l1_score}}%
                                </h3>
                            </div>

                            <div class="box-data px-4 m-1" style="background-color: #f1935d;">
                                <p class="mb-0" style="color: black;">
                                    Fastidious
                                </p>
                                <p class="mb-0" style="color: black;">
                                    (Practical Brain)
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    {{$brain_score->l2_score}}%
                                </h3>
                            </div>
                        </div>

                        <div class="row data-box-row d-flex">
                            <div class="box-data px-4 m-1" style="background-color: #9ae4e3;">
                                <p class="mb-0" style="color: black;">
                                    Maverick
                                </p>
                                <p class="mb-0" style="color: black;">
                                    (Innovative Brain)
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    {{$brain_score->r1_score}}%
                                </h3>
                            </div>

                            <div class="box-data px-4 m-1" style="background-color: #84d6a5;">
                                <p class="mb-0" style="color: black;">
                                    Affable
                                </p>
                                <p class="mb-0" style="color: black;">
                                     (Relational Brain)
                                </p>
                                <h3 class="mb-0" style="color: black;">
                                    {{$brain_score->r2_score}}%
                                </h3>
                            </div>
                        </div>
                        <div class="row d-flex d-md-block d-lg-block justify-content-center mt-2">
                            <button class="download-report-btn">Download Report </button>
                        </div>
                    </div>
                </div>


                {{-- descfiptjoin --}}
                <div class="col-12 col-md-5 basic-brain-description" >
                    <p id="basic-brain-description">
                        Your brain is highly fact-oriented, with a natural inclination to dive deep into
                        problems. You tend to be direct and analytical, always seeking certainty before taking
                        action. You thoroughly research, calculate, and evaluate every situation, weighing the
                        pros and cons carefully. Constantly questioning and probing for clarity is second nature
                        to you. This makes you excellent at problem-solving and strategizing.

                    </p>
                </div>


            </div>

            {{-- section plus --}}
            <div class="row mb-4">
                
<?php 
                   
$brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('brain_profile_id');
$dob = session('user_dob'); 
$age = \Carbon\Carbon::parse($dob)->age; 

if ($brain_profile_id == 1): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>
                    
<div class="dashboard-page-content pb-5">
    <div class=" p-3 w-100" style="padding-left: 40px !important;">
        <h2 class="report-heading col-lg-6">Basic Brain Report</h2>
        <div class="row align-items-center">
            <div class="col-6">
                <p class="report-normal-text mt-4" style="padding-bottom: 35%;">
                Your brain is highly fact-oriented, with a natural inclination to dive deep into problems. You tend to be direct and analytical, always seeking certainty before taking action. 
                </p>
            </div>
             <div class="col-6 desktop-img-respon">
                 <img src="{{ asset('assets/images/phone.png') }}" class="side-img-desktop">
            </div>
        </div>
        <p class="report-normal-text ">
              You thoroughly research, calculate, and evaluate every situation, weighing the pros and cons carefully. Constantly questioning and probing for clarity is second nature to you. This makes you excellent at problem-solving and strategizing.
              Your strength lies in your logical, objective approach, and you often cut through complexity by sticking to the facts. While others may get lost in emotions or subjective views, you focus on what can be proven and understood through reason. People rely on you for your candid insights, no-nonsense attitude, and the ability to deliver grounded solutions.
        </p>
        <div class="text-center mt-5">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2 ">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
              Understanding and evaluating various indices such as <strong>Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index,</strong> and <strong>21st-Century Agility Index</strong> can provide valuable insights into different aspects of your personal and professional development. These indices measure distinct traits and capabilities that are essential for success in today’s dynamic environment.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <dwiv class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


    <div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
            <div class="text-center pt-4 pb-4">
                <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
            </div>
            <div class="row">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Leadership Style 1</p>
                    <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Leadership Style 2</p>
                    <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
                </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Leadership Style 3</p>
                    <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Leadership Style 4</p>
                    <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
                </div>
                </div>
            </div>
            
            {{-- <div class="row mt-4 align-items-center">
                <div class="col-4">
                    <h3 class="section-title3 mb-0">Leadership</h3>
                </div>
                <div class="col-8">
                    <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                    </div>
                </div>
            </div> --}}
            <div class="row mt-4 align-items-center">
                <div class="row d-flex align-items-center justify-content-center">
                    <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
            
            <p class="report-normal-text mt-4">
                Your natural analytical focus may cause you to prefer working independently, and you might not always feel comfortable stepping into leadership roles. Developing your ability to inspire and guide others can elevate your impact, especially in team environments.        </p>
            </div>
        </div>
        </div>
    </div>


    <div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
            <div class="text-center pt-4 pb-4">
                <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
            </div>
            <div class="row">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Creativity Style 1</p>
                    <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Creativity Style 2</p>
                    <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
                </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Creativity Style 3</p>
                    <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Creativity Style 4</p>
                    <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
                </div>
                </div>
            </div>
            
            {{-- <div class="row mt-4 align-items-center">
                <div class="col-4">
                    <h3 class="section-title3 mb-0">Creativity</h3>
                </div>
                <div class="col-8">
                    <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                    </div>
                </div>
            </div> --}}
            <div class="row mt-4 align-items-center">
                <div class="row d-flex align-items-center justify-content-center">
                    <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
            <p class="report-normal-text mt-4">
                While you excel at logical thinking, you might struggle to think outside the box or come up with unconventional solutions. Cultivating creativity could expand your problem-solving toolkit and open new pathways to innovation.
            </p>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
            <div class="text-center pt-4 pb-4">
                <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
            </div>
            <div class="row">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">GIG Potential Style 1</p>
                    <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">GIG Potential Style 2</p>
                    <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
                </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">GIG Potential Style 3</p>
                    <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">GIG Potential Style 4</p>
                    <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
                </div>
                </div>
            </div>
            
            {{-- <div class="row mt-4 align-items-center">
                <div class="col-4">
                    <h3 class="section-title3 mb-0">GIG Potential</h3>
                </div>
                <div class="col-8">
                    <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                    </div>
                </div>
            </div> --}}
            <div class="row mt-4 align-items-center">
                <div class="row d-flex align-items-center justify-content-center">
                    <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
            
            <p class="report-normal-text mt-4">
                Adapting to highly dynamic, growth-oriented environments may feel challenging, as you prefer structure and clarity. Building your tolerance for uncertainty and innovation will help you thrive in today’s fast-paced world. </p>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
            <div class="text-center pt-4 pb-4">
                <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
            </div>
            <div class="row">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Entrepreneurship Style 1</p>
                    <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Entrepreneurship Style 2</p>
                    <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
                </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Entrepreneurship Style 3</p>
                    <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Entrepreneurship Style 4</p>
                    <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
                </div>
                </div>
            </div>
            
            {{-- <div class="row mt-4 align-items-center">
                <div class="col-4">
                    <h3 class="section-title3 mb-0">Entrepreneurship</h3>
                </div>
                <div class="col-8">
                    <div class="d-flex square-progress">
                        <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                    </div>
                </div>
            </div> --}}
            <div class="row mt-4 align-items-center">
                <div class="row d-flex align-items-center justify-content-center">
                    <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
            
            <p class="report-normal-text mt-4">
                You may prefer stability over risk-taking, which can limit entrepreneurial ventures. Strengthening your ability to identify opportunities and take calculated risks can unlock new avenues for growth.
            </p>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
            <div class="text-center pt-4 pb-4">
                <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
            </div>
            <div class="row">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Team Collaboration Index Style 1</p>
                    <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Team Collaboration Index Style 2</p>
                    <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
                </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Team Collaboration Index Style 3</p>
                    <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">Team Collaboration Index Style 4</p>
                    <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
                </div>
                </div>
            </div>
            
            {{-- <div class="row mt-4 align-items-center">
                <div class="col-4">
                    <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
                </div>
                <div class="col-8">
                    <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                    </div>
                </div>
            </div> --}}

            <div class="row mt-4 align-items-center">
                <div class="row d-flex align-items-center justify-content-center">
                    <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
            
            <p class="report-normal-text mt-4">
                While you are excellent at individual problem-solving, working with others may present challenges. Improving communication and collaboration skills will enable you to work more effectively within teams.</p>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
            <div class="text-center pt-4 pb-4">
                <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
            </div>
            <div class="row">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">21st-Century Agility Index Style 1</p>
                    <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">21st-Century Agility Index Style 2</p>
                    <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
                </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">21st-Century Agility Index Style 3</p>
                    <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
                </div>
                </div>
                <div class="col-6">
                <div class="box-data p-4">
                    <p class="mb-0">21st-Century Agility Index Style 4</p>
                    <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
                </div>
                </div>
            </div>
            
            {{-- <div class="row mt-4 align-items-center">
                <div class="col-4">
                    <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
                </div>
                <div class="col-8">
                    <div class="d-flex square-progress">
                        <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                    </div>
                </div>
            </div> --}}

            <div class="row mt-4 align-items-center">
                <div class="row d-flex align-items-center justify-content-center">
                    <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
            
            <p class="report-normal-text mt-4">
                Flexibility and adaptability to change can be areas for growth. Learning to embrace new technologies and remain open to continuous learning in a rapidly evolving environment will enhance your professional agility
            </p>
            </div>
        </div>
        </div>
    </div>

<?php elseif ($brain_profile_id == 2):
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
        <h2 class="report-heading col-lg-6"> Basic Brain Report </h2>
        <div class="row align-items-center">
            <div class="col-6">
                <p class="report-normal-text mt-4" style="padding-bottom: 35%;">
                Your brain is highly fact-oriented, with a natural inclination to tackle practical problems head-on. You are detail-focused and methodical, preferring to approach tasks in a systematic manner. Your strength lies in your ability to take complex information and break it down into manageable, actionable steps. You tend to rely on proven methods and consistent processes, ensuring that everything is thoroughly planned before you proceed.

<br><br>Your logical and organized approach means you excel in environments that require precision and hands-on problem-solving. Others admire your dependability and your capacity to bring clarity and structure to ambiguous situations. You are driven by a need for certainty and prefer to operate in familiar, controlled environments where outcomes can be predicted based on reliable data.

                </p>
            </div>
             <div class="col-6 desktop-img-respon">
                 <img src="{{ asset('assets/images/phone.png') }}" class="side-img-desktop">
            </div>
        </div>
        <p class="report-normal-text ">
              Your tendency to stick to facts over assumptions allows you to make informed decisions that are grounded in reality. While others might be swayed by emotions or abstract ideas, you stay focused on what is practical and can be immediately applied.
        </p>
        <div class="text-center mt-5">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2 ">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
              Understanding and evaluating various indices like Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration, and 21st-Century Agility can provide insights into areas for growth and personal development.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            You have the potential to lead by example, particularly in environments where precision and reliability are valued. Developing soft leadership skills, such as motivating others and delegating effectively, can enhance your leadership capabilities.              </p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            While you may not always be inclined towards abstract creativity, your strength lies in practical innovation. Focusing on problem-solving that incorporates both logical thinking and creative solutions can further expand your skill set.
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            You may prefer structured environments but have the ability to thrive in dynamic, freelance settings if you develop a tolerance for ambiguity. Working on flexibility and embracing new challenges will increase your GIG potential.    </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            You are more comfortable with stability and clear expectations, so entrepreneurship may not be your natural inclination. Building a risk-tolerance mindset and exploring calculated opportunities can help you grow in this area.
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            You work well with others when the task is clearly defined and roles are straightforward. However, improving communication and learning to work more fluidly in collaborative, less structured environments can enhance your teamwork abilities.        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            Adapting to constant change can be challenging for you. Developing a mindset of continuous learning and embracing technological advancements will help you stay competitive and agile in today's evolving landscape.
        </p>
        </div>
    </div>
    </div>
</div>


<?php elseif ($brain_profile_id == 3): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
        
        <div class="text-center">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
            Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your natural ability to connect with others makes you an empathetic leader who listens and values the contributions of each team member. You lead with emotional intelligence and prioritize creating a supportive, inclusive environment.</li>
                <li><strong>Growth Potential:</strong> To further enhance your leadership skills, focus on balancing empathy with assertiveness. Developing the ability to make tough decisions without losing your compassionate touch will increase your impact. </li>
            </ul> </p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your creativity comes from your ability to think compassionately and see situations from multiple perspectives. You excel at brainstorming solutions that take into account the emotional and relational aspects of a problem.</li>
                <li><strong>Growth Potential:</strong> Expanding your creativity into areas that require innovation and strategic planning can enhance your ability to contribute in more structured environments. Don’t be afraid to push the boundaries of your creative ideas. </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You thrive in collaborative environments where connection with others is central. Freelance or gig work in areas like coaching, counseling, or community management may suit your relational strengths.</li>
                <li><strong>Growth Potential:</strong> To fully embrace gig potential, work on strengthening your ability to manage your time and projects independently. Building more self-discipline and structure around your workflow will help you excel in dynamic work settings. </li>
            </ul>   </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your relational focus can make you a successful entrepreneur in fields that rely on building strong client relationships, such as coaching, consultancy, or wellness. You naturally create trust and rapport with others.</li>
                <li><strong>Growth Potential:</strong> Strengthening your risk tolerance and decision-making under pressure will help you step into entrepreneurship more confidently. Balancing emotional intuition with business strategy will be key to long-term success. </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You are a natural collaborator, always considering the perspectives and feelings of others. You excel in team environments, where your ability to foster understanding and connection helps everyone work together more effectively.</li>
                <li><strong>Growth Potential:</strong> Enhancing your ability to balance group harmony with productive conflict resolution will allow for deeper collaboration. Focus on encouraging diverse viewpoints while maintaining a unified team. </li>
            </ul>   </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You are adaptable in social and emotional environments, making it easy for you to navigate changes in team dynamics or relational shifts. You thrive in environments that require flexibility and emotional intelligence.</li>
                <li><strong>Growth Potential:</strong> To further enhance your agility, practice embracing technological tools and systems that help improve efficiency and organization. Building comfort with rapid change in technology will support your overall adaptability in fast-paced settings.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class=" middle-content p-3 w-100" >
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Balancing Empathy and Assertiveness:</strong> Work on becoming more assertive in situations that require tough decisions. Balancing empathy with clear boundaries will increase your leadership effectiveness.
                        </li>
                        <li>
                            <strong>Leveraging Creativity in Structured Contexts:</strong> Expand your creative thinking to more strategic, structured environments. This will allow you to contribute innovative ideas in areas where organization and systems are key.
                        </li>
                        <li>
                            <strong>Building Self-Discipline in Dynamic Roles:</strong> As you explore freelancing or entrepreneurship, focus on building stronger personal discipline and organization to enhance your independence in managing multiple projects.
                        </li>
                        <li>
                            <strong>Fostering Healthy Conflict in Teams:</strong> Encourage open dialogue and diverse perspectives within teams while maintaining harmony. This will lead to more robust problem-solving and stronger team dynamics.
                        </li>
                        <li>
                            <strong>Enhancing Comfort with Technology:</strong> Embrace new tools and platforms that support your work, as this will ensure you remain agile in the fast-paced, tech-driven world.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
            Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.        
        </p>
</div>

<?php elseif ($brain_profile_id == 4): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
        
        <div class="text-center">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
            Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You inspire others with your vision and creativity, often leading through example rather than authority. Your innovative ideas can rally people around a cause or project.</li>
                <li><strong>Growth Potential:</strong> To enhance your leadership, focus on developing your ability to communicate your vision effectively and inspire others to join you in pursuing it.</li>
            </ul>   </p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your creativity is a driving force in your life. You generate novel ideas, think abstractly, and approach problems from unconventional angles.</li>
                <li><strong>Growth Potential:</strong> Continue to cultivate your creative abilities by exploring diverse fields, experimenting with different mediums, and collaborating with other creatives.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your innovative mindset lends itself well to gig work and freelance opportunities, where you can explore your creativity and work on diverse projects.</li>
                <li><strong>Growth Potential:</strong> Strengthen your ability to manage multiple projects and deadlines, ensuring that your creativity is balanced with practical execution.</li>
            </ul>    </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your inclination to innovate makes you well-suited for entrepreneurial ventures. You have a natural ability to identify gaps in the market and develop unique solutions.</li>
                <li><strong>Growth Potential:</strong> Work on building your business acumen, learning about finance, marketing, and operational management to complement your creative vision.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> While you thrive in creative settings, collaborating with others can sometimes challenge your non-conformist tendencies. You bring fresh ideas to the table.</li>
                <li><strong>Growth Potential:</strong> Focus on enhancing your collaborative skills by practicing active listening and appreciating diverse perspectives while working in teams.</li>
            </ul>    </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You adapt easily to change and embrace new technologies and ideas. Your flexibility allows you to pivot quickly and explore new avenues.</li>
                <li><strong>Growth Potential:</strong> Continue to stay updated on emerging trends and technologies, and explore how you can be integrated into your creative pursuits.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class=" middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Communication Skills:</strong> Work on articulating your creative ideas clearly to others. This will help you share your vision and rally support for your innovative projects.
                        </li>
                        <li>
                            <strong>Cultivating Collaborative Creativity:</strong>  Engage in group brainstorming sessions or collaborative projects to harness the power of teamwork while allowing your creative juices to flow.
                        </li>
                        <li>
                            <strong>Building a Portfolio of Work:</strong> Create a portfolio showcasing your innovative ideas and projects. This can serve as a valuable tool for pursuing freelance opportunities or entrepreneurial ventures.
                        </li>
                        <li>
                            <strong>Embracing Failure as a Learning Tool:</strong> Understand that not all ideas will succeed. Use failures as opportunities for learning and growth, allowing you to iterate and improve your creative processes.
                        </li>
                        <li>
                            <strong>Networking with Other Creatives:</strong> Connect with like-minded you in your field to exchange ideas, collaborate on projects, and inspire each other’s creativity.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
            As a <strong>Maverick Creative Thinker</strong>, your strengths lie in your ability to innovate, think creatively, and challenge conventional wisdom. By focusing on areas such as communication, collaboration, and business acumen, you can enhance your overall effectiveness and make a meaningful impact in creative fields. Your unique perspective and imaginative capabilities position you as a leader in fostering change and driving innovation.
        </p>
</div> 


<?php elseif ($brain_profile_id == 5): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
        
        <div class="text-center">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
             Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your logical reasoning and practical problem-solving skills make you an effective leader in structured environments. You can guide teams through data-driven decisions.</li>
                <li><strong>Growth Potential:</strong> To enhance your leadership skills, focus on developing your ability to inspire and motivate others, fostering a collaborative atmosphere.</li>
            </ul>   </p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> While your analytical thinking is strong, you may not gravitate naturally toward creative processes. However, you can apply creative problem-solving techniques within structured frameworks.</li>
                <li><strong>Growth Potential:</strong> Encourage your creative side by engaging in brainstorming sessions or exploring unconventional solutions to problems.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        {{-- <p class="report-normal-text mt-4">
            You may prefer structured environments but have the ability to thrive in dynamic, freelance settings if you develop a tolerance for ambiguity. Working on flexibility and embracing new challenges will increase your GIG potential.        </p> --}}
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Growth Potential:</strong> Work on cultivating your risk-taking abilities and exploring innovative ideas that can set you apart in the entrepreneurial landscape.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Growth Potential:</strong> Focus on enhancing your communication skills to ensure that your ideas resonate with others and foster collaboration.</li>
            </ul> </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Growth Potential:</strong> Embrace a mindset of continuous learning and exploration to enhance your adaptability to rapidly changing situations.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class=" middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Leadership through Communication:</strong> Develop your interpersonal skills to inspire and motivate others. Engage in workshops focused on emotional intelligence and team dynamics.
                        </li>
                        <li>
                            <strong>Cultivating Creativity through Structured Innovation: </strong>  Use techniques such as design thinking or creative problem-solving frameworks to enhance your innovative capabilities while maintaining a logical approach.
                        </li>
                        <li>
                            <strong>Building Entrepreneurial Skills:</strong> Explore entrepreneurship through mentorship programs or startup incubators to develop your business acumen and innovative mindset.
                        </li>
                        <li>
                            <strong>Networking and Collaboration:</strong> Actively seek opportunities to collaborate with others in your field to gain new insights and perspectives, enhancing your teamwork skills.
                        </li>
                        <li>
                            <strong>Investing in Continuous Learning:</strong> Stay updated on industry trends and technologies to improve your adaptability and ensure your skills remain relevant in a changing landscape.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
            As a <strong>Balanced Logical Thinker / Dual Analytical-Practical</strong>, your strengths lie in your ability to analyze situations logically while considering practical applications. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and balanced thinking position you as a valuable asset in fostering innovation and driving results in various contexts.
        </p>
</div>

<?php elseif ($brain_profile_id == 6): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
       
        <div class="text-center">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
         Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.

        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your ability to connect with others and inspire creativity makes you a natural leader in collaborative environments. You can motivate your team through shared vision and passion.
                </li>
                <li><strong>Growth Potential:</strong>  To enhance your leadership skills, focus on developing your strategic thinking and decision-making abilities, ensuring you can guide your team effectively.
                </li>
            </ul></p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  Your creative thinking allows you to generate innovative ideas and solutions. You enjoy exploring new concepts and expressing yourself artistically.  </li>
                <li><strong>Growth Potential:</strong> Continue to challenge yourself to explore different mediums of creativity, whether through art, writing, or other forms of expression.                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  Your relational skills and creativity make you well-suited for gig work that involves collaboration and innovation. You can easily adapt to diverse projects and clients.                </li>
                <li><strong>Growth Potential:</strong> Strengthen your personal brand and network to attract a variety of gigs that leverage your creative strengths.                </li>
            </ul>      
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You have the creative vision needed to develop new products or services. Your relational skills can help you build connections with clients and collaborators.                </li>
                <li><strong>Growth Potential:</strong> Focus on developing your business acumen and understanding market trends to turn your creative ideas into viable ventures.                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You excel in collaborative settings, leveraging your creativity to enhance teamwork. You thrive in environments where sharing ideas and brainstorming is encouraged.                </li>
                <li><strong>Growth Potential:</strong> Work on enhancing your conflict resolution skills to navigate disagreements effectively and maintain a harmonious team dynamic.                </li>
            </ul>
               </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  Your ability to adapt to new ideas and work collaboratively supports your agility in dynamic environments.</li>
                <li><strong>Growth Potential:</strong>  Embrace continuous learning and stay updated on emerging trends in your field to enhance your adaptability and relevance.                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Leadership through Emotional Intelligence:</strong> Develop your interpersonal leadership skills by participating in emotional intelligence workshops. Being able to connect with and inspire others will elevate your leadership impact.
                        </li>
                        <li>
                            <strong>Cultivating Creativity through Diverse Experiences:</strong>  Engage in activities outside your primary field of interest. Exposure to different perspectives and disciplines can spark new ideas and enhance your creative thinking.</li>
                        <li>
                            <strong>Building Entrepreneurial Skills via Networking:</strong> Join entrepreneurial communities or attend workshops to gain insights from experienced entrepreneurs. Learning from others can provide valuable guidance for your creative ventures.</li>
                        <li>
                            <strong>Improving Team Collaboration through Communication Skills:</strong> Participate in team-building exercises that emphasize active listening, empathy, and effective communication. Strengthening these skills will enhance your collaborative efforts.

                        </li>
                        <li>
                            <strong>Fostering Agility through Continuous Learning:</strong> Regularly invest time in upskilling through online courses, workshops, or seminars. Embracing new technologies and ideas will increase your professional agility.

                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
         As a <strong>Relational Creative / Creative Connector,</strong> your strengths lie in your ability to connect with others while fostering creativity. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and relational skills position you as a valuable asset in fostering innovation and driving positive change within your networks. Embrace your creativity, nurture your connections, and continue to explore new horizons in your journey of growth and self-discovery.

        </p>
</div>


<?php elseif ($brain_profile_id == 7): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
        
        <div class="text-center ">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
         Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.


        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your analytical approach allows you to lead through logic and reason. You can inspire confidence in others by presenting well-reasoned arguments.

                </li>
                <li><strong>Growth Potential:</strong>  Focus on developing your interpersonal leadership skills to enhance your ability to motivate and guide teams effectively.

                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  Your innovative thinking allows you to generate unique solutions to problems, often considering unconventional approaches.                </li>
                <li><strong>Growth Potential:</strong> Continue to cultivate your creative thinking by engaging in activities that challenge your imagination and encourage experimentation.                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  Your combination of analytical and creative skills makes you adaptable to various gig opportunities that require both problem-solving and innovation.
                </li>
                <li><strong>Growth Potential:</strong> Build your personal brand and network to attract diverse gig opportunities that leverage your strengths.                </li>
            </ul> </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You possess the ability to analyze market trends and develop creative solutions, making you well-suited for entrepreneurial ventures.
                </li>
                <li><strong>Growth Potential:</strong> Focus on acquiring business knowledge and skills to complement your creative vision and turn ideas into viable business opportunities.
                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You can effectively contribute to team discussions with logical reasoning and innovative ideas, enhancing collaborative efforts.
                </li>
                <li><strong>Growth Potential:</strong> Work on improving your interpersonal skills to foster better relationships within teams and encourage open dialogue.
                </li>
            </ul>       </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  Your analytical mindset allows you to adapt to changing situations and assess new information quickly.                </li>
                <li><strong>Growth Potential:</strong>   Embrace continuous learning and stay informed about emerging trends in your field to enhance your adaptability and relevance.                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Leadership through Emotional Intelligence:</strong> Develop your emotional intelligence by participating in workshops that focus on understanding and managing emotions in yourself and others.

                        </li>
                        <li>
                            <strong>Cultivating Creativity through Diverse Experiences:</strong> Challenge yourself to explore various creative outlets, such as art, writing, or music, to expand your creative thinking skills.
                            </li>
                        <li>
                            <strong>Building Entrepreneurial Skills via Networking:</strong> Join entrepreneurial communities or attend workshops to learn from experienced entrepreneurs and gain insights into launching and managing a business.
                            </li>
                        <li>
                            <strong>Improving Team Collaboration through Communication Skills: </strong> Participate in team-building activities that focus on effective communication and collaboration to strengthen your ability to work with others.




                        </li>
                        <li>
                            <strong>Fostering Agility through Continuous Learning:</strong> Regularly seek out learning opportunities that align with your interests and career goals, such as online courses, workshops, or conferences.


                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
         As a <strong>Innovative Analyst / Creative Problem-Solver,</strong> your strengths lie in your ability to analyze complex problems and develop innovative solutions. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and problem-solving abilities position you as a valuable asset in driving innovation and positive change. Embrace your analytical strengths while nurturing your creativity, and continue to explore new horizons in your journey of growth and self-discovery.


        </p>
</div>

<?php elseif ($brain_profile_id == 8): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
        
        <div class="text-center">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
         Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.



        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You have the ability to lead by example, drawing on your empathetic nature to inspire and motivate others. Your grounded approach helps you remain calm and supportive in challenging situations.


                </li>
                <li><strong>Growth Potential:</strong>  Focus on developing your strategic leadership skills to enhance your ability to guide teams effectively while maintaining a compassionate approach.


                </li>
            </ul>       </p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You may not gravitate toward traditional forms of creativity, but you excel in practical and innovative problem-solving that meets the needs of those around you.
                </li>
                <li><strong>Growth Potential:</strong> Cultivating your creative thinking skills can enhance your ability to generate fresh ideas and solutions in various contexts.                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  Your ability to connect with others and understand your needs makes you well-suited for gig opportunities that require flexibility and adaptability.

                </li>
                <li><strong>Growth Potential:</strong> Building your personal brand and networking skills can help you attract diverse gig opportunities that align with your strengths.                </li>
            </ul>
          </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You have the practical skills to identify opportunities and develop solutions that address real-world problems, making you a potential entrepreneur.

                </li>
                <li><strong>Growth Potential:</strong>  Strengthening your business acumen and understanding market dynamics will enhance your entrepreneurial potential.

                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You excel in collaborative environments, valuing teamwork and open communication. Your empathetic nature helps you build strong relationships within teams.

                </li>
                <li><strong>Growth Potential:</strong>  Fostering a culture of collaboration and inclusivity will further enhance your effectiveness in team settings.

                </li>
            </ul>     </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li>
                    <strong>Current Strengths:</strong>  You can adapt to changing circumstances, applying practical solutions to meet evolving needs. Your relational skills help you navigate social dynamics effectively.
                </li>
                <li>
                    <strong>Growth Potential:</strong>   Embracing continuous learning and staying informed about industry trends will enhance your agility in a rapidly changing environment.
                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Leadership through Empathy:</strong> Develop your leadership skills by participating in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.
                        </li>
                        <li>
                            <strong>Cultivating Creativity through Practical Exploration: </strong> Engage in activities that encourage innovative thinking, such as design challenges or collaborative brainstorming sessions, to enhance your creative problem-solving skills.

                            </li>
                        <li>
                            <strong>Building Entrepreneurial Skills via Networking:</strong> Join entrepreneurial communities or attend workshops to learn from experienced entrepreneurs and gain insights into launching and managing a business.

                            </li>
                        <li>
                            <strong>Improving Team Collaboration through Communication Skills: </strong> Participate in team-building exercises that promote effective communication and collaboration to strengthen your ability to work with others.
                        </li>
                        <li>
                            <strong>Fostering Agility through Continuous Learning: </strong> Regularly seek out opportunities to learn new skills or technologies that enhance your relevance and adaptability in your field.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
         As a <strong>Practical Empath / Grounded Relational Thinker,</strong> your strengths lie in your ability to empathize with others while providing practical solutions to everyday challenges. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and relational abilities position you as a valuable asset in driving positive change and fostering connections. Embrace your empathetic nature while nurturing your practical skills, and continue to explore new horizons in your journey of growth and self-discovery.



        </p>
</div>

<?php elseif ($brain_profile_id == 9): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
       
        <div class="text-center">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
            Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You can lead effectively by using your analytical insights to guide discussions and decisions. Your ability to connect with others helps you inspire and motivate teams.


                </li>
                <li><strong>Growth Potential:</strong> Focus on developing your strategic leadership skills to enhance your ability to guide teams effectively while maintaining a compassionate approach.



                </li>
            </ul></p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You may not gravitate toward traditional forms of creativity, but your analytical skills allow you to generate innovative solutions based on logical reasoning.
                </li>
                <li><strong>Growth Potential:</strong> Cultivating creative thinking skills can enhance your ability to think outside the box and develop unique ideas in various contexts.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  Your analytical capabilities and relational skills make you well-suited for gig opportunities that require flexibility and adaptability.
                </li>
                <li><strong>Growth Potential:</strong> Building your personal brand and networking skills can help you attract diverse gig opportunities that align with your strengths.</li>
            </ul>
           </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You have the analytical skills to identify opportunities and develop solutions that address real-world problems, making you a potential entrepreneur.

                </li>
                <li><strong>Growth Potential:</strong>  Strengthening your business acumen and understanding market dynamics will enhance your entrepreneurial potential.

                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You excel in collaborative environments, valuing teamwork and open communication. Your analytical nature helps you contribute meaningfully to group discussions.

                </li>
                <li><strong>Growth Potential:</strong>  Fostering a culture of collaboration and inclusivity will further enhance your effectiveness in team settings.

                </li>
            </ul>  </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li>
                    <strong>Current Strengths:</strong>  You can adapt to changing circumstances, applying analytical insights to meet evolving needs. Your relational skills help you navigate social dynamics effectively.
                </li>
                <li>
                    <strong>Growth Potential:</strong>   Embracing continuous learning and staying informed about industry trends will enhance your agility in a rapidly changing environment.
                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Leadership through Emotional Intelligence:</strong> Develop your leadership skills by participating in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.
                        </li>
                        <li>
                            <strong>Cultivating Creativity through Analytical Exploration:</strong>  Engage in activities that encourage innovative thinking while leveraging your analytical skills, such as problem-solving competitions or design thinking workshops.

                            </li>
                        <li>
                            <strong>Building Entrepreneurial Skills via Networking:</strong> Join entrepreneurial communities or attend workshops to learn from experienced entrepreneurs and gain insights into launching and managing a business.

                            </li>
                        <li>
                            <strong>Improving Team Collaboration through Communication Skills: </strong> Engage in team-building exercises and workshops that promote effective communication and collaboration, strengthening your ability to work with others.
                        </li>
                        <li>
                            <strong>Fostering Agility through Continuous Learning:</strong> Regularly seek out opportunities to learn new skills or technologies that enhance your relevance and adaptability in your field.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
            Your strengths lie in your ability to analyze complex information while connecting with others on an emotional level. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and relational abilities position you as a valuable asset in driving positive change and fostering connections. Embrace your analytical nature while nurturing your relational skills, and continue to explore new horizons in your journey of growth and self-discovery.
        </p>
</div>

<?php elseif ($brain_profile_id == 10): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
        
        <div class="text-center">
            <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
            Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You can lead effectively by using your innovative ideas to inspire others. Your practical approach helps you guide discussions toward actionable outcomes.
                </li>
                <li><strong>Growth Potential:</strong> Focus on developing your ability to motivate and influence others, enhancing your interpersonal leadership skills.
                </li>
            </ul>   </p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You excel at generating creative ideas and solutions, leveraging your practical skills to implement them effectively.
                </li>
                <li><strong>Growth Potential:</strong> Continue to cultivate your creative thinking through diverse experiences and collaborations that challenge your perspectives.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  Your blend of practical skills and innovative thinking makes you well-suited for gig opportunities that require flexibility and adaptability.
                </li>
                <li><strong>Growth Potential:</strong> Build your personal brand and network to attract diverse gig opportunities that leverage your unique strengths.</li>
            </ul>   </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You have the innovative mindset to identify opportunities and develop solutions to real-world problems, making you a potential entrepreneur.
                </li>
                <li><strong>Growth Potential:</strong>  Strengthening your understanding of business principles and market dynamics will enhance your entrepreneurial potential.
                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        {{-- <p class="report-normal-text mt-4">
            You work well with others when the task is clearly defined and roles are straightforward. However, improving communication and learning to work more fluidly in collaborative, less structured environments can enhance your teamwork abilities.        </p> --}}
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li>
                    <strong>Current Strengths:</strong>  You can adapt to changing circumstances, applying practical and innovative insights to meet evolving needs.
                </li>
                <li>
                    <strong>Growth Potential:</strong>    Embrace continuous learning and remain informed about industry trends to enhance your agility in a rapidly changing environment.
                </li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Leadership through Empathy:</strong> Develop your leadership skills by participating in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.
                        </li>
                        <li>
                            <strong>Cultivating Creativity through Diverse Experiences:</strong>  Engage in activities that encourage innovative thinking and expose you to new ideas, such as attending creative workshops or brainstorming sessions.

                            </li>
                        <li>
                            <strong>Building Entrepreneurial Skills via Networking:</strong> Join entrepreneurial communities or attend workshops to learn from experienced entrepreneurs and gain insights into launching and managing a business.

                            </li>
                        <li>
                            <strong>Improving Team Collaboration through Communication Skills:</strong> Engage in team-building exercises that promote effective communication and collaboration, strengthening your ability to work with others.
                        </li>
                        <li>
                            <strong>Fostering Agility through Continuous Learning:</strong>  Regularly seek out opportunities to learn new skills or technologies that enhance your relevance and adaptability in a fast-paced environment.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
            As a <strong>Practical Innovator / Grounded Creative</strong>, your strengths lie in your ability to generate innovative ideas while grounding them in practical applications. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and ability to integrate creativity with practicality position you as a valuable asset in driving positive change and fostering connections. Embrace your innovative nature while nurturing your practical skills, and continue to explore new horizons in your journey of growth and self-discovery. 
        </p>
</div>


<?php elseif ($brain_profile_id == 11): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
        
        <div class="text-center">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
            Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You lead through careful planning and organization. Your methodical approach helps others understand the steps needed to achieve goals.
                </li>
                <li><strong>Growth Potential:</strong>  Developing your ability to inspire and guide others through effective communication can elevate your leadership impact.
                </li>
            </ul> </p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        {{-- <p class="report-normal-text mt-4">
            While you may not always be inclined towards abstract creativity, your strength lies in practical innovation. Focusing on problem-solving that incorporates both logical thinking and creative solutions can further expand your skill set.
        </p> --}}
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You prefer structured environments and may feel less comfortable in highly dynamic settings, but your planning skills can still translate well into gig opportunities.
                </li>
                <li><strong>Growth Potential:</strong> Building your tolerance for ambiguity and developing flexible strategies will help you thrive in gig-based roles.</li>
            </ul></p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        {{-- <p class="report-normal-text mt-4">
            You are more comfortable with stability and clear expectations, so entrepreneurship may not be your natural inclination. Building a risk-tolerance mindset and exploring calculated opportunities can help you grow in this area.
        </p> --}}
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You contribute significantly to team efforts by ensuring tasks are organized and completed on time.
                </li>
                <li><strong>Growth Potential:</strong> Improving your interpersonal skills and openness to others' ideas will enhance collaboration and team dynamics.</li>
            </ul> </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        {{-- <p class="report-normal-text mt-4">
            Adapting to constant change can be challenging for you. Developing a mindset of continuous learning and embracing technological advancements will help you stay competitive and agile in today's evolving landscape.
        </p> --}}
        </div>
    </div>
    </div>
</div>

<div class="middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Leadership through Emotional Intelligence:</strong> Participate in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.
                        </li>
                        <li>
                            <strong>Cultivating Creativity through Diverse Experiences:</strong>  Engage in activities outside your comfort zone that encourage innovative thinking, such as brainstorming sessions or creative workshops.

                            </li>
                        <li>
                            <strong>Building Entrepreneurial Skills via Mentorship and Experimentation:</strong> Join entrepreneurial communities or take small-scale initiatives to build confidence in identifying opportunities and taking risks.

                            </li>
                        <li>
                            <strong>Improving Team Collaboration through Effective Communication:</strong> Focus on enhancing your communication skills, particularly in group settings, to foster inclusivity and teamwork.
                        </li>
                        <li>
                            <strong>Fostering Agility through Continuous Learning:</strong>  Regularly seek out opportunities to learn new skills or adapt to changing circumstances to increase your relevance and flexibility in the workplace.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
            <strong>Grounded Thinker / Structured Planner</strong>, your strengths lie in your ability to analyze information, plan methodically, and create structured solutions to complex problems. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and strong organizational skills position you as a valuable asset in driving productivity and fostering connections. Embrace your grounded nature while nurturing your innovative potential, and continue to explore new opportunities for growth and self-discovery.
        </p>
</div>


<?php elseif ($brain_profile_id == 12): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
       
        <div class="text-center">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
            Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You lead through careful planning and organization. Your methodical approach helps others understand the steps needed to achieve goals.
                </li>
                <li><strong>Growth Potential:</strong>  Developing your ability to inspire and guide others through effective communication can elevate your leadership impact.
                </li>
            </ul> </p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        {{-- <p class="report-normal-text mt-4">
            While you may not always be inclined towards abstract creativity, your strength lies in practical innovation. Focusing on problem-solving that incorporates both logical thinking and creative solutions can further expand your skill set.
        </p> --}}
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You prefer structured environments and may feel less comfortable in highly dynamic settings, but your planning skills can still translate well into gig opportunities.
                </li>
                <li><strong>Growth Potential:</strong> Building your tolerance for ambiguity and developing flexible strategies will help you thrive in gig-based roles.</li>
            </ul> </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        {{-- <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You contribute significantly to team efforts by ensuring tasks are organized and completed on time.
                </li>
                <li><strong>Growth Potential:</strong> Improving your interpersonal skills and openness to others' ideas will enhance collaboration and team dynamics.</li>
            </ul>
        </p> --}}
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You contribute significantly to team efforts by ensuring tasks are organized and completed on time.
                </li>
                <li><strong>Growth Potential:</strong> Improving your interpersonal skills and openness to others' ideas will enhance collaboration and team dynamics.</li>
            </ul> </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        {{-- <p class="report-normal-text mt-4">
            Adapting to constant change can be challenging for you. Developing a mindset of continuous learning and embracing technological advancements will help you stay competitive and agile in today's evolving landscape.
        </p> --}}
        </div>
    </div>
    </div>
</div>

<div class="middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Leadership through Emotional Intelligence:</strong> Participate in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.
                        </li>
                        <li>
                            <strong>Cultivating Creativity through Diverse Experiences:</strong>  Engage in activities outside your comfort zone that encourage innovative thinking, such as brainstorming sessions or creative workshops.

                            </li>
                        <li>
                            <strong>Building Entrepreneurial Skills via Mentorship and Experimentation:</strong> Join entrepreneurial communities or take small-scale initiatives to build confidence in identifying opportunities and taking risks.

                            </li>
                        <li>
                            <strong>Improving Team Collaboration through Effective Communication:</strong> Focus on enhancing your communication skills, particularly in group settings, to foster inclusivity and teamwork.
                        </li>
                        <li>
                            <strong>Fostering Agility through Continuous Learning:</strong>  Regularly seek out opportunities to learn new skills or adapt to changing circumstances to increase your relevance and flexibility in the workplace.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
            <strong>Grounded Thinker / Structured Planner</strong>, your strengths lie in your ability to analyze information, plan methodically, and create structured solutions to complex problems. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and strong organizational skills position you as a valuable asset in driving productivity and fostering connections. Embrace your grounded nature while nurturing your innovative potential, and continue to explore new opportunities for growth and self-discovery.
        </p>
</div>

<?php elseif ($brain_profile_id == 13): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
        
        <div class="text-center">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
            Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You possess the ability to inspire others with your vision and creative ideas. Your enthusiasm can motivate those around you.
                </li>
                <li><strong>Growth Potential:</strong> Developing practical leadership skills, such as decision-making and strategic planning, can enhance your effectiveness in guiding teams.
                </li>
            </ul>  </p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  Your imaginative thinking allows you to generate a wide array of innovative ideas and solutions. You excel at conceptualizing new possibilities.
                </li>
                <li><strong>Growth Potential:</strong> Continue to nurture your creative thinking through diverse experiences, brainstorming sessions, and collaborative projects.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You thrive in flexible environments that allow for creative exploration and adaptability. Your ideas can drive innovation in gig-based roles.
                </li>
                <li><strong>Growth Potential:</strong> Building resilience in uncertain situations can help you navigate the dynamic nature of gig work more effectively.</li>
            </ul> </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  Your visionary mindset and ability to identify opportunities make you well-suited for entrepreneurial endeavors. You can think of unique solutions to problems.
                </li>
                <li><strong>Growth Potential:</strong> Strengthening your practical business skills, such as financial management and marketing, will enhance your entrepreneurial effectiveness.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You excel at generating ideas collaboratively, fostering an inclusive environment that encourages participation from others.
                </li>
                <li><strong>Growth Potential:</strong>Continue to develop your collaborative skills by actively seeking input and feedback from team members.</li>
            </ul>  </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong>  You demonstrate adaptability to new ideas and changes, often embracing innovative concepts. Your creativity helps in navigating dynamic environments.
                </li>
                <li><strong>Growth Potential:</strong> Focusing on developing a proactive mindset in response to rapid changes will enhance your adaptability and relevance.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Leadership through Emotional Intelligence:</strong> Participate in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.
                        </li>
                        <li>
                            <strong>Cultivating Creativity through Diverse Experiences:</strong>  Engage in activities that challenge your usual thinking patterns, such as interdisciplinary projects or creative workshops.

                            </li>
                        <li>
                            <strong>Building Entrepreneurial Skills via Networking:</strong> Join entrepreneurial groups or take part in small-scale initiatives to practice identifying opportunities and making decisions.

                            </li>
                        <li>
                            <strong>Improving Team Collaboration through Effective Communication:</strong> Focus on enhancing your communication skills, particularly in group settings. Consider workshops that emphasize active listening and empathy.
                        </li>
                        <li>
                            <strong>Fostering Agility through Continuous Learning:</strong> Regularly seek professional development opportunities to stay updated on industry trends. Online courses, seminars, or mentorship programs can enhance your skills and adaptability.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
            As a <strong>Visionary Dreamer / Conceptual Creative</strong>, your strengths lie in your ability to generate innovative ideas, inspire others, and conceptualize new possibilities. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and strong relational skills position you as a valuable asset in driving innovation and fostering connections. Embrace your imaginative nature while nurturing your practical skills, and continue to explore new opportunities for growth and self-discovery.
        </p>
</div>


<?php elseif ($brain_profile_id == 14): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
        
        <div class="text-center">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
            Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You can lead by example, especially in analytical tasks where your logical reasoning shines. Your independence encourages others to think critically.</li>
                <li><strong>Growth Potential:</strong> Developing interpersonal leadership skills, such as motivating and guiding teams, can enhance your impact in collaborative settings.</li>
            </ul></p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your analytical skills contribute to creative problem-solving. You can think outside the box when required, particularly in structured contexts.</li>
                <li><strong>Growth Potential:</strong> Actively engaging in creative exercises can help expand your creative thinking and application in various scenarios.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You excel in flexible, gig-based environments where you can utilize your analytical skills independently. Your ability to adapt to new challenges enhances your effectiveness.</li>
                <li><strong>Growth Potential:</strong> Continuing to develop skills relevant to gig work, such as self-marketing and networking, can further boost your success in this area.</li>
            </ul> </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your independent thinking allows you to identify opportunities and innovate solutions, making you well-suited for entrepreneurial ventures.</li>
                <li><strong>Growth Potential:</strong> Work on building your business acumen, learning about finance, marketing, and operational management to complement your creative vision.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You are a strong individual contributor, often excelling in tasks that require deep analysis and focus.</li>
                <li><strong>Growth Potential:</strong> Improving your collaboration skills and understanding group dynamics can help you work more effectively within teams.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You demonstrate adaptability to new ideas and changes, often approaching them with a logical mindset.</li>
                <li><strong>Growth Potential:</strong> Focusing on developing a proactive attitude toward rapid changes will enhance your agility in diverse environments.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>
<div class="middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Leadership through Emotional Intelligence: </strong> Participate in workshops that focus on emotional intelligence and interpersonal skills to improve your ability to inspire and guide others.
                        </li>
                        <li>
                            <strong>Cultivating Creativity through Diverse Experiences:</strong>  Engage in activities that challenge your analytical thinking, such as design thinking workshops or collaborative brainstorming sessions.
                        </li>
                        <li>
                            <strong>Building Entrepreneurial Skills via Networking:</strong> Join entrepreneurial communities or take part in pitch competitions to practice identifying opportunities and making strategic decisions in real-world contexts.
                        </li>
                        <li>
                            <strong>Improving Team Collaboration through Effective Communication:</strong> Focus on enhancing your communication skills, particularly in group settings. Consider workshops that emphasize active listening and collaboration.
                        </li>
                        <li>
                            <strong>Fostering Agility through Continuous Learning:</strong> Regularly seek professional development opportunities to stay updated on industry trends. Online courses, seminars, or mentorship programs can enhance your skills and adaptability.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
            As an <strong>Independent Problem-Solver / Analytical Innovators </strong>, your strengths lie in your ability to analyze complex problems, generate innovative solutions, and think independently. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and strong analytical skills position you as a valuable asset in driving innovation and problem-solving. Embrace your independent nature while nurturing your interpersonal skills, and continue to explore new opportunities for growth and self-discovery.
        </p>
</div>


<?php elseif ($brain_profile_id == 15): 
if ($age >= 12 && $age <= 14){
  //Age 12-14 content here  
}
if ($age >= 15 && $age <= 18){
  //Age 15-18 content here    
}
if ($age > 18){
  //Adult content here    
}
?>

<div class="dashboard-page-content pb-5">
    <div class="p-3 w-100" style="padding-left: 40px !important;">
        
        <div class="text-center">
         <img src="{{ asset('assets/images/growth.png') }}" class="side-img-desktop2">
        </div>
        
        <h2 class="report-heading mt-5">Your Indices for Future Growth:</h2>
         <p class="report-normal-text mt-4">
            Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.
        </p>
        
        <h2 class="report-heading mt-5">Let's Check Your Future Opportunities</h2>
        
        <div class="row align-items-center mt-4">
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalOne">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/1.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Leadership</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalTwo">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/22.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Creativity</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-blue" data-bs-toggle="modal" data-bs-target="#ModalThree">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/3.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">GIG Potential</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-green" data-bs-toggle="modal" data-bs-target="#ModalFour">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/4.png') }}" class="w-100" >
                        </div>
                        <div class="col-8">
                            <h2 class="title">Entrepreneurship</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-orange" data-bs-toggle="modal" data-bs-target="#ModalFive">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/5.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">Team Collaboration Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="report-opertunities-card bg-yellow" data-bs-toggle="modal" data-bs-target="#ModalSix">
                    <div class="row align-items-center">
                        <div class="col-4">
                             <img src="{{ asset('assets/images/6.png') }}" class="w-100">
                        </div>
                        <div class="col-8">
                            <h2 class="title">21st-Century Agility Index</h2>
                            <h2 class="short-description mt-2">Short Discription</h2>
                        </div>
                    </div>
                    <i class="fa-solid fa-lock lock-icon"></i>
                </div>
            </div>
        </div>
        
        <!--<p class="report-normal-text mt-4">-->
        <!--   <strong>Your Brain Dominance and Thinking Preferences</strong>-->
        <!--</p>-->
        
        <!--<div class="row align-items-center mt-2">-->
        <!--    <div class="col-3">-->
        <!--         <img src="{{ asset('assets/images/reportimg1.png') }}" class="w-100">-->
        <!--    </div>-->
        <!--    <div class="col-9">-->
        <!--         <p class="report-normal-text"><strong>Multi Tasking</strong> </p>-->
        <!--        <div class="progress report-progress-bar mt-2">-->
        <!--          <div class="progress-bar bg-yellow" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
    </div>
    

</div>


<div class="modal fade report_modal" id="ModalOne" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Leadership</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Leadership Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Leadership</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Leadership</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You naturally inspire and motivate others, using your emotional intelligence and understanding of group dynamics to foster collaboration.</li>
                <li><strong>Growth Potential:</strong>  Continue to enhance your leadership skills by seeking out opportunities for mentorship and community engagement.</li>
            </ul>      </p>
        </div>
    </div>
    </div>
</div>


<div class="modal fade report_modal" id="ModalTwo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Creativity</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Creativity Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Creativity</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Creativity</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your ability to integrate diverse ideas allows for innovative problem-solving and creative thinking.</li>
                <li><strong>Growth Potential:</strong> Explore new creative outlets and interdisciplinary projects to further expand your creative toolkit.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalThree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">GIG Potential</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">GIG Potential Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">GIG Potential</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">GIG Potential</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You can adapt to gig-based work environments, using your relational skills to build networks and connect with others.</li>
                <li><strong>Growth Potential:</strong> Develop self-marketing skills and seek out opportunities that align with your interests and values.</li>
            </ul>     </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFour" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Entrepreneurship</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Entrepreneurship Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Entrepreneurship</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}
        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Entrepreneurship</h3>
                <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> Your balanced approach enables you to identify opportunities and create solutions that benefit both you and communities.</li>
                <li><strong>Growth Potential:</strong> Strengthen your business acumen and risk assessment skills to enhance your entrepreneurial effectiveness.</li>
            </ul>
            
        </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalFive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">Team Collaboration Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">Team Collaboration Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">Team Collaboration Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                   <img src="{{ asset('assets/images/Meter-09.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">Team Collaboration Index</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You excel in collaborative environments, valuing input from others and fostering a sense of belonging within teams.</li>
                <li><strong>Growth Potential:</strong> Continue to improve your facilitation skills and conflict resolution strategies to enhance team dynamics.</li>
            </ul>    </p>
        </div>
    </div>
    </div>
</div>

<div class="modal fade report_modal" id="ModalSix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h5 class="modal-title report-heading text-center" id="staticBackdropLabel">21st-Century Agility Index</h5>
        <div class="text-center pt-4 pb-4">
            <img src="{{ asset('assets/images/brainnew3.png') }}" class="w-50">
        </div>
        <div class="row">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 1</p>
                <h3 class="mb-0">{{$brain_score->l1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 2</p>
                <h3 class="mb-0">{{$brain_score->l2_score}}%</h3>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 3</p>
                <h3 class="mb-0">{{$brain_score->r1_score}}%</h3>
            </div>
            </div>
            <div class="col-6">
            <div class="box-data p-4">
                <p class="mb-0">21st-Century Agility Index Style 4</p>
                <h3 class="mb-0">{{$brain_score->r2_score}}%</h3>
            </div>
            </div>
        </div>
        
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-4">
                <h3 class="section-title3 mb-0">21st-Century Agility Index</h3>
            </div>
            <div class="col-8">
                <div class="d-flex square-progress">
                    <img src="{{ asset('assets/images/Meter-08.png') }}" height="auto" width="100%">
                </div>
            </div>
        </div> --}}

        <div class="row mt-4 align-items-center">
            <div class="row d-flex align-items-center justify-content-center">
                <h3 class="section-title3 mb-0 text-center">21-Centuruary Agility Index</h3>
                <img src="{{ asset('assets/images/Meter-10.png') }}" height="auto" width="100%">
            </div>
        </div>
        
        <p class="report-normal-text mt-4">
            <ul>
                <li><strong>Current Strengths:</strong> You demonstrate adaptability to change and a willingness to embrace new ideas and approaches.</li>
                <li><strong>Growth Potential:</strong> Stay proactive in seeking continuous learning opportunities and developing new skills to remain relevant in fast-paced environments.</li>
            </ul>
        </p>
        </div>
    </div>
    </div>
</div>

<div class="middle-content p-3 w-100">
        <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2>
        <div class="row align-items-center">
            <div class="col-12">
                <p class="report-normal-text mt-4">
                    <ul>
                        <li>
                            <strong>Enhancing Leadership through Emotional Intelligence:</strong> Participate in leadership training that focuses on empathy, active listening, and relationship-building to strengthen your leadership impact.
                        </li>
                        <li>
                            <strong>Cultivating Creativity through Diverse Experiences:</strong>  Engage in interdisciplinary projects that allow you to integrate various perspectives, encouraging innovative solutions.
                        </li>
                        <li>
                            <strong>Building Entrepreneurial Skills via Networking:</strong> Attend workshops or join entrepreneurial communities to practice identifying opportunities and making strategic decisions.
                        </li>
                        <li>
                            <strong>Improving Team Collaboration through Effective Facilitation:</strong> Focus on enhancing your facilitation skills to encourage productive discussions and collaborative problem-solving.
                        </li>
                        <li>
                            <strong>Fostering Agility through Continuous Learning:</strong>  Regularly invest time in professional development opportunities, such as courses or workshops, to enhance your adaptability and skillset.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        
        <h2 class="report-heading mt-5">Conclusion: Unlocking Your Full Potential</h2>
         <p class="report-normal-text mt-4">
            As a <strong>Quadruple Pie (Harmonized Thinker / Balanced Integrator)</strong>, your strengths lie in your ability to synthesize diverse ideas, foster collaboration, and navigate complex social dynamics. By focusing on areas such as leadership, creativity, and team collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and relational abilities position you as a valuable asset in driving innovation and harmony in any environment. Embrace your integrative nature while nurturing your leadership skills, and continue to explore new opportunities for growth and self-discovery.
        </p>
</div>

<?php elseif ($brain_profile_id == null): 
?>

    <div class="dashboard-page-content pb-5">
        <div class="p-3 w-100">
            <h2 class="report-heading">Basic Brain Report</h2>
            <p class="report-normal-text mt-4">
                no data
            </p>
        </div>
    </div>


<?php else: ?>

    <div class="dashboard-page-content pb-5">
        <div class="p-3 w-100">
            <h2 class="report-heading">Basic Brain Report</h2>
            <p class="report-normal-text mt-4">
                no data
            </p>
        </div>
    </div>
    
<?php endif; ?>
            </div>

            {{-- section 4 --}}
            {{-- <div class="row mb-4">
                <div class="col-12 col-lg-4 d-flex d-lg-block justify-content-center">
                    <img src="{{ asset('assets/images/thinking.png') }}" alt="" height="250px">
                </div>


                <div class="col-12 col-lg-8 d-flex flex-column justify-content-center">

                    <h5 class="dashbaord-section-title">Your Indices for Future Growth</h5>
                    <p>
                        Understanding and evaluating various indices such as Leadership, Creativity, GIG Potential,
                        Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable
                        insights into different aspects of your personal and professional development. These indices
                        measure distinct traits and capabilities that are essential for success in today’s dynamic
                        environment.
                    </p>

                </div>
            </div> --}}
            {{-- <button onclick="showProfileId()">Show Profile ID</button> --}}


            {{-- section 5 --}}
            
            
           {{-- ---------------------------------------------------------------------------------------------------------------------  --}}
            {{-- section 6 --}}
            <div class="row mb-4">
                <h6 class="dashbaord-section-title">Your Brain Dominance and Thinking Preferences </h6>

                <div class="col-12 col-md-4">
                    <p>Please select areas to know about more</p>
                    <canvas id="radarChart" width="210px" height="238px"></canvas>
                
                </div>               
                <div class="col-12 col-md-8 d-flex flex-column mt-4" id="contentBox">
                        <h2 id="contentTitle"></h2>
                        <p id="contentText"></p>
                        <button class="download-report-btn mt-4">Download Report </button>   
                </div>

            {{-- section 7 --}}
            <div class="mb-4">
                <h3 class="dashbaord-section-title">Personalized Brain Growth Tips</h3>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="card brain-growth-tip-card-1 position-relative">

                            <div class="position-absolute info-badge d-flex card">

                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                </svg>


                                <p>Showing 1 of 10 videos</p>
                            </div>

                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h5 class="brain-growth-card-bottom-text">Multitasking</h5>
                            <a href="{{ url('/multi-tasking') }}"><button class="view-all-button">View All</button></a>
                            

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="card brain-growth-tip-card-2 position-relative">

                            <div class="position-absolute info-badge d-flex card">

                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                </svg>


                                <p>Showing 1 of 10 videos</p>
                            </div>

                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h5 class="brain-growth-card-bottom-text">Balance Skills</h5>
                            <a href="{{ url('/multi-tasking') }}"><button class="view-all-button">View All</button></a>

                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-4 mb-4">
                        <div class="card brain-growth-tip-card-3 position-relative">

                            <div class="position-absolute info-badge d-flex card">

                                <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10"
                                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path fill="#ffffff"
                                        d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32l224 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-224 0c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32l288 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-288 0c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                </svg>


                                <p>Showing 1 of 10 videos</p>
                            </div>

                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <h5 class="brain-growth-card-bottom-text">Creative Thinking</h5>
                            <a href="{{ url('/multi-tasking') }}"><button class="view-all-button">View All</button></a>

                        </div>
                    </div>
                </div>
            </div>

            {{-- section 8--}}
            <div class="row mb-4">

                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #F1935D">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-1.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>


                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #85D6A5">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-2.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #9AE4E3">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-3.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #F1935D">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-1.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #F6C94D">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-1.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>


                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #F1935D">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-5.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>

                <div class="col-sm-6 col-md-4 col-lg-4 mb-3">
                    <a href="">
                        <div class="learn-more-item-box position-relative" style="background-color: #9AE4E3">
                            <div class=" d-flex flex-column justify-content-center">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img class="learn-more-item-box-img"
                                        src="{{ asset('assets/images/dashboard-new/cognitive profile-main image-4.png') }}"
                                        alt="">
    
                                </div>
                                <div class="d-flex flex-column align-items-center learn-more-item-box-text">
                                    <p class="m-0">Advanced Brain Report</p>
                                    <p class="m-0">Short descriptions</p>
                                </div>
    
                            </div>
    
                            <div class="position-absolute">
                                <div class="position-absolute learn-more">
                                    <img class="rounded-circle" src="{{ asset('assets/images/lock.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>

            </div>


            {{-- section 9 --}}
            <div class="row mb-4">
                <h3 class="dashbaord-section-title">Upcoming Webinars</h3>
                <div class="row">
                    <div class="col-12 col-lg-8 pe-3 card">
                        <div class="card-body">
                            <div id='calendar'></div>
                        </div>
                        
                    </div>
                       
                            
                </div>
            </div>

            {{-- section 10 --}}
            <div class="row mb-4">
                <div class="d-flex mb-5">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-5 p-0">
                        <img src="{{ asset('assets/images/dashboard-new/consultation-booking.png') }}" alt="" class="booking-img">
                    </div>

                    <div class="col-12 col-md-8 col-lg-8 col-xl-7 d-flex align-items-center">
                        <div class="booking">
                            <h5>Consultation Booking</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo harum eaque dolore vel praesentium officiis quia dolor quibusdam, odit sapiente maiores consequatur sed, nam ab consequuntur. Voluptatum a eum consequuntur.</p>
                            <button class="yellow-send-btn">Book now</button>
                        </div>
                    </div>

                </div>


                <div class="d-flex mb-5">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-5 p-0">
                        <img src="{{ asset('assets/images/dashboard-new/listen-your-brain.png') }}" alt="" class="booking-img">
                    </div>

                    <div class="col-12 col-md-8 col-lg-8 col-xl-7 d-flex align-items-center">
                        <div class="booking">
                            <h5>Listen To Your Brain</h5>
                            <p>
                                <ul>
                                    <li>- Quick & Easy EEG</li>
                                    <li>- Flexible fit for all</li>
                                    <li>- Measure and analyse in 10 mins.</li>
                                    <li>- Al-driven analysis & summaries</li>
                                    <li>- HRV measurement</li>
                                    <li>- World’s first integrated EEG-LED</li>
                                    <li><li>- Flexible fit for all</li></li>
                                </ul>
                            </p>
                            <button class="yellow-send-btn">Book now</button>
                        </div>
                    </div>

                </div>


                <div class="d-flex mb-5">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-5 p-0">
                        <img src="{{ asset('assets/images/dashboard-new/parent-community.png') }}" alt="" class="booking-img">
                    </div>

                    <div class="col-12 col-md-8 col-lg-8 col-xl-7 d-flex align-items-center">
                        <div class="booking">
                            <h5>Consultation Booking</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo harum eaque dolore vel praesentium officiis quia dolor quibusdam, odit sapiente maiores consequatur sed, nam ab consequuntur. Voluptatum a eum consequuntur.</p>
                            <button class="yellow-send-btn">Book now</button>
                        </div>
                    </div>

                </div>


                <div class="d-flex mb-5">
                    <div class="col-12 col-md-4 col-lg-4 col-xl-5 p-0">
                        <img src="{{ asset('assets/images/dashboard-new/become-affiliate.png') }}" alt="" class="booking-img">
                    </div>

                    <div class="col-12 col-md-8 col-lg-8 col-xl-7 d-flex align-items-center">
                        <div class="booking">
                            <h5>Consultation Booking</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo harum eaque dolore vel praesentium officiis quia dolor quibusdam, odit sapiente maiores consequatur sed, nam ab consequuntur. Voluptatum a eum consequuntur.</p>
                            <button class="yellow-send-btn">Book now</button>
                        </div>
                    </div>

                </div>

                

                
            </div>
        </div>

    </div>

</div>


</div>
</div>



@include('layouts.dashboard-footer')


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('radarChart').getContext('2d');
        const labels = ['R', 'S', 'C', 'P1', 'P2', 'A']; // Renamed duplicate 'P' to 'P1' and 'P2'

        // Titles for each label
        const labelTitles = {
            'R': 'Realist',
            'S': 'Strategic',
            'C': 'Creative',
            'P1': 'Practical',
            'P2': 'Protective',
            'A': 'Analytical'
        };

        // Content data for each label, including additional list data
        const contentData = {
            'R': {
                mainContent: [
                    { Characteristics: 'Realists focus on practical solutions and tangible results. They value efficiency and structure.' },
                    { Outcomes: 'This dimension leads to success in roles requiring hands-on problem-solving and operational management.' },
                    { Relationships: 'Realists prioritize reliability and shared goals in their relationships.' },
                    { LifeChoices: 'They often choose careers in business, technology, or project management.' }
                ],
                additionalList: [
                    'Pragmatism: Focus on practical approaches and real-world applications of ideas.',
                    'Common Sense: Ability to apply practical knowledge and sound judgment in everyday situations.',
                    'Resource Management: Skilled at efficiently utilizing available resources to achieve goals.',
                    'Goal Orientation: Clear focus on achieving tangible outcomes and objectives.',
                    'Real-World Problem Solving: Effective in addressing practical challenges through straightforward solutions.',
                    'Adaptability: Ability to adjust to changing circumstances and environments quickly.',
                    'Hands-On Approach: Preference for experiential learning and practical involvement in tasks.',
                    'Implementation Focus: Strong emphasis on executing plans and strategies effectively.',
                    'Realistic Assessment: Ability to assess feasibility and potential obstacles in plans and projects.',
                    'Time Management: Skilled at prioritizing tasks and managing time efficiently to meet deadlines.',

                ]
            },
            'S': {
                mainContent: [
                    { Characteristics: 'Strategic individuals excel in planning and long-term thinking. They are visionary and goal-oriented.' },
                    { Outcomes: 'This dimension is associated with leadership roles and strategic decision-making.' },
                    { Relationships: 'Strategic individuals seek partners who share their vision and ambition.' },
                    { LifeChoices: 'They often pursue careers in management, consulting, or entrepreneurship.' }
                ],
                additionalList: [
                    'Long-Term Planning: Ability to formulate plans that consider future outcomes and implications.',
                    'Visionary Thinking: Skilled at creating and articulating a clear vision for the future.',
                    'Risk Assessment: Ability to evaluate potential risks and benefits associated with decisions.',
                    'Systems Thinking: Understanding of how various components within a system interact and affect each other.',
                    'Decision-Making: Proficient in making informed decisions based on data analysis and foresight.',
                    'Prioritization: Ability to identify and focus on the most critical tasks and objectives.',
                    'Resource Allocation: Skilled at distributing resources effectively to achieve strategic goals.',
                    'Scenario Planning: Ability to anticipate various future scenarios and plan accordingly.',
                    'Feedback Utilization: Skilled at using feedback to refine strategies and improve outcomes.',
                    'Adaptability in Strategy: Ability to adjust strategies based on changing circumstances or new information.'

                ]
            },
            'C': {
                mainContent: [
                    { Characteristics: 'Creative individuals thrive on creativity and new ideas. They are driven by curiosity and a desire to improve.' },
                    { Outcomes: 'This dimension leads to success in artistic, design, and entrepreneurial fields.' },
                    { Relationships: 'Creative individuals value partners who appreciate their unique perspectives and encourage their self-expression.' },
                    { LifeChoices: 'They often choose careers in art, writing, or other creative industries.' }
                ],
                additionalList: [
                    'Imaginative Thinking: Ability to generate novel ideas and envision possibilities beyond the ordinary.',
                    'Innovative Solutions: Skilled at developing unique solutions to problems through unconventional approaches.',
                    'Artistic Expression: Proficiency in expressing thoughts and feelings through various artistic mediums.',
                    'Curiosity: A strong desire to explore, discover, and understand new concepts and experiences.',
                    'Flexible Thinking: Capacity to think outside the box and adapt ideas to different contexts.',
                    'Risk-Taking: Willingness to experiment with new ideas and take calculated risks.',
                    'Divergent Thinking: Ability to generate multiple solutions and perspectives on a single issue.',
                    'Collaboration: Effective at working with others to brainstorm and develop creative ideas.',
                    'Storytelling: Proficient in conveying messages and concepts through compelling narratives.',
                    'Aesthetic Appreciation: Strong sense of beauty and design, leading to innovative creations.'

                ]
            },
            'P1': {
                mainContent: [
                    { Characteristics: 'Practical individuals excel in understanding and supporting others. They are compassionate and emotionally intelligent.' },
                    { Outcomes: 'This dimension is linked to strong interpersonal skills and success in roles that require teamwork and leadership.' },
                    { Relationships: 'Empathetic individuals prioritize emotional connections and seek partners who value mutual support and understanding.' },
                    { LifeChoices: 'They often choose careers in education, counseling, or social work.' }
                ],
                additionalList: [
                    'Hands-On Skills: Proficiency in practical tasks and applying theoretical knowledge to real-life situations.',
                    'Functional Problem Solving: Ability to identify and implement solutions that work effectively in real-world contexts.',
                    'Common Sense Applications: Use of practical wisdom in everyday decision-making.',
                    'Task Management: Skilled at organizing and executing tasks efficiently.',
                    'Process Improvement: Ability to analyze and improve processes for better efficiency.',
                    'Technical Proficiency: Skilled in using tools and technology effectively for practical tasks.',
                    'Sustainability Focus: Awareness of sustainable practices in problem-solving and project execution.',
                    'Work Ethic: Strong commitment to completing tasks diligently and responsibly.',
                    'User-Centric Design: Ability to create solutions that prioritize user needs and experiences.',
                    'Collaboration in Practice: Effective teamwork skills, focusing on achieving practical outcomes collectively.',

                ]
            },
            'P2': {
                mainContent: [
                    { Characteristics: 'Protective individuals maintain a positive outlook and focus on opportunities. They are resilient and forward-thinking.' },
                    { Outcomes: 'This dimension leads to success in dynamic and unpredictable environments, such as sales, marketing, or public relations.' },
                    { Relationships: 'Protective individuals seek partners who share their enthusiasm and positivity.' },
                    { LifeChoices: 'They often choose careers that allow for growth and personal development.' }
                ],
                additionalList: [
                    'Self-Preservation: Instinctive responses to threats and danger, prioritizing safety and well-being.',
                    'Crisis Management: Ability to remain calm and effective in emergency situations.',
                    'Emotional Regulation: Skills in managing and controlling emotional responses to stress.',
                    'Risk Mitigation: Ability to identify and reduce potential risks in various scenarios.',
                    'Supportive Behavior: Tendency to support and protect others in distressing situations.',
                    'Boundary Setting: Ability to establish and maintain personal boundaries for emotional safety.',
                    'Coping Strategies: Development of effective strategies to handle stress and adversity.',
                    'Conflict Resolution: Skills in resolving disputes and fostering harmony in relationships.',
                    'Resilience Building: Focus on building mental strength to recover from setbacks and challenges.',
                    'Safety Awareness: Proactive identification of potential hazards in the environment to ensure safety.'

                ]
            },
            'A': {
                mainContent: [
                    { Characteristics: 'Analytical individuals excel in critical thinking, problem-solving, and data interpretation. They approach situations logically and systematically.' },
                    { Outcomes: 'This dimension is associated with academic success and effective decision-making in complex scenarios.' },
                    { Relationships: 'Analytical individuals may approach relationships with a focus on logical compatibility, seeking partners who share similar values and intellectual interests.' },
                    { LifeChoices: 'They are likely to make career choices based on logical analysis of potential outcomes, favoring fields such as science, mathematics, and engineering.' }
                ],
                additionalList: [
                    'Critical Thinking: Ability to evaluate information logically and make reasoned judgments.',
                    'Data Interpretation: Skilled at analyzing data sets and identifying trends or anomalies.',
                    'Problem Solving: Proficient in identifying problems and developing systematic solutions.',
                    'Attention to Detail: Keen focus on details, ensuring accuracy and precision in work.',
                    'Quantitative Skills: Strong mathematical and statistical abilities for numerical analysis.',
                    'Logical Reasoning: Ability to form conclusions based on structured reasoning and evidence.',
                    'Research Skills: Proficient in conducting thorough research to gather relevant information.',
                    'Objective Evaluation: Ability to assess situations without bias, focusing on factual data.',
                    'Pattern Recognition: Skilled at recognizing patterns and relationships in complex information.',
                    'Structured Thinking: Tendency to organize thoughts and tasks methodically for efficiency.'

                ]
            }
        };

        // Colors for vertices
        const vertexColors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'];

        // Chart data
        const data = {
            labels: labels,
            datasets: [{
                label: 'My First Dataset',
                data: [100, 100, 100, 100, 100, 100],
                fill: true,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'black',
                borderWidth: 2,
                pointRadius: 8,
                pointBackgroundColor: vertexColors,
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'black',
                pointHoverRadius: 10
            }, {
                label: 'My Second Dataset',
                data: [40, 39.9, 40, 40, 40, 40],
                fill: true,
                backgroundColor: 'rgba(255, 255, 0, 0.5)',
                borderColor: 'yellow',
                borderWidth: 1,
                pointRadius: 0,
                pointBackgroundColor: 'transparent',
                pointBorderColor: 'transparent',
                pointHoverBackgroundColor: 'transparent',
                pointHoverBorderColor: 'transparent'
            }]
        };

        // Chart configuration
        const config = {
            type: 'radar',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false }
                },
                scales: {
                    r: {
                        min: 0,
                        max: 100,
                        beginAtZero: true
                    }
                },
                onClick: function (event, elements) {
                    if (elements.length > 0) {
                        const datasetIndex = elements[0].datasetIndex;
                        const index = elements[0].index;

                        if (datasetIndex === 0) {
                            const clickedLabel = labels[index];
                            const clickedTitle = labelTitles[clickedLabel] || 'Unknown';
                            const clickedContent = contentData[clickedLabel] || {};

                            // Format main content as list items
                            let formattedMainContent = '';
                            (clickedContent.mainContent || []).forEach(item => {
                                Object.entries(item).forEach(([key, value]) => {
                                    formattedMainContent += `<li><strong>${key}:</strong> ${value}</li>`;
                                });
                            });

                            // Format additional list data
                            let formattedAdditionalList = '';
                            (clickedContent.additionalList || []).forEach(item => {
                                formattedAdditionalList += `<li>${item}</li>`;
                            });

                            // Combine both sections
                            const fullContent = `
                                
                                <ul>${formattedMainContent}</ul>
                                
                                <ul>${formattedAdditionalList}</ul>
                            `;

                            // Display the content in the content box
                            document.getElementById('contentBox').style.display = "block";
                            document.getElementById('contentTitle').innerText = clickedTitle;
                            document.getElementById('contentText').innerHTML = fullContent;
                        }
                    }
                }
            }
        };

        // Initialize the chart
        const myChart = new Chart(ctx, config);

        // Simulate click on 'R' after chart initialization
        setTimeout(() => {
            const rIndex = labels.indexOf('R');
            if (rIndex !== -1) {
                const rElement = {
                    datasetIndex: 0,
                    index: rIndex
                };
                config.options.onClick(null, [rElement]); // Trigger the onClick event
            }
        }, 100);
    });
</script>






<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth'
    });
    calendar.render();
  });

</script>
{{-- <script>
    var brainProfileId = <?php echo json_encode($brain_profile_id); ?>;

    function showProfileId() {
        alert("Profile ID: " + brainProfileId);
    }
</script> --}}

<script>
    var brainProfileId = @json($brain_profile_id);
    console.log("Brain Profile ID: " + brainProfileId); // Debugging

    // Fix: Remove duplicate 'var descriptions'
    var descriptions = {
        1: [
            "Your brain is highly fact-oriented, with a natural inclination to dive deep into problems.",
            "You tend to be direct and analytical, always seeking certainty before taking action."
        ],
        2: [
            "Your brain is highly fact-oriented, with a natural inclination to tackle practical problems head-on. You are detail-focused and methodical, preferring to approach tasks in a systematic manner. Your strength lies in your ability to take complex information and break it down into manageable, actionable steps. You tend to rely on proven methods and consistent processes, ensuring that everything is thoroughly planned before you proceed.",
            "Your logical and organized approach means you excel in environments that require precision and hands-on problem-solving. Others admire your dependability and your capacity to bring clarity and structure to ambiguous situations. You are driven by a need for certainty and prefer to operate in familiar, controlled environments where outcomes can be predicted based on reliable data.",

            "Your tendency to stick to facts over assumptions allows you to make informed decisions that are grounded in reality. While others might be swayed by emotions or abstract ideas, you stay focused on what is practical and can be immediately applied."
        ],


        3: [
            "Your brain is naturally wired for empathy, connection, and understanding others. As an Empathetic Connector, Relational Harmonizer, or Compassionate Thinker, you excel in creating deep relationships, building harmony, and approaching situations from an emotionally intelligent perspective. You are highly attuned to the feelings of those around you and often act as a bridge in resolving conflicts or helping others feel heard and understood.",

            "You thrive in environments where collaboration, communication, and emotional awareness are valued. Your strength lies in your ability to navigate complex social dynamics, offering compassion, and creating a sense of unity and shared purpose in groups. You are often relied upon to be the emotional anchor in both personal and professional contexts."
        ],
        4: [
            "Your brain is wired for innovation, creativity, and unconventional thinking. As an Innovative Maverick, Creative Visionary, or Non-Conformist Thinker, you thrive in environments that encourage original thought and exploration beyond traditional boundaries. Your approach to problem-solving is characterized by a willingness to take risks, think outside the box, and challenge the status quo.",

            "You excel at generating new ideas and envisioning possibilities that others might overlook. This imaginative capability allows you to see connections and solutions in unique ways, making you a valuable asset in creative fields. Your natural inclination to question norms and push limits inspires others to think differently and embrace change."
        ],
        5: [
            "Your brain is characterized by a harmonious blend of analytical and practical thinking. As a Balanced Logical Thinker or Dual Analytical-Practical, you possess the ability to approach problems with both a logical framework and a practical mindset. This unique combination allows you to analyze situations thoroughly while also considering real-world applications and outcomes.",
            "You thrive on structure, data, and clear reasoning, which helps you make informed decisions. Your analytical nature enables you to dissect complex problems into manageable components, while your practical side encourages you to implement effective solutions that produce tangible results. This balance empowers you to navigate challenges efficiently and contributes to your ability to succeed in various professional contexts."
        ],
        6: [
            "Your brain is characterized by a unique blend of relational and creative thinking. As a Relational Creative or Creative Connector, you possess the ability to form deep connections with others while also expressing your creativity in innovative ways. Your strengths lie in your capacity to understand emotions, foster relationships, and think outside the box to generate new ideas.",
            "You thrive on collaboration and enjoy environments where you can connect with others to brainstorm, share ideas, and inspire creativity. Your ability to empathize with others allows you to build strong interpersonal relationships, making you a valuable team member and a source of support for those around you."
        ],
        7: [
            "Your brain is characterized by a unique blend of logical analysis and creative problem-solving. As an Innovative Analyst or Creative Problem-Solver, you possess the ability to dissect complex issues while also thinking outside the box to generate innovative solutions. Your strengths lie in your analytical thinking, critical reasoning, and capacity to apply creativity in practical ways.",

            "You thrive on tackling challenging problems, utilizing your logical skills to assess situations and develop effective strategies. Your creative thinking enables you to approach tasks with a fresh perspective, allowing you to explore new ideas and possibilities. This combination of analytical rigor and creative insight makes you a valuable asset in various settings."
        ],
        8: [
            "Your brain is characterized by a harmonious blend of practicality and relational insight. As a Practical Empath or Grounded Relational Thinker, you possess a deep understanding of human emotions and interpersonal dynamics, coupled with a pragmatic approach to problem-solving. Your strengths lie in your ability to empathize with others while providing grounded solutions to everyday challenges.",

            "You thrive in environments where emotional intelligence and practical considerations intersect, allowing you to support others effectively while also addressing real-world issues. Your relational skills enable you to build strong connections, fostering trust and collaboration among peers."
        ],
        9: [
            "Your brain is characterized by a unique combination of analytical thinking and relational understanding. As an Analytical Connector or Relational Analyst, you possess the ability to dissect complex information while maintaining a strong focus on interpersonal relationships. Your strengths lie in your capacity to analyze data, identify patterns, and connect with others on an emotional level.",

            "You thrive in environments where logical reasoning and relational dynamics intersect, allowing you to support others effectively while addressing analytical challenges. Your relational skills enable you to build strong connections, fostering trust and collaboration among peers."
        ],
        10: [
            
            "Your brain is characterized by a unique combination of practical thinking and creative innovation. As a Practical Innovator or Grounded Creative, you possess the ability to generate new ideas while grounding them in real-world applications. Your strengths lie in your capacity to think outside the box while ensuring that your creative ideas are feasible and actionable.",

            "You thrive in environments where practical skills and creative thinking intersect, allowing you to apply your knowledge effectively to solve problems and create value. Your ability to integrate creativity with practicality makes you an asset in any team setting, where you can inspire others while contributing innovative solutions."
        ],
        11: [
            "Your brain is characterized by a strong inclination toward structure, organization, and practical thinking. As a Grounded Thinker or Structured Planner, you possess the ability to analyze situations logically and develop clear, actionable plans. You thrive in environments where clarity, organization, and methodical approaches are valued, allowing you to bring order to complex tasks and achieve your goals effectively.",

            "You excel at identifying the details that contribute to a bigger picture, making you adept at managing projects, coordinating tasks, and ensuring that everything runs smoothly. Your preference for structured environments helps you minimize chaos and foster productivity."
        ],
        12: [
            "Your brain is characterized by a strong inclination towards abstract thinking, creativity, and relational dynamics. As an Abstract Idealist or Relational Planner, you possess the ability to envision possibilities and explore ideas beyond the immediate reality. You thrive in environments where creativity is valued, and you can connect with others on a meaningful level.",

            "Your thought process often involves considering the big picture and imagining future possibilities. You are drawn to ideas and concepts that inspire and motivate you, and you seek to implement plans that align with your values and ideals. Your relational nature allows you to understand and empathize with others, fostering strong connections and collaborative efforts."
        ],
        13: [
            "Your brain is characterized by a vibrant and imaginative way of thinking that prioritizes creative exploration, abstract concepts, and visionary ideas. As a Visionary Dreamer or Conceptual Creative, you have a unique ability to envision possibilities and generate innovative ideas. You thrive in environments that allow for creative expression and conceptual thinking.",

            "Your thought process often involves exploring abstract ideas, generating new concepts, and seeking connections between different subjects. You are drawn to opportunities that stimulate your imagination and allow you to think outside the box. Your creativity is not just limited to art; it extends to problem-solving and conceptualizing new ways of thinking."
        ],
        14: [
            "Your brain is characterized by a strong analytical approach to problem-solving and a desire for independence in your thinking. As an Independent Problem-Solver or Analytical Innovator, you have a unique ability to dissect complex problems and generate innovative solutions. You thrive in environments that allow you to explore ideas independently while also valuing logical reasoning and critical thinking.",

            "Your thought process often involves examining details, analyzing information, and seeking effective solutions to challenges. You are drawn to opportunities that stimulate your intellect and allow for individual exploration of concepts."
        ],
        15: [
            "Your brain is characterized by a unique blend of analytical, relational, and creative thinking. As a Harmonized Thinker or Balanced Integrator, you excel in environments that require you to synthesize diverse perspectives and ideas into cohesive solutions. Your ability to balance logic, creativity, and emotional intelligence allows you to navigate complex situations effectively.",

            "You thrive in collaborative settings where you can engage with others, explore different viewpoints, and foster harmony within teams. Your approach to problem-solving is holistic, often considering the emotional and social aspects alongside the logical and analytical."
        ]
    };

    function updateDescription() {
        var BasicBrainDescription = document.getElementById('basic-brain-description');

        if (BasicBrainDescription) { // Ensure the element exists
            if (typeof brainProfileId !== "undefined" && descriptions[brainProfileId]) {
                BasicBrainDescription.innerHTML = descriptions[brainProfileId].join("<br><br>");
            } else {
                BasicBrainDescription.innerText = "No description available.";
            }
        } else {
            console.error("Element with ID 'basic-brain-description' not found.");
        }
    }

    // Fix: Call the function when the page loads
    document.addEventListener("DOMContentLoaded", updateDescription);
</script>
