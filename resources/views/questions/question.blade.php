@include('layouts.header')
<style>
.number {
    font-size: 16px;
    color: #FFCC66;
    font-weight: 600;
    background-color: #9CD2A5;
    margin-bottom: 10px;
    border-radius: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    padding-top: 3px;
    margin-right: 10px;
}

.step-txt {
    color: #f5c84c;
    background-color:#fffaed; /* Light yellow */
    padding: 8px 16px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 30px;
    display: inline-block; /* Makes it look like a button */
}

.question-count {
    color: #85d6a5;
    background-color:#f2faf5; /* Light yellow */
    padding: 8px 16px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 30px;
    display: inline-block; /* Makes it look like a button */
}

.tab3 {
    border: 2px solid #F0F0F0; /* Blue border, change color as needed */
    border-radius: 30px; /* Rounded corners */
    padding: 20px;
    margin-left: 100px;
    margin-right: 100px; /* Optional: Adds some spacing inside the border */
}

.question-nav-back {
    border: 2px solid #89d6a7;
    color: #89d6a7;
    background-color: white;
    border-radius: 30px;
    padding: 8px 16px;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.question-nav-back:hover {
    background-color: green;
    color: white;
}

.question-nav-next {
    border: 2px solid #f5c84c;
    color: white;
    background-color: #f5c84c;
    border-radius: 30px;
    padding: 8px 16px;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.question-nav-next:hover {
    background-color: darkgoldenrod;
    border-color: darkgoldenrod;
}

.number {
    font-size: 16px;
    color: #000814;
    font-weight: 600;
    background-color: #9ae3e2;
    margin-bottom: 10px;
    border-radius: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    padding-top: 3px;
    margin-right: 10px;
}

.section-title {
    color: #F1935D;
    font-size: 24px;
    font-weight: 600;
}

p {
    font-size: 16px;
    color: #9BA1A6;
    font-weight: 400;
}

.questions-container .question-answer {
    font-size: 16px;
    color: #000814;
    font-weight: 400;
    padding: 15px;
    background-color: #ffffff;
    border: 2px solid #000814;
    margin-bottom: 10px;
    border-radius: 10px;
    cursor: pointer;
}

.section-margin-bottom {
    margin-bottom: 100px;
}
.section-margin-top {
    margin-top: 30px;
}

.questions-container .clicked {
    background-color: #000000 !important;
    color: #FFFFFF !important;
}


@media only screen and (max-width: 820px) {


    .tab3 {
    border: 2px solid #F0F0F0;
    border-radius: 30px;
    padding: 20px;
    margin-left: 10px;
    margin-right: 10px;
}
}


</style>
<section class="section-margin-bottom section-margin-top">
    <div class="container questions-container">
        <h5 class="step-txt">Step 01/02</h5>
        <h3 class="section-title text-purple">Brain Assessment</h3>
        <p>Select your top four preferences, ranking them from 1 to 4, with 1 as your favorite.</p>

        <div class="tab3 row mt-5 ">
           
            <div class="col-md-8">
                <p>Choose the most appropriate answer that feels right to you.</p>
                @if (session('message'))
                <p style="color:red;font-size:14px;text-align:center;">{{ session('message') }}</p>
                @endif
                <h1 class="question-title text-left mt-4">
                {{$question_no}}. {{$question->question}}
                </h1>
                <br>
                <div class="answers-container">
                    <div class="d-flex align-items-center">
                        <span class="number" id="number_1"></span>
                        <h1 class="question-answer " id="answer_1" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_1)}}`, 'number_1')">
                            {{$question->answer_1}}
                        </h1>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="number" id="number_2"></span>
                        <h1 class="question-answer " id="answer_2" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_2)}}`, 'number_2')">
                            {{$question->answer_2}}
                        </h1>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="number" id="number_3"></span>
                        <h1 class="question-answer " id="answer_3" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_3)}}`, 'number_3')">
                            {{$question->answer_3}}
                        </h1>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="number" id="number_4"></span>
                        <h1 class="question-answer " id="answer_4" onclick="pickAnswer(this, `{{html_entity_decode($question->answer_4)}}`, 'number_4')">
                            {{$question->answer_4}}
                        </h1>
                    </div>
                    <h1 class="small-link text-start text-purple" style="cursor:pointer;" onclick="resetAnswer()">
                        <i class="fas fa-undo"></i> Reset answers
                    </h1>
                    <div id="answer_error" class="mt-2" style="color:red;font-weight:bold;text-align:left;"></div>
                    <div class="row mt-5">
                       

                        <div class="col-6 text-end">
                            <form id="myForm" action="{{url('save-answers')}}" method="post">
                                @csrf

                                <input type="hidden" name="question_id" value="{{$question->id}}">
                                <input type="hidden" name="first_answer" id="first_answer" value="">
                                <input type="hidden" name="second_answer" id="second_answer" value="">
                                <input type="hidden" name="third_answer" id="third_answer" value="">
                                <input type="hidden" name="forth_answer" id="forth_answer" value="">
                                <input type="hidden" name="question_no" value="{{$question_no}}">
                                    
                               
                                </form>
                                
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
    <img src="{{ asset('assets/images/img333.PNG') }}" alt="Question Image" class="img-fluid mt-4">
</div>

        </div>
    </div>
</section>
<section class="footer-nav  border-top bg-light">

<!-- Progress Bar -->
<div class="progress " style="height: 2px; background-color: #e0e0e0; width: 100%;">
            <div class="progress-bar" role="progressbar" 
                style="width: <?php echo ($question_no / 25) * 100; ?>%; background-color:rgb(19, 19, 19);"
                aria-valuenow="<?php echo $question_no; ?>" aria-valuemin="1" aria-valuemax="25">
            </div>
        </div>
   <br>
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: Question Number -->
            <div class="col-6 text-start">
            <h5 class="question-count text-center">
                   Questions {{$question_no}} out of 25
                </h5>
            </div>
            <!-- Right Side: Navigation Buttons -->
            <div class="col-6 text-end">
            <?php if($question_no != 1){
                            $previous_page = $question_no - 1;
                            ?>
                            <a href="{{url('questions/q'.$previous_page.'')}}"><button class="question-nav-back text-purple"> Prev</button></a>
                            <?php } ?>


                            

                            <button class="question-nav-next text-purple" type="button" onclick="validateAndSubmit()">Next</button>
                
                
            </div>
                            
        </div>
    </div>
</section>

<script>
   let currentOrder = 1;
let pickedAnswers = {};

function pickAnswer(element, answer, numberId) {
    if (!pickedAnswers[numberId]) {
        pickedAnswers[numberId] = currentOrder;
        document.getElementById(numberId).textContent = currentOrder;

        if (currentOrder == 1) {
            document.getElementById("first_answer").value = answer;
        } else if (currentOrder == 2) {
            document.getElementById("second_answer").value = answer;
        } else if (currentOrder == 3) {
            document.getElementById("third_answer").value = answer;
        }

        currentOrder++;
        element.classList.add('clicked');

        // Auto-select 4th answer when the first 3 are selected
        if (currentOrder > 3) {
            let remainingAnswer = getRemainingAnswer();
            if (remainingAnswer) {
                let remainingAnswerElement = document.getElementById(remainingAnswer.elementId);
                document.getElementById(remainingAnswer.numberId).textContent = currentOrder;
                document.getElementById("forth_answer").value = remainingAnswer.answer;
                remainingAnswerElement.classList.add('clicked');
                currentOrder++;
            }
        }
    }
}

function getRemainingAnswer() {
    const answers = [
        { id: 'answer_1', answer: '{{e($question->answer_1)}}', numberId: 'number_1' },
        { id: 'answer_2', answer: '{{e($question->answer_2)}}', numberId: 'number_2' },
        { id: 'answer_3', answer: '{{e($question->answer_3)}}', numberId: 'number_3' },
        { id: 'answer_4', answer: '{{e($question->answer_4)}}', numberId: 'number_4' }
    ];

    for (let i = 0; i < answers.length; i++) {
        if (!pickedAnswers[answers[i].numberId]) {
            return { elementId: answers[i].id, answer: answers[i].answer, numberId: answers[i].numberId };
        }
    }
    return null;
}

function resetAnswer() {
    document.getElementById("first_answer").value = "";
    document.getElementById("second_answer").value = "";
    document.getElementById("third_answer").value = "";
    document.getElementById("forth_answer").value = "";

    currentOrder = 1;
    pickedAnswers = {};

    var answers = document.querySelectorAll('.question-answer');
    answers.forEach(function (answer) {
        answer.classList.remove('clicked');
    });

    var numbers = document.querySelectorAll('.number');
    numbers.forEach(function (number) {
        number.textContent = '';
    });
}

function validateAndSubmit() {
    var firstAnswer = $('#first_answer').val();
    var secondAnswer = $('#second_answer').val();
    var thirdAnswer = $('#third_answer').val();
    var fourthAnswer = $('#forth_answer').val();

    if (firstAnswer !== '' && secondAnswer !== '' && thirdAnswer !== '' && fourthAnswer !== '') {
        $('#myForm').submit();
    } else {
        document.getElementById('answer_error').textContent = 'Please select all answers';
    }
}

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
