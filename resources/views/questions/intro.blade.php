@include('layouts.header')

<style>
    .number {
        font-size: 16px;
        color: #fff5ba;
        font-weight: 600;
        background-color: #5a559d;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        margin-right: 10px;
    }
    .tab-section {
        background: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1);
        border-radius: 30px;
        padding: 20px;
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
        font-weight: 600;
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
        background-color: #F6C94D;
        color: #000814;
        font-weight: 600;
        font-size: 18px;

    }

    .clock {
        color: #C6C8CA;
        font-weight: 400;
        font-size: 14px;
    }
</style>

<section class="py-5">
    <div class="container text-center">
        <h3 class="heading1 text-purple">Discover Your Brain Type in 40mins</h3>
        <p class="p1 ">Self Discovery to  Holistic Growth & Development harnesses the principles of Neuro development and Neuroplasticity.</p>
    </div>

    <div class="container mt-4">
        <div class="tab-section mx-auto col-md-8 col-lg-6">
            <h3 class="heading2">These are the exam contents you are required to complete</h3>
            <p class="p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <hr>
            <div class="row align-items-center text-md-start text-center">
                <div class="col-md-3 mb-3 mb-md-0">
                    <img src="{{ asset('assets/images/img223.PNG') }}" alt="Example Image" class="img-fluid">
                </div>
                <div class="col-md-9 ">
                    <h4 class="q1">1. 25 Questions &nbsp; &nbsp;<span class="clock"><i class="bi bi-clock"></i>&nbsp;                    45min</span></h4>
                    <p class="qp1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="row align-items-center text-md-start mt-3 text-center">
                <div class="col-md-3 mb-3 mb-md-0">
                    <img src="{{ asset('assets/images/img224.PNG') }}" alt="Example Image" class="img-fluid">
                </div>
                <div class="col-md-9 ">
                    <h4 class="q1">2. 12 Questions &nbsp; &nbsp;<span class="clock"><i class="bi bi-clock"></i>&nbsp;                    20min</span></h4>
                    <p class="qp1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <a href="{{url('questions/q1')}}"><button class="home-slider-btn mt-4">Get started</button></a>

        </div>
    </div>
</section>

@include('layouts.footer')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">