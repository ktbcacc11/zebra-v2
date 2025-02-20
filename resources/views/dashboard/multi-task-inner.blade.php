@include('layouts.dashboard-header')
<div class="dashboard-page-content">
    <div class="mt-4 w-100 mb-5 mb-lg-2">
        <!-- new content goes here -->
        <div class="container">
            <div class="row">
                <!-- Left Column -->


                
                <div class="col-lg-8 col-md-7 col-sm-12">
    <div id="thumbnail" class="col-md-12 position-relative" onclick="toggleMedia()">
        <img src="{{ asset('assets/images/vidimg1.PNG') }}" class="img-fluid rounded w-100" alt="Post Image">
        
        <!-- Play icon added -->
        <div class="play-icon position-absolute d-flex align-items-center justify-content-center" style="top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <i class="bi bi-play-circle-fill" style="color: white; font-size: 50px;"></i>
        </div>
        
        <div class="position-absolute" style="bottom: 8px; right: 20px; background: black; color: white; padding: 5px 10px; border-radius: 4px; opacity: 0.8;">
            6:20
        </div>
    </div>

    <div id="video-player" style="display: none;" class="video-container mb-3">
        <video class="w-100" controls>
            <source src="server_video_url.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <h4 class="p-heading mt-3">Introduction to Multitasking</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

    <p class="p-time">3 months ago</p>

    <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

</div>
                
                <!-- Right Column -->
                <div class="col-lg-4 col-md-5 col-sm-12">

                <div class="post-container container">
            <div class="row">
               

                <div class="col-12 ">
    <div class="row align-items-center">
        <div class="col-md-4 position-relative">
            <img src="{{ asset('assets/images/vidimg1.PNG') }}" class="img-fluid rounded w-100" alt="Post Image">
            <div class="time-txt position-absolute" >
                6:20
            </div>
        </div>
        <div class="slider-column col-md-8">
            <h5 class="slider-heading text-purple">Introduction to Multitasking</h5>
            <p class="slider-p text-muted">Lorem ipsum dolor sit amet, consecte</p>
           
        </div>
    </div>
    
</div>

</div>

<div class="mt-3 row">
               

                <div class="col-12 ">
    <div class="row align-items-center">
        <div class="col-md-4 position-relative">
            <img src="{{ asset('assets/images/vidimg1.PNG') }}" class="img-fluid rounded w-100" alt="Post Image">
            <div class="time-txt position-absolute">
                6:20
            </div>
        </div>
        <div class="slider-column col-md-8">
            <h5 class="slider-heading text-purple">Time Management Essentials</h5>
            <p class="slider-p text-muted">Lorem ipsum dolor sit amet, consecte</p>
           
        </div>
    </div>
    
</div>

</div>

<div class="mt-3 row">
               

                <div class="col-12 ">
    <div class="row align-items-center">
        <div class="col-md-4 position-relative">
            <img src="{{ asset('assets/images/vidimg1.PNG') }}" class="img-fluid rounded w-100" alt="Post Image">
            <div class="time-txt position-absolute" >
                6:20
            </div>
        </div>
        <div class="slider-column col-md-8">
            <h5 class="slider-heading text-purple">Introduction to Multitasking</h5>
            <p class="slider-p text-muted">Lorem ipsum dolor sit amet, consecte</p>
           
        </div>
    </div>
    
</div>

</div>

<div class="mt-3 row">
               

                <div class="col-12 ">
    <div class="row align-items-center">
        <div class="col-md-4 position-relative">
            <img src="{{ asset('assets/images/vidimg1.PNG') }}" class="img-fluid rounded w-100" alt="Post Image">
            <div class="time-txt position-absolute" >
                6:20
            </div>
        </div>
        <div class="slider-column col-md-8">
            <h5 class="slider-heading text-purple">Introduction to Multitasking</h5>
            <p class="slider-p text-muted">Lorem ipsum dolor sit amet, consecte</p>
           
        </div>
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

<script>
function toggleMedia() {
    var thumbnail = document.getElementById('thumbnail');
    var videoPlayer = document.getElementById('video-player');

    // Toggle the display of thumbnail and video player
    if (thumbnail.style.display !== 'none') {
        thumbnail.style.display = 'none';
        videoPlayer.style.display = 'block';
    } else {
        thumbnail.style.display = 'block';
        videoPlayer.style.display = 'none';
    }
}
</script>

<style>
.slider-heading {
    font-size: 16px;
    font-weight: 400;   
}

.slider-p {
    font-size: 16px;
    font-weight: 200; 
    color: #4f4f4f; 
}

.post-container {
    padding-left: 0px;
    padding-right: 0px;
}

.slider-column {
    padding-left: 0px;
    padding-right: 0px;
}

.p-heading {
    font-size: 16px;
    font-weight: 500;   
}

p {
    font-size: 16px;
    font-weight: 200 !important; 
    color: #4f4f4f; 
}

.p-time {
    font-size: 16px;
    font-weight: 200 !important; 
    color: #161f29; 
}

.time-txt {
    bottom: 8px; right: 20px; background: black; color: white; padding: 5px 10px; border-radius: 4px; opacity: 0.8;font-size:12px;
    }

@media only screen and (max-width: 768px) {
    .slider-column {
        margin-top: 10px;
        padding-left: 10px;
        padding-right: 10px;
    }
}

@media only screen and (max-width: 1024px) and (min-width: 768px) {

    .time-txt {
    bottom: 8px; right: 20px; background: black; color: white; padding: 3px 5px; border-radius: 4px; opacity: 0.8;font-size:5px;
    }

    .slider-heading {
    font-size: 12px;
    font-weight: 400;   
}

.slider-p {
    font-size: 12px;
    font-weight: 200; 
    color: #4f4f4f; 
}

   

}


</style>
