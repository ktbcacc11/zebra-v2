@include('layouts.dashboard-header')

<div class="container-fluid">
    <div class="main-wrapper">
        <div class="mb-4">
            <h2 class="page-title">Profile</h2>
            <p class="page-description">Overview of profile details.</p>
        </div>

        <div class="card profile-card">
            <div class="card-body px-0">
                <!-- Profile Head Section -->
                <div class="section profile-head-section pb-3">
                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <div class="d-flex flex-column flex-lg-row align-items-center text-center text-lg-start">
                                <div class="col-4 col-lg-2 mb-3 mb-lg-0">
                                    <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="rounded img-fluid">
                                </div>
                                <div class="col-12 col-lg-10">
                                    <h5 class="profile-name">John Doe</h5>
                                    <p class="profile-email">Consectetur adipiscing elit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="d-flex flex-column flex-lg-row justify-content-lg-end gap-2 button-row">
                                <button class="rounded-phill-button outlined">Share my Profile</button>
                                <button class="rounded-phill-button background">Profile Setting</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Overview Section -->
                <div class="section profile-overview-section py-3">
                    <div class="row g-3">
                        <div class="col-12 col-lg-6 order-1 order-lg-1">
                            <h5 class="definition-text">Basic Details</h5>
                            <p class="definition-detail">Consectetur adipiscing elit</p>
                        </div>
                        <div class="col-12 col-lg-6 order-2 order-lg-2">
                            <div class="d-flex justify-content-lg-end justify-content-start">
                                <a href="#" class="text-decoration-none">
                                    <p class="edit-details">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512"><path fill="#f1935d" d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1 0 32c0 8.8 7.2 16 16 16l32 0zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg>
                                        Edit Details
                                    </p>  
                                </a>
                            </div>   
                        </div>
                    </div>
                </div>

                <!-- Profile Edit Section -->
                <div class="section profile-edit-section ">
                    <div class="d-flex justify-content-between">
                        <div class="col-lg-7 col-12">
                            <div class="d-lg-flex d-block">
                                <div class="row">
                                    <p class="definition-detail">Full Name</p>
                                    <h5 class="definition-text">John Doe</h5>
                                </div>

                                <div class="row">
                                    <p class="definition-detail">Email address</p>
                                    <h5 class="definition-text">Johndoe21@gmail.com</h5>
                                </div>

                                <div class="row">
                                    <p class="definition-detail">Phone number</p>
                                    <h5 class="definition-text">+659550656</h5>
                                </div>

                                <div class="row">
                                    <p class="definition-detail">Country</p>
                                    <h5 class="definition-text">Canada</h5>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Profile Interest Section -->
                <div class="section profile-interest-section py-3">
                    <div class="row g-3">
                        <div class="col-12 col-lg-6">
                            <h5 class="definition-text">Your Interests</h5>
                            <p class="definition-detail">Consectetur adipiscing elit</p>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="d-flex flex-wrap align-items-center gap-2">
                                <span class="progress-text">Interest completion</span>
                                <div class="progress flex-grow-1" style="height: 5px">
                                    <div class="progress-bar" style="width: 25%"></div>
                                </div>
                                <span class="progress-percentage">70%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Careers Section -->
                <div class="section profile-interest-section py-3" style="border-bottom: none">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="definition-text">Careers</h5>
                            <div class="badge-row d-flex flex-wrap gap-2">
                                <span class="badge text-bg-danger">Doctor</span>
                                <span class="badge text-bg-danger">Pilot</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Footer -->
            <div class="card-footer pt-3">
                <div class="row g-4">
                    <div class="col-12 col-lg-6">
                        <h6 class="definition-text">Lets get more information about you</h6>
                        <p class="definition-detail">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-12 col-lg-6 d-flex justify-content-lg-end justify-content-start">
                        <div class="mb-lg-0 mb-3">
                            <button class="complete-button">Complete Profile</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.dashboard-footer')



