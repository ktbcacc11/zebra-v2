@include('layouts.header')
<style>
.number {
    font-size: 16px;
    color: #fff5ba;
    font-weight: 600;
    background-color: #5a559d;
    margin-bottom: 10px;
    border-radius: 50%;
    height: 30px;
    width: 30px;
    text-align: center;
    padding-top: 3px;
    margin-right: 10px;
}
</style>
<section class="section-margin-bottom section-margin-top ">
    <div class="container questions-container">
        <h3 class="section-title text-purple text-center">Hello</h3>

        <div class="row mt-5 align-items-center">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
                
              
                <h1 class="question-title  mt-4" style="text-align:justify !important;">
                   Choose the most appropriate answer that feels right to you. Label your choices from 1 to 4, with 1 being your best choice, followed by 2, 3, and 4.
Answer honestly and go with the very first response that comes to mind.

This test is not influenced by your mood or time of day, so answer naturally.
Remember, there are no good or bad brains. This is simply an assessment to uncover your brain's unique strengths and preferences.

Good luck!. 
                </h1>
              <a href="{{url('questions/q1')}}"><button class="home-slider-btn mt-4">Go to questions</button></a>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
@include('layouts.footer')

