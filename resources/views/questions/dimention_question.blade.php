@include('layouts.header')
<section class="section-margin-bottom section-margin-top">
    <div class="container questions-container">
    <h5 class="step-txt">Step 02/02</h5>
        <h3 class="section-title text-purple">Dimensions Analysis </h3>
        <p>Choose one from the options Given</p>

        <div class="tab3 row mt-5">
            
            <div class="col-md-8">
                
                
                @if (session('message'))
                <p style="color:red;font-size:14px;text-align:center;">{{ session('message') }}</p>
                @endif
                
                <div class="answers-container">
                <p>Choose the most appropriate answer that feels right to you.</P>
                <h1 class="question-title text-left ">
                   {{$question_no}}.{{$question->question}}
                </h1><br>

                  
                    <h1 class="question-answer text-left answer" onclick="pickAnswer(this,`{{html_entity_decode($question->answer_1)}}`)">
                        {{$question->answer_1}}
                    </h1>
                    <h1 class="question-answer text-left answer" onclick="pickAnswer(this,`{{html_entity_decode($question->answer_2)}}`)">
                        {{$question->answer_2}}
                    </h1>
                    
                    <h1 class="small-link text-start text-purple" style="cursor:pointer;" onclick="resetAnswer()">
                        <i class="fas fa-undo"></i> Reset answers
                    </h1>
                    <div id="answer_error" class="mt-2" style="color:red;font-weight:bold;text-align:left;"></div>
                    <div class="row mt-5">
                        

                        <div class="col-6 text-end">
                            <form id="myForm" action="{{url('save-dimensional-answers')}}" method="post">
                            @csrf

                            <input type="hidden" name="question_id" value="{{$question->id}}">
                            <input type="hidden" name="answer" id="answer" value="">
                            
                            <input type="hidden" name="question_no" value="{{$question_no}}">

                            

                        </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
    <img src="{{ asset('assets/images/img666.PNG') }}" alt="Question Image" class="img-fluid mt-4">
</div>
        </div>
    </div>
</section>
<section class="footer-nav  border-top bg-light">

<!-- Progress Bar -->
<div class="progress " style="height: 2px; background-color: #e0e0e0; width: 100%;">
            <div class="progress-bar" role="progressbar" 
                style="width: <?php echo ($question_no / 12) * 100; ?>%; background-color:rgb(19, 19, 19);"
                aria-valuenow="<?php echo $question_no; ?>" aria-valuemin="1" aria-valuemax="12">
            </div>
        </div>
   <br>
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: Question Number -->
            <div class="col-6 text-start">
            <h5 class="question-count text-center">
                   Questions {{$question_no}} out of 12
                </h5>
            </div>
            <!-- Right Side: Navigation Buttons -->
            <div class="col-6 text-end">
            <?php if($question_no != 1){
                            $prevoius_page = $question_no-1;
                            ?>
                            <a href="{{url('questions/d'.$prevoius_page.'')}}"><button class="question-nav-back text-purple">Prev</button></a>
                           <?php } ?>

                           <button class="question-nav-next text-purple" type="button" onclick="validateAndSubmit()">Next</button>
                
                
            </div>
                            
        </div>
    </div>
</section>

<script>
    function pickAnswer(element, answer) {
        var answerInput = document.getElementById("answer");
        var answers = document.querySelectorAll('.answer');
        answers.forEach(function (answer) {
            answer.classList.remove('clicked');
        });
        element.classList.add('clicked');
        answerInput.value = answer;
    }

    function resetAnswer() {
        document.getElementById("answer").value = "";
        var answers = document.querySelectorAll('.question-answer');
        answers.forEach(function (answer) {
            answer.classList.remove('clicked');
        });
    }

    function validateAndSubmit() {
        var answer = $('#answer').val();

        if (answer !== '') {
            $('#myForm').submit();
        } else {
            document.getElementById('answer_error').textContent = 'Please select an answer';
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>

.questions-container .clicked {
    background-color: #000000 !important;
    color: #FFFFFF !important;
}

.section-margin-bottom {
    margin-bottom: 100px;
}
.section-margin-top {
    margin-top: 30px;
}

.section-title {
    color: #F1935D;
    font-size: 24px;
    font-weight: 600;
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



.questions-container .question-answer {
    font-size: 16px;
    color: #f29966;
    font-weight: 400;
    padding: 15px;
    background-color: #fff6f0;
    border: 2px solid #fff6f0;
    margin-bottom: 10px;
    border-radius: 10px;
    cursor: pointer;
}


@media only screen and (max-width: 768px) {


.tab3 {
border: 2px solid #F0F0F0;
border-radius: 30px;
padding: 20px;
margin-left: 10px;
margin-right: 10px;
}
}

</style>
