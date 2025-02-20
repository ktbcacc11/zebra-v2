@include('layouts.dashboard-header')

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

<style>
.report-heading {
    font-size: 22px;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-weight: 700;
    padding: 0;
    margin: 0;
}

.report-normal-text {
    padding: 0;
    margin-bottom: 0;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-size: 16px;
    font-weight: 400;
}

.report-opertunities-card {
    padding: 15px 35px 15px 15px;
    border-radius: 15px;
    border: 2px solid #000;
    margin-bottom: 15px;
    position: relative;
    margin-right: 15px;
}

.report-opertunities-card .title {
    font-size: 22px;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-weight: 400;
    padding: 0;
    margin: 0;
}

.report-opertunities-card .short-description {
    font-size: 16px;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-weight: 400;
    padding: 0;
    margin: 0;
}

.bg-orange {
    background: #f1935d;
}

.bg-yellow {
    background: #f6c94c;
}

.bg-blue {
    background: #9ae4e3;
}

.bg-green {
    background: #84d6a5;
}

.lock-icon {
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
    color: #000;
}

.report-progress-bar .progress-bar {
    color: #000;
}

.report_modal .modal-header {
    border: none;
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

.report_modal .box-data {
    background-color: #fff;
    border: 1px solid #000;
    text-align: center;
}

.report_modal .box-data p {
    color: #000;
}

.report_modal .box-data h3 {
    color: #000;
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

.square-progress .step.filled {
    background: #f6c94c;

}

.brain-img-top {
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
    padding-top: 70px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 90vh;
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
        width: 100% !important;
        height: auto !important;
    }

    .side-img-desktop2 {
        width: 50% !important;
        height: auto !important;
    }

    .centered-container {
        padding-top: 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 60vh;
        text-align: center;
    }
}

@media (min-width: 780px) and (max-width: 2800px) {

    .dashboard-page-content {
        min-height: 100vh;
        padding-top: 120px;
        padding-left: 0px;
        padding-bottom: 0px;
        margin-left: 20px;
    }

    .middle-content {
        margin-left: 20px;
        margin-right: 20px;
    }

}

@media screen and (min-width: 1025px) {

    .report-opertunities-card .title {
        min-height: 80px !important;
        font-size: 22px;
        color: #000000;
        font-family: "Maven Pro", Sans-serif;
        font-weight: 400;
        padding: 0;
        margin: 0;
    }

    .side-img-desktop {
        width: 60% !important;
        height: auto !important;
    }

    .side-img-desktop2 {
        width: 30% !important;
        height: auto !important;
    }

    .desktop-img-respon {
        display: flex;
        justify-content: center;
        align-items: center;
    }
}

@media screen and (max-width: 400px) {
    .centered-container {
        padding-top: 70px;
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
 
$brain_score = BrainScores::where("answer_main_id", $attempt->id)->first(); 

?>

<div class="centered-container">
    <h3>You are an Introvert. The following describes your strengths as an introvert.</h3>
    <img src="{{ asset('assets/images/brainnew2.png') }}" alt="Brain Image">
</div>

<!-- <div class="row" style="justify-content: center;">
          <div class="col-5 col-lg-3">
            <div class="box-data p-4 bg-yellow" style="border:2px solid black;">
              <p class="mb-0" style="color:#000000 !important;"> Candid ( Analytical Brain) </p>
              <h3 class="mb-0" style="color:#000000 !important;">{{$brain_score->l1_score}}%</h3>
            </div>
          </div>
          <div class="col-5 col-lg-3">
            <div class="box-data p-4 bg-orange" style="border:2px solid black;">
              <p class="mb-0" style="color:#000000 !important;">Fastidious ( Practical Brain)</p>
              <h3 class="mb-0" style="color:#000000 !important;">{{$brain_score->l2_score}}%</h3>
            </div>
          </div>
        </div>
        <div class="row mt-3" style="justify-content: center;">
          <div class="col-5 col-lg-3">
            <div class="box-data p-4 bg-blue" style="border:2px solid black;">
              <p class="mb-0" style="color:#000000 !important;">Maverick ( Innovative Brain )</p>
              <h3 class="mb-0" style="color:#000000 !important;">{{$brain_score->r1_score}}%</h3>
            </div>
          </div>
          <div class="col-5 col-lg-3">
            <div class="box-data p-4 bg-green" style="border:2px solid black;">
              <p class="mb-0" style="color:#000000 !important;">Affable ( Relational Brain)</p>
              <h3 class="mb-0" style="color:#000000 !important;">{{$brain_score->r2_score}}%</h3>
            </div>
          </div> -->

<div class=" middle-content p-3 w-90">
    <!-- <h2 class="report-heading">Advanced Strategies for Growth & Development:</h2> -->
    <div class="row align-items-center">
        <div class="col-12">
            <p class="report-normal-text mt-4">
            <ol>
                <li style="padding-bottom: 5px;">
                    <strong>Reflective Thinking: </strong> Introverts often prefer to think deeply before speaking or
                    acting, allowing for more thoughtful and measured responses.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Enjoys Solitude: </strong> They typically recharge their energy by spending time alone,
                    finding peace in solitary activities like reading, writing, or engaging in hobbies.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Strong Listening Skills: </strong> Introverts tend to be good listeners, often paying close
                    attention to what others say and providing thoughtful feedback.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Preference for Deep Conversations: </strong> They often favor meaningful, one-on-one
                    conversations over small talk, valuing depth over breadth in social interactions.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Creative Problem Solving: </strong> Introverts can excel in creative and analytical tasks,
                    often bringing unique perspectives and innovative solutions.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>High Levels of Concentration: </strong> They can focus intensely on tasks without being
                    easily distracted, making them effective in independent work settings.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Reserved Nature: </strong> Introverts may come across as quiet or reserved, which can create
                    an air of mystery and thoughtfulness.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Strong Sense of Independence: </strong> They often prefer to work alone or take initiative
                    on projects, valuing their autonomy.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Observant and Detail-Oriented: </strong> Introverts are often keen observers, picking up on
                    nuances and details that others might miss.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Lower Need for Social Stimulation: </strong> They generally thrive in less stimulating
                    environments, finding large social gatherings exhausting rather than invigorating.
                </li>
            </ol>
            </p>
        </div>
    </div>
</div>

@include('layouts.dashboard-footer')