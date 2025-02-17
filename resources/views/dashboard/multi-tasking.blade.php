@include('layouts.dashboard-header')
<div class="dashboard-page-content pe-lg-5">
    <div class="head-txt w-100">
        <div class="d-flex grayBox"></div>

        <h3 class="section-title text-purple mt-3 mb-4 mb-lg-0">
            Multi Tasking <span class="section-small">Playlist • 8 videos</span>
        </h3>
        <div class="d-flex flex-row justify-content-between">
           <p class="section-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        </div>
    </div>

    <div class="p-3 w-100">
        <!-- post grid  -->
        <div class="post-container container">
            <div class="row">
               

                <div class="col-12 ">
    <div class="row align-items-center">
        <div class="col-md-4 position-relative">
            <img src="{{ asset('assets/images/vidimg1.PNG') }}" class="img-fluid rounded w-100" alt="Post Image">
            <div class="position-absolute" style="bottom: 8px; right: 20px; background: black; color: white; padding: 5px 10px; border-radius: 4px; opacity: 0.8;">
                6:20
            </div>
        </div>
        <div class="col-md-8">
            <h5 class="slider-heading text-purple">Introduction to Multitasking</h5>
            <p class="slider-p text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <p class="slider-title">3 months ago </p>
        </div>
    </div>
    <hr>
</div>



<div class="col-12 ">
    <div class="row align-items-center">
        <div class="col-md-4 position-relative">
            <img src="{{ asset('assets/images/img3345.PNG') }}" class="img-fluid rounded w-100" alt="Post Image">
            <div class="position-absolute" style="bottom: 8px; right: 20px; background: black; color: white; padding: 5px 10px; border-radius: 4px; opacity: 0.8;">
                6:20
            </div>
        </div>
        <div class="col-md-8">
            <h5 class="slider-heading text-purple">Introduction to Multitasking</h5>
            <p class="slider-p text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <p class="slider-title">3 months ago </p>
        </div>
    </div>
    <hr>
</div>


<div class="col-12 mb-2">
    <div class="row align-items-center">
        <div class="col-md-4 position-relative">
            <img src="{{ asset('assets/images/img5567.PNG') }}" class="img-fluid rounded w-100" alt="Post Image">
            <div class="position-absolute" style="bottom: 8px; right: 20px; background: black; color: white; padding: 5px 10px; border-radius: 4px; opacity: 0.8;">
                6:20
            </div>
        </div>
        <div class="col-md-8">
            <h5 class="slider-heading text-purple">Introduction to Multitasking</h5>
            <p class="slider-p text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
            <p class="slider-title">3 months ago </p>
        </div>
    </div>
    <hr>
</div>




            


            


              


                
            </div>
        </div>
    </div>
</div>

@include('layouts.dashboard-footer')

<style>
.section-title {
    font-size:24;
    font-weight: 500;
}

.section-small {
  font-size: 16px !important;;
    font-weight: 400;
    color:#C6C8CA;
}

.section-p {
    font-size: 16px !important;;
    font-weight: 400;
    color:#C6C8CA;

}

.slider-heading {
    font-size: 16px ;
    font-weight: 500;
    color:000814;

}

.head-txt {
    margin-left:15px
}

.slider-p {
    font-size: 16px ;
    font-weight: 400;
    color:#3B3B3B;

}

.slider-title {
    font-size: 14px ;
    font-weight: 400;
    color:#000814;

}

.post-container {
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;

}

@media only screen and (max-width: 768px) {
    .slider-heading {
        margin-top: 10px;
    }

    hr {
        margin-bottom: 30px;
    }
}

</style>