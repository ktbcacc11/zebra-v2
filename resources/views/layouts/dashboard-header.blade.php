<?php
use App\Models\CustomerDetails;
use App\Models\Events;
$customer_name = session('user_details')['display_name'];
$events = Events::where('status', 'active')->get();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <title>Zebra Brain</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dashboard_styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS for full calender -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />


{{-- google font nunito --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

{{-- google font poppins --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<style>

/* @font-face {
    font-family: 'Aptos';
    src: 
         url('Fonts/aptos-font/Aptos-Serif.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
} */

body {
    font-family: "Poppins", sans-serif;;
}
h1, h2, h3, h4, h5, h6, p, span, div, a, li {
    font-family: "Poppins", sans-serif;;
}

.btn-retake {
    
    background-color:#ffcc66;
    color:black;
    border-radius:30px;
    width:140px;
    height:42px;
    border:none;
    /*border-color:#ffcc66;*/
}

.header-notification ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.header-notification .notification-drop {
  font-family: 'Ubuntu', sans-serif;
  color: #444;
}
.header-notification .notification-drop .item {
  padding: 10px;
  font-size: 18px;
  position: relative;
  border-bottom: 1px solid #ddd;
}
.header-notification .notification-drop .item:hover {
  cursor: pointer;
}
.header-notification .notification-drop .item i {
  margin-left: 10px;
}
.header-notification .notification-drop .item ul {
  display: none;
  position: absolute;
  top: 100%;
  background: #fff;
  left: -200px;
  right: 0;
  z-index: 1;
  border-top: 1px solid #ddd;
}
.header-notification .notification-drop .item ul li {
  font-size: 12px;
  padding: 15px 15px 15px 15px;
}
.header-notification .notification-drop .item ul li:hover {
  background: #ddd;
  color: rgba(0, 0, 0, 0.8);
}

@media screen and (min-width: 500px) {
  .header-notification .notification-drop {
    display: flex;
    justify-content: flex-end;
  }
  .header-notification .notification-drop .item {
    border: none;
  }
}



.header-notification .notification-bell{
  font-size: 20px;
}

.header-notification .btn__badge {
  background: #FF5D5D;
  color: white;
  font-size: 12px;
  position: absolute;
  top: 0;
  right: 0px;
  padding:  1px 6px;
  border-radius: 50%;
}

.header-notification .pulse-button {
  box-shadow: 0 0 0 0 rgba(255, 0, 0, 0.5);

}

.header-notification .pulse-button:hover {

}

.header-notification .notification-text{
  font-size: 14px;
  font-weight: bold;
}

.header-notification .notification-text span{
  float: right;
}
</style>
<body>
    <div class="container-fluid">
        <div class="row px-0 ">
            <div class="col-md-2 dashboard-nav vh-100 hideOnMobile flex-column">
                <div class="logo">
                    <img src="{{ asset('assets/images/Main_logo.png') }}" alt="Logo" Style="width: 130px; height: auto">
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('tips')}}" style="height:64px;">Your Flow & Grow Tips</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('consultation-booking')}}">Consultation
                            Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('internships')}}">Internships</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('scholarships')}}">Scholarships</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('university-programs')}}">Universities
                            Programs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('test-attempt')}}">My Test Attempts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('profile')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('events')}}" style="height:40px;">Our Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('packages')}}">Pricing Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('parent-community')}}">Parent Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('supar-future-club')}}">Super Future
                            Club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{url('comparison-request')}}">Comparison Request</a>
                    </li>
                    <li class="nav-item logout">
                        <a class="nav-link " aria-current="page" href="{{url('logout')}}">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10 vh-100 overflow-auto px-0 dashbordContainer">
                <div class="row dashboard-top align-items-center hideOnMobile">
                    <div class="col-md-4 text-start">
                        <div class="input-group search">
                            <input type="text" class="form-control" placeholder="Type what you need to know"
                                style="background: transparent;">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-1 text-start">
    <form action="https://projects.genaitech.dev/zebra-brain-wp/retake" method="POST">
        @csrf
        <button type="submit" class="btn-retake  retake-btn">Retake</button>
    </form>
</div>

                    
                    
                    
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-1 text-end">
                        <!-- <i class="fa-solid fa-bell"></i>
                        <ul>
        <li>First Item</li>
        <li>Second Item</li>
        <li>Third Item</li>
      </ul> -->
                    <div class="header-notification">
                    <ul class="notification-drop">
                        <li class="item">
                        <i class="fa-solid fa-bell notification-bell" aria-hidden="true"></i> <span class="btn__badge pulse-button ">{{count($events)}}</span>     
                        <ul>
                            <?php foreach($events as $event){ ?> 
                            <li>New Event - {{$event->name}}<br>On - {{$event->date}}<br>From {{$event->start_time}} To {{$event->end_time}}</li>
                            <?php } ?>
                        </ul>
                        </li>
                    </ul>
                    </div>
                    
                   

                    </div>
                    <div class="col-md-3 text-start">
                        <div class="row  align-items-center">
                            <div class="col-7 text-start">
                                <h1 class="user-name">{{$customer_name}}</h1>
                                <a href="{{url('logout')}}">
                                    <h1 class="logout ">Logout </h1>
                                </a>
                            </div>
                            <div class="col-4 text-start">
                                <img src="{{ asset('assets/images/zebra2.PNG') }}" class="user-image">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- mobile navbar --}}
                <nav class="navbar navbarMobile displayOnMobile">
                    <div class="container d-flex justify-content-between">
                        <button class="navbar-toggler" type="button" id="navbarToggleBtn">
                            <i class="bi bi-list"></i>
                        </button>
                        <img src="{{ asset('assets/images/Main_logo.png') }}" alt="Logo"
                            style="height: 40px; width: auto">
                        <div class="d-flex flex-row align-items-center">
                            <i class="bi bi-bell-fill signoutTxt me-2"></i>
                            <a href="{{url('logout')}}">
                                <h1 class="signoutTxt mb-0">Sign Out</h1>
                            </a>
                        </div>

                    </div>
                </nav>
                <div class="d-flex px-3 py-2 displayOnMobile backTextMobile">
                    <a href="#" class="backLink">
                        <i class="fa fa-angle-left"></i>
                        Back
                    </a>
                </div>
                {{-- mobile drawer --}}
                <div class="drawer px-3 py-2" id="drawer">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col drawerContentWrapper">
                                <div class="d-flex ">
                                    <a href="#" class="backLinkDrawer">
                                        <i class="fa fa-angle-left"></i>
                                        Back
                                    </a>
                                </div>
                                <h2 class="drawerTitle text-center mt-3 mb-4">Menu</h2>
                                <ul class="nav flex-column text-center mobileDrawerMenu">
                                    <li>
                                    <form action="https://projects.genaitech.dev/zebra-brain-wp/retake" method="POST">
                                        @csrf
                                        <button type="submit" class="btn-retake  retake-btn">Retake</button>
                                    </form>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('dashboard')}}">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('tips')}}">Your Flow & Grow Tips</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('consultation-booking')}}">Consultation
                                            Bookings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('internships')}}">Internships</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('scholarships')}}">Scholarships</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('university-programs')}}">Universities
                                            Programs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('test-attempt')}}">My Test Attempts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('profile')}}">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('events')}}">Our Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('packages')}}">Pricing Packages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('parent-community')}}">Parent Community</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('supar-future-club')}}">Super Future
                                            Club</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " aria-current="page" href="{{url('comparison-request')}}">Comparison Request</a>
                                    </li>
                                    <br>
                                    <li class="nav-item logout">
                                        <a class="nav-link " aria-current="page" href="{{url('logout')}}">Logout</a>
                                    </li>
                                </ul>
                                {{-- <button type="button" class="btn-close float-end" aria-label="Close"
                                    id="closeDrawerBtn"></button> --}}
                            </div>
                        </div>
                    </div>
                </div>
         