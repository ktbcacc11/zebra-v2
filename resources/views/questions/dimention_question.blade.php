@include('layouts.header')
<section class="section-margin-bottom section-margin-top">
    <div class="container questions-container">
        <h3 class="section-title text-purple">Dimensional Test</h3>

        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="question text-center">
                    Question {{$question_no}}
                </h1>
                <h1 class="question-count text-center">
                    {{$question_no}} out of 12
                </h1>
                @if (session('message'))
                <p style="color:red;font-size:14px;text-align:center;">{{ session('message') }}</p>
                @endif
                <h1 class="question-title text-center mt-4">
                    {{$question->question}}
                </h1>
                <div class="answers-container">
                    <h1 class="question-count">Select one answer</h1>
                    <h1 class="question-answer text-center answer" onclick="pickAnswer(this,`{{html_entity_decode($question->answer_1)}}`)">
                        {{$question->answer_1}}
                    </h1>
                    <h1 class="question-answer text-center answer" onclick="pickAnswer(this,`{{html_entity_decode($question->answer_2)}}`)">
                        {{$question->answer_2}}
                    </h1>
                    
                    <h1 class="small-link text-start text-purple" style="cursor:pointer;" onclick="resetAnswer()">
                        <i class="fas fa-undo"></i> Reset answers
                    </h1>
                    <div id="answer_error" class="mt-2" style="color:red;font-weight:bold;text-align:left;"></div>
                    <div class="row mt-5">
                        <div class="col-6 text-start">
                            <?php if($question_no != 1){
                            $prevoius_page = $question_no-1;
                            ?>
                            <a href="{{url('questions/d'.$prevoius_page.'')}}"><button class="question-nav text-purple"><i class="fa-solid fa-chevron-left px-1"> </i>Previous</button></a>
                           <?php } ?>
                        </div>

                        <div class="col-6 text-end">
                            <form id="myForm" action="{{url('save-dimensional-answers')}}" method="post">
                            @csrf

                            <input type="hidden" name="question_id" value="{{$question->id}}">
                            <input type="hidden" name="answer" id="answer" value="">
                            
                            <input type="hidden" name="question_no" value="{{$question_no}}">

                            <button class="question-nav text-purple" type="button" onclick="validateAndSubmit()">Next<i class="fa-solid fa-chevron-right px-1"> </i></button>

                        </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
@include('layouts.footer')
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
