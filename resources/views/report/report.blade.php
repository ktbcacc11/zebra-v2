@include('new_layouts.header')
<?php
use App\Models\WPUsers;
use App\Models\BrainScores;
use App\Models\SkillBrainScores;
use App\Models\QuestionAnswerMain;
use App\Models\SkillTestAnswersMain;
$attempt = QuestionAnswerMain::where("user_id", session('user_id'))->where('status', 'complete')->first();
$brain_score = SkillBrainScores::where("skill_test_answer_main_id", $attempt->id)->first(); 
$brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('skill_brain_profile_id');
$dob = session('user_dob'); 
$age = \Carbon\Carbon::parse($dob)->age;  



$report_type = $type;
?>
<style>

.tab-section {
    background: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);
    border-radius: 30px;
    padding: 10px;
    text-align: left;
}

.tab-section img {
    border-radius: 8px;
    max-width: 100%;
    height: auto;
}

.tab-section .btn {
    margin-top: 15px;
    background: #5a559d;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
}

.heading1 {
    color: #000814;
    font-weight: 550;
    font-size: 24px;


}

.p1 {
    color: #9BA1A6;
    font-weight: 500;
    font-size: 16px;


}

.heading2 {
    color: #000814;
    font-weight: 600;
    font-size: 16px;


}

.p2 {
    color: #3B3B3B;
    font-weight: 400;
    font-size: 16px;


}

.q1 {
    color: #000814;
    font-weight: 600;
    font-size: 16px;


}

.qp1 {
    color: #8c8c8c;
    font-weight: 400;
    font-size: 16px;


}

.home-slider-btn {
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #F6C94D;
    color: #000814;
    font-weight: 500;
    font-size: 15px;

}

.next-step-btn {
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #F6C94D;
    color: #000814;
    font-weight: 500;
    font-size: 15px;

}

.clock {
    color: #C6C8CA;
    font-weight: 400;
    font-size: 14px;
}

.img-content-page{
    height: 100px;
    width: 100px;
}
</style>

<section class="py-5">
    <div class="container text-center pt-5 pb-1">
        <h3 class="heading1 text-purple">Take the first step toward understanding your brain better with us!</h3>
        <p class="p1 ">Self Discovery to  Holistic Growth & Development harnesses the principles of Neuro development and Neuroplasticity.</p>
    </div>



    <?php if ($report_type == 'basic-brain-report'): ?>

    <!-- Basic brain report -->
    <?php if ($brain_profile_id == 1): ?>

        <div class="container mt-4">
            <div class="tab-section mx-auto col-md-8 col-lg-8 mb-4">
                <div class="row align-items-center text-md-start text-center">
                    <div class="col-md-2 mb-3 mb-md-0">
                        <img src="{{ asset('assets/images/1stpic.PNG') }}" alt="Example Image" class="img-fluid img-content-page">
                    </div>
                    <div class="col-md-5 col-lg-7 col-xl-8">
                        <h4 class="q1">Leadership </h4>
                        <p class="qp1">Learn what makes your brain unique by doing our basic brain assessment.</p>
                    </div>
                    <div class="col-md-5 col-lg-3 col-xl-2 d-flex align-items-center justify-content-md-start justify-content-center">
                        <button class="home-slider-btn mt-2">Read More</button>
                    </div>
                </div>
            </div>

            <div class="tab-section mx-auto col-md-8 col-lg-8 mb-4">
                <div class="row align-items-center text-md-start text-center">
                    <div class="col-md-2 mb-3 mb-md-0">
                        <img src="{{ asset('assets/images/2ndpic.PNG') }}" alt="Example Image" class="img-fluid img-content-page">
                    </div>
                    <div class="col-md-5 col-lg-7 col-xl-8">
                        <h4 class="q1">Creativity</h4>
                        <p class="qp1">Take actionable steps to achieve your goals—whether in academics, career, business, profession or relationships.</p>
                    </div>
                    <div class="col-md-5 col-lg-3 col-xl-2 d-flex align-items-center justify-content-md-start justify-content-center">
                    <button class="home-slider-btn mt-2" style="background-color: #EAEAEA; color: #AAA6A0;">Next Step</button>
                    </div>
                </div>
            </div>

            <div class="tab-section mx-auto col-md-8 col-lg-8 mb-4">
                <div class="row align-items-center text-md-start text-center">
                    <div class="col-md-2 mb-3 mb-md-0">
                        <img src="{{ asset('assets/images/3rdpic.PNG') }}" alt="Example Image" class="img-fluid img-content-page">
                    </div>
                    <div class="col-md-5 col-lg-7 col-xl-8">
                        <h4 class="q1">GIG Potential</h4>
                        <p class="qp1">Use science-backed strategies to build new skills and improve how your brain functions.</p>
                    </div>
                    <div class="col-md-5 col-lg-3 col-xl-2 d-flex align-items-center justify-content-md-start justify-content-center">
                    <button class="home-slider-btn mt-2" style="background-color: #EAEAEA; color: #AAA6A0;">Next Step</button>
                    </div>
                </div>
            </div>

            <div class="tab-section mx-auto col-md-8 col-lg-8 mb-4">
                <div class="row align-items-center text-md-start text-center">
                    <div class="col-md-2 mb-3 mb-md-0">
                        <img src="{{ asset('assets/images/4thpic.PNG') }}" alt="Example Image" class="img-fluid img-content-page">
                    </div>
                    <div class="col-md-5 col-lg-7 col-xl-8">
                        <h4 class="q1">Entrepreneurship</h4>
                        <p class="qp1">Leverage ongoing tracking and monitoring tools tailored to your unique brain growth.</p>
                    </div>
                    <div class="col-md-5 col-lg-3 col-xl-2 d-flex align-items-center justify-content-md-start justify-content-center">
                    <button class="home-slider-btn mt-2" style="background-color: #EAEAEA; color: #AAA6A0;">Next Step</button>
                    </div>
                </div>
            </div>

            <div class="tab-section mx-auto col-md-8 col-lg-8 mb-4">
                <div class="row align-items-center text-md-start text-center">
                    <div class="col-md-2 mb-3 mb-md-0">
                        <img src="{{ asset('assets/images/4thpic.PNG') }}" alt="Example Image" class="img-fluid img-content-page">
                    </div>
                    <div class="col-md-5 col-lg-7 col-xl-8">
                        <h4 class="q1">Team Collaboration Index</h4>
                        <p class="qp1">Leverage ongoing tracking and monitoring tools tailored to your unique brain growth.</p>
                    </div>
                    <div class="col-md-5 col-lg-3 col-xl-2 d-flex align-items-center justify-content-md-start justify-content-center">
                    <button class="home-slider-btn mt-2" style="background-color: #EAEAEA; color: #AAA6A0;">Next Step</button>
                    </div>
                </div>
            </div>

            <div class="tab-section mx-auto col-md-8 col-lg-8 mb-4">
                <div class="row align-items-center text-md-start text-center">
                    <div class="col-md-2 mb-3 mb-md-0">
                        <img src="{{ asset('assets/images/4thpic.PNG') }}" alt="Example Image" class="img-fluid img-content-page">
                    </div>
                    <div class="col-md-5 col-lg-7 col-xl-8">
                        <h4 class="q1">21st-Century Agility Index</h4>
                        <p class="qp1">Leverage ongoing tracking and monitoring tools tailored to your unique brain growth.</p>
                    </div>
                    <div class="col-md-5 col-lg-3 col-xl-2 d-flex align-items-center justify-content-md-start justify-content-center">
                    <button class="home-slider-btn mt-2" style="background-color: #EAEAEA; color: #AAA6A0;">Next Step</button>
                    </div>
                </div>
            </div>

        </div>
        
    <?php elseif ($brain_profile_id == 2): ?>
        <!-- Code for brain_profile_id 2 -->
    <?php elseif ($brain_profile_id == 3): ?>
        <!-- Code for brain_profile_id 3 -->
    <?php elseif ($brain_profile_id == 4): ?>
        <!-- Code for brain_profile_id 4 -->
    <?php elseif ($brain_profile_id == 5): ?>
        <!-- Code for brain_profile_id 5 -->
    <?php elseif ($brain_profile_id == 6): ?>
        <!-- Code for brain_profile_id 6 -->
    <?php elseif ($brain_profile_id == 7): ?>
        <!-- Code for brain_profile_id 7 -->
    <?php elseif ($brain_profile_id == 8): ?>
        <!-- Code for brain_profile_id 8 -->
    <?php elseif ($brain_profile_id == 9): ?>
        <!-- Code for brain_profile_id 9 -->
    <?php elseif ($brain_profile_id == 10): ?>
        <!-- Code for brain_profile_id 10 -->
    <?php elseif ($brain_profile_id == 11): ?>
        <!-- Code for brain_profile_id 11 -->
    <?php elseif ($brain_profile_id == 12): ?>
        <!-- Code for brain_profile_id 12 -->
    <?php elseif ($brain_profile_id == 13): ?>
        <!-- Code for brain_profile_id 13 -->
    <?php elseif ($brain_profile_id == 14): ?>
        <!-- Code for brain_profile_id 14 -->
    <?php elseif ($brain_profile_id == 15): ?>
        <!-- Code for brain_profile_id 15 -->
    <?php endif; ?>

<?php elseif ($report_type == 'videos-about-the-brain'): ?>

    <!-- Videos about the brain -->
    <?php if ($brain_profile_id == 1): ?>
       
    <?php elseif ($brain_profile_id == 2): ?>
        <!-- Code for brain_profile_id 2 -->
    <?php elseif ($brain_profile_id == 3): ?>
        <!-- Code for brain_profile_id 3 -->
    <?php elseif ($brain_profile_id == 4): ?>
        <!-- Code for brain_profile_id 4 -->
    <?php elseif ($brain_profile_id == 5): ?>
        <!-- Code for brain_profile_id 5 -->
    <?php elseif ($brain_profile_id == 6): ?>
        <!-- Code for brain_profile_id 6 -->
    <?php elseif ($brain_profile_id == 7): ?>
        <!-- Code for brain_profile_id 7 -->
    <?php elseif ($brain_profile_id == 8): ?>
        <!-- Code for brain_profile_id 8 -->
    <?php elseif ($brain_profile_id == 9): ?>
        <!-- Code for brain_profile_id 9 -->
    <?php elseif ($brain_profile_id == 10): ?>
        <!-- Code for brain_profile_id 10 -->
    <?php elseif ($brain_profile_id == 11): ?>
        <!-- Code for brain_profile_id 11 -->
    <?php elseif ($brain_profile_id == 12): ?>
        <!-- Code for brain_profile_id 12 -->
    <?php elseif ($brain_profile_id == 13): ?>
        <!-- Code for brain_profile_id 13 -->
    <?php elseif ($brain_profile_id == 14): ?>
        <!-- Code for brain_profile_id 14 -->
    <?php elseif ($brain_profile_id == 15): ?>
        <!-- Code for brain_profile_id 15 -->
    <?php endif; ?>

<?php elseif ($report_type == 'prefered-learning-style'): ?>

    <!-- Preferred learning style -->
    <?php if ($brain_profile_id == 1): ?>
        <!-- Code for brain_profile_id 1 -->
    <?php elseif ($brain_profile_id == 2): ?>
        <!-- Code for brain_profile_id 2 -->
    <?php elseif ($brain_profile_id == 3): ?>
        <!-- Code for brain_profile_id 3 -->
    <?php elseif ($brain_profile_id == 4): ?>
        <!-- Code for brain_profile_id 4 -->
    <?php elseif ($brain_profile_id == 5): ?>
        <!-- Code for brain_profile_id 5 -->
    <?php elseif ($brain_profile_id == 6): ?>
        <!-- Code for brain_profile_id 6 -->
    <?php elseif ($brain_profile_id == 7): ?>
        <!-- Code for brain_profile_id 7 -->
    <?php elseif ($brain_profile_id == 8): ?>
        <!-- Code for brain_profile_id 8 -->
    <?php elseif ($brain_profile_id == 9): ?>
        <!-- Code for brain_profile_id 9 -->
    <?php elseif ($brain_profile_id == 10): ?>
        <!-- Code for brain_profile_id 10 -->
    <?php elseif ($brain_profile_id == 11): ?>
        <!-- Code for brain_profile_id 11 -->
    <?php elseif ($brain_profile_id == 12): ?>
        <!-- Code for brain_profile_id 12 -->
    <?php elseif ($brain_profile_id == 13): ?>
        <!-- Code for brain_profile_id 13 -->
    <?php elseif ($brain_profile_id == 14): ?>
        <!-- Code for brain_profile_id 14 -->
    <?php elseif ($brain_profile_id == 15): ?>
        <!-- Code for brain_profile_id 15 -->
    <?php endif; ?>

<?php elseif ($report_type == 'extracurricular-activities'): ?>

    <!-- Extracurricular activities -->
    <?php if ($brain_profile_id == 1): ?>
        <!-- Code for brain_profile_id 1 -->
    <?php elseif ($brain_profile_id == 2): ?>
        <!-- Code for brain_profile_id 2 -->
    <?php elseif ($brain_profile_id == 3): ?>
        <!-- Code for brain_profile_id 3 -->
    <?php elseif ($brain_profile_id == 4): ?>
        <!-- Code for brain_profile_id 4 -->
    <?php elseif ($brain_profile_id == 5): ?>
        <!-- Code for brain_profile_id 5 -->
    <?php elseif ($brain_profile_id == 6): ?>
        <!-- Code for brain_profile_id 6 -->
    <?php elseif ($brain_profile_id == 7): ?>
        <!-- Code for brain_profile_id 7 -->
    <?php elseif ($brain_profile_id == 8): ?>
        <!-- Code for brain_profile_id 8 -->
    <?php elseif ($brain_profile_id == 9): ?>
        <!-- Code for brain_profile_id 9 -->
    <?php elseif ($brain_profile_id == 10): ?>
        <!-- Code for brain_profile_id 10 -->
    <?php elseif ($brain_profile_id == 11): ?>
        <!-- Code for brain_profile_id 11 -->
    <?php elseif ($brain_profile_id == 12): ?>
        <!-- Code for brain_profile_id 12 -->
    <?php elseif ($brain_profile_id == 13): ?>
        <!-- Code for brain_profile_id 13 -->
    <?php elseif ($brain_profile_id == 14): ?>
        <!-- Code for brain_profile_id 14 -->
    <?php elseif ($brain_profile_id == 15): ?>
        <!-- Code for brain_profile_id 15 -->
    <?php endif; ?>

<?php elseif ($report_type == 'communication-and-behaviour'): ?>

    <!-- Communication and behaviour -->
    <?php if ($brain_profile_id == 1): ?>
        <!-- Code for brain_profile_id 1 -->
    <?php elseif ($brain_profile_id == 2): ?>
        <!-- Code for brain_profile_id 2 -->
    <?php elseif ($brain_profile_id == 3): ?>
        <!-- Code for brain_profile_id 3 -->
    <?php elseif ($brain_profile_id == 4): ?>
        <!-- Code for brain_profile_id 4 -->
    <?php elseif ($brain_profile_id == 5): ?>
        <!-- Code for brain_profile_id 5 -->
    <?php elseif ($brain_profile_id == 6): ?>
        <!-- Code for brain_profile_id 6 -->
    <?php elseif ($brain_profile_id == 7): ?>
        <!-- Code for brain_profile_id 7 -->
    <?php elseif ($brain_profile_id == 8): ?>
        <!-- Code for brain_profile_id 8 -->
    <?php elseif ($brain_profile_id == 9): ?>
        <!-- Code for brain_profile_id 9 -->
    <?php elseif ($brain_profile_id == 10): ?>
        <!-- Code for brain_profile_id 10 -->
    <?php elseif ($brain_profile_id == 11): ?>
        <!-- Code for brain_profile_id 11 -->
    <?php elseif ($brain_profile_id == 12): ?>
        <!-- Code for brain_profile_id 12 -->
    <?php elseif ($brain_profile_id == 13): ?>
        <!-- Code for brain_profile_id 13 -->
    <?php elseif ($brain_profile_id == 14): ?>
        <!-- Code for brain_profile_id 14 -->
    <?php elseif ($brain_profile_id == 15): ?>
        <!-- Code for brain_profile_id 15 -->
    <?php endif; ?>

<?php endif; ?>




<button onclick="vvvv()">touch</button>





    
</section>

<script>
   
    var brainProfileId = <?php echo json_encode($brain_profile_id); ?>;

    function vvvv() {
        alert("Profile ID: " + brainProfileId);
    }


</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


{{-- <section class="py-5">
    <div class="container text-center pt-5 pb-1">
        <h3 class="heading1 text-purple">Take the first step toward understanding your brain better with us!</h3>
        <p class="p1 ">Self Discovery to  Holistic Growth & Development harnesses the principles of Neuro development and Neuroplasticity.</p>
    </div>
    <div class="container mt-4">
        <div class="tab-section mx-auto col-md-8 col-lg-8 mb-4">
            <div class="row align-items-center text-md-start text-center">
                <div class="col-md-2 mb-3 mb-md-0">
                    <img src="{{ asset('assets/images/1stpic.PNG') }}" alt="Example Image" class="img-fluid img-content-page">
                </div>
                <div class="col-md-5 col-lg-7 col-xl-8">
                    <h4 class="q1">1. ⁠Discover Your Brain Type in 40mins </h4>
                    <p class="qp1">Learn what makes your brain unique by doing our basic brain assessment.</p>
                </div>
                <div class="col-md-5 col-lg-3 col-xl-2 d-flex align-items-center justify-content-md-start justify-content-center">
                    <button class="home-slider-btn mt-2">Read More</button>
                </div>
            </div>
        </div>

        <div class="tab-section mx-auto col-md-8 col-lg-8 mb-4">
            <div class="row align-items-center text-md-start text-center">
                <div class="col-md-2 mb-3 mb-md-0">
                    <img src="{{ asset('assets/images/2ndpic.PNG') }}" alt="Example Image" class="img-fluid img-content-page">
                </div>
                <div class="col-md-5 col-lg-7 col-xl-8">
                    <h4 class="q1">2.⁠ ⁠Direct Your Life</h4>
                    <p class="qp1">Take actionable steps to achieve your goals—whether in academics, career, business, profession or relationships.</p>
                </div>
                <div class="col-md-5 col-lg-3 col-xl-2 d-flex align-items-center justify-content-md-start justify-content-center">
                <button class="home-slider-btn mt-2" style="background-color: #EAEAEA; color: #AAA6A0;">Next Step</button>
                </div>
            </div>
        </div>

        <div class="tab-section mx-auto col-md-8 col-lg-8 mb-4">
            <div class="row align-items-center text-md-start text-center">
                <div class="col-md-2 mb-3 mb-md-0">
                    <img src="{{ asset('assets/images/3rdpic.PNG') }}" alt="Example Image" class="img-fluid img-content-page">
                </div>
                <div class="col-md-5 col-lg-7 col-xl-8">
                    <h4 class="q1">3.⁠ ⁠Develop Your Brain</h4>
                    <p class="qp1">Use science-backed strategies to build new skills and improve how your brain functions.</p>
                </div>
                <div class="col-md-5 col-lg-3 col-xl-2 d-flex align-items-center justify-content-md-start justify-content-center">
                <button class="home-slider-btn mt-2" style="background-color: #EAEAEA; color: #AAA6A0;">Next Step</button>
                </div>
            </div>
        </div>

        <div class="tab-section mx-auto col-md-8 col-lg-8 mb-4">
            <div class="row align-items-center text-md-start text-center">
                <div class="col-md-2 mb-3 mb-md-0">
                    <img src="{{ asset('assets/images/4thpic.PNG') }}" alt="Example Image" class="img-fluid img-content-page">
                </div>
                <div class="col-md-5 col-lg-7 col-xl-8">
                    <h4 class="q1">4.⁠ ⁠Drive Your Success</h4>
                    <p class="qp1">Leverage ongoing tracking and monitoring tools tailored to your unique brain growth.</p>
                </div>
                <div class="col-md-5 col-lg-3 col-xl-2 d-flex align-items-center justify-content-md-start justify-content-center">
                <button class="home-slider-btn mt-2" style="background-color: #EAEAEA; color: #AAA6A0;">Next Step</button>
                </div>
            </div>
        </div>

    </div>

</section> --}}