@include('layouts.dashboard-header')
<?php
$my_brain_score = $user_brain_score;
$my_brain_profile_id = $user_brain_profile_id;
$my_age = $user_age;
$my_details = $user_dtails;


$compare_brain_score = $other_brain_score;
$compare_brain_profile_id = '15';
$compare_age = $other_age;
$compare_details = $other_dtails;
?>
<div class="dashboard-page-content">

    <div class="d-flex flex-row p-3 ps-lg-5 pt-lg-2 w-100">
        <div class="col-lg-12 col-xl-10 col-md-12 col-12 scrollable-column">
            <h3 class="section-title text-purple mt-3">
                Let's Compare
                <!--{{var_dump(session('user_details'))}}-->
            </h3>
            <p class="comparison-sub-title">
                View and analyze the details side by side for better decisions.
            </p>
            @if(Session::has('fail')) <p style="color:red;font-size:14px;">
                <?php echo Session::get('fail') ?>
            </p>@endif
            @if(Session::has('success')) <p style="color:green;font-size:14px;">
                <?php echo Session::get('success') ?>
            </p>@endif

            <div class="w-100 profileContent mt-4">
                <div class="tab-container card nav-card p-0">
                    <ul class="nav nav-pills mb-3 scrollable-tabs" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active first-link" id="basic-brain-report-tab" data-bs-toggle="pill"
                                data-bs-target="#basic-brain-report" type="button" role="tab"
                                aria-controls="basic-brain-report" aria-selected="true">Basic Brain Report</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="thinking-style-tab" data-bs-toggle="pill"
                                data-bs-target="#thinking-style" type="button" role="tab" aria-controls="thinking-style"
                                aria-selected="false">Thinking Style</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="advance-brain-report-tab" data-bs-toggle="pill"
                                data-bs-target="#advance-brain-report" type="button" role="tab"
                                aria-controls="advance-brain-report" aria-selected="false">Advance Brain Report</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="prefered-learning-tab" data-bs-toggle="pill"
                                data-bs-target="#prefered-learning" type="button" role="tab"
                                aria-controls="prefered-learning" aria-selected="false">Preferred Learning
                                Styles</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="extra-activities-tab" data-bs-toggle="pill"
                                data-bs-target="#extra-activities" type="button" role="tab"
                                aria-controls="extra-activities" aria-selected="false">Extracurricular
                                Activities</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="communication-tab" data-bs-toggle="pill"
                                data-bs-target="#communication" type="button" role="tab" aria-controls="communication"
                                aria-selected="false">Communication and behaviour
                                </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="inclination-tab" data-bs-toggle="pill"
                                data-bs-target="#inclination" type="button" role="tab" aria-controls="inclination"
                                aria-selected="false">Inclination for Subjects</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="diet-tab" data-bs-toggle="pill" data-bs-target="#diet"
                                type="button" role="tab" aria-controls="diet" aria-selected="false">Diet and
                                Nutrition</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="career-options-tab" data-bs-toggle="pill"
                                data-bs-target="#career-options" type="button" role="tab" aria-controls="career-options"
                                aria-selected="false">Matching Career Options</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link last-link" id="skills-tab" data-bs-toggle="pill"
                                data-bs-target="#skills" type="button" role="tab" aria-controls="skills"
                                aria-selected="false">Skill Test</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">

                        {{-- basic brain report --}}
                        <div class="tab-pane fade show active" id="basic-brain-report" role="tabpanel"
                            aria-labelledby="basic-brain-report-tab" tabindex="0">



                            <div class="row d-flex ">
                                {{-- compare one --}}
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-1">
                                    <div class="p-3">
                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">John Doe</p>
                                            </div>
                                            <div class="comparing-head-section">
                                                <p class="email">johndoe@gmail.com</p>
                                            </div>
                                        </div>




                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">

                                                <div class="col-12 col-lg-6 p-2 d-lg-flex d-md-flex d-xl-flex">
                                                    <img src="{{ asset('assets/images/brain-cartoon.png') }}"  class="brain-img">
                                                </div>

                                                <div class="d-lg-flex d-none data-box-row gap-3">
                                                    <div class="box-data px-4"
                                                            style="background-color: #f6c94c; color: black;">
                                                            <p class="mb-0" style="color: black;">
                                                                Fastidious
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                86%
                                                            </h3>
                                                    </div>

                                                    <div class="box-data px-4"
                                                            style="background-color: #f1935d;">
                                                            <p class="mb-0" style="color: black;">
                                                                Maverick
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                72%
                                                            </h3>
                                                    </div>
                                                </div>

                                                <div class="d-lg-flex d-none data-box-row gap-3">
                                                    <div class="box-data px-4"
                                                            style="background-color: #9ae4e3;">
                                                            <p class="mb-0" style="color: black;">
                                                                Fastidious
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                75%
                                                            </h3>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-12">
                                                        <div class="box-data px-4"
                                                            style="background-color: #84d6a5;">
                                                            <p class="mb-0" style="color: black;">
                                                                Maverick
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                67%
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="row data-box-row ps-4 gap-0 d-none d-lg-flex d-md-flex d-xl-flex">
                                                    <div class="col-lg-4 col-md-4 col-12 p-1">
                                                        <div class="box-data px-4"
                                                            style="background-color: #f6c94c; color: black;">
                                                            <p class="mb-0" style="color: black;">
                                                                Fastidious
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                86%
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12 p-1">
                                                        <div class="box-data px-4"
                                                            style="background-color: #f1935d;">
                                                            <p class="mb-0" style="color: black;">
                                                                Maverick
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                72%
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row data-box-row ps-4 gap-0 d-none d-lg-flex d-md-flex d-xl-flex">
                                                    <div class="col-lg-4 col-md-4 col-12 p-1">
                                                        <div class="box-data px-4"
                                                            style="background-color: #9ae4e3;">
                                                            <p class="mb-0" style="color: black;">
                                                                Fastidious
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                75%
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12 p-1">
                                                        <div class="box-data px-4"
                                                            style="background-color: #84d6a5;">
                                                            <p class="mb-0" style="color: black;">
                                                                Maverick
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                67%
                                                            </h3>
                                                        </div>
                                                    </div>

                                                </div> --}}


                                                {{-- mobile data boxes --}}

                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                            style="background-color: #f6c94c; color: black;">
                                                            <p class="mb-0" style="color: black;">
                                                                Fastidious
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                86%
                                                            </h3>
                                                </div>
                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                        style="background-color: #f1935d;">
                                                        <p class="mb-0" style="color: black;">
                                                            Maverick
                                                        </p>
                                                        <h3 class="mb-0" style="color: black;">
                                                            72%
                                                        </h3>
                                                </div>

                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                        style="background-color: #9ae4e3;">
                                                        <p class="mb-0" style="color: black;">
                                                            Fastidious
                                                        </p>
                                                        <h3 class="mb-0" style="color: black;">
                                                            75%
                                                        </h3>
                                                </div>

                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                        style="background-color: #84d6a5;">
                                                        <p class="mb-0" style="color: black;">
                                                            Maverick
                                                        </p>
                                                        <h3 class="mb-0" style="color: black;">
                                                            67%
                                                        </h3>
                                                </div>
                                                <div class="col-12 d-flex justify-content-strech">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is highly fact-oriented, with a natural inclination to dive deep into problems. You tend to be direct and analytical, always seeking certainty before taking action. You thoroughly research, calculate, and evaluate every situation, weighing the pros and cons carefully. Constantly questioning and probing for clarity is second nature to you. This makes you excellent at problem-solving and strategizing.

                                                        


                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech mt-0">
                                                    <p class="comparison-description py-0">
                                                        Your strength lies in your logical, objective approach, and you often cut through complexity by sticking to the facts. While others may get lost in emotions or subjective views, you focus on what can be proven and understood through reason. People rely on you for your candid insights, no-nonsense attitude, and the ability to deliver grounded solutions.
                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>
                                                    
                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"  class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating various indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into different aspects of your personal and
                                                        professional development.
                                                        These indices measure distinct traits and capabilities that are
                                                        essential for success in today's dynamic environment.
                                                    </p>
                                                </div>



                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                      <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Let's Check Your Future Oppotunities
                                                        </button>
                                                      </h2>
                                                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body p-0">
                                                            <div class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <h5 class="explaining-title">Leadership 30%</h5>
                                                                    <p class="explaining">
                                                                        Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                        justo lacus felis. In tortor ultrices morbi sed
                                                                        proin lectus.
                                                                        Semper vel commodo a massa velit faucibus pulvinar
                                                                        lacus. Mauris amet neque a nec sed fames.
                                                                        Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                        non arcu facilisis sollicitudin laoreet sed.
                                                                        Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                        feugiat quam ipsum rutrum ornare.
                                                                        Non neque fringilla lorem pellentesque mauris.
                                                                        Ornare aenean placerat venenatis congue amet amet.
                                                                        Dignissim in faucibus vitae enim sit integer blandit
                                                                        odio a.
                                                                        Aliquet ullamcorper nec condimentum gravida
                                                                        imperdiet sit interdum morbi. Augue integer vel orci
                                                                        tortor.
                                                                        Viverra tellus lacus ipsum in integer pellentesque
                                                                        id pretium. Ut aliquam diam a viverra sit.
                                                                        Metus aliquam vulputate diam quisque volutpat
                                                                        suspendisse vitae malesuada.
                                                                        Ullamcorper adipiscing velit tortor venenatis
                                                                        feugiat orci placerat faucibus sed.
                                                                    </p>
                                                                </div>
    
                                                                <div class="col-12">
                                                                    <h5 class="explaining-title">Creativity - 30%</h5>
                                                                    <p class="explaining">
                                                                        Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                        justo lacus felis. In tortor ultrices morbi sed
                                                                        proin lectus.
                                                                        Semper vel commodo a massa velit faucibus pulvinar
                                                                        lacus. Mauris amet neque a nec sed fames.
                                                                        Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                        non arcu facilisis sollicitudin laoreet sed.
                                                                        Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                        feugiat quam ipsum rutrum ornare.
                                                                        Non neque fringilla lorem pellentesque mauris.
                                                                        Ornare aenean placerat venenatis congue amet amet.
                                                                        Dignissim in faucibus vitae enim sit integer blandit
                                                                        odio a.
                                                                        Aliquet ullamcorper nec condimentum gravida
                                                                        imperdiet sit interdum morbi. Augue integer vel orci
                                                                        tortor.
                                                                        Viverra tellus lacus ipsum in integer pellentesque
                                                                        id pretium. Ut aliquam diam a viverra sit.
                                                                        Metus aliquam vulputate diam quisque volutpat
                                                                        suspendisse vitae malesuada.
                                                                        Ullamcorper adipiscing velit tortor venenatis
                                                                        feugiat orci placerat faucibus sed.
                                                                    </p>
                                                                </div>
    
                                                                <div class="col-12">
                                                                    <h5 class="explaining-title">GIG Potential - 10%</h5>
                                                                    <p class="explaining">
                                                                        Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                        justo lacus felis. In tortor ultrices morbi sed
                                                                        proin lectus.
                                                                        Semper vel commodo a massa velit faucibus pulvinar
                                                                        lacus. Mauris amet neque a nec sed fames.
                                                                        Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                        non arcu facilisis sollicitudin laoreet sed.
                                                                        Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                        feugiat quam ipsum rutrum ornare.
                                                                        Non neque fringilla lorem pellentesque mauris.
                                                                        Ornare aenean placerat venenatis congue amet amet.
                                                                        Dignissim in faucibus vitae enim sit integer blandit
                                                                        odio a.
                                                                        Aliquet ullamcorper nec condimentum gravida
                                                                        imperdiet sit interdum morbi. Augue integer vel orci
                                                                        tortor.
                                                                        Viverra tellus lacus ipsum in integer pellentesque
                                                                        id pretium. Ut aliquam diam a viverra sit.
                                                                        Metus aliquam vulputate diam quisque volutpat
                                                                        suspendisse vitae malesuada.
                                                                        Ullamcorper adipiscing velit tortor venenatis
                                                                        feugiat orci placerat faucibus sed.
                                                                    </p>
                                                                </div>
    
                                                                <div class="col-12">
                                                                    <h5 class="explaining-title">Entrepreneurship - 10%</h5>
                                                                    <p class="explaining">
                                                                        Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                        justo lacus felis. In tortor ultrices morbi sed
                                                                        proin lectus.
                                                                        Semper vel commodo a massa velit faucibus pulvinar
                                                                        lacus. Mauris amet neque a nec sed fames.
                                                                        Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                        non arcu facilisis sollicitudin laoreet sed.
                                                                        Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                        feugiat quam ipsum rutrum ornare.
                                                                        Non neque fringilla lorem pellentesque mauris.
                                                                        Ornare aenean placerat venenatis congue amet amet.
                                                                        Dignissim in faucibus vitae enim sit integer blandit
                                                                        odio a.
                                                                        Aliquet ullamcorper nec condimentum gravida
                                                                        imperdiet sit interdum morbi. Augue integer vel orci
                                                                        tortor.
                                                                        Viverra tellus lacus ipsum in integer pellentesque
                                                                        id pretium. Ut aliquam diam a viverra sit.
                                                                        Metus aliquam vulputate diam quisque volutpat
                                                                        suspendisse vitae malesuada.
                                                                        Ullamcorper adipiscing velit tortor venenatis
                                                                        feugiat orci placerat faucibus sed.
                                                                    </p>
                                                                </div>
    
                                                                <div class="col-12">
                                                                    <h5 class="explaining-title">Team Collaboration - 20%
                                                                    </h5>
                                                                    <p class="explaining">
                                                                        Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                        justo lacus felis. In tortor ultrices morbi sed
                                                                        proin lectus.
                                                                        Semper vel commodo a massa velit faucibus pulvinar
                                                                        lacus. Mauris amet neque a nec sed fames.
                                                                        Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                        non arcu facilisis sollicitudin laoreet sed.
                                                                        Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                        feugiat quam ipsum rutrum ornare.
                                                                        Non neque fringilla lorem pellentesque mauris.
                                                                        Ornare aenean placerat venenatis congue amet amet.
                                                                        Dignissim in faucibus vitae enim sit integer blandit
                                                                        odio a.
                                                                        Aliquet ullamcorper nec condimentum gravida
                                                                        imperdiet sit interdum morbi. Augue integer vel orci
                                                                        tortor.
                                                                        Viverra tellus lacus ipsum in integer pellentesque
                                                                        id pretium. Ut aliquam diam a viverra sit.
                                                                        Metus aliquam vulputate diam quisque volutpat
                                                                        suspendisse vitae malesuada.
                                                                        Ullamcorper adipiscing velit tortor venenatis
                                                                        feugiat orci placerat faucibus sed.
                                                                    </p>
                                                                </div>
    
                                                                <div class="col-12">
                                                                    <h5 class="explaining-title">21st - Century Agility - 10%</h5>
                                                                    <p class="explaining">
                                                                        Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                        justo lacus felis. In tortor ultrices morbi sed
                                                                        proin lectus.
                                                                        Semper vel commodo a massa velit faucibus pulvinar
                                                                        lacus. Mauris amet neque a nec sed fames.
                                                                        Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                        non arcu facilisis sollicitudin laoreet sed.
                                                                        Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                        feugiat quam ipsum rutrum ornare.
                                                                        Non neque fringilla lorem pellentesque mauris.
                                                                        Ornare aenean placerat venenatis congue amet amet.
                                                                        Dignissim in faucibus vitae enim sit integer blandit
                                                                        odio a.
                                                                        Aliquet ullamcorper nec condimentum gravida
                                                                        imperdiet sit interdum morbi. Augue integer vel orci
                                                                        tortor.
                                                                        Viverra tellus lacus ipsum in integer pellentesque
                                                                        id pretium. Ut aliquam diam a viverra sit.
                                                                        Metus aliquam vulputate diam quisque volutpat
                                                                        suspendisse vitae malesuada.
                                                                        Ullamcorper adipiscing velit tortor venenatis
                                                                        feugiat orci placerat faucibus sed.
                                                                    </p>
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


                                {{-- compare 2 --}}

                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-2">
                                    <div class="p-3">
                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">John Doe</p>
                                            </div>
                                            <div class="comparing-head-section">
                                                <p class="email">johndoe@gmail.com</p>
                                            </div>
                                        </div>




                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">

                                                <div class="col-12 col-lg-6 p-2  d-lg-flex d-md-flex d-xl-flex">
                                                    <img src="{{ asset('assets/images/brain-cartoon.png') }}"  class="brain-img">
                                                </div>
                                                    
                                                <div class="d-lg-flex d-none data-box-row gap-3">
                                                    <div class="box-data px-4"
                                                            style="background-color: #f6c94c; color: black;">
                                                            <p class="mb-0" style="color: black;">
                                                                Fastidious
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                86%
                                                            </h3>
                                                    </div>

                                                    <div class="box-data px-4"
                                                            style="background-color: #f1935d;">
                                                            <p class="mb-0" style="color: black;">
                                                                Maverick
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                72%
                                                            </h3>
                                                    </div>
                                                </div>

                                                <div class="d-lg-flex d-none data-box-row gap-3">
                                                    <div class="box-data px-4"
                                                            style="background-color: #9ae4e3;">
                                                            <p class="mb-0" style="color: black;">
                                                                Fastidious
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                75%
                                                            </h3>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-12">
                                                        <div class="box-data px-4"
                                                            style="background-color: #84d6a5;">
                                                            <p class="mb-0" style="color: black;">
                                                                Maverick
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                67%
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- mobile data boxes --}}

                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                            style="background-color: #f6c94c; color: black;">
                                                            <p class="mb-0" style="color: black;">
                                                                Fastidious
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;">
                                                                86%
                                                            </h3>
                                                </div>
                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                        style="background-color: #f1935d;">
                                                        <p class="mb-0" style="color: black;">
                                                            Maverick
                                                        </p>
                                                        <h3 class="mb-0" style="color: black;">
                                                            72%
                                                        </h3>
                                                </div>

                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                        style="background-color: #9ae4e3;">
                                                        <p class="mb-0" style="color: black;">
                                                            Fastidious
                                                        </p>
                                                        <h3 class="mb-0" style="color: black;">
                                                            75%
                                                        </h3>
                                                </div>

                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                        style="background-color: #84d6a5;">
                                                        <p class="mb-0" style="color: black;">
                                                            Maverick
                                                        </p>
                                                        <h3 class="mb-0" style="color: black;">
                                                            67%
                                                        </h3>
                                                </div>

                                                <?php if ($compare_brain_profile_id === '15' ): ?>

                                                    <div class="col-12 d-flex justify-content-strech">

<p class="comparison-description pt-4">
Your brain is characterized by a unique blend of analytical, relational, and creative thinking. As a<strong> Harmonized Thinker</strong> or <strong>Balanced Integrator</strong>, you excel in environments that require you to synthesize diverse perspectives and ideas into cohesive solutions. Your ability to balance logic, creativity, and emotional intelligence allows you to navigate complex situations effectively.


    


</p>

</div>
<div class="col-12 d-flex justify-content-strech mt-0">
<p class="comparison-description py-0">
You thrive in collaborative settings where you can engage with others, explore different viewpoints, and foster harmony within teams. Your approach to problem-solving is holistic, often considering the emotional and social aspects alongside the logical and analytical.

</p>
</div>

<div class="col-12">
<h5 class="description-title">Your Incidents for Future Growth</h5>

</div>

<div class="col-12 d-flex justify-content-center">
<img src="{{ asset('assets/images/thinking.png') }}"
     class="thinking-img">
</div>


<div class="col-12">
<p class="comparison-description">
Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.

    
</p>
</div>
<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Let's Check Your Future Oppotunities
    </button>
  </h2>
  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
            <div class="col-12">
                <h5 class="explaining-title">Leadership: High                </h5>
               
                    <li class="explaining"><strong>Current Strengths:</strong> You naturally inspire and motivate others, using your emotional intelligence and understanding of group dynamics to foster collaboration.</li>
                    <li class="explaining"><strong>Growth Potential:</strong> Continue to enhance your leadership skills by seeking out opportunities for mentorship and community engagement.
                    </li>

                    
                
            </div>

            <div class="col-12">
                <h5 class="explaining-title">2. Creativity: High
                </h5>

                <li class="explaining"><strong>Current Strengths:</strong> Your ability to integrate diverse ideas allows for innovative problem-solving and creative 
               </li>
               <li class="explaining"><strong>Growth Potential:</strong> Explore new creative outlets and interdisciplinary projects to further expand your creative toolkit.



               </li>
                
            </div>

            <div class="col-12">
                <h5 class="explaining-title">3. GIG Potential: Moderate                </h5>

                <li class="explaining"><strong>Current Strengths:</strong>  You can adapt to gig-based work environments, using your relational skills to build networks and connect with others.

               </li>
               <li class="explaining"><strong>Growth Potential:</strong> Develop self-marketing skills and seek out opportunities that align with your interests and values.




               </li>
                
            </div>

            <div class="col-12">
                <h5 class="explaining-title">4. Entrepreneurship: Moderate
                </h5>
                <li class="explaining"><strong>Current Strengths:</strong>  You can adapt to gig-based work environments, using your relational skills to build networks and connect with others.

               </li>
               <li class="explaining"><strong>Growth Potential:</strong> Develop self-marketing skills and seek out opportunities that align with your interests and values.




               </li>
            </div>

            <div class="col-12">
                <h5 class="explaining-title">5. Team Collaboration Index: High

                </h5>
                <li class="explaining"><strong>Current Strengths:</strong>  You excel in collaborative environments, valuing input from others and fostering a sense of belonging within teams.

               </li>
               <li class="explaining"><strong>Growth Potential:</strong> Continue to improve your facilitation skills and conflict resolution strategies to enhance team dynamics.





               </li>
                
            </div>

            <div class="col-12">
                <h5 class="explaining-title">6. 21st-Century Agility Index: High
                </h5>

                <li class="explaining"><strong>Current Strengths:</strong>  You demonstrate adaptability to change and a willingness to embrace new ideas and 

               </li>
               <li class="explaining"><strong>Growth Potential:</strong> Stay proactive in seeking continuous learning opportunities and developing new skills to remain relevant in fast-paced environments.






</li>
              
                
            </div>

            <div class="col-12">
                <h5 class="explaining-title">Advanced Strategies for Growth & Development:

                </h5>

                <li class="explaining"><strong>Enhancing Leadership through Emotional Intelligence: </strong>  Participate in leadership training that focuses on empathy, active listening, and relationship-building to strengthen your leadership impact.


               </li>

               <li class="explaining"><strong>Cultivating Creativity through Diverse Experiences: </strong>  Engage in interdisciplinary projects that allow you to integrate various perspectives, encouraging innovative solutions.



</li>
<li class="explaining"><strong>Building Entrepreneurial Skills via Networking: </strong>  Attend workshops or join entrepreneurial communities to practice identifying opportunities and making strategic decisions.




</li>

<li class="explaining"><strong>Improving Team Collaboration through Effective Facilitation: </strong> Focus on enhancing your facilitation skills to encourage productive discussions and collaborative problem-solving.
 




</li>

<li class="explaining"><strong>Fostering Agility through Continuous Learning:  </strong> Regularly invest time in professional development opportunities, such as courses or workshops, to enhance your adaptability and skillset.





</li>

<h5 class="explaining-title">Conclusion: Unlocking Your Full Potential


</h5>

<p class="explaining">
As a <strong>Quadruple Pie (Harmonized Thinker / Balanced Integrator)</strong>, your strengths lie in your ability to synthesize diverse ideas, foster collaboration, and navigate complex social dynamics. By focusing on areas such as leadership, creativity, and team collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and relational abilities position you as a valuable asset in driving innovation and harmony in any environment. Embrace your integrative nature while nurturing your leadership skills, and continue to explore new opportunities for growth and self-discovery.


</p>
              
                
            </div>

            
        </div>
    </div>
  </div>
</div>  
</div>

<?php elseif ($compare_brain_profile_id === '14' ): ?>

    <div class="col-12 d-flex justify-content-strech">

<p class="comparison-description pt-4">
Your brain is characterized by a strong analytical approach to problem-solving and a desire for independence in your thinking. As an <strong>Independent Problem-Solver</strong> or<strong> Analytical Innovator,</strong> you have a unique ability to dissect complex problems and generate innovative solutions. You thrive in environments that allow you to explore ideas independently while also valuing logical reasoning and critical thinking.



    


</p>

</div>
<div class="col-12 d-flex justify-content-strech mt-0">
<p class="comparison-description py-0">
Your thought process often involves examining details, analyzing information, and seeking effective solutions to challenges. You are drawn to opportunities that stimulate your intellect and allow for individual exploration of concepts.


</p>
</div>

<div class="col-12">
<h5 class="description-title">Your Incidents for Future Growth</h5>

</div>

<div class="col-12 d-flex justify-content-center">
<img src="{{ asset('assets/images/thinking.png') }}"
     class="thinking-img">
</div>


<div class="col-12">
<p class="comparison-description">
Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.

    
</p>
</div>
<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Let's Check Your Future Oppotunities
    </button>
  </h2>
  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
            <div class="col-12">
                <h5 class="explaining-title">1. Leadership: Moderate
                </h5>
               
                    <li class="explaining"><strong>Current Strengths:</strong> You can lead by example, especially in analytical tasks where your logical reasoning shines. Your independence encourages others to think critically.
                    </li>
                    <li class="explaining"><strong>Growth Potential:</strong> Developing interpersonal leadership skills, such as motivating and guiding teams, can enhance your impact in collaborative settings.

                    </li>

                    
                
            </div>

            <div class="col-12">
                <h5 class="explaining-title">2. Creativity: Moderate

                </h5>

                <li class="explaining"><strong>Current Strengths:</strong> Your analytical skills contribute to creative problem-solving. You can think outside the box when required, particularly in structured contexts.

               </li>
               <li class="explaining"><strong>Growth Potential:</strong> Actively engaging in creative exercises can help expand your creative thinking and application in various scenarios.




               </li>
                
            </div>

            <div class="col-12">
                <h5 class="explaining-title">3. GIG Potential: High
                </h5>

                <li class="explaining"><strong>Current Strengths:</strong>  You excel in flexible, gig-based environments where you can utilize your analytical skills independently. Your ability to adapt to new challenges enhances your effectiveness.


               </li>
               <li class="explaining"><strong>Growth Potential:</strong> Continuing to develop skills relevant to gig work, such as self-marketing and networking, can further boost your success in this area.





               </li>
                
            </div>

            <div class="col-12">
                <h5 class="explaining-title">4. Entrepreneurship: Moderate
                </h5>
                <li class="explaining"><strong>Current Strengths:</strong>  Your independent thinking allows you to identify opportunities and innovate solutions, making you well-suited for entrepreneurial ventures.


               </li>
               <li class="explaining"><strong>Growth Potential:</strong> Strengthening your business skills, particularly in financial management and marketing, can enhance your entrepreneurial effectiveness.




               </li>
            </div>

            <div class="col-12">
                <h5 class="explaining-title">5. Team Collaboration Index: Low


                </h5>
                <li class="explaining"><strong>Current Strengths:</strong>  You are a strong individual contributor, often excelling in tasks that require deep analysis and focus.


               </li>
               <li class="explaining"><strong>Growth Potential:</strong>  Improving your collaboration skills and understanding group dynamics can help you work more effectively within teams.






               </li>
                
            </div>

            <div class="col-12">
                <h5 class="explaining-title">6. 21st-Century Agility Index: Moderate

                </h5>

                <li class="explaining"><strong>Current Strengths:</strong>  You demonstrate adaptability to new ideas and changes, often approaching them with a logical mindset.


               </li>
               <li class="explaining"><strong>Growth Potential:</strong> Focusing on developing a proactive attitude toward rapid changes will enhance your agility in diverse environments.






</li>
              
                
            </div>

            <div class="col-12">
                <h5 class="explaining-title">Advanced Strategies for Growth & Development:

                </h5>

                <li class="explaining"><strong>Enhancing Leadership through Emotional Intelligence: </strong>   Participate in workshops that focus on emotional intelligence and interpersonal skills to improve your ability to inspire and guide others.



               </li>

               <li class="explaining"><strong>Cultivating Creativity through Diverse Experiences: </strong>  Engage in activities that challenge your analytical thinking, such as design thinking workshops or collaborative brainstorming sessions.




</li>
<li class="explaining"><strong>Building Entrepreneurial Skills via Networking: </strong>  Join entrepreneurial communities or take part in pitch competitions to practice identifying opportunities and making strategic decisions in real-world contexts.





</li>

<li class="explaining"><strong>Improving Team Collaboration through Effective Facilitation: </strong> Focus on enhancing your communication skills, particularly in group settings. Consider workshops that emphasize active listening and collaboration.





</li>

<li class="explaining"><strong>Fostering Agility through Continuous Learning:  </strong> Regularly seek professional development opportunities to stay updated on industry trends. Online courses, seminars, or mentorship programs can enhance your skills and adaptability.





</li>

<h5 class="explaining-title">Conclusion: Unlocking Your Full Potential


</h5>

<p class="explaining">
As an <strong>Independent Problem-Solver / Analytical Innovators,</strong> your strengths lie in your ability to analyze complex problems, generate innovative solutions, and think independently. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and strong analytical skills position you as a valuable asset in driving innovation and problem-solving. Embrace your independent nature while nurturing your interpersonal skills, and continue to explore new opportunities for growth and self-discovery.



</p>
              
                
            </div>

            
        </div>
    </div>
  </div>
</div>  
</div>

<?php elseif ($compare_brain_profile_id === '13' ): ?>

<div class="col-12 d-flex justify-content-strech">

<p class="comparison-description pt-4">
Your brain is characterized by a vibrant and imaginative way of thinking that prioritizes creative exploration, abstract concepts, and visionary ideas. As a<strong> Visionary Dreamer</strong> or <strong>Conceptual Creative,</strong> you have a unique ability to envision possibilities and generate innovative ideas. You thrive in environments that allow for creative expression and conceptual thinking.






</p>

</div>
<div class="col-12 d-flex justify-content-strech mt-0">
<p class="comparison-description py-0">
Your thought process often involves exploring abstract ideas, generating new concepts, and seeking connections between different subjects. You are drawn to opportunities that stimulate your imagination and allow you to think outside the box. Your creativity is not just limited to art; it extends to problem-solving and conceptualizing new ways of thinking.



</p>
</div>

<div class="col-12">
<h5 class="description-title">Your Incidents for Future Growth</h5>

</div>

<div class="col-12 d-flex justify-content-center">
<img src="{{ asset('assets/images/thinking.png') }}"
 class="thinking-img">
</div>


<div class="col-12">
<p class="comparison-description">
Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.


</p>
</div>
<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
<h2 class="accordion-header">
<button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    Let's Check Your Future Oppotunities
</button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
<div class="accordion-body p-0">
    <div class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
        <div class="col-12">
            <h5 class="explaining-title">1. Leadership: Moderate
            </h5>
           
                <li class="explaining"><strong>Current Strengths:</strong> You possess the ability to inspire others with your vision and creative ideas. Your enthusiasm can motivate those around you.

                </li>
                <li class="explaining"><strong>Growth Potential:</strong> Developing practical leadership skills, such as decision-making and strategic planning, can enhance your effectiveness in guiding teams.


                </li>

                
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">2. Creativity: High


            </h5>

            <li class="explaining"><strong>Current Strengths:</strong> Your imaginative thinking allows you to generate a wide array of innovative ideas and solutions. You excel at conceptualizing new possibilities.


           </li>
           <li class="explaining"><strong>Growth Potential:</strong> Continue to nurture your creative thinking through diverse experiences, brainstorming sessions, and collaborative projects.




           </li>
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">3. GIG Potential: Moderate

            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  You thrive in flexible environments that allow for creative exploration and adaptability. Your ideas can drive innovation in gig-based roles.



           </li>
           <li class="explaining"><strong>Growth Potential:</strong> Building resilience in uncertain situations can help you navigate the dynamic nature of gig work more effectively.





           </li>
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">4. Entrepreneurship: High

            </h5>
            <li class="explaining"><strong>Current Strengths:</strong>  Your visionary mindset and ability to identify opportunities make you well-suited for entrepreneurial endeavors. You can think of unique solutions to problems.



           </li>
           <li class="explaining"><strong>Growth Potential:</strong> Strengthening your practical business skills, such as financial management and marketing, will enhance your entrepreneurial effectiveness.





           </li>
        </div>

        <div class="col-12">
            <h5 class="explaining-title">5. Team Collaboration Index: High



            </h5>
            <li class="explaining"><strong>Current Strengths:</strong>  You excel at generating ideas collaboratively, fostering an inclusive environment that encourages participation from others.



           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Continue to develop your collaborative skills by actively seeking input and feedback from team members.







           </li>
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">6. 21st-Century Agility Index: Moderate


            </h5>

            <li class="explaining"><strong>Current Strengths:</strong> You demonstrate adaptability to new ideas and changes, often embracing innovative concepts. Your creativity helps in navigating dynamic environments.


           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Focusing on developing a proactive mindset in response to rapid changes will enhance your adaptability and relevance.







</li>
          
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">Advanced Strategies for Growth & Development:

            </h5>

            <li class="explaining"><strong>Enhancing Leadership through Emotional Intelligence: </strong>  Participate in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.




           </li>

           <li class="explaining"><strong>Cultivating Creativity through Diverse Experiences: </strong>  Engage in activities that challenge your usual thinking patterns, such as interdisciplinary projects or creative workshops.





</li>
<li class="explaining"><strong>Building Entrepreneurial Skills via Networking: </strong>  Join entrepreneurial groups or take part in small-scale initiatives to practice identifying opportunities and making decisions.






</li>

<li class="explaining"><strong>Improving Team Collaboration through Effective Facilitation: </strong> Focus on enhancing your communication skills, particularly in group settings. Consider workshops that emphasize active listening and empathy.






</li>

<li class="explaining"><strong>Fostering Agility through Continuous Learning:  </strong> Regularly seek professional development opportunities to stay updated on industry trends. Online courses, seminars, or mentorship programs can enhance your skills and adaptability.






</li>

<h5 class="explaining-title">Conclusion: Unlocking Your Full Potential


</h5>

<p class="explaining">
As a<strong> Visionary Dreamer / Conceptual Creative,</strong> your strengths lie in your ability to generate innovative ideas, inspire others, and conceptualize new possibilities. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and strong relational skills position you as a valuable asset in driving innovation and fostering connections. Embrace your imaginative nature while nurturing your practical skills, and continue to explore new opportunities for growth and self-discovery.




</p>
          
            
        </div>

        
    </div>
</div>
</div>
</div>  
</div>

<?php elseif ($compare_brain_profile_id === '12' ): ?>

<div class="col-12 d-flex justify-content-strech">

<p class="comparison-description pt-4">
Your brain is characterized by a strong inclination towards abstract thinking, creativity, and relational dynamics. As an <strong>Abstract Idealist</strong> or<strong> Relational Planner,</strong> you possess the ability to envision possibilities and explore ideas beyond the immediate reality. You thrive in environments where creativity is valued, and you can connect with others on a meaningful level.






</p>

</div>
<div class="col-12 d-flex justify-content-strech mt-0">
<p class="comparison-description py-0">
Your thought process often involves considering the big picture and imagining future possibilities. You are drawn to ideas and concepts that inspire and motivate you, and you seek to implement plans that align with your values and ideals. Your relational nature allows you to understand and empathize with others, fostering strong connections and collaborative efforts.



</p>
</div>

<div class="col-12">
<h5 class="description-title">Your Incidents for Future Growth</h5>

</div>

<div class="col-12 d-flex justify-content-center">
<img src="{{ asset('assets/images/thinking.png') }}"
 class="thinking-img">
</div>


<div class="col-12">
<p class="comparison-description">
Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.


</p>
</div>
<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
<h2 class="accordion-header">
<button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    Let's Check Your Future Oppotunities
</button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
<div class="accordion-body p-0">
    <div class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
        <div class="col-12">
            <h5 class="explaining-title">1. Leadership: Moderate
            </h5>
           
                <li class="explaining"><strong>Current Strengths:</strong> You lead with vision and inspire others through your ideas and ideals. Your ability to connect with people helps you rally support for your initiatives.


                </li>
                <li class="explaining"><strong>Growth Potential:</strong> Developing your strategic leadership skills can enhance your impact, especially in guiding teams toward shared goals.



                </li>

                
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">2. Creativity: High


            </h5>

            <li class="explaining"><strong>Current Strengths:</strong> Your imaginative thinking allows you to generate innovative ideas and solutions. You excel at conceptualizing and envisioning possibilities.



           </li>
           <li class="explaining"><strong>Growth Potential:</strong> Continue to explore diverse creative outlets and engage in activities that stimulate your imaginative thinking further.





           </li>
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">3. GIG Potential: Moderate

            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  You thrive in environments that allow for flexibility and exploration of new ideas. Your creativity can drive innovative solutions in gig-based roles.




           </li>
           <li class="explaining"><strong>Growth Potential:</strong> Embracing the uncertainty that comes with gig opportunities will help you adapt and flourish in dynamic settings.






           </li>
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">4. Entrepreneurship: High

            </h5>
            <li class="explaining"><strong>Current Strengths:</strong>   Your ability to envision and plan for the future makes you well-suited for entrepreneurial endeavors. You are likely to identify opportunities that align with your ideals.




           </li>
           <li class="explaining"><strong>Growth Potential:</strong>Strengthening your practical skills in business management and decision-making will enhance your entrepreneurial effectiveness.






           </li>
        </div>

        <div class="col-12">
            <h5 class="explaining-title">5. Team Collaboration Index: High



            </h5>
            <li class="explaining"><strong>Current Strengths:</strong>  You excel at building relationships and fostering collaboration within teams. Your empathetic nature encourages open communication and support.



           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Continue to cultivate your collaborative skills by engaging in team projects and actively seeking diverse perspectives.








           </li>
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">6. 21st-Century Agility Index: Moderate


            </h5>

            <li class="explaining"><strong>Current Strengths:</strong> You are adaptable to new ideas and changes, often embracing innovative concepts. Your ability to connect with others aids in navigating change.



           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Focusing on developing a proactive mindset in response to rapid changes will enhance your adaptability and relevance.






</li>
          
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">Advanced Strategies for Growth & Development:

            </h5>

            <li class="explaining"><strong>Enhancing Leadership through Emotional Intelligence: </strong>   Participate in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.




           </li>

           <li class="explaining"><strong>Cultivating Creativity through Diverse Experiences: </strong>  Engage in activities that challenge your usual thinking patterns, such as brainstorming sessions or creative workshops that encourage unconventional ideas.





</li>
<li class="explaining"><strong>Building Entrepreneurial Skills via Networking: </strong>  Join entrepreneurial groups or take part in small-scale initiatives to practice identifying opportunities and making decisions.







</li>

<li class="explaining"><strong>Improving Team Collaboration through Effective Facilitation: </strong>Focus on enhancing your interpersonal communication skills. Consider joining workshops or training sessions that emphasize active listening and collaborative problem-solving.






</li>

<li class="explaining"><strong>Fostering Agility through Continuous Learning:  </strong> Regularly engage in professional development opportunities. Online courses, seminars, or industry conferences can help you stay updated and adapt to changes in your field.







</li>

<h5 class="explaining-title">Conclusion: Unlocking Your Full Potential


</h5>

<p class="explaining">
Your strengths lie in your ability to envision possibilities, connect with others, and generate innovative ideas. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and strong relational skills position you as a valuable asset in driving innovation and fostering connections. Embrace your idealistic nature while nurturing your practical skills, and continue to explore new opportunities for growth and self-discovery.




</p>
          
            
        </div>

        
    </div>
</div>
</div>
</div>  
</div>

<?php elseif ($compare_brain_profile_id === '11' ): ?>

<div class="col-12 d-flex justify-content-strech">

<p class="comparison-description pt-4">
Your brain is characterized by a strong inclination toward structure, organization, and practical thinking. As a <strong>Grounded Thinker</strong> or <strong>Structured Planner,</strong> you possess the ability to analyze situations logically and develop clear, actionable plans. You thrive in environments where clarity, organization, and methodical approaches are valued, allowing you to bring order to complex tasks and achieve your goals effectively.







</p>

</div>
<div class="col-12 d-flex justify-content-strech mt-0">
<p class="comparison-description py-0">
You excel at identifying the details that contribute to a bigger picture, making you adept at managing projects, coordinating tasks, and ensuring that everything runs smoothly. Your preference for structured environments helps you minimize chaos and foster productivity.



</p>
</div>

<div class="col-12">
<h5 class="description-title">Your Incidents for Future Growth</h5>

</div>

<div class="col-12 d-flex justify-content-center">
<img src="{{ asset('assets/images/thinking.png') }}"
 class="thinking-img">
</div>


<div class="col-12">
<p class="comparison-description">
Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.


</p>
</div>
<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
<h2 class="accordion-header">
<button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    Let's Check Your Future Oppotunities
</button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
<div class="accordion-body p-0">
    <div class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
        <div class="col-12">
            <h5 class="explaining-title">1. Leadership: Moderate
            </h5>
           
                <li class="explaining"><strong>Current Strengths:</strong> You lead through careful planning and organization. Your methodical approach helps others understand the steps needed to achieve goals.


                </li>
                <li class="explaining"><strong>Growth Potential:</strong> Developing your ability to inspire and guide others through effective communication can elevate your leadership impact.



                </li>

                
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">2. Creativity: Low



            </h5>

            
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">3. GIG Potential: Moderate

            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  You prefer structured environments and may feel less comfortable in highly dynamic settings, but your planning skills can still translate well into gig opportunities.




           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Building your tolerance for ambiguity and developing flexible strategies will help you thrive in gig-based roles.






           </li>
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">4. Entrepreneurship: Low


            </h5>
         
        </div>

        <div class="col-12">
            <h5 class="explaining-title">5. Team Collaboration Index: Moderate




            </h5>
            <li class="explaining"><strong>Current Strengths:</strong>  You contribute significantly to team efforts by ensuring tasks are organized and completed on time.




           </li>
           <li class="explaining"><strong>Growth Potential:</strong>   Improving your interpersonal skills and openness to others' ideas will enhance collaboration and team dynamics.








           </li>
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">6. 21st-Century Agility Index: Low



            </h5>

           
          
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">Advanced Strategies for Growth & Development:

            </h5>

            <li class="explaining"><strong>Enhancing Leadership through Emotional Intelligence: </strong>  Participate in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.




           </li>

           <li class="explaining"><strong>Cultivating Creativity through Diverse Experiences: </strong>  Engage in activities outside your comfort zone that encourage innovative thinking, such as brainstorming sessions or creative workshops.






</li>
<li class="explaining"><strong>Building Entrepreneurial Skills via Networking: </strong> Join entrepreneurial communities or take small-scale initiatives to build confidence in identifying opportunities and taking risks.






</li>

<li class="explaining"><strong>Improving Team Collaboration through Effective Facilitation: </strong>Focus on enhancing your communication skills, particularly in group settings, to foster inclusivity and teamwork.






</li>

<li class="explaining"><strong>Fostering Agility through Continuous Learning:  </strong> Regularly seek out opportunities to learn new skills or adapt to changing circumstances to increase your relevance and flexibility in the workplace.







</li>

<h5 class="explaining-title">Conclusion: Unlocking Your Full Potential


</h5>

<p class="explaining">
your strengths lie in your ability to analyze information, plan methodically, and create structured solutions to complex problems. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and strong organizational skills position you as a valuable asset in driving productivity and fostering connections. Embrace your grounded nature while nurturing your innovative potential, and continue to explore new opportunities for growth and self-discovery.





</p>
          
            
        </div>

        
    </div>
</div>
</div>
</div>  
</div>

<?php elseif ($compare_brain_profile_id === '10' ): ?>

<div class="col-12 d-flex justify-content-strech">

<p class="comparison-description pt-4">

Your brain is characterized by a unique combination of practical thinking and creative innovation. As a <strong>Practical Innovator</strong> or <strong>Grounded Creative</strong>, you possess the ability to generate new ideas while grounding them in real-world applications. Your strengths lie in your capacity to think outside the box while ensuring that your creative ideas are feasible and actionable.






</p>

</div>
<div class="col-12 d-flex justify-content-strech mt-0">
<p class="comparison-description py-0">
You thrive in environments where practical skills and creative thinking intersect, allowing you to apply your knowledge effectively to solve problems and create value. Your ability to integrate creativity with practicality makes you an asset in any team setting, where you can inspire others while contributing innovative solutions.




</p>
</div>

<div class="col-12">
<h5 class="description-title">Your Incidents for Future Growth</h5>

</div>

<div class="col-12 d-flex justify-content-center">
<img src="{{ asset('assets/images/thinking.png') }}"
 class="thinking-img">
</div>


<div class="col-12">
<p class="comparison-description">
Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.


</p>
</div>
<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
<h2 class="accordion-header">
<button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    Let's Check Your Future Oppotunities
</button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
<div class="accordion-body p-0">
    <div class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
        <div class="col-12">
            <h5 class="explaining-title">1. Leadership: Moderate
            </h5>
           
                <li class="explaining"><strong>Current Strengths:</strong>  You can lead effectively by using your innovative ideas to inspire others. Your practical approach helps you guide discussions toward actionable outcomes.



                </li>
                <li class="explaining"><strong>Growth Potential:</strong>  Focus on developing your ability to motivate and influence others, enhancing your interpersonal leadership skills.



                </li>

                
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">2. Creativity: High




            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  You excel at generating creative ideas and solutions, leveraging your practical skills to implement them effectively.





</li>
<li class="explaining"><strong>Growth Potential:</strong> Continue to cultivate your creative thinking through diverse experiences and collaborations that challenge your perspectives.







</li>

            
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">3. GIG Potential: High

            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  Your blend of practical skills and innovative thinking makes you well-suited for gig opportunities that require flexibility and adaptability.





           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Build your personal brand and network to attract diverse gig opportunities that leverage your unique strengths.







           </li>
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">4. Entrepreneurship: Moderate



            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  You have the innovative mindset to identify opportunities and develop solutions to real-world problems, making you a potential entrepreneur.






           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Strengthening your understanding of business principles and market dynamics will enhance your entrepreneurial potential.








           </li>
         
        </div>

        <div class="col-12">
            <h5 class="explaining-title">5. Team Collaboration Index: Low





            </h5>
           
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">6. 21st-Century Agility Index: Moderate




            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>   You can adapt to changing circumstances, applying practical and innovative insights to meet evolving needs.







</li>
<li class="explaining"><strong>Growth Potential:</strong> Embrace continuous learning and remain informed about industry trends to enhance your agility in a rapidly changing environment.









</li>

           
          
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">Advanced Strategies for Growth & Development:

            </h5>

            <li class="explaining"><strong>Enhancing Leadership through Empathy:  </strong>  Develop your leadership skills by participating in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.





           </li>

           <li class="explaining"><strong>Cultivating Creativity through Diverse Experiences: </strong>  Engage in activities that encourage innovative thinking and expose you to new ideas, such as attending creative workshops or brainstorming sessions.







</li>
<li class="explaining"><strong>Building Entrepreneurial Skills via Networking: </strong> Join entrepreneurial communities or attend workshops to learn from experienced entrepreneurs and gain insights into launching and managing a business.







</li>

<li class="explaining"><strong>Improving Team Collaboration through Communication Skills: </strong> Engage in team-building exercises that promote effective communication and collaboration, strengthening your ability to work with others.







</li>

<li class="explaining"><strong>Fostering Agility through Continuous Learning:  </strong> Regularly seek out opportunities to learn new skills or adapt to changing circumstances to increase your relevance and flexibility in the workplace.







</li>

<h5 class="explaining-title">Conclusion: Unlocking Your Full Potential


</h5>

<p class="explaining">
As a <strong>Practical Innovator / Grounded Creative,</strong> your strengths lie in your ability to generate innovative ideas while grounding them in practical applications. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and ability to integrate creativity with practicality position you as a valuable asset in driving positive change and fostering connections. Embrace your innovative nature while nurturing your practical skills, and continue to explore new horizons in your journey of growth and self-discovery. 






</p>
          
            
        </div>

        
    </div>
</div>
</div>
</div>  
</div>

<?php elseif ($compare_brain_profile_id === '9' ): ?>

<div class="col-12 d-flex justify-content-strech">

<p class="comparison-description pt-4">

Your brain is characterized by a unique combination of analytical thinking and relational understanding. As an<strong> Analytical Connector</strong> or<strong> Relational Analyst,</strong> you possess the ability to dissect complex information while maintaining a strong focus on interpersonal relationships. Your strengths lie in your capacity to analyze data, identify patterns, and connect with others on an emotional level.






</p>

</div>
<div class="col-12 d-flex justify-content-strech mt-0">
<p class="comparison-description py-0">
You thrive in environments where logical reasoning and relational dynamics intersect, allowing you to support others effectively while addressing analytical challenges. Your relational skills enable you to build strong connections, fostering trust and collaboration among peers.




</p>
</div>

<div class="col-12">
<h5 class="description-title">Your Incidents for Future Growth</h5>

</div>

<div class="col-12 d-flex justify-content-center">
<img src="{{ asset('assets/images/thinking.png') }}"
 class="thinking-img">
</div>


<div class="col-12">
<p class="comparison-description">
Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.


</p>
</div>
<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
<h2 class="accordion-header">
<button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    Let's Check Your Future Oppotunities
</button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
<div class="accordion-body p-0">
    <div class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
        <div class="col-12">
            <h5 class="explaining-title">1. Leadership: Moderate
            </h5>
           
                <li class="explaining"><strong>Current Strengths:</strong>  You can lead effectively by using your innovative ideas to inspire others. Your practical approach helps you guide discussions toward actionable outcomes.



                </li>
                <li class="explaining"><strong>Growth Potential:</strong>  Focus on developing your strategic leadership skills to enhance your ability to guide teams effectively while maintaining a compassionate approach.




                </li>

                
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">2. Creativity: Moderate





            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  You may not gravitate toward traditional forms of creativity, but your analytical skills allow you to generate innovative solutions based on logical reasoning.






</li>
<li class="explaining"><strong>Growth Potential:</strong> Cultivating creative thinking skills can enhance your ability to think outside the box and develop unique ideas in various contexts.








</li>

            
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">3. GIG Potential: High

            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  Your analytical capabilities and relational skills make you well-suited for gig opportunities that require flexibility and adaptability.






           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Building your personal brand and networking skills can help you attract diverse gig opportunities that align with your strengths.








           </li>
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">4. Entrepreneurship: Moderate



            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  You have the analytical skills to identify opportunities and develop solutions that address real-world problems, making you a potential entrepreneur.






           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Strengthening your business acumen and understanding market dynamics will enhance your entrepreneurial potential.









           </li>
         
        </div>

        <div class="col-12">
            <h5 class="explaining-title">5. Team Collaboration Index: High






            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  You excel in collaborative environments, valuing teamwork and open communication. Your analytical nature helps you contribute meaningfully to group discussions.






           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Fostering a culture of collaboration and inclusivity will further enhance your effectiveness in team settings.









           </li>
           
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">6. 21st-Century Agility Index: Moderate




            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>   You can adapt to changing circumstances, applying analytical insights to meet evolving needs. Your relational skills help you navigate social dynamics effectively.








</li>
<li class="explaining"><strong>Growth Potential:</strong>  Embracing continuous learning and staying informed about industry trends will enhance your agility in a rapidly changing environment.










</li>

           
          
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">Advanced Strategies for Growth & Development:

            </h5>

            <li class="explaining"><strong>Enhancing Leadership through Emotional Intelligence:  </strong>  Develop your leadership skills by participating in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.






           </li>

           <li class="explaining"><strong>Cultivating Creativity through Analytical Exploration: </strong>   Engage in activities that encourage innovative thinking while leveraging your analytical skills, such as problem-solving competitions or design thinking workshops.








</li>
<li class="explaining"><strong>Building Entrepreneurial Skills via Networking: </strong> Join entrepreneurial communities or attend workshops to learn from experienced entrepreneurs and gain insights into launching and managing a business.








</li>

<li class="explaining"><strong>Improving Team Collaboration through Communication Skills:  </strong> Engage in team-building exercises and workshops that promote effective communication and collaboration, strengthening your ability to work with others.







</li>

<li class="explaining"><strong>Fostering Agility through Continuous Learning:  </strong> Regularly seek out opportunities to learn new skills or technologies that enhance your relevance and adaptability in your field.







</li>

<h5 class="explaining-title">Conclusion: Unlocking Your Full Potential


</h5>

<p class="explaining">
Your strengths lie in your ability to analyze complex information while connecting with others on an emotional level. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and relational abilities position you as a valuable asset in driving positive change and fostering connections. Embrace your analytical nature while nurturing your relational skills, and continue to explore new horizons in your journey of growth and self-discovery.






</p>
          
            
        </div>

        
    </div>
</div>
</div>
</div>  
</div>


<?php elseif ($compare_brain_profile_id === '8' ): ?>

<div class="col-12 d-flex justify-content-strech">

<p class="comparison-description pt-4">

Your brain is characterized by a harmonious blend of practicality and relational insight. As a <strong>Practical Empath</strong> or <strong>Grounded Relational Thinker,</strong> you possess a deep understanding of human emotions and interpersonal dynamics, coupled with a pragmatic approach to problem-solving. Your strengths lie in your ability to empathize with others while providing grounded solutions to everyday challenges.







</p>

</div>
<div class="col-12 d-flex justify-content-strech mt-0">
<p class="comparison-description py-0">
You thrive in environments where emotional intelligence and practical considerations intersect, allowing you to support others effectively while also addressing real-world issues. Your relational skills enable you to build strong connections, fostering trust and collaboration among peers.




</p>
</div>

<div class="col-12">
<h5 class="description-title">Your Incidents for Future Growth</h5>

</div>

<div class="col-12 d-flex justify-content-center">
<img src="{{ asset('assets/images/thinking.png') }}"
 class="thinking-img">
</div>


<div class="col-12">
<p class="comparison-description">
Understanding and evaluating key indices such as Leadership, Creativity, GIG Potential, Entrepreneurship, Team Collaboration Index, and 21st-Century Agility Index can provide valuable insights into your personal and professional development.


</p>
</div>
<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
<h2 class="accordion-header">
<button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    Let's Check Your Future Oppotunities
</button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
<div class="accordion-body p-0">
    <div class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
        <div class="col-12">
            <h5 class="explaining-title">1. Leadership: Moderate
            </h5>
           
                <li class="explaining"><strong>Current Strengths:</strong> You have the ability to lead by example, drawing on your empathetic nature to inspire and motivate others. Your grounded approach helps you remain calm and supportive in challenging situations.




                </li>
                <li class="explaining"><strong>Growth Potential:</strong>  Focus on developing your strategic leadership skills to enhance your ability to guide teams effectively while maintaining a compassionate approach.





                </li>

                
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">2. Creativity: Moderate





            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  You may not gravitate toward traditional forms of creativity, but you excel in practical and innovative problem-solving that meets the needs of those around you.






</li>
<li class="explaining"><strong>Growth Potential:</strong>  Cultivating your creative thinking skills can enhance your ability to generate fresh ideas and solutions in various contexts.








</li>

            
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">3. GIG Potential: High

            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>   Your ability to connect with others and understand your needs makes you well-suited for gig opportunities that require flexibility and adaptability.






           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Building your personal brand and networking skills can help you attract diverse gig opportunities that align with your strengths.









           </li>
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">4. Entrepreneurship: Moderate



            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>   You have the practical skills to identify opportunities and develop solutions that address real-world problems, making you a potential entrepreneur.






           </li>
           <li class="explaining"><strong>Growth Potential:</strong>  Strengthening your business acumen and understanding market dynamics will enhance your entrepreneurial potential.










           </li>
         
        </div>

        <div class="col-12">
            <h5 class="explaining-title">5. Team Collaboration Index: High






            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>  You excel in collaborative environments, valuing teamwork and open communication. Your empathetic nature helps you build strong relationships within teams.







           </li>
           <li class="explaining"><strong>Growth Potential:</strong>   Fostering a culture of collaboration and inclusivity will further enhance your effectiveness in team settings.










           </li>
           
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">6. 21st-Century Agility Index: Moderate




            </h5>

            <li class="explaining"><strong>Current Strengths:</strong>   You can adapt to changing circumstances, applying analytical insights to meet evolving needs. Your relational skills help you navigate social dynamics effectively.








</li>
<li class="explaining"><strong>Growth Potential:</strong>  Embracing continuous learning and staying informed about industry trends will enhance your agility in a rapidly changing environment.










</li>

           
          
            
        </div>

        <div class="col-12">
            <h5 class="explaining-title">Advanced Strategies for Growth & Development:

            </h5>

            <li class="explaining"><strong>Enhancing Leadership through Empathy:  </strong>  Develop your leadership skills by participating in workshops focused on emotional intelligence and relational dynamics to improve your ability to inspire and guide others.







           </li>

           <li class="explaining"><strong>Cultivating Creativity through Practical Exploration: </strong>   Engage in activities that encourage innovative thinking, such as design challenges or collaborative brainstorming sessions, to enhance your creative problem-solving skills.









</li>
<li class="explaining"><strong>Building Entrepreneurial Skills via Networking: </strong> Join entrepreneurial communities or attend workshops to learn from experienced entrepreneurs and gain insights into launching and managing a business.









</li>

<li class="explaining"><strong>Improving Team Collaboration through Communication Skills:  </strong>  Participate in team-building exercises that promote effective communication and collaboration to strengthen your ability to work with others.








</li>

<li class="explaining"><strong>Fostering Agility through Continuous Learning: </strong> Regularly seek out opportunities to learn new skills or technologies that enhance your relevance and adaptability in your field.








</li>

<h5 class="explaining-title">Conclusion: Unlocking Your Full Potential


</h5>

<p class="explaining">
As a <strong>Practical Empath / Grounded Relational Thinker,</strong> your strengths lie in your ability to empathize with others while providing practical solutions to everyday challenges. By focusing on areas such as leadership, creativity, and collaboration, you can enhance your overall effectiveness and make a meaningful impact in your chosen fields. Your unique perspective and relational abilities position you as a valuable asset in driving positive change and fostering connections. Embrace your empathetic nature while nurturing your practical skills, and continue to explore new horizons in your journey of growth and self-discovery.







</p>
          
            
        </div>

        
    </div>
</div>
</div>
</div>  
</div>





                                                    <?php else: ?>


                                                        <?php endif; ?>
    

                                               
                                                {{-- <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Let's Check Your Future Oppotunities


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Leadership 30%</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                    justo lacus felis. In tortor ultrices morbi sed
                                                                    proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                    non arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris.
                                                                    Ornare aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida
                                                                    imperdiet sit interdum morbi. Augue integer vel orci
                                                                    tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque
                                                                    id pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis
                                                                    feugiat orci placerat faucibus sed.
                                                                </p>
                                                            </div>

                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Creativity - 30%</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                    justo lacus felis. In tortor ultrices morbi sed
                                                                    proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                    non arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris.
                                                                    Ornare aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida
                                                                    imperdiet sit interdum morbi. Augue integer vel orci
                                                                    tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque
                                                                    id pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis
                                                                    feugiat orci placerat faucibus sed.
                                                                </p>
                                                            </div>

                                                            <div class="col-12">
                                                                <h5 class="explaining-title">GIG Potential - 10%</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                    justo lacus felis. In tortor ultrices morbi sed
                                                                    proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                    non arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris.
                                                                    Ornare aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida
                                                                    imperdiet sit interdum morbi. Augue integer vel orci
                                                                    tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque
                                                                    id pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis
                                                                    feugiat orci placerat faucibus sed.
                                                                </p>
                                                            </div>

                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Entrepreneurship - 10%</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                    justo lacus felis. In tortor ultrices morbi sed
                                                                    proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                    non arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris.
                                                                    Ornare aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida
                                                                    imperdiet sit interdum morbi. Augue integer vel orci
                                                                    tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque
                                                                    id pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis
                                                                    feugiat orci placerat faucibus sed.
                                                                </p>
                                                            </div>

                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Team Collaboration - 20%
                                                                </h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                    justo lacus felis. In tortor ultrices morbi sed
                                                                    proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                    non arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris.
                                                                    Ornare aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida
                                                                    imperdiet sit interdum morbi. Augue integer vel orci
                                                                    tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque
                                                                    id pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis
                                                                    feugiat orci placerat faucibus sed.
                                                                </p>
                                                            </div>

                                                            <div class="col-12">
                                                                <h5 class="explaining-title">21st - Century Agility -
                                                                    10%</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare
                                                                    justo lacus felis. In tortor ultrices morbi sed
                                                                    proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet
                                                                    non arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris.
                                                                    Ornare aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida
                                                                    imperdiet sit interdum morbi. Augue integer vel orci
                                                                    tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque
                                                                    id pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis
                                                                    feugiat orci placerat faucibus sed.
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        {{-- thinking-style tab --}}
                        <div class="tab-pane fade" id="thinking-style" role="tabpanel"
                            aria-labelledby="thinking-style-tab" tabindex="-1">

                            {{-- compare 1 --}}
                            <div class="row d-flex">
                                <div class="col-6 comparing-div comparing-div-1" id="comparing-div-3">
                                    <div class="p-lg-3 p-xl-3 p-md-3 p-1">
                                        <div class="comparing-head p-3 py-0">
                                            <div class="comparing-head-section">
                                                <p class="name">John Doe</p>
                                            </div>
                                            <div class="comparing-head-section">
                                                <p class="email">johndoe@gmail.com</p>
                                            </div>
                                        </div>
    
    
    
    
                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
    
                                                <div class="col-12 mt-5 d-flex justify-content-center p-2">
                                                    <img src="{{ asset('assets/images/patterns.png') }}" class="patterns-img">
                                                </div>
    
                                                <div class="row ps-4 pe-0 gap-0">
    
    
                                                    <div class="col-12 pe-0">
                                                        <div class="d-flex flex-column p-3 px-0 justify-content-center">
                                                            <div class="col-12 px-0">
                                                                <h5 class="explaining-title">Realist</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
                                                            </div>
    
                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Strategist</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
                                                            </div>
    
                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Innovator</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
                                                            </div>
    
                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Empath</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
                                                            </div>
    
                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Organizer</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
                                                            </div>
    
                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Analyst
                                                                </h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
    
    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>


                                <div class="col-6 comparing-div comparing-div-2" id="comparing-div-4">
                                    <div class="p-lg-3 p-xl-3 p-md-3 p-1">
                                        <div class="comparing-head p-1 py-0">
                                            <div class="comparing-head-section">
                                                <p class="name">John Doe</p>
                                            </div>
                                            <div class="comparing-head-section">
                                                <p class="email">johndoe@gmail.com</p>
                                            </div>
                                        </div>
    
    
    
                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
    
                                                <div class="col-12 mt-5 d-flex justify-content-center p-2">
                                                    <img src="{{ asset('assets/images/patterns.png') }}" class="patterns-img">
                                                </div>
    
                                                <div class="row ps-4 gap-0">
    
    
                                                    <div class="col-12 px-0">
                                                        <div class="d-flex flex-column p-3 px-0 justify-content-center">
                                                            <div class="col-12 px-0">
                                                                <h5 class="explaining-title">Realist</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
                                                            </div>
    
                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Strategist</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
                                                            </div>
    
                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Innovator</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
                                                            </div>
    
                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Empath</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
                                                            </div>
    
                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Organizer</h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
                                                            </div>
    
                                                            <div class="col-12">
                                                                <h5 class="explaining-title">Analyst
                                                                </h5>
                                                                <p class="explaining">
                                                                    Lorem ipsum dolor sit amet consectetur. Mi ornare justo
                                                                    lacus felis. In tortor ultrices morbi sed proin lectus.
                                                                    Semper vel commodo a massa velit faucibus pulvinar
                                                                    lacus. Mauris amet neque a nec sed fames.
                                                                    Cursus proin bibendum nulla tempus. Eu non laoreet non
                                                                    arcu facilisis sollicitudin laoreet sed.
                                                                    Non eget nulla tellus aliquam sodales. Volutpat nunc
                                                                    feugiat quam ipsum rutrum ornare.
                                                                    Non neque fringilla lorem pellentesque mauris. Ornare
                                                                    aenean placerat venenatis congue amet amet.
                                                                    Dignissim in faucibus vitae enim sit integer blandit
                                                                    odio a.
                                                                    Aliquet ullamcorper nec condimentum gravida imperdiet
                                                                    sit interdum morbi. Augue integer vel orci tortor.
                                                                    Viverra tellus lacus ipsum in integer pellentesque id
                                                                    pretium. Ut aliquam diam a viverra sit.
                                                                    Metus aliquam vulputate diam quisque volutpat
                                                                    suspendisse vitae malesuada.
                                                                    Ullamcorper adipiscing velit tortor venenatis feugiat
                                                                    orci placerat faucibus sed.
                                                                </p>
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
                            {{-- advance brain report --}}
                        <div class="tab-pane fade" id="advance-brain-report" role="tabpanel"
                                aria-labelledby="advance-brain-report-tab" tabindex="-1">
                                <div class="row d-flex ">
                                    {{-- compare one --}}
                                    <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                        <div class="p-3">
                                            <div class="comparing-head">
                                                <div class="comparing-head-section">
                                                    <p class="name">John Doe</p>
                                                </div>
                                                <div class="comparing-head-section">
                                                    <p class="email">johndoe@gmail.com</p>
                                                </div>
                                            </div>
    
    
    
    
                                            <div class="col-12 scrollable-campare">
                                                <div class="row mb-5 gx-3 gy-3">
    
                                                    
    
                                                    <div class="col-12">
                                                        <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Sports and other extracurricular activities naturally preferred</h5>
                                                        <p class="comparison-description">
                                                            Lorem ipsum dolor sit amet consectetur. Mi ornare justo lacus
                                                            felis. In tortor ultrices morbi sed proin lectus.
                                                            Semper vel commodo a massa velit faucibus pulvinar lacus. Mauris
                                                            amet neque a nec sed fames.
                                                            Cursus proin bibendum nulla tempus. Eu non laoreet non arcu
                                                            facilisis sollicitudin laoreet sed.
                                                            Non eget nulla tellus aliquam sodales. Volutpat nunc feugiat
                                                            quam ipsum rutrum ornare.
                                                            Non neque fringilla lorem pellentesque mauris. Ornare aenean
                                                            placerat venenatis congue amet amet.
                                                            Dignissim in faucibus vitae enim sit integer blandit odio a.
                                                            Aliquet ullamcorper nec condimentum gravida imperdiet sit
                                                            interdum morbi. Augue integer vel orci tortor.
                                                            Viverra tellus lacus ipsum in integer pellentesque id pretium.
                                                            Ut aliquam diam a viverra sit.
                                                            Metus aliquam vulputate diam quisque volutpat suspendisse vitae
                                                            malesuada.
                                                            Ullamcorper adipiscing velit tortor venenatis feugiat orci
                                                            placerat faucibus sed.
                                                        </p>
                                                    </div>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
                                                                Individual Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                                                                Strategic Team Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                   
                                                    {{-- Mind Sports --}}
                                                    
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
                                                                Mind Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    {{-- STEM - Related Extracurriculars --}}
                                                    
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-4" aria-expanded="false" aria-controls="collapseTwo-4">
                                                                STEM - Related Extracurriculars
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
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
                                    </div>
    
    
                                    {{-- compare 2 --}}
    
                                    <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                        <div class="p-3">
                                            <div class="comparing-head">
                                                <div class="comparing-head-section">
                                                    <p class="name">John Doe</p>
                                                </div>
                                                <div class="comparing-head-section">
                                                    <p class="email">johndoe@gmail.com</p>
                                                </div>
                                            </div>
    
    
    
    
                                            <div class="col-12 scrollable-campare">
                                                <div class="row mb-5 gx-3 gy-3">
    
                                                    
    
                                                    <div class="col-12">
                                                        <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Sports and other extracurricular activities naturally preferred</h5>
                                                        <p class="comparison-description">
                                                            Lorem ipsum dolor sit amet consectetur. Mi ornare justo lacus
                                                            felis. In tortor ultrices morbi sed proin lectus.
                                                            Semper vel commodo a massa velit faucibus pulvinar lacus. Mauris
                                                            amet neque a nec sed fames.
                                                            Cursus proin bibendum nulla tempus. Eu non laoreet non arcu
                                                            facilisis sollicitudin laoreet sed.
                                                            Non eget nulla tellus aliquam sodales. Volutpat nunc feugiat
                                                            quam ipsum rutrum ornare.
                                                            Non neque fringilla lorem pellentesque mauris. Ornare aenean
                                                            placerat venenatis congue amet amet.
                                                            Dignissim in faucibus vitae enim sit integer blandit odio a.
                                                            Aliquet ullamcorper nec condimentum gravida imperdiet sit
                                                            interdum morbi. Augue integer vel orci tortor.
                                                            Viverra tellus lacus ipsum in integer pellentesque id pretium.
                                                            Ut aliquam diam a viverra sit.
                                                            Metus aliquam vulputate diam quisque volutpat suspendisse vitae
                                                            malesuada.
                                                            Ullamcorper adipiscing velit tortor venenatis feugiat orci
                                                            placerat faucibus sed.
                                                        </p>
                                                    </div>
    
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
                                                                Individual Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                   


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                                                                Strategic Team Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                   
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
                                                                Mind Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    {{-- STEM - Related Extracurriculars --}}
                                                    
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-4" aria-expanded="false" aria-controls="collapseTwo-4">
                                                                STEM - Related Extracurriculars
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
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
                                    </div>
                                </div>
                            </div>

                            {{-- prefered learning --}}
                            <div class="tab-pane fade" id="prefered-learning" role="tabpanel"
                                aria-labelledby="prefered-learning-tab" tabindex="-1">
                                <div class="row d-flex ">
                                    {{-- compare one --}}
                                    <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                        <div class="p-3">
                                            <div class="comparing-head">
                                                <div class="comparing-head-section">
                                                    <p class="name">John Doe</p>
                                                </div>
                                                <div class="comparing-head-section">
                                                    <p class="email">johndoe@gmail.com</p>
                                                </div>
                                            </div>
    
    
    
    
                                            <div class="col-12 scrollable-campare">
                                                <div class="row mb-5 gx-3 gy-3">
    
                                                    
    
                                                    <div class="col-12">
                                                        <h5 class="description-title">Sports and other extracurricular activities naturally preferred</h5>
                                                        <p class="comparison-description">
                                                            Lorem ipsum dolor sit amet consectetur. Mi ornare justo lacus
                                                            felis. In tortor ultrices morbi sed proin lectus.
                                                            Semper vel commodo a massa velit faucibus pulvinar lacus. Mauris
                                                            amet neque a nec sed fames.
                                                            Cursus proin bibendum nulla tempus. Eu non laoreet non arcu
                                                            facilisis sollicitudin laoreet sed.
                                                            Non eget nulla tellus aliquam sodales. Volutpat nunc feugiat
                                                            quam ipsum rutrum ornare.
                                                            Non neque fringilla lorem pellentesque mauris. Ornare aenean
                                                            placerat venenatis congue amet amet.
                                                            Dignissim in faucibus vitae enim sit integer blandit odio a.
                                                            Aliquet ullamcorper nec condimentum gravida imperdiet sit
                                                            interdum morbi. Augue integer vel orci tortor.
                                                            Viverra tellus lacus ipsum in integer pellentesque id pretium.
                                                            Ut aliquam diam a viverra sit.
                                                            Metus aliquam vulputate diam quisque volutpat suspendisse vitae
                                                            malesuada.
                                                            Ullamcorper adipiscing velit tortor venenatis feugiat orci
                                                            placerat faucibus sed.
                                                        </p>
                                                    </div>
    
                                                    <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample" aria-expanded="false"
                                                            aria-controls="collapseExample">
    
                                                            Individual Sports
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Tennis: </span>
                                                                                <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                              </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Golf : </span>
                                                                                <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                            </li>

                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Swimming :</span>
                                                                                <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                            </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Fencing :</span>
                                                                                <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                            </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Archery :</span>
                                                                                <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div>


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample-2" aria-expanded="false"
                                                            aria-controls="collapseExample-2">
    
                                                            Strategic Team Sports
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample-2">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Tennis: </span>
                                                                                <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                              </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Golf : </span>
                                                                                <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                            </li>

                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Swimming :</span>
                                                                                <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                            </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Fencing :</span>
                                                                                <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                            </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Archery :</span>
                                                                                <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div>
                                                    {{-- Mind Sports --}}
                                                    <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample-3" aria-expanded="false"
                                                            aria-controls="collapseExample-3">
    
                                                            Mind Sports
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample-3">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Tennis: </span>
                                                                                <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                              </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Golf : </span>
                                                                                <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                            </li>

                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Swimming :</span>
                                                                                <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                            </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Fencing :</span>
                                                                                <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                            </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Archery :</span>
                                                                                <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div>
                                                    {{-- STEM - Related Extracurriculars --}}
                                                    <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample-4" aria-expanded="false"
                                                            aria-controls="collapseExample-4">
    
                                                            STEM - Related Extracurriculars
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample-4">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Tennis: </span>
                                                                                <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                              </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Golf : </span>
                                                                                <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                            </li>

                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Swimming :</span>
                                                                                <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                            </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Fencing :</span>
                                                                                <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                            </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Archery :</span>
                                                                                <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
    
                                    {{-- compare 2 --}}
    
                                    <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                        <div class="p-3">
                                            <div class="comparing-head">
                                                <div class="comparing-head-section">
                                                    <p class="name">John Doe</p>
                                                </div>
                                                <div class="comparing-head-section">
                                                    <p class="email">johndoe@gmail.com</p>
                                                </div>
                                            </div>
    
    
                                            <?php if ($compare_brain_profile_id === '15' ): ?>

                                                <div class="col-12 scrollable-campare">
                                                <div class="row mb-5 gx-3 gy-3">
    
                                                    
    
                                                    <div class="col-12">
                                                        
                                                        <p class="comparison-description">
                                                        As a Quadruple Pie individual (Harmonized Thinker or Balanced Integrator), your studying and learning styles are characterized by a blend of analytical thinking, creativity, and relational engagement. You thrive in environments that allow for collaboration, synthesis of diverse ideas, and practical application. Here’s how you typically engage with learning:

                                                        </p>

                                                        <h6 class="collapsible-btn-content-title">1. Collaborative Learning
                                                        </h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Approach: </span>
                                                                                <span class="list-description">You thrive in group settings where you can share ideas and gain insights from others. Collaborative discussions enhance your understanding and stimulate creativity.</span>
                                                                              </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Preferred Study Techniques:</span>
                                                                                <span class="list-description">Group projects, study groups, peer teaching, and collaborative brainstorming sessions.
                                                                                </span>
                                                                            </li>

                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Effective Tools:</span>
                                                                                <span class="list-description"> Online collaboration platforms, whiteboards, and shared documents that allow for real-time input and discussion.
                                                                                </span>
                                                                            </li>
                                                                            
                                                                        </ul>

                                                                        <h6 class="collapsible-btn-content-title">2. Interdisciplinary Approach

                                                        </h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Approach: </span>
                                                                                <span class="list-description">You enjoy integrating concepts from multiple disciplines, fostering a holistic understanding of topics. This approach allows you to see connections between ideas that others may overlook.
                                                                                </span>
                                                                              </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Preferred Study Techniques:</span>
                                                                                <span class="list-description">Engaging in projects that combine subjects, such as a project that involves both science and art, or history and technology.

                                                                                </span>
                                                                            </li>

                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Effective Tools:</span>
                                                                                <span class="list-description"> Mind maps, concept maps, and integrative learning platforms that encourage cross-disciplinary connections.

                                                                                </span>
                                                                            </li>
                                                                            
                                                                        </ul>

                                                                        <h6 class="collapsible-btn-content-title">3. Visual Learning

</h6>
                <ul class="collapsible-content-list">
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Approach: </span>
                        <span class="list-description">You often find visual aids helpful in understanding complex concepts. Diagrams, charts, and infographics enhance your comprehension and retention of information.

                        </span>
                      </li>
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Preferred Study Techniques:</span>
                        <span class="list-description">Utilizing visual aids, such as flowcharts, diagrams, and infographics, to represent information graphically.


                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Effective Tools:</span>
                        <span class="list-description">  Graphic organizers, visual learning software, and presentations that incorporate images and diagrams.


                        </span>
                    </li>
                    
                </ul>

                <h6 class="collapsible-btn-content-title">4. Reflective Learning


</h6>
                <ul class="collapsible-content-list">
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Approach: </span>
                        <span class="list-description">You value time for reflection, allowing you to process information and connect it to your existing knowledge. Reflection enhances your understanding of concepts and your implications.


                        </span>
                      </li>
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Preferred Study Techniques:</span>
                        <span class="list-description">Keeping a learning journal, summarizing key takeaways after each study session, and engaging in discussions to refine your understanding.



                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Effective Tools:</span>
                        <span class="list-description">  Reflection journals, peer discussions, and self-assessment tools.



                        </span>
                    </li>
                    
                </ul>

                <h6 class="collapsible-btn-content-title">5. Hands-On Learning



</h6>
                <ul class="collapsible-content-list">
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Approach: </span>
                        <span class="list-description">You benefit from practical application and experiential learning, which help solidify concepts and theories. Engaging in hands-on activities enhances your ability to integrate knowledge.



                        </span>
                      </li>
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Preferred Study Techniques:</span>
                        <span class="list-description"> Participating in labs, simulations, workshops, and real-world projects that allow you to apply what you’ve learned.




                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Effective Tools:</span>
                        <span class="list-description">  Project-based learning experiences, internships, and practical workshops.




                        </span>
                    </li>
                    
                </ul>

                <h6 class="collapsible-btn-content-title">6. Problem-Based Learning




</h6>
                <ul class="collapsible-content-list">
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Approach: </span>
                        <span class="list-description">You enjoy tackling real-world problems and challenges as a way to learn. This method allows you to apply your analytical thinking skills and creativity in finding solutions.




                        </span>
                      </li>
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Preferred Study Techniques:</span>
                        <span class="list-description"> Engaging in case studies, group discussions on current issues, and working on problem-solving exercises.





                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Effective Tools:</span>
                        <span class="list-description">   Case study resources, simulations, and project challenges that encourage critical thinking.





                        </span>
                    </li>
                    
                </ul>

                <h6 class="collapsible-btn-content-title">7. Inquiry-Based Learning





</h6>
                <ul class="collapsible-content-list">
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Approach: </span>
                        <span class="list-description">You thrive when encouraged to ask questions and explore topics that spark your curiosity. This approach fosters a deeper understanding of subjects.





                        </span>
                      </li>
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Preferred Study Techniques:</span>
                        <span class="list-description"> Conducting research projects, exploring topics of interest, and engaging in discussions that promote inquiry.






                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Effective Tools:</span>
                        <span class="list-description"> Research databases, inquiry-based learning platforms, and guided research projects.






                        </span>
                    </li>
                    
                </ul>

                <h6 class="collapsible-btn-content-title">Tips to Enhance Learning:






</h6>
                <ol class="collapsible-content-list">
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Participate in Group Learning:  </span>
                        <span class="list-description">Collaborate with peers to enhance understanding and foster a sense of community in your learning process.






                        </span>
                      </li>
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Utilize Visual Aids:</span>
                        <span class="list-description">  Incorporate visual tools into your studying to better understand complex information and enhance retention.







                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Engage in Practical Applications: </span>
                        <span class="list-description"> Seek out hands-on learning opportunities that allow you to apply theoretical concepts in real-world scenarios.







                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Document Your Learning Journey:</span>
                        <span class="list-description"> Maintain a journal or digital portfolio to track your thoughts, reflections, and progress over time.








                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Reflect on Your Learning Process: </span>
                        <span class="list-description"> Take time to assess your study methods and strategies, identifying what works best for you and adjusting as needed.









                        </span>
                    </li>
                    
                </ol>

                <p class="comparison-description">
                By aligning your study methods with these styles, you’ll enhance your ability to retain and understand information effectively while leveraging your strengths as a Harmonized Thinker and Balanced Integrator.

                                                        

                                                        </p>
                                                    </div>
    
                                                    


                                                    
                                                    
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                            <?php elseif ($compare_brain_profile_id === '14' ): ?>

                                                <div class="col-12 scrollable-campare">
                                                <div class="row mb-5 gx-3 gy-3">
    
                                                    
    
                                                    <div class="col-12">
                                                        
                                                        <p class="comparison-description">
                                                        As a Independent Problem-Solver or Analytical Innovator, your studying and learning styles are characterized by a strong analytical approach, a focus on independence, and a preference for logical reasoning. You thrive in environments that allow you to explore concepts deeply and apply your critical thinking skills. Here’s how you typically engage with learning:


                                                        </p>

                                                        <h6 class="collapsible-btn-content-title">1. Analytical Learning

                                                        </h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Approach: </span>
                                                                                <span class="list-description"> You prefer to break down complex concepts into manageable parts, analyzing each component to understand the whole. Logical reasoning is central to your learning process.
                                                                                </span>
                                                                              </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Preferred Study Techniques:</span>
                                                                                <span class="list-description">Creating detailed outlines, flowcharts, and diagrams to visualize relationships and structures within the material.

                                                                                </span>
                                                                            </li>

                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Effective Tools:</span>
                                                                                <span class="list-description"> Mind mapping software, analytical software (e.g., Excel), and data visualization tools.

                                                                                </span>
                                                                            </li>
                                                                            
                                                                        </ul>

                                                                        <h6 class="collapsible-btn-content-title">2. Independent Study


                                                        </h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Approach: </span>
                                                                                <span class="list-description">You thrive when given the freedom to explore topics independently. You appreciate having control over your learning process and pacing.

                                                                                </span>
                                                                              </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Preferred Study Techniques:</span>
                                                                                <span class="list-description">Self-directed research, reading academic papers, and engaging in projects that allow for independent exploration of concepts.


                                                                                </span>
                                                                            </li>

                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Effective Tools:</span>
                                                                                <span class="list-description"> Online courses, self-study guides, and research databases that enable you to learn at your own pace.

                                                                                </span>
                                                                            </li>
                                                                            
                                                                        </ul>

                                                                        <h6 class="collapsible-btn-content-title">3. Problem-Solving Focus


</h6>
                <ul class="collapsible-content-list">
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Approach: </span>
                        <span class="list-description">You enjoy learning through practical application, especially when it involves solving real-world problems. Engaging with case studies or simulations can enhance your understanding.

                        </span>
                      </li>
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Preferred Study Techniques:</span>
                        <span class="list-description">Working through case studies, engaging in simulations, and participating in hands-on projects that require critical thinking.



                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Effective Tools:</span>
                        <span class="list-description">  Problem-solving exercises, real-world scenarios, and project-based learning experiences.



                        </span>
                    </li>
                    
                </ul>

                <h6 class="collapsible-btn-content-title">4. Structured Learning



</h6>
                <ul class="collapsible-content-list">
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Approach: </span>
                        <span class="list-description">You prefer a well-organized learning environment with clear expectations and guidelines. A structured approach helps you stay focused and engaged.



                        </span>
                      </li>
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Preferred Study Techniques:</span>
                        <span class="list-description">Following a defined syllabus, creating study schedules, and setting specific goals for each study session.




                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Effective Tools:</span>
                        <span class="list-description">  Study planners, time management apps, and course outlines that provide a clear framework for learning.




                        </span>
                    </li>
                    
                </ul>

                <h6 class="collapsible-btn-content-title">5. Visual Learning



</h6>
                <ul class="collapsible-content-list">
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Approach: </span>
                        <span class="list-description">You often find visual aids helpful in understanding complex concepts. Diagrams, charts, and visual representations can enhance your comprehension.




                        </span>
                      </li>
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Preferred Study Techniques:</span>
                        <span class="list-description"> Utilizing visual aids, such as infographics, flowcharts, and concept maps, to represent information graphically.





                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Effective Tools:</span>
                        <span class="list-description">  Graphic organizers, visual learning platforms, and presentations that incorporate images and diagrams.





                        </span>
                    </li>
                    
                </ul>

                <h6 class="collapsible-btn-content-title">6. Reflective Learning





</h6>
                <ul class="collapsible-content-list">
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Approach: </span>
                        <span class="list-description">You value time for reflection and analysis, allowing you to process information deeply and connect it to your existing knowledge.





                        </span>
                      </li>
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Preferred Study Techniques:</span>
                        <span class="list-description"> Keeping a learning journal, summarizing key takeaways after each study session, and engaging in discussions to refine your understanding.






                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Effective Tools:</span>
                        <span class="list-description">  Reflection journals, peer discussions, and self-assessment tools.






                        </span>
                    </li>
                    
                </ul>

               
                    
                </ul>

                <h6 class="collapsible-btn-content-title">Tips to Enhance Learning:






</h6>
                <ol class="collapsible-content-list">
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Engage in Interdisciplinary Studies:  </span>
                        <span class="list-description"> Explore subjects that connect multiple disciplines, allowing for a broader understanding of complex concepts and fostering innovative thinking.






                        </span>
                      </li>
                    <li class="collapsible-content-list-item">
                        <span class="list-title">Utilize Analytical Tools: </span>
                        <span class="list-description"> Incorporate tools that facilitate data analysis, visualization, and critical thinking into your learning process.








                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Seek Real-World Applications:  </span>
                        <span class="list-description"> Look for opportunities to apply your knowledge to practical problems, reinforcing your learning through hands-on experiences.








                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Participate in Group Learning: </span>
                        <span class="list-description"> Collaborate with peers on projects or discussions to gain different perspectives and enhance your understanding of complex topics.









                        </span>
                    </li>

                    <li class="collapsible-content-list-item">
                        <span class="list-title">Document Your Learning Journey: </span>
                        <span class="list-description"> Maintain a journal or digital portfolio to track your thoughts, reflections, and progress over time, reinforcing your understanding and helping you identify areas for improvement.










                        </span>
                    </li>
                    
                </ol>

                <p class="comparison-description">
                By aligning your study methods with these analytical and independent learning styles, you can enhance your ability to absorb and apply information effectively while leveraging your strengths as an Independent Problem-Solver and Analytical Innovator.


                                                        

                                                        </p>
                                                    </div>
    
                                                    


                                                    
                                                    
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php elseif ($compare_brain_profile_id === '13' ): ?>

<div class="col-12 scrollable-campare">
<div class="row mb-5 gx-3 gy-3">

    

    <div class="col-12">
        
        <p class="comparison-description">
        As a Visionary Dreamer or Conceptual Creative, your studying and learning styles are characterized by a preference for creativity, exploration, and abstract thinking. You thrive in environments that allow for imaginative engagement and collaborative learning. Here’s how you typically engage with learning:


        </p>

        <h6 class="collapsible-btn-content-title">1. Abstract and Conceptual Learning


        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Approach: </span>
                                <span class="list-description"> You prefer to explore ideas and concepts rather than focusing solely on concrete facts. You enjoy making connections between different subjects and thinking about the bigger picture.

                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description"> Brainstorming sessions, mind mapping, and discussing abstract concepts with peers to deepen understanding.

                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description"> Concept maps, graphic organizers, and visual aids that illustrate relationships between ideas.


                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">2. Collaborative Learning



        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Approach: </span>
                                <span class="list-description">You thrive in group settings where you can share ideas, learn from others, and engage in discussions. Collaborative learning enhances your understanding through social interaction.


                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description">Group projects, study circles, and peer teaching, allowing for exchange and exploration of diverse perspectives.



                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description"> Online collaboration platforms, discussion forums, and shared documents for group brainstorming.


                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">3. Experiential Learning



</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description">You learn best through hands-on experiences and real-world applications. Engaging in practical activities helps solidify abstract concepts.

</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">Participating in internships, workshops, or simulations that allow you to apply theoretical knowledge in practical settings.




</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Project-based learning opportunities, field trips, and case studies to contextualize learning.




</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">4. Creative Exploration




</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description">You enjoy exploring creative outlets and expressing ideas in imaginative ways. This exploration enhances your engagement with the material.



</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">Engaging in creative projects, such as writing, art, or multimedia presentations, that allow for self-expression and exploration of concepts.





</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Creative software (like design or video editing tools), art supplies, and collaborative creative spaces.





</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">5. Reflective Learning




</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description">You value time for reflection and introspection, allowing you to process and internalize what you’ve learned. This reflection can deepen your understanding of relational dynamics.





</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Keeping a learning journal, engaging in discussions about personal insights, and evaluating your experiences.





</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Reflection journals, prompts for self-assessment, and guided reflection exercises.






</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">6. Holistic Learning






</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description"> You appreciate a holistic approach to learning that integrates various disciplines and perspectives. Understanding the interconnectedness of ideas enhances your learning experience.






</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Interdisciplinary projects, thematic studies, and exploring concepts through different lenses (e.g., social, emotional, and ethical).







</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">   Integrated curriculum resources, thematic units, and cross-disciplinary collaboration.







</span>
</li>

</ul>



</ul>

<h6 class="collapsible-btn-content-title">Tips to Enhance Learning:






</h6>
<ol class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Engage in Interdisciplinary Studies:  </span>
<span class="list-description"> Explore subjects that connect multiple disciplines, allowing for a broader understanding of complex concepts.






</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Utilize Creative Resources: </span>
<span class="list-description">  Incorporate creative tools and resources into your learning process, such as visual aids, art supplies, or digital media tools.









</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Participate in Group Learning:  </span>
<span class="list-description"> Collaborate with peers to analyze and develop ideas, leveraging each other’s strengths to spark creativity and deepen understanding.









</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Seek Feedback: </span>
<span class="list-description"> Engage with mentors or peers to receive constructive feedback that can help refine your understanding and improve your skills.










</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Document Your Learning Journey: </span>
<span class="list-description"> Maintain a journal or digital portfolio to track your thoughts, reflections, and progress over time.











</span>
</li>

</ol>

<p class="comparison-description">
By aligning your study methods with these creative and relational learning styles, you can enhance your ability to absorb and apply information effectively while leveraging your strengths as a Visionary Dreamer and Conceptual Creative.


        

        </p>
    </div>

    


    
    
    

</div>
</div>
</div>
</div>
</div>
</div>

<?php elseif ($compare_brain_profile_id === '12' ): ?>

<div class="col-12 scrollable-campare">
<div class="row mb-5 gx-3 gy-3">

    

    <div class="col-12">
        
        <p class="comparison-description">
        As a Abstract Idealist or Relational Planner, your studying and learning styles are characterized by a preference for creativity, exploration, and relational engagement. You thrive in environments that allow for imaginative thinking while fostering connections with others. Here’s how you typically engage with learning:


        </p>

        <h6 class="collapsible-btn-content-title">1. Abstract and Conceptual Learning


        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Approach: </span>
                                <span class="list-description"> You prefer to explore ideas and concepts rather than focusing solely on concrete facts. You enjoy making connections between different subjects and thinking about the bigger picture.

                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description"> Brainstorming sessions, mind mapping, and discussing abstract concepts with peers to deepen understanding.

                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description"> Concept maps, graphic organizers, and visual aids that illustrate relationships between ideas.


                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">2. Collaborative Learning



        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Approach: </span>
                                <span class="list-description">You thrive in group settings where you can share ideas, learn from others, and engage in discussions. Collaborative learning enhances your understanding through social interaction.


                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description">Group projects, study circles, and peer teaching, allowing for exchange and exploration of diverse perspectives.



                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description"> Online collaboration platforms, discussion forums, and shared documents for group brainstorming.


                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">3. Experiential Learning



</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description">You learn best through hands-on experiences and real-world applications. Engaging in practical activities helps solidify abstract concepts.

</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">Participating in internships, workshops, or simulations that allow you to apply theoretical knowledge in practical settings.




</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Project-based learning opportunities, field trips, and case studies to contextualize learning.




</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">4. Creative Exploration




</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description">You enjoy exploring creative outlets and expressing ideas in imaginative ways. This exploration enhances your engagement with the material.



</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">Engaging in creative projects, such as writing, art, or multimedia presentations, that allow for self-expression and exploration of concepts.





</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Creative software (like design or video editing tools), art supplies, and collaborative creative spaces.





</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">5. Reflective Learning




</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description">You value time for reflection and introspection, allowing you to process and internalize what you’ve learned. This reflection can deepen your understanding of relational dynamics.





</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Keeping a learning journal, engaging in discussions about personal insights, and evaluating your experiences.





</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Reflection journals, prompts for self-assessment, and guided reflection exercises.






</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">6. Holistic Learning






</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description"> You appreciate a holistic approach to learning that integrates various disciplines and perspectives. Understanding the interconnectedness of ideas enhances your learning experience.






</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Interdisciplinary projects, thematic studies, and exploring concepts through different lenses (e.g., social, emotional, and ethical).







</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">   Integrated curriculum resources, thematic units, and cross-disciplinary collaboration.







</span>
</li>

</ul>



</ul>

<h6 class="collapsible-btn-content-title">Tips to Enhance Learning:






</h6>
<ol class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Engage in Interdisciplinary Studies:  </span>
<span class="list-description"> Explore subjects that connect multiple disciplines, allowing for a broader understanding of complex concepts.






</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Utilize Creative Resources: </span>
<span class="list-description">  Incorporate creative tools and resources into your learning process, such as visual aids, art supplies, or digital media tools.









</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Participate in Group Learning:  </span>
<span class="list-description"> Collaborate with peers to analyze and develop ideas, leveraging each other’s strengths to spark creativity and deepen understanding.









</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Seek Feedback: </span>
<span class="list-description"> Engage with mentors or peers to receive constructive feedback that can help refine your understanding and improve your skills.










</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Document Your Learning Journey: </span>
<span class="list-description"> Maintain a journal or digital portfolio to track your thoughts, reflections, and progress over time.











</span>
</li>

</ol>

<p class="comparison-description">
By aligning your study methods with these creative and relational learning styles, you can enhance your ability to absorb and apply information effectively while leveraging your strengths as a Visionary Dreamer and Conceptual Creative.


        

        </p>
    </div>

    


    
    
    

</div>
</div>
</div>
</div>
</div>
</div>

<?php elseif ($compare_brain_profile_id === '11' ): ?>

<div class="col-12 scrollable-campare">
<div class="row mb-5 gx-3 gy-3">

    

    <div class="col-12">
    <h6 class="collapsible-btn-content-title">Preferred Learning and Studying Styles for Grounded Thinker / Structured Planner



</h6>
        <p class="comparison-description">
        As a Grounded Thinker or Structured Planner, your learning and studying styles are characterized by a strong preference for organization, structure, and logical reasoning. You thrive in environments where you can methodically approach new information and tasks. Here’s how you typically engage with learning:


        </p>

        <h6 class="collapsible-btn-content-title">1. Structured Learning



        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Approach: </span>
                                <span class="list-description">  You prefer a systematic approach to studying, where information is organized in a clear and logical manner.


                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description"> Following a structured syllabus, creating outlines, and using checklists to guide your study sessions.


                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description"> Study planners, calendars, and organized notebooks to keep your materials and notes tidy.



                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">2. Sequential Learning




        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Approach: </span>
                                <span class="list-description">You learn best when information is presented in a step-by-step format. Jumping around between topics can be confusing for you.



                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description">Reviewing material in the order it was presented, taking notes in a linear fashion, and creating flowcharts or diagrams to understand processes.




                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description">  Chapter summaries, structured notes, and flowcharts that visually represent the progression of ideas.

                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">3. Logical/Analytical Learning Style




</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description">You thrive on logic and analysis, often needing to understand the rationale behind concepts before you can fully grasp them.


</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Breaking down complex problems into smaller, manageable parts and evaluating the relationships between ideas.





</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description"> Analytical software (e.g., spreadsheets, data visualization tools) and problem-solving exercises that require critical thinking.





</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">4. Reflective Learning





</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description"> You appreciate time for reflection, allowing you to process and analyze what you’ve learned.




</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">Engaging in solitary study sessions, keeping a journal to reflect on your learning, and reviewing notes to reinforce understanding.






</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Reflection journals, thought prompts, and dedicated quiet study spaces free from distractions.






</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">5. Detail-Oriented Learning





</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description">You are meticulous when studying complex subjects, preferring in-depth analysis to superficial understanding.






</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Taking extensive notes, conducting thorough research, and delving deep into topics before moving forward.






</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Academic articles, textbooks with detailed explanations, and supplementary reading materials for additional context.







</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">6. Practical Application







</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description"> You learn effectively when you can apply theoretical concepts to real-world situations.







</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">  Working on practical projects, case studies, or simulations that allow you to see how concepts work in practice.









</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">    Hands-on activities, project-based learning modules, and internships that provide real-life experience.








</span>
</li>

</ul>



</ul>

<h6 class="collapsible-btn-content-title">7. Visual Learning








</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Approach: </span>
<span class="list-description"> You benefit from visual representations of information, which help clarify complex ideas.








</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">  Utilizing diagrams, charts, and mind maps to organize information visually.










</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">    Visual aids such as videos, infographics, and presentations that complement written materials.









</span>
</li>

</ul>



</ul>

<h6 class="collapsible-btn-content-title">Tips to Enhance Learning:






</h6>
<ol class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Engage in Interdisciplinary Studies:  </span>
<span class="list-description"> Explore subjects that connect multiple disciplines, allowing you to see the bigger picture and understand the interrelationships between different fields.







</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Utilize Creative Resources: </span>
<span class="list-description">  Incorporate creative tools and resources into your learning process, such as visual aids, art supplies, or digital media tools.









</span>
</li>



<li class="collapsible-content-list-item">
<span class="list-title">Participate in Group Learning:  </span>
<span class="list-description"> Collaborate with peers to analyze and develop ideas, leveraging each other’s strengths to spark creativity and deepen understanding.











</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Seek Feedback:</span>
<span class="list-description"> Engage with mentors or peers to receive constructive feedback that can help you refine your understanding and improve your skills.












</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Document Your Learning Journey:</span>
<span class="list-description"> Keep a journal or digital portfolio of your thoughts, reflections, and projects to track your progress and insights.













</span>
</li>

</ol>

<p class="comparison-description">
By aligning your study methods with these structured and analytical learning styles, you can enhance your ability to absorb and apply information effectively while leveraging your strengths as a Grounded Thinker and Structured Planner


        

        </p>
    </div>

    


    
    
    

</div>
</div>
</div>
</div>
</div>
</div>

<?php elseif ($compare_brain_profile_id === '10' ): ?>

<div class="col-12 scrollable-campare">
<div class="row mb-5 gx-3 gy-3">

    

    <div class="col-12">
    
        <p class="comparison-description">
        As a Practical Innovator or Grounded Creative, your studying and learning styles are characterized by a blend of practical application and creative exploration. You thrive in environments that allow you to engage with material in a hands-on manner while incorporating innovative thinking. Here’s how you typically approach learning:


        </p>

        <h6 class="collapsible-btn-content-title">1. Hands-On Learning




        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                               
                                <span class="list-description"> You excel in environments where you can actively engage with the material. Practical, experiential learning allows you to apply concepts in real-world situations.



                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description"> Conducting experiments, participating in workshops, and engaging in project-based learning.



                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description"> Simulations, practical projects, and case studies that allow for hands-on experience.




                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">2. Creative Exploration





        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                                
                                <span class="list-description">You enjoy exploring ideas creatively and are drawn to activities that allow for innovation and self-expression. Engaging in creative processes enhances your understanding and retention of concepts.




                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description"> Brainstorming sessions, creative writing, and artistic projects that encourage out-of-the-box thinking.





                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description">  Mind maps, sketchbooks, and multimedia presentations that allow for visual expression of ideas.


                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">3. Structured Learning





</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description">While you enjoy creative exploration, you also benefit from a structured approach to learning. Clear organization helps you stay focused and manage your time effectively.



</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Following syllabi, creating outlines, and setting specific milestones for your learning goals.






</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description"> Study planners, timelines, and checklists to manage your studies efficiently.






</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">4. Visual Learning






</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description"> You benefit from visual representations of information, which help clarify complex ideas and enhance retention. Visual aids can stimulate your creativity and understanding.





</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">Utilizing diagrams, flowcharts, and infographics to organize and visualize information.







</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Educational videos, slideshows, and visual presentations that enhance engagement.







</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">5. Reflective Learning






</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description">You appreciate opportunities for self-reflection and introspection, allowing you to analyze what you’ve learned and how it connects to your experiences.







</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Keeping a learning journal, summarizing key concepts, and discussing insights with peers to reinforce learning.







</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Reflection journals, guided prompts, or discussion forums to articulate your thoughts.








</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">6.  Interdisciplinary Learning








</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description"> You benefit from exploring subjects that connect multiple disciplines, allowing you to see the bigger picture and understand the interrelationships between different fields.








</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">  Engaging in projects that incorporate elements from various subjects, such as combining science, art, and technology.










</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">     Interdisciplinary courses, workshops, or programs that encourage cross-disciplinary 








</span>
</li>

</ul>



</ul>



<h6 class="collapsible-btn-content-title">Tips to Enhance Learning:






</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Engage in Interdisciplinary Studies:  </span>
<span class="list-description"> Explore subjects that connect multiple disciplines, allowing you to see the bigger picture and understand the interrelationships between different fields.








</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Participate in Group Learning:  </span>
<span class="list-description">  Collaborate with peers to analyze and develop ideas, leveraging each other’s strengths to spark creativity and deepen understanding.










</span>
</li>



<li class="collapsible-content-list-item">
<span class="list-title">Utilize Practical Experiences: </span>
<span class="list-description"> Seek out opportunities that allow you to apply your knowledge in real-world contexts, such as internships, volunteering, or project-based learning.












</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Document Your Learning Journey:</span>
<span class="list-description"> Keep a journal or digital portfolio of your thoughts, reflections, and projects to track your progress and insights.













</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Seek Feedback:</span>
<span class="list-description">Engage with mentors or peers to receive constructive feedback that can help you refine your understanding and improve your skills.














</span>
</li>

</ul>

<p class="comparison-description">
By aligning your study methods with these practical and creative learning styles, you can enhance your ability to absorb and apply information effectively while leveraging your strengths as a Practical Innovator and Grounded Creative.


        

        </p>
    </div>

    


    
    
    

</div>
</div>
</div>
</div>
</div>
</div>


<?php elseif ($compare_brain_profile_id === '9' ): ?>

<div class="col-12 scrollable-campare">
<div class="row mb-5 gx-3 gy-3">

    

    <div class="col-12">
    
        <p class="comparison-description">
        As an Analytical Connector or Relational Analyst, your studying and learning styles are characterized by a blend of analytical thinking and relational engagement. You thrive in environments where you can dissect complex information while connecting with others. Here’s how you typically approach learning:


        </p>

        <h6 class="collapsible-btn-content-title">1. Analytical Learning





        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                               
                                <span class="list-description">You excel in environments where logical reasoning and data analysis are emphasized. Analyzing information allows you to draw insights and make informed decisions.




                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description">  Breaking down complex concepts into manageable parts, using data and statistics to support your learning, and applying logical frameworks to understand material.



                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description"> Charts, graphs, and analytical software (like Excel) that help visualize data and relationships.





                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">2. Collaborative Learning






        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                                
                                <span class="list-description">You thrive in group settings where discussions and teamwork are encouraged. Engaging with peers enhances your understanding and allows for diverse perspectives.





                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description">  Participating in group projects, study groups, and collaborative discussions to analyze and develop ideas together.






                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description">  Collaborative platforms (e.g., Google Docs, discussion boards) for real-time communication and feedback.



                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">3. Visual Learning






</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description">You benefit from visual representations of information, which help clarify complex ideas and enhance retention.




</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Utilizing diagrams, flowcharts, and mind maps to organize and visualize information.







</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description"> Infographics, educational videos, and multimedia presentations that enhance engagement.







</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">4. Reflective Learning







</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description"> You appreciate opportunities for self-reflection and introspection, allowing you to analyze what you’ve learned and how it connects to your experiences.






</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">Keeping a learning journal, summarizing key concepts, and discussing insights with peers to reinforce learning.








</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Reflection journals, guided prompts, or discussion forums to articulate your thoughts.








</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">5. Structured Learning







</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description">You thrive in environments that provide clear structure and organization, helping you stay focused and on track.








</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Following syllabi, creating outlines, and setting specific milestones for your learning goals.








</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">  Study planners, timelines, and checklists to manage your studies effectively.









</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">6. Practical Application









</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description"> You are drawn to learning that emphasizes real-world applications and problem-solving, allowing you to see the relevance of your studies.









</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Analyzing case studies, participating in simulations, and working on projects that address practical challenges.











</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">    Case study materials, real-world problem-solving exercises, and project-based learning opportunities.









</span>
</li>

</ul>



</ul>

<h6 class="collapsible-btn-content-title">7. Interdisciplinary Learning










</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description"> You benefit from exploring subjects that connect multiple disciplines, allowing you to see the bigger picture and understand the interrelationships between different fields.










</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">  Engaging in projects that incorporate elements from various subjects, such as combining science, art, and technology.












</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">    Interdisciplinary courses, workshops, or programs that encourage cross-disciplinary exploration.










</span>
</li>

</ul>



</ul>



<h6 class="collapsible-btn-content-title">Tips to Enhance Learning:






</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Engage in Group Projects:  </span>
<span class="list-description"> Seek out opportunities to work with others, as collaboration can deepen your understanding and broaden your perspectives.








</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Utilize Visual Aids:  </span>
<span class="list-description">  Incorporate diagrams, charts, and visual materials into your study routine to enhance comprehension and retention.











</span>
</li>



<li class="collapsible-content-list-item">
<span class="list-title">Reflect on Your Learning Journey:  </span>
<span class="list-description"> Take time to assess what you’ve learned and how it connects to your experiences to deepen your understanding and facilitate personal growth.













</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Stay Organized: </span>
<span class="list-description"> Keep a structured approach to your studies by using planners, checklists, and schedules to manage your time effectively.














</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Seek Real-World Applications:</span>
<span class="list-description">Look for opportunities to apply what you’ve learned in practical contexts, whether through internships, volunteer work, or hands-on projects.















</span>
</li>

</ul>

<p class="comparison-description">
By aligning your study methods with these analytical and relational learning styles, you can enhance your ability to absorb and apply information effectively while leveraging your strengths as an Analytical Connector and Relational Analyst.


        

        </p>
    </div>

    


    
    
    

</div>
</div>
</div>
</div>
</div>
</div>

<?php elseif ($compare_brain_profile_id === '8' ): ?>

<div class="col-12 scrollable-campare">
<div class="row mb-5 gx-3 gy-3">

    

    <div class="col-12">
    
        <p class="comparison-description">
        As a Practical Empath or Grounded Relational Thinker, your studying and learning styles are characterized by a blend of practical application and relational engagement. You thrive in environments that allow you to connect with others while applying your knowledge in meaningful ways. Here’s how you typically approach learning:


        </p>

        <h6 class="collapsible-btn-content-title">1. Experiential Learning






        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                               
                                <span class="list-description">You learn best through hands-on experiences and real-world applications. Engaging with the material in practical contexts helps solidify your understanding.





                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description">  Participating in internships, volunteering, and engaging in projects that apply theoretical concepts to real-life situations.




                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description"> Workshops, field trips, and service-learning opportunities that provide practical experiences.






                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">2. Collaborative Learning







        </h6>
                        <ul class="collapsible-content-list">
                            <li class="collapsible-content-list-item">
                                
                                <span class="list-description">You thrive in group settings where you can share ideas and learn from others. Collaborating with peers enhances your understanding and allows for diverse perspectives.






                                </span>
                              </li>
                            <li class="collapsible-content-list-item">
                                <span class="list-title">Preferred Study Techniques:</span>
                                <span class="list-description"> Group projects, study groups, and collaborative discussions to analyze and develop ideas together.







                                </span>
                            </li>

                            <li class="collapsible-content-list-item">
                                <span class="list-title">Effective Tools:</span>
                                <span class="list-description">  Collaborative platforms (e.g., Google Docs, discussion boards) for real-time communication and feedback.



                                </span>
                            </li>
                            
                        </ul>

                        <h6 class="collapsible-btn-content-title">3. Visual and Interactive Learning







</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description">You benefit from visual representations of information and interactive learning experiences. This can enhance your understanding and retention of complex concepts.





</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">  Utilizing diagrams, flowcharts, and infographics to organize information visually.








</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description"> Educational videos, interactive simulations, and multimedia presentations to enhance engagement.








</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">4. Reflective Learning







</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description"> You appreciate time for self-reflection and introspection, allowing you to analyze what you’ve learned and how it connects to your experiences. This reflective approach enhances retention and understanding.







</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">Keeping a learning journal, summarizing key concepts, and discussing insights with peers to reinforce learning.








</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description"> Reflection journals, guided prompts, or discussion forums where you can articulate your thoughts.









</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">5. Structured Learning







</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description">You thrive in environments that provide clear structure and organization. Having a well-defined roadmap helps you stay focused and on track.









</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Following syllabi, creating outlines, and setting specific milestones for your learning goals.









</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description"> Study planners, timelines, and checklists to keep your studies organized.










</span>
</li>

</ul>

<h6 class="collapsible-btn-content-title">6. Practical Application









</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description">You are drawn to learning that emphasizes real-world applications and problem-solving. Engaging with practical scenarios helps you see the relevance of your studies.










</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description"> Analyzing case studies, participating in simulations, and working on projects that address practical challenges.












</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">    Case study materials, real-world problem-solving exercises, and project-based learning opportunities.










</span>
</li>

</ul>



</ul>

<h6 class="collapsible-btn-content-title">7. Interdisciplinary Learning










</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">

<span class="list-description"> You benefit from exploring subjects that connect multiple disciplines. This approach allows you to see the bigger picture and understand the interrelationships between different fields.











</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Preferred Study Techniques:</span>
<span class="list-description">  Engaging in projects that incorporate elements from various subjects, such as combining science, art, and technology.













</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Effective Tools:</span>
<span class="list-description">    Interdisciplinary courses, workshops, or programs that encourage cross-disciplinary exploration.











</span>
</li>

</ul>



</ul>



<h6 class="collapsible-btn-content-title">Tips to Enhance Learning:






</h6>
<ul class="collapsible-content-list">
<li class="collapsible-content-list-item">
<span class="list-title">Engage in Collaborative Projects:  </span>
<span class="list-description"> Seek out opportunities to work with others, as collaboration can deepen your understanding and broaden your perspectives.









</span>
</li>
<li class="collapsible-content-list-item">
<span class="list-title">Utilize Visual Aids:  </span>
<span class="list-description">  Incorporate diagrams, charts, and visual materials into your study routine to enhance comprehension and retention.












</span>
</li>



<li class="collapsible-content-list-item">
<span class="list-title">Reflect on Your Learning Journey:  </span>
<span class="list-description"> Take time to assess what you’ve learned and how it connects to your experiences. This reflection can deepen your understanding and facilitate personal growth.














</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Stay Organized: </span>
<span class="list-description">  Keep a structured approach to your studies by using planners, checklists, and schedules to manage your time effectively.















</span>
</li>

<li class="collapsible-content-list-item">
<span class="list-title">Seek Real-World Applications:</span>
<span class="list-description">Look for opportunities to apply what you’ve learned in practical contexts, whether through internships, volunteer work, or hands-on projects.















</span>
</li>

</ul>

<p class="comparison-description">
By aligning your study methods with these practical and relational learning styles, you can enhance your ability to absorb and apply information effectively while leveraging your strengths as a Practical Empath and Grounded Relational Thinker.


        

        </p>
    </div>

    


    
    
    

</div>
</div>
</div>
</div>
</div>
</div>


                                                    <?php else: ?>


<?php endif; ?>
    
                                            

                            {{-- extra currucular activities --}}
                            <div class="tab-pane fade" id="extra-activities" role="tabpanel"
                                aria-labelledby="extra-activities-tab" tabindex="-1">
                                <div class="row d-flex ">
                                    {{-- compare one --}}
                                    <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                        <div class="p-3">
                                            <div class="comparing-head">
                                                <div class="comparing-head-section">
                                                    <p class="name">John Doe</p>
                                                </div>
                                                <div class="comparing-head-section">
                                                    <p class="email">johndoe@gmail.com</p>
                                                </div>
                                            </div>
    
    
    
    
                                            <div class="col-12 scrollable-campare">
                                                <div class="row mb-5 gx-3 gy-3">
    
                                                    
    
                                                    <div class="col-12">
                                                        <h5 class="description-title">Sports and other extracurricular activities naturally preferred</h5>
                                                        <p class="comparison-description">
                                                            Lorem ipsum dolor sit amet consectetur. Mi ornare justo lacus
                                                            felis. In tortor ultrices morbi sed proin lectus.
                                                            Semper vel commodo a massa velit faucibus pulvinar lacus. Mauris
                                                            amet neque a nec sed fames.
                                                            Cursus proin bibendum nulla tempus. Eu non laoreet non arcu
                                                            facilisis sollicitudin laoreet sed.
                                                            Non eget nulla tellus aliquam sodales. Volutpat nunc feugiat
                                                            quam ipsum rutrum ornare.
                                                            Non neque fringilla lorem pellentesque mauris. Ornare aenean
                                                            placerat venenatis congue amet amet.
                                                            Dignissim in faucibus vitae enim sit integer blandit odio a.
                                                            Aliquet ullamcorper nec condimentum gravida imperdiet sit
                                                            interdum morbi. Augue integer vel orci tortor.
                                                            Viverra tellus lacus ipsum in integer pellentesque id pretium.
                                                            Ut aliquam diam a viverra sit.
                                                            Metus aliquam vulputate diam quisque volutpat suspendisse vitae
                                                            malesuada.
                                                            Ullamcorper adipiscing velit tortor venenatis feugiat orci
                                                            placerat faucibus sed.
                                                        </p>
                                                    </div>
    
                                                    <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample" aria-expanded="false"
                                                            aria-controls="collapseExample">
    
                                                            Individual Sports
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Tennis: </span>
                                                                                <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                              </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Golf : </span>
                                                                                <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                            </li>

                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Swimming :</span>
                                                                                <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                            </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Fencing :</span>
                                                                                <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                            </li>
                                                                            <li class="collapsible-content-list-item">
                                                                                <span class="list-title">Archery :</span>
                                                                                <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div>


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample-2" aria-expanded="false"
                                                            aria-controls="collapseExample-2">
    
                                                            Strategic Team Sports
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample-2">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div>
                                                    {{-- Mind Sports --}}
                                                    <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample-3" aria-expanded="false"
                                                            aria-controls="collapseExample-3">
    
                                                            Mind Sports
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample-3">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div>
                                                    {{-- STEM - Related Extracurriculars --}}
                                                    <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample-4" aria-expanded="false"
                                                            aria-controls="collapseExample-4">
    
                                                            STEM - Related Extracurriculars
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample-4">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
    
                                    {{-- compare 2 --}}
    
                                    <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                        <div class="p-3">
                                            <div class="comparing-head">
                                                <div class="comparing-head-section">
                                                    <p class="name">John Doe</p>
                                                </div>
                                                <div class="comparing-head-section">
                                                    <p class="email">johndoe@gmail.com</p>
                                                </div>
                                            </div>
    
    
    
    
                                            <div class="col-12 scrollable-campare">
                                                <div class="row mb-5 gx-3 gy-3">
    
                                                    
    
                                                    <div class="col-12">
                                                        <h5 class="description-title">Sports and other extracurricular activities naturally preferred</h5>
                                                        <p class="comparison-description">
                                                            Lorem ipsum dolor sit amet consectetur. Mi ornare justo lacus
                                                            felis. In tortor ultrices morbi sed proin lectus.
                                                            Semper vel commodo a massa velit faucibus pulvinar lacus. Mauris
                                                            amet neque a nec sed fames.
                                                            Cursus proin bibendum nulla tempus. Eu non laoreet non arcu
                                                            facilisis sollicitudin laoreet sed.
                                                            Non eget nulla tellus aliquam sodales. Volutpat nunc feugiat
                                                            quam ipsum rutrum ornare.
                                                            Non neque fringilla lorem pellentesque mauris. Ornare aenean
                                                            placerat venenatis congue amet amet.
                                                            Dignissim in faucibus vitae enim sit integer blandit odio a.
                                                            Aliquet ullamcorper nec condimentum gravida imperdiet sit
                                                            interdum morbi. Augue integer vel orci tortor.
                                                            Viverra tellus lacus ipsum in integer pellentesque id pretium.
                                                            Ut aliquam diam a viverra sit.
                                                            Metus aliquam vulputate diam quisque volutpat suspendisse vitae
                                                            malesuada.
                                                            Ullamcorper adipiscing velit tortor venenatis feugiat orci
                                                            placerat faucibus sed.
                                                        </p>
                                                    </div>
    
                                                    <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample" aria-expanded="false"
                                                            aria-controls="collapseExample">
    
                                                            Individual Sports
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div>


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample-2" aria-expanded="false"
                                                            aria-controls="collapseExample-2">
    
                                                            Strategic Team Sports
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample-2">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div>
                                                    {{-- Mind Sports --}}
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                Mind Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li>
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li>
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    {{-- <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample-3" aria-expanded="false"
                                                            aria-controls="collapseExample-3">
    
                                                            Mind Sports
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample-3">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div> --}}
                                                    {{-- STEM - Related Extracurriculars --}}
                                                    {{-- <div class="col-12 collapsible-div">
    
                                                        <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseExample-4" aria-expanded="false"
                                                            aria-controls="collapseExample-4">
    
                                                            STEM - Related Extracurriculars
    
    
                                                            <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                                style="color: #f6c94d;"></i>
    
                                                        </button>
    
    
    
                                                        <div class="collapse" id="collapseExample-4">
                                                            <div class="d-flex flex-column p-3 justify-content-center">
                                                                <div class="col-12">
                                                                    <p class="explaining">
                                                                        Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                    </p>
                                                                    <div class="px-2">
                                                                        <h6 class="collapsible-btn-content-title">Recomonded Sports</h6>
                                                                        <ul class="collapsible-content-list">
                                                                            <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                        </ul>
                                                                    </div>
                                                                    
                                                                </div>
                                                                
                                                                
                                                            </div>
    
                                                        </div>
                                                    </div> --}}
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                STEM - Related Extracurriculars
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li>
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li>
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
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
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="communication" role="tabpanel"
                                aria-labelledby="communication-tab" tabindex="-1">
                                <div class="row d-flex ">
                                    {{-- compare one --}}
                                    <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                        <div class="p-3">
                                            <div class="comparing-head">
                                                <div class="comparing-head-section">
                                                    <p class="name">John Doe</p>
                                                </div>
                                                <div class="comparing-head-section">
                                                    <p class="email">johndoe@gmail.com</p>
                                                </div>
                                            </div>
    
    
    
    
                                            <div class="col-12 scrollable-campare">
                                                <div class="row mb-5 gx-3 gy-3">
    
                                                    
    
                                                    <div class="col-12">
                                                        <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Sports and other extracurricular activities naturally preferred</h5>
                                                        <p class="comparison-description">
                                                            Lorem ipsum dolor sit amet consectetur. Mi ornare justo lacus
                                                            felis. In tortor ultrices morbi sed proin lectus.
                                                            Semper vel commodo a massa velit faucibus pulvinar lacus. Mauris
                                                            amet neque a nec sed fames.
                                                            Cursus proin bibendum nulla tempus. Eu non laoreet non arcu
                                                            facilisis sollicitudin laoreet sed.
                                                            Non eget nulla tellus aliquam sodales. Volutpat nunc feugiat
                                                            quam ipsum rutrum ornare.
                                                            Non neque fringilla lorem pellentesque mauris. Ornare aenean
                                                            placerat venenatis congue amet amet.
                                                            Dignissim in faucibus vitae enim sit integer blandit odio a.
                                                            Aliquet ullamcorper nec condimentum gravida imperdiet sit
                                                            interdum morbi. Augue integer vel orci tortor.
                                                            Viverra tellus lacus ipsum in integer pellentesque id pretium.
                                                            Ut aliquam diam a viverra sit.
                                                            Metus aliquam vulputate diam quisque volutpat suspendisse vitae
                                                            malesuada.
                                                            Ullamcorper adipiscing velit tortor venenatis feugiat orci
                                                            placerat faucibus sed.
                                                        </p>
                                                    </div>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
                                                                Individual Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                                                                Strategic Team Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                   
                                                    {{-- Mind Sports --}}
                                                    
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
                                                                Mind Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    {{-- STEM - Related Extracurriculars --}}
                                                    
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-4" aria-expanded="false" aria-controls="collapseTwo-4">
                                                                STEM - Related Extracurriculars
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
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
                                    </div>
    
    
                                    {{-- compare 2 --}}
    
                                    <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                        <div class="p-3">
                                            <div class="comparing-head">
                                                <div class="comparing-head-section">
                                                    <p class="name">John Doe</p>
                                                </div>
                                                <div class="comparing-head-section">
                                                    <p class="email">johndoe@gmail.com</p>
                                                </div>
                                            </div>
    
    
    
    
                                            <div class="col-12 scrollable-campare">
                                                <div class="row mb-5 gx-3 gy-3">
    
                                                <?php if ($compare_brain_profile_id === '15' ): ?>

                                                    <div class="col-12">
                                                        
                                                        <p class="comparison-description">
                                                        As a Quadruple Pie individual (Harmonized Thinker or Balanced Integrator), your communication and behavior styles are characterized by a blend of analytical thinking, creativity, and relational engagement. You value clear communication, collaboration, and the integration of diverse perspectives in your interactions with others. Here’s how your communication and behavior typically manifest:

                                                        </p>


                                                        <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
                                                            Communication Style:
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                <ol class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Empathetic Listener
                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You prioritize understanding others' feelings and perspectives, actively listening to what you say. Your empathetic nature fosters trust and openness in conversations.
                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This quality encourages meaningful dialogue and makes others feel valued and understood.
                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            </ul>
                                                                                  </li>


                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Collaborative Communicator

                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You thrive in group discussions, valuing input from all participants. Your communication style encourages teamwork and the sharing of diverse ideas.

                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This collaborative approach enhances group cohesion and fosters a creative environment.

                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Clear and Concise


                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">While you appreciate depth in conversation, you also strive for clarity and conciseness, ensuring your points are well-articulated and easily understood.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your ability to communicate complex ideas simply helps facilitate understanding among diverse audiences.


                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Open-Minded


                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description"> You are receptive to new ideas and perspectives, often encouraging others to express your thoughts without fear of judgment. This openness fosters innovation and collaboration.

                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This trait helps create a safe space for creative exploration and constructive feedback.


                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Analytical Thinker


                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You tend to analyze information logically before responding. Your thought process involves considering various angles and implications of a discussion.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This analytical mindset contributes to informed decision-making and effective problem-solving in conversations.


                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Feedback-Oriented


                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description"> You appreciate constructive feedback and often seek it from others to improve your communication and collaboration skills.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This openness to feedback fosters personal growth and strengthens relationships by encouraging honest dialogue.


                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>
                                                                               
                                                                            </ol>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion mt-3" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                                                            Behavioral Traits:

                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <ol class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Team-Oriented

                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You enjoy working in teams and often take on roles that promote collaboration and cohesion. Your ability to mediate and integrate different viewpoints is valuable in group settings.

                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your team-oriented nature enhances collective problem-solving and creative output.

                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            </ul>
                                                                                  </li>


                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Reflective and Introspective


                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You take time to reflect on your interactions and behaviors, allowing for self-assessment and improvement. This introspection helps you grow personally and professionally.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description"> Your reflective nature encourages continuous learning and adaptation in your communication style.


                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Flexible and Adaptable



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You are comfortable adjusting your communication style to suit different audiences and situations. This flexibility allows you to navigate various social dynamics effectively.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your adaptability makes you a valuable asset in diverse settings, enhancing your ability to connect with others.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Supportive and Encouraging


                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description"> You often provide support and encouragement to peers, helping to foster a positive and collaborative environment.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your supportive behavior strengthens relationships and promotes a culture of teamwork and mutual respect.

                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Curious and Inquisitive


                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You have a natural curiosity about people and ideas, which drives you to ask questions and seek a deeper understanding of others’ perspectives.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This inquisitiveness fosters meaningful connections and enhances your relational dynamics.


                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Goal-Oriented



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description"> You often approach interactions with specific objectives in mind, whether it’s improving communication, resolving conflicts, or achieving shared goals.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description"> This focus on goals helps keep discussions productive and aligned with desired outcomes.


                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>
                                                                               
                                                                            </ol>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                   
                                                   











                                                      

                                                       

                                                                            <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Practice Active Listening:</span>
                                                                                    <span class="list-description"> Engage fully when others speak, demonstrating genuine interest in your thoughts and feelings. This enhances understanding and strengthens connections.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Encourage Open Dialogue:  </span>
                                                                                    <span class="list-description"> Create an atmosphere where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Leverage Your Analytical Skills: </span>
                                                                                    <span class="list-description"> Use your analytical abilities to break down complex topics during discussions, helping others understand the reasoning behind your thoughts.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Seek Feedback:  </span>
                                                                                    <span class="list-description"> Regularly ask for feedback from peers or mentors to refine your communication style and ensure your ideas are conveyed effectively.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Reflect on Interactions: </span>
                                                                                    <span class="list-description"> After conversations or meetings, take time to assess your communication style and behaviors. Identify areas for improvement and recognize your successes.





                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ol>

                                                                            <p class="comparison-description">
                                                                            By understanding and embracing your communication and behavioral tendencies as a Quadruple Pie dominant individual, you can enhance your ability to connect with others and foster meaningful, productive relationships in all areas of your life. Your strengths in empathy, collaboration, and analytical thinking make you a valuable partner and contributor in any relationship.


                                                        </p>

                                                        
                                                    </div>

                                                    <?php elseif ($compare_brain_profile_id === '14' ): ?>

                                                        <div class="col-12">
                                                        
                                                        <p class="comparison-description">
                                                        As a Independent Problem-Solver or Analytical Innovator, your communication and behavior styles are characterized by a strong analytical approach, independence, and a focus on logical reasoning. You value clear, direct communication and often prioritize problem-solving in your interactions. Here’s how your communication and behavior typically manifest:

                                                        </p>


                                                        <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
                                                            Communication Style:
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                <ol class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Clear and Direct
                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You prefer straightforward communication that gets to the point. You value clarity and efficiency in discussions, avoiding unnecessary embellishments.
                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description"> This clarity fosters understanding and minimizes miscommunication, making it easier for others to follow your reasoning.

                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            </ul>
                                                                                  </li>


                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Analytical and Logical


                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You tend to approach discussions with a logical mindset, often using data and evidence to support your arguments. Your analytical nature allows you to dissect complex ideas and present them clearly.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your reliance on logic enhances your credibility and encourages others to consider your perspectives thoughtfully.


                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Problem-Solving Focused



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">In conversations, you often aim to identify solutions to challenges. You may redirect discussions toward finding practical outcomes, especially in group settings.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This problem-solving orientation can help groups stay focused and productive during discussions.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Independent and Self-Reliant



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description"> You tend to express your ideas and opinions confidently, relying on your analytical skills rather than seeking validation from others. This independence allows you to contribute original thoughts.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your self-reliance can inspire others to share your own ideas without fear of judgment.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Reflective and Thoughtful



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You often take time to think through your responses before speaking. This reflective nature enables you to consider different angles and formulate well-reasoned arguments.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description"> This thoughtfulness can lead to more meaningful and impactful discussions.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Objective and Unbiased



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description"> You aim to approach discussions with objectivity, focusing on facts rather than emotions. This approach can help keep conversations grounded and constructive.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your objectivity encourages others to engage in rational discussions, enhancing collaborative problem-solving.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>
                                                                               
                                                                            </ol>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion mt-3" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                                                            Behavioral Traits:

                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <ol class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Independent Thinker


                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You enjoy exploring ideas and solutions on your own and may prefer to work independently on tasks. This independence can lead to innovative approaches and unique insights.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your independent thinking fosters originality and allows for creative problem-solving.


                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            </ul>
                                                                                  </li>


                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Detail-Oriented



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You tend to pay close attention to details, ensuring that you fully understand the nuances of a situation before taking action. This focus on detail enhances your analytical skills.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description"> Your attention to detail can lead to thorough analyses and comprehensive solutions.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Solution-Oriented




                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                  
                                                                                    <span class="list-description">You approach challenges with a focus on finding effective solutions. You enjoy brainstorming ideas and exploring different avenues to overcome obstacles.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This solution-oriented mindset can help motivate others and keep teams on track during complex projects.




                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Calm and Composed



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description"> You often maintain a calm demeanor, even in stressful situations. Your composed behavior allows you to think clearly and rationally, which is particularly valuable during problem-solving.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your calmness can help diffuse tension in group settings and foster a more constructive atmosphere.


                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Inquisitive and Curious



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You have a natural curiosity about how things work and enjoy exploring new ideas and concepts. This inquisitive nature drives your analytical thinking and problem-solving abilities.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your curiosity can inspire innovative approaches and encourage others to think critically.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Self-Motivated



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                   
                                                                                    <span class="list-description"> You are often driven by personal goals and interests, seeking out challenges that stimulate your analytical thinking. This self-motivation fuels your independent learning and growth.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">  Your intrinsic motivation allows you to pursue knowledge and skills relevant to your interests, leading to continual self-improvement.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>
                                                                               
                                                                            </ol>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                   
                                                   











                                                      

                                                       

                                                                            <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Practice Active Listening:</span>
                                                                                    <span class="list-description">Engage fully when others speak, demonstrating genuine interest in your thoughts and feelings. This can enhance collaboration and foster a supportive environment.





                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Encourage Open Dialogue: </span>
                                                                                    <span class="list-description"> Create an atmosphere where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives and constructive criticism.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Leverage Your Analytical Skills: </span>
                                                                                    <span class="list-description"> Use your analytical abilities to break down complex topics during discussions, helping others understand the reasoning behind your thoughts.





                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Seek Feedback:  </span>
                                                                                    <span class="list-description"> Regularly ask for feedback from peers or mentors to refine your communication style and ensure your ideas are conveyed effectively.





                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Reflect on Interactions: </span>
                                                                                    <span class="list-description"> After conversations or meetings, take time to assess your communication style and behaviors. Identify areas for improvement and recognize your successes.






                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ol>

                                                                            <p class="comparison-description">
                                                                            You can enhance your ability to connect with others and foster meaningful, productive relationships in all areas of your life. Your analytical thinking, independence, and solution-oriented mindset make you a valuable partner and contributor in any setting.


                                                        </p>

                                                        
                                                    </div>


                                                    <?php elseif ($compare_brain_profile_id === '13' ): ?>

<div class="col-12">

<p class="comparison-description">
As a Visionary Dreamer or Conceptual Creative, your communication and behavior styles are characterized by creativity, empathy, and a strong focus on collaboration. You value meaningful interactions and often seek to foster deeper understanding in your relationships. Here’s how your communication and behavior typically manifest:

</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Creative and Imaginative

                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You tend to express your thoughts and ideas in imaginative and engaging ways. This creative approach makes conversations more dynamic and invites others to think outside the box.

                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your creativity in communication can inspire others and stimulate rich discussions.

                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Empathetic and Relational


                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You possess a strong ability to understand and connect with the emotions of others. Your empathetic nature allows you to engage in meaningful conversations and create supportive environments.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This empathy builds trust and fosters deeper connections with peers.



                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative and Inclusive




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in discussions that encourage participation from everyone involved. You value diverse perspectives and seek to create a collaborative atmosphere where all voices are heard.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This inclusivity enhances group dynamics and fosters a sense of belonging among your peers.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Visionary and Inspirational




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> Your communication often includes visionary ideas and ideals that inspire others. You enjoy sharing your thoughts on possibilities and future scenarios, encouraging others to dream big.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This visionary quality can motivate those around you to explore new ideas and perspectives.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Open and Honest




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You value transparency in your interactions and prefer to communicate openly about your thoughts and feelings. This honesty fosters trust and authenticity in relationships.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your straightforwardness encourages others to share your ideas and concerns, leading to more meaningful conversations.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Thoughtful



                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You take time to consider your interactions and the ideas presented during conversations. This thoughtful approach helps you digest information and respond meaningfully.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This reflection enhances your understanding and allows for deeper discussions.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Imaginative and Visionary



                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach tasks and relationships with a sense of creativity and vision. You enjoy brainstorming new ideas and exploring possibilities for the future.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This imaginative quality helps you think outside the box and come up with innovative solutions.


                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative and Team-Oriented




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in collaborative settings where teamwork is emphasized. You value input from others and enjoy working together to achieve common goals.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This teamwork fosters strong relationships and enhances the overall effectiveness of group efforts.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Supportive and Nurturing





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You often take on a supportive role in relationships, offering encouragement and motivation to those around you. You enjoy uplifting others and celebrating your successes.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your supportive behavior creates a positive environment that fosters growth and collaboration.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Curious and Open-Minded




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You possess a natural curiosity about the world and the people around you. You enjoy exploring new ideas and concepts, which can lead to creative insights.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This curiosity encourages lifelong learning and personal growth.



                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You value self-reflection and take time to assess your interactions and behaviors within relationships. This introspective approach allows for personal growth and deeper connections.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your ability to reflect enhances your emotional intelligence and helps you develop stronger, more meaningful relationships.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Flexible and Adaptive




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> You are often driven by personal goals and interests, seeking out challenges that stimulate your analytical thinking. This self-motivation fuels your independent learning and growth.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   Your adaptability can lead to innovative solutions in evolving environments.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Engage fully when others speak, showing genuine interest in your thoughts and feelings. This enhances empathy and understanding.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description"> Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Imagination: </span>
                            <span class="list-description"> Use your creativity to enhance presentations or discussions, incorporating visuals or storytelling to make your points more engaging.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Seek Diverse Perspectives:  </span>
                            <span class="list-description"> Actively encourage input from others in group settings, valuing different viewpoints and fostering a collaborative atmosphere.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions: </span>
                            <span class="list-description"> Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.







                            </span>
                          </li>

                          
                       
                    </ol>

                    <p class="comparison-description">
                    By understanding and embracing your communication and behavioral tendencies as a LOW L2 dominant individual, you can enhance your ability to connect with others and foster meaningful, fulfilling relationships in all areas of your life. Your imaginative thinking, empathetic nature, and strong relational abilities make you a valuable partner and contributor in any relationship.



</p>


</div>

<?php elseif ($compare_brain_profile_id === '12' ): ?>

<div class="col-12">

<p class="comparison-description">
As a Abstract Idealist or Relational Planner, your communication and behavior styles are characterized by creativity, relational engagement, and an emphasis on meaningful connections. You value open dialogue and collaboration, which shapes how you interact with others. Here’s how your communication and behavior typically manifest:

</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Creative and Expressive


                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You often use imaginative language and creative expression in your communication. You enjoy exploring ideas and concepts, making your conversations engaging and thought-provoking.


                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This creativity can inspire others and foster a dynamic exchange of ideas.


                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Empathetic and Relational



                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You possess a strong ability to understand and connect with the emotions of others. Your empathetic nature allows you to engage in meaningful conversations and create supportive environments.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This empathy builds trust and fosters deeper connections with others.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative and Inclusive




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in discussions that encourage participation from everyone involved. You value diverse perspectives and seek to create a collaborative atmosphere where all voices are heard.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This inclusivity enhances group dynamics and fosters a sense of belonging among peers.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Thoughtful





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You tend to reflect on your interactions and the ideas presented during conversations. This thoughtful approach helps you consider different viewpoints before responding.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This reflection enhances your understanding and allows for more nuanced discussions.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Visionary and Inspirational




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">Your communication often includes visionary ideas and ideals that inspire others. You enjoy sharing your thoughts on possibilities and future scenarios.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This visionary quality can motivate those around you to explore new ideas and perspectives.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Open and Honest




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You value transparency in your interactions and prefer to communicate openly about your thoughts and feelings. This honesty fosters trust and authenticity in relationships.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your openness encourages others to share your ideas and concerns, leading to more meaningful conversations.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Imaginative and Visionary



                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach tasks and relationships with a sense of creativity and vision. You enjoy brainstorming new ideas and exploring possibilities for the future.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This imaginative quality helps you think outside the box and come up with innovative solutions.



                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative and Team-Oriented




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in collaborative settings where teamwork is emphasized. You value input from others and enjoy working together to achieve common goals.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This teamwork fosters strong relationships and enhances the overall effectiveness of group efforts.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Supportive and Encouraging






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You often take on a supportive role in relationships, offering encouragement and motivation to those around you. You enjoy uplifting others and celebrating your successes.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your supportive behavior creates a positive environment that fosters growth and collaboration.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Curious and Open-Minded




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You possess a natural curiosity about the world and the people around you. You enjoy exploring new ideas and concepts, which can lead to creative insights.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This curiosity encourages lifelong learning and personal growth.



                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You value self-reflection and take time to assess your interactions and behaviors within relationships. This introspective approach allows for personal growth and deeper connections.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your ability to reflect enhances your emotional intelligence and helps you develop stronger, more meaningful relationships.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Flexible and Adaptive




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> You tend to be open to change and willing to adapt your approach based on new information or feedback. This flexibility allows you to navigate dynamic situations effectively.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">    Your adaptability can lead to innovative solutions in changing environments.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Engage fully when others speak, showing genuine interest in your thoughts and feelings. This enhances empathy and understanding.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description"> Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Imagination: </span>
                            <span class="list-description"> Use your creativity to enhance presentations or discussions, incorporating visuals or storytelling to make your points more engaging.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Seek Diverse Perspectives:  </span>
                            <span class="list-description"> Actively encourage input from others in group settings, valuing different viewpoints and fostering a collaborative atmosphere.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions: </span>
                            <span class="list-description"> Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.







                            </span>
                          </li>

                          
                       
                    </ol>

                    <p class="comparison-description">
                    You can enhance your ability to connect with others and foster meaningful, fulfilling relationships in all areas of your life. Your imaginative thinking, empathetic nature, and strong relational abilities make you a valuable partner and contributor in any relationship



</p>


</div>


<?php elseif ($compare_brain_profile_id === '11' ): ?>

<div class="col-12">

<p class="comparison-description">
As a Grounded Thinker or Structured Planner, your communication and behavior styles are characterized by a preference for clarity, organization, and logical reasoning. You thrive in environments that value structured interactions and practical approaches. Here’s how your communication and behavior typically manifest:

</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Clear and Concise



                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prefer to communicate in a straightforward manner, focusing on clarity and precision. Your messages are typically well-structured, allowing others to understand your points easily.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This clarity reduces misunderstandings and facilitates effective communication in both personal and professional settings.



                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Analytical and Rational




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach conversations with a logical mindset, often providing data or evidence to support your views. You enjoy discussing ideas that are grounded in facts and analysis.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This analytical approach can enhance discussions, leading to well-informed decisions.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Structured and Organized





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">Your communication is often organized, with a clear progression of ideas. You may prefer to outline your thoughts before sharing them, ensuring a logical flow.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This organization helps others follow your reasoning and contributes to more effective discussions.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Supportive Listener






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> While you communicate your ideas clearly, you also prioritize listening to others. You value your input and seek to understand your perspectives, making you a supportive conversational partner.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your listening skills foster a sense of trust and respect in relationships.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Detail-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You tend to focus on details, ensuring that important aspects of a discussion are addressed. You may be inclined to ask clarifying questions to ensure full understanding.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This attention to detail helps prevent misunderstandings and promotes thoroughness in discussions.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Feedback-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You appreciate constructive feedback and often seek it to improve your communication skills. You encourage others to share your thoughts on your ideas and presentations.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This openness to feedback fosters an environment of continuous improvement and collaboration.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Structured and Methodical




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">Your approach to tasks and interactions is highly organized. You thrive on having a clear plan and enjoy breaking down complex tasks into manageable steps.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This structured behavior enhances your ability to meet deadlines and achieve goals 



                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Pragmatic and Practical




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You tend to focus on practical solutions to problems, prioritizing what works best in real-world situations. You prefer to take a no-nonsense approach to challenges.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your pragmatic nature helps you navigate obstacles effectively, finding solutions that are both realistic and achievable.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Calm and Composed







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You usually maintain a calm demeanor, especially in challenging situations. Your grounded nature allows you to approach problems with a level head, providing stability for those around you.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This calmness can help de-escalate tensions and facilitate constructive discussions.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Goal-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You approach tasks with specific objectives in mind, whether it’s completing a project, achieving a personal goal, or collaborating on a team effort.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This focus on goals encourages purposeful interactions and a sense of direction in your work.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You value self-reflection and take time to assess your interactions and behaviors within relationships. This introspective approach allows for personal growth and deeper connections.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This reflection enhances your emotional intelligence and helps you navigate relational dynamics more effectively.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reliable and Dependable





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> Others often see you as a reliable team member or friend. You follow through on commitments and ensure that tasks are completed as planned.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This dependability fosters trust and strengthens relationships, making you a valued contributor in group settings.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Continue to engage fully when others speak, showing genuine interest in your thoughts and feelings. Ask clarifying questions to demonstrate your understanding.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description">  Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Analytical Skills: </span>
                            <span class="list-description"> Use your analytical abilities to structure your communication effectively, helping others understand complex information more easily.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions:  </span>
                            <span class="list-description"> Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Support and Encourage Others:</span>
                            <span class="list-description"> Be proactive in providing support to those around you. Your positive reinforcement can enhance relationships and foster a sense of community.








                            </span>
                          </li>

                          
                       
                    </ol>

                    <p class="comparison-description">
                    By understanding and embracing your communication and behavioral tendencies as a LOW R1 dominant individual, you can enhance your ability to connect with others and foster meaningful, fulfilling relationships in all areas of your life. Your structured thinking, practical approach, and strong relational abilities make you a valuable partner and contributor in any relationship.



</p>


</div>

<?php elseif ($compare_brain_profile_id === '10' ): ?>

<div class="col-12">

<p class="comparison-description">
As a Practical Innovator or Grounded Creative, your communication and behavior styles are characterized by a blend of practical application, creativity, and interpersonal engagement. You thrive in environments where you can express innovative ideas while connecting meaningfully with others. Here’s how your communication and behavior typically manifest:

</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Innovative and Clear




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prefer to communicate in a straightforward manner, presenting your ideas clearly while also being open to creative solutions. Your innovative thinking allows you to propose new concepts that can be easily understood.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">    This clarity reduces misunderstandings and encourages collaboration.




                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Empathetic and Relational





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach conversations with empathy and a genuine interest in others’ perspectives. You seek to build connections through shared experiences and mutual understanding.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your empathetic communication fosters trust and encourages open dialogue, making others feel valued.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in group settings where input from others is valued. Your collaborative nature encourages participation and brainstorming, which enhances creativity and group dynamics.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This collaborative approach leads to more comprehensive and innovative solutions.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Active Listener







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You engage in active listening, showing genuine interest in what others are saying. This helps you understand your needs and concerns better, allowing for more effective communication.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your listening skills build rapport and strengthen relationships, as others feel appreciated and heard.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Structured Yet Flexible





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You tend to organize your thoughts logically, but you also allow for flexibility in discussions. This adaptability enables you to explore creative ideas while maintaining a focus on practical applications.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This balance helps you navigate conversations effectively, making them both productive and innovative.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Feedback-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You value constructive feedback and encourage others to share your thoughts on your communication style. This openness to critique helps you refine your approach and enhances your effectiveness.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This willingness to receive feedback fosters an environment of continuous improvement and mutual respect.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Relational and Connective





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prioritize building meaningful connections with others and seek to create a sense of community. Your social nature enables you to engage with a wide range of you.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This relational focus helps create strong networks and support systems.




                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Innovative Thinker





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach situations with a creative mindset, often generating innovative solutions to challenges. Your ability to think outside the box is a significant asset in both personal and professional contexts.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your innovative thinking can lead to breakthrough ideas and improvements.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Supportive and Nurturing








                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You often take on a supportive role in relationships, offering encouragement and assistance to those you care about. You prioritize the well-being of others and actively seek to uplift them.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your nurturing behavior helps build trust and reinforces positive connections.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Adaptable and Open-Minded





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You are open to new ideas and approaches, adapting your communication and behavior to suit different relational contexts. This flexibility allows you to navigate diverse social dynamics effectively.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your adaptability helps maintain healthy relationships and fosters collaboration.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Goal-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach tasks and interactions with specific goals in mind, whether it’s fostering deeper connections, collaborating on projects, or supporting each other’s aspirations.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This focus on objectives encourages purposeful interactions and a sense of direction in your relationships.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> You value self-reflection and take time to assess your interactions and behaviors within relationships. This introspective approach allows for personal growth and deeper connections.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">    This reflection enhances your emotional intelligence and helps you navigate relational dynamics more effectively.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Continue to engage fully when others speak, asking clarifying questions and demonstrating genuine interest in your thoughts and feelings.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description">  Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Innovative Skills: </span>
                            <span class="list-description"> Use your creativity to explore new ideas and solutions in your communication, making interactions engaging and impactful.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions: </span>
                            <span class="list-description">  Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Support and Encourage Others:</span>
                            <span class="list-description"> Be proactive in providing support to those around you. Your positive reinforcement can enhance relationships and foster a sense of community.
  








                            </span>
                          </li>

                          
                       
                    </ol>

                    


</div>


<?php elseif ($compare_brain_profile_id === '9' ): ?>

<div class="col-12">

<p class="comparison-description">
As an Analytical Connector or Relational Analyst, your communication and behavior styles are characterized by a blend of analytical reasoning and relational understanding. You thrive in environments where you can engage meaningfully with others while applying your analytical skills to navigate complex information. Here’s how your communication and behavior typically manifest:

</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Analytical and Clear





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prefer to communicate with clarity and precision. Your analytical mindset helps you articulate complex ideas in an understandable way, making it easier for others to grasp your insights.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">     This clarity reduces misunderstandings and enhances the effectiveness of your communication.





                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Empathetic and Relational





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach conversations with an empathetic understanding of others’ feelings and perspectives. You seek to connect on an emotional level while providing logical insights.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your empathetic communication fosters trust and strengthens relationships, making it easier for others to share your thoughts with you.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in collaborative environments where input from others is valued. You actively encourage group discussions and enjoy working together to analyze and develop ideas.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This collaborative approach enhances teamwork and fosters creativity in group settings.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Active Listener







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You are attentive when others speak, demonstrating genuine interest in your thoughts and feelings. This active listening enhances your understanding and helps you respond thoughtfully.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your listening skills build rapport and strengthen relationships, as others feel appreciated and heard.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Structured and Organized






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prefer to present information in a structured manner, often using logical frameworks to guide your communication. This organization helps others follow your thought process easily.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your structured approach enhances the clarity of your messages and supports effective decision-making.








                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Feedback-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You value feedback and encourage others to share your thoughts on your communication style. This openness to critique helps you refine your approach and enhance your effectiveness.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This willingness to receive feedback fosters an environment of continuous improvement and mutual respect.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Relational and Connective





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prioritize building meaningful connections with others and seek to create a sense of community. Your social nature enables you to engage with a wide range of you.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This relational focus helps create strong networks and support systems.




                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Analytical Thinker






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach situations with a logical mindset, often analyzing data and information to inform your decisions. This analytical trait helps you navigate complex issues effectively.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your analytical thinking allows you to identify patterns and make data-driven decisions.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Supportive and Nurturing








                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You often take on a supportive role in relationships, offering encouragement and assistance to those you care about. You prioritize the well-being of others and actively seek to uplift them.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your nurturing behavior helps build trust and reinforces positive connections.








                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Adaptable and Flexible





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You are open to change and can adjust your communication style based on the needs of the situation or the people involved. This flexibility enhances your effectiveness in various social contexts.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your adaptability allows you to navigate different social dynamics smoothly.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Goal-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach tasks and interactions with specific goals in mind, whether it’s building deeper connections or collaborating on projects. This focus on objectives encourages purposeful interactions.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   Your goal-oriented mindset can lead to meaningful outcomes in both personal and professional relationships.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> You value self-reflection and take time to assess your interactions and behaviors within relationships. This introspective approach allows you to learn from experiences and grow personally.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">     This reflection enhances your emotional intelligence and helps you develop stronger, more meaningful relationships.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Continue to engage fully when others speak, asking clarifying questions and demonstrating genuine interest in your thoughts and feelings.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description">  Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Analytical Skills:  </span>
                            <span class="list-description"> Use your analytical abilities to structure your communication effectively, helping others understand complex information more easily.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions: </span>
                            <span class="list-description">  Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Support and Encourage Others:</span>
                            <span class="list-description"> Be proactive in providing support to those around you. Your positive reinforcement can enhance relationships and foster a sense of community.
  








                            </span>
                          </li>

                          
                       
                    </ol>

                    <p class="comparison-description">
                    By understanding and embracing your communication and behavioral tendencies as an L1R2 / R2L1 dominant individual, you can enhance your ability to connect with others and foster meaningful, fulfilling relationships in all areas of your life. Your analytical skills, empathetic understanding, and strong relational abilities make you a valuable partner and contributor in any relationship.


</p>

                    


</div>

<?php elseif ($compare_brain_profile_id === '8' ): ?>

<div class="col-12">

<p class="comparison-description">
As a Practical Empath or Grounded Relational Thinker, your communication and behavior styles are characterized by empathy, practicality, and a strong focus on relational dynamics. You thrive in environments where you can connect with others meaningfully and provide grounded solutions to challenges. Here’s how your communication and behavior typically manifest:


</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Empathetic and Relational






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You communicate with a strong sense of empathy, seeking to understand the emotions and perspectives of others. This relational approach helps you build trust and rapport.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">     Your empathetic communication fosters a supportive environment, making others feel valued and understood.






                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Clear and Direct






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prefer to communicate in a straightforward manner, ensuring your message is clear and easily understood. You value honesty and transparency in your interactions.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This clarity helps prevent misunderstandings and promotes effective communication.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in collaborative environments where input from others is valued. You actively encourage group discussions and value diverse perspectives in problem-solving.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This collaborative approach enhances teamwork and fosters creativity in group settings.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Active Listener







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You are attentive when others speak, demonstrating genuine interest in your thoughts and feelings. This active listening enhances your understanding and helps you respond thoughtfully.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your listening skills build rapport and strengthen relationships, as others feel appreciated and heard.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Practical Problem-Solver







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">Your communication often reflects a practical approach to challenges. You focus on finding solutions and offering grounded advice based on your understanding of the situation.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This practical orientation allows you to provide relevant insights and support to those around you.









                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encouraging and Supportive






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You tend to be encouraging in your communication, providing positive reinforcement and support to others. You celebrate your successes and help them through challenges.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your supportive nature fosters a sense of community and belonging, making it easier for others to approach you for help.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Relational and Connective





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prioritize building meaningful connections with others and seek to create a sense of community. Your social nature enables you to engage with a wide range of you.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This relational focus helps create strong networks and support systems.




                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Adaptable and Flexible







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You are open to change and can adjust your communication style based on the needs of the situation or the people involved. This flexibility enhances your effectiveness in various social contexts.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your adaptability allows you to navigate different social dynamics smoothly.








                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Grounded and Practical









                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You approach situations with a practical mindset, focusing on realistic solutions and achievable goals. This grounded approach helps you stay focused and balanced.









                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your practicality can inspire others to adopt a similar mindset when facing challenges.









                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Positive and Optimistic






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You tend to maintain a positive outlook, bringing joy and enthusiasm into your relationships. Your optimism can uplift those around you and create a positive atmosphere.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This positivity can be contagious, fostering an environment where others feel encouraged and motivated.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You value self-reflection and take time to consider your interactions and behaviors. This introspective approach allows you to learn from experiences and grow personally.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">    This reflection enhances your emotional intelligence and helps you develop stronger, more meaningful relationships.








                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Goal-Oriented in Relationships







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> You may approach relationships with specific goals in mind, whether it’s building deeper connections, collaborating on projects, or supporting each other’s aspirations.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">     This goal-oriented mindset can lead to purposeful interactions and a sense of accomplishment in shared endeavors.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Continue to engage fully when others speak, asking clarifying questions and demonstrating genuine interest in your thoughts and feelings.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description">  Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Empathy: </span>
                            <span class="list-description"> Use your empathetic nature to connect with others on a deeper level, fostering trust and understanding in your relationships.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions: </span>
                            <span class="list-description">  Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.









                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Support and Encourage Others:</span>
                            <span class="list-description"> Be proactive in providing encouragement and support to those around you. Your positive reinforcement can enhance relationships and foster a sense of community.

  








                            </span>
                          </li>

                          
                       
                    </ol>

                    <p class="comparison-description">
                    By understanding and embracing your communication and behavioral tendencies as an L2R2 / R2L2 dominant individual, you can enhance your ability to connect with others and foster meaningful, fulfilling relationships in all areas of your life. Your empathic skills, practical thinking, and strong relational abilities make you a valuable contributor to any team or collaborative effort.


</p>

                    


</div>




                                                        <?php else: ?>


<?php endif; ?>
    
                                                 
    
                                                  
                                                   


                                                   
                                                 
                                                   

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="inclination" role="tabpanel"
                                aria-labelledby="inclination-tab" tabindex="-1">
                                <h5>Communic</h5>
                            </div>
                            <div class="tab-pane fade" id="diet" role="tabpanel" aria-labelledby="diet-tab"
                                tabindex="-1">


                                <div class="row d-flex ">
                                    {{-- compare one --}}
                                    <div class="col-6 comparing-div comparing-div-1" id="comparing-div-5">
                                        <div class="p-3">
                                            <div class="comparing-head">
                                                <div class="comparing-head-section">
                                                    <p class="name">John Doe</p>
                                                </div>
                                                <div class="comparing-head-section">
                                                    <p class="email">johndoe@gmail.com</p>
                                                </div>
                                            </div>
    
    
    
    
                                            <div class="col-12 scrollable-campare">
                                                <div class="row mb-5 gx-3 gy-3">
    
                                                    
    
                                                    <div class="col-12">
                                                        <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Sports and other extracurricular activities naturally preferred</h5>
                                                        <p class="comparison-description">
                                                            Lorem ipsum dolor sit amet consectetur. Mi ornare justo lacus
                                                            felis. In tortor ultrices morbi sed proin lectus.
                                                            Semper vel commodo a massa velit faucibus pulvinar lacus. Mauris
                                                            amet neque a nec sed fames.
                                                            Cursus proin bibendum nulla tempus. Eu non laoreet non arcu
                                                            facilisis sollicitudin laoreet sed.
                                                            Non eget nulla tellus aliquam sodales. Volutpat nunc feugiat
                                                            quam ipsum rutrum ornare.
                                                            Non neque fringilla lorem pellentesque mauris. Ornare aenean
                                                            placerat venenatis congue amet amet.
                                                            Dignissim in faucibus vitae enim sit integer blandit odio a.
                                                            Aliquet ullamcorper nec condimentum gravida imperdiet sit
                                                            interdum morbi. Augue integer vel orci tortor.
                                                            Viverra tellus lacus ipsum in integer pellentesque id pretium.
                                                            Ut aliquam diam a viverra sit.
                                                            Metus aliquam vulputate diam quisque volutpat suspendisse vitae
                                                            malesuada.
                                                            Ullamcorper adipiscing velit tortor venenatis feugiat orci
                                                            placerat faucibus sed.
                                                        </p>
                                                    </div>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
                                                                Individual Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                                                                Strategic Team Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                   
                                                    {{-- Mind Sports --}}
                                                    
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
                                                                Mind Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    {{-- STEM - Related Extracurriculars --}}
                                                    
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-4" aria-expanded="false" aria-controls="collapseTwo-4">
                                                                STEM - Related Extracurriculars
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <div class="col-12">
                                                                        <p class="explaining">
                                                                            Given your Analytical Brain and logical, structured approach to problem-solving, you are likely to excel in sports and extracurricular activities that involve strategy, precision, and individual focus. You prefer activities where you can carefully assess situations and make calculated decisions, as well as those that offer clear rules and objectives.
                                                                        </p>
                                                                        <div class="px-2">
                                                                            <h6 class="collapsible-btn-content-title my-4">Recomonded Sports</h6>
                                                                            <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Tennis: </span>
                                                                                    <span class="list-description">Involves strategic shot placement, calculating angles, and anticipating opponents' moves.</span>
                                                                                  </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Golf : </span>
                                                                                    <span class="list-description">Requires focus, precision, and careful planning for each shot.</span>
                                                                                </li>
    
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Swimming :</span>
                                                                                    <span class="list-description">Offers individual goal setting and improvement tracking, along with structured technique refinement.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Fencing :</span>
                                                                                    <span class="list-description">Combines agility with a strategic, tactical approach, demanding quick thinking and calculated movements.</span>
                                                                                </li>
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Archery :</span>
                                                                                    <span class="list-description">Focuses on precision, control, and mental discipline-perfect for someone who values accuracy.</span>
                                                                                </li>
                                                                            </ul>
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
                                    </div>
    
    
                                    {{-- compare 2 --}}
    
                                    <div class="col-6 comparing-div comparing-div-2" id="comparing-div-6">
                                        <div class="p-3">
                                            <div class="comparing-head">
                                                <div class="comparing-head-section">
                                                    <p class="name">John Doe</p>
                                                </div>
                                                <div class="comparing-head-section">
                                                    <p class="email">johndoe@gmail.com</p>
                                                </div>
                                            </div>
    
    
    
    
                                            <div class="col-12 scrollable-campare">
                                                <div class="row mb-5 gx-3 gy-3">
    
                                                <?php if ($compare_brain_profile_id === '15' ): ?>

                                                    <div class="col-12">
                                                        
                                                        <p class="comparison-description">
                                                        As a Quadruple Pie individual (Harmonized Thinker or Balanced Integrator), your approach to diet and nutrition is characterized by a holistic understanding of health that integrates analytical thinking, creativity, and social connections. You value balanced nutrition that supports both physical well-being and emotional satisfaction. Here’s how you might think about food and nutrition:


                                                        </p>


                                                        <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
                                                            1. Balanced Meal Planning

                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                <ul class="collapsible-content-list">
                                                                                
                                                                                    
                                                                                   
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You prefer meals that are well-rounded and include a variety of food groups. This holistic approach ensures you receive essential nutrients while satisfying different dietary needs.

                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Key Practices: </span>
                                                                                    <span class="list-description">Creating balanced meal plans that include proteins, carbohydrates, healthy fats, fruits, and vegetables, taking into account nutritional guidelines.

                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            
                                                                                  


                                                                                 

                                                                                  
                                                                               
                                                                          
                                                                               
                                                                            </ul>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion mt-3" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                                                            2. Focus on Whole Foods


                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">

                                                                <ul class="collapsible-content-list">
                                                                                
                                                                                    
                                                                                   
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You gravitate toward whole, unprocessed foods that nourish both your body and mind. You appreciate the nutritional benefits of fresh ingredients and the importance of avoiding excessive additives.
                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Key Interests: </span>
                                                                                    <span class="list-description"> Incorporating a variety of fruits, vegetables, whole grains, lean proteins, and healthy fats into your diet.

                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            
                                                                                  


                                                                                 

                                                                                  
                                                                               
                                                                          
                                                                               
                                                                            </ul>
                                                                   
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>




                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion mt-3" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree-3" aria-expanded="false" aria-controls="collapseThree-3">
                                                            3. Mindful Eating


                                                            </button>
                                                          </h2>
                                                          <div id="collapseThree-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">


                                                                <ul class="collapsible-content-list">
                                                                                
                                                                                    
                                                                                   
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You value the experience of eating and often practice mindfulness during meals, which allows you to enjoy the flavors and textures of your food fully.

                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Mindful Techniques: </span>
                                                                                    <span class="list-description">Taking the time to savor each bite, recognizing hunger cues, and avoiding distractions during meals to promote a healthy relationship with food.

                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            
                                                                                  


                                                                                 

                                                                                  
                                                                               
                                                                          
                                                                               
                                                                            </ul>
                                                                   
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>

                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion mt-3" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour-4" aria-expanded="false" aria-controls="collapseFour-4">
                                                            4. Social Connections through Food


                                                            </button>
                                                          </h2>
                                                          <div id="collapseFour-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">

                                                                <ul class="collapsible-content-list">
                                                                                
                                                                                    
                                                                                   
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You appreciate the role of food in building relationships and community. Sharing meals with others fosters connection and enhances the dining experience.

                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Key Practices: </span>
                                                                                    <span class="list-description">Engaging in communal cooking, potlucks, or family meals to strengthen bonds and celebrate diverse culinary traditions.

                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            
                                                                                  


                                                                                 

                                                                                  
                                                                               
                                                                          
                                                                               
                                                                            </ul>
                                                                   
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion mt-3" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive-5" aria-expanded="false" aria-controls="collapseFive-5">
                                                            Behavioral Traits:

                                                            </button>
                                                          </h2>
                                                          <div id="collapseFive-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">

                                                                <ul class="collapsible-content-list">
                                                                                
                                                                                    
                                                                                   
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You prioritize understanding others' feelings and perspectives, actively listening to what you say. Your empathetic nature fosters trust and openness in conversations.
                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This quality encourages meaningful dialogue and makes others feel valued and understood.
                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            
                                                                                  


                                                                                 

                                                                                  
                                                                               
                                                                          
                                                                               
                                                                            </ul>
                                                                   
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion mt-3" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix-6" aria-expanded="false" aria-controls="collapseSix-6">
                                                            Behavioral Traits:

                                                            </button>
                                                          </h2>
                                                          <div id="collapseSix-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">

                                                                <ul class="collapsible-content-list">
                                                                                
                                                                                    
                                                                                   
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You prioritize understanding others' feelings and perspectives, actively listening to what you say. Your empathetic nature fosters trust and openness in conversations.
                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This quality encourages meaningful dialogue and makes others feel valued and understood.
                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            
                                                                                  


                                                                                 

                                                                                  
                                                                               
                                                                          
                                                                               
                                                                            </ul>
                                                                   
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>



                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion mt-3" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven-7" aria-expanded="false" aria-controls="collapseSeven-7">
                                                            Behavioral Traits:

                                                            </button>
                                                          </h2>
                                                          <div id="collapseSeven-7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">

                                                                <ul class="collapsible-content-list">
                                                                                
                                                                                    
                                                                                   
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Approach: </span>
                                                                                    <span class="list-description">You prioritize understanding others' feelings and perspectives, actively listening to what you say. Your empathetic nature fosters trust and openness in conversations.
                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This quality encourages meaningful dialogue and makes others feel valued and understood.
                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            
                                                                                  


                                                                                 

                                                                                  
                                                                               
                                                                          
                                                                               
                                                                            </ul>
                                                                   
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                   
                                                   











                                                      

                                                       

                                                                            <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Practice Active Listening:</span>
                                                                                    <span class="list-description"> Engage fully when others speak, demonstrating genuine interest in your thoughts and feelings. This enhances understanding and strengthens connections.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Encourage Open Dialogue:  </span>
                                                                                    <span class="list-description"> Create an atmosphere where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Leverage Your Analytical Skills: </span>
                                                                                    <span class="list-description"> Use your analytical abilities to break down complex topics during discussions, helping others understand the reasoning behind your thoughts.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Seek Feedback:  </span>
                                                                                    <span class="list-description"> Regularly ask for feedback from peers or mentors to refine your communication style and ensure your ideas are conveyed effectively.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Reflect on Interactions: </span>
                                                                                    <span class="list-description"> After conversations or meetings, take time to assess your communication style and behaviors. Identify areas for improvement and recognize your successes.





                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ol>

                                                                            <p class="comparison-description">
                                                                            By understanding and embracing your communication and behavioral tendencies as a Quadruple Pie dominant individual, you can enhance your ability to connect with others and foster meaningful, productive relationships in all areas of your life. Your strengths in empathy, collaboration, and analytical thinking make you a valuable partner and contributor in any relationship.


                                                        </p>

                                                        
                                                    </div>

                                                    <?php elseif ($compare_brain_profile_id === '14' ): ?>

                                                        <div class="col-12">
                                                        
                                                        <p class="comparison-description">
                                                        As a Independent Problem-Solver or Analytical Innovator, your communication and behavior styles are characterized by a strong analytical approach, independence, and a focus on logical reasoning. You value clear, direct communication and often prioritize problem-solving in your interactions. Here’s how your communication and behavior typically manifest:

                                                        </p>


                                                        <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
                                                            Communication Style:
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                <ol class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Clear and Direct
                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You prefer straightforward communication that gets to the point. You value clarity and efficiency in discussions, avoiding unnecessary embellishments.
                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description"> This clarity fosters understanding and minimizes miscommunication, making it easier for others to follow your reasoning.

                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            </ul>
                                                                                  </li>


                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Analytical and Logical


                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You tend to approach discussions with a logical mindset, often using data and evidence to support your arguments. Your analytical nature allows you to dissect complex ideas and present them clearly.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your reliance on logic enhances your credibility and encourages others to consider your perspectives thoughtfully.


                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Problem-Solving Focused



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">In conversations, you often aim to identify solutions to challenges. You may redirect discussions toward finding practical outcomes, especially in group settings.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This problem-solving orientation can help groups stay focused and productive during discussions.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Independent and Self-Reliant



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description"> You tend to express your ideas and opinions confidently, relying on your analytical skills rather than seeking validation from others. This independence allows you to contribute original thoughts.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your self-reliance can inspire others to share your own ideas without fear of judgment.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Reflective and Thoughtful



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You often take time to think through your responses before speaking. This reflective nature enables you to consider different angles and formulate well-reasoned arguments.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description"> This thoughtfulness can lead to more meaningful and impactful discussions.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Objective and Unbiased



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description"> You aim to approach discussions with objectivity, focusing on facts rather than emotions. This approach can help keep conversations grounded and constructive.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your objectivity encourages others to engage in rational discussions, enhancing collaborative problem-solving.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>
                                                                               
                                                                            </ol>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                    


                                                    {{-- Strategic Team Sports --}}
                                                    <div class="accordion mt-3" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                                                            Behavioral Traits:

                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
                                                                    <ol class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Independent Thinker


                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You enjoy exploring ideas and solutions on your own and may prefer to work independently on tasks. This independence can lead to innovative approaches and unique insights.


                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your independent thinking fosters originality and allows for creative problem-solving.


                                                                                    </span>
                                                                                  </li>
                                                                               
                                                                            </ul>
                                                                                  </li>


                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Detail-Oriented



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You tend to pay close attention to details, ensuring that you fully understand the nuances of a situation before taking action. This focus on detail enhances your analytical skills.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description"> Your attention to detail can lead to thorough analyses and comprehensive solutions.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Solution-Oriented




                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                  
                                                                                    <span class="list-description">You approach challenges with a focus on finding effective solutions. You enjoy brainstorming ideas and exploring different avenues to overcome obstacles.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">This solution-oriented mindset can help motivate others and keep teams on track during complex projects.




                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Calm and Composed



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description"> You often maintain a calm demeanor, even in stressful situations. Your composed behavior allows you to think clearly and rationally, which is particularly valuable during problem-solving.



                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your calmness can help diffuse tension in group settings and foster a more constructive atmosphere.


                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Inquisitive and Curious



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    
                                                                                    <span class="list-description">You have a natural curiosity about how things work and enjoy exploring new ideas and concepts. This inquisitive nature drives your analytical thinking and problem-solving abilities.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">Your curiosity can inspire innovative approaches and encourage others to think critically.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Self-Motivated



                                                                                    </span>
                                                                                    <ul class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                   
                                                                                    <span class="list-description"> You are often driven by personal goals and interests, seeking out challenges that stimulate your analytical thinking. This self-motivation fuels your independent learning and growth.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Strength: </span>
                                                                                    <span class="list-description">  Your intrinsic motivation allows you to pursue knowledge and skills relevant to your interests, leading to continual self-improvement.



                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ul>
                                                                                  </li>
                                                                               
                                                                            </ol>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                          </div>
                                                        </div>  
                                                    </div>
                                                   
                                                   











                                                      

                                                       

                                                                            <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                                                                                <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Practice Active Listening:</span>
                                                                                    <span class="list-description">Engage fully when others speak, demonstrating genuine interest in your thoughts and feelings. This can enhance collaboration and foster a supportive environment.





                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Encourage Open Dialogue: </span>
                                                                                    <span class="list-description"> Create an atmosphere where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives and constructive criticism.




                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Leverage Your Analytical Skills: </span>
                                                                                    <span class="list-description"> Use your analytical abilities to break down complex topics during discussions, helping others understand the reasoning behind your thoughts.





                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Seek Feedback:  </span>
                                                                                    <span class="list-description"> Regularly ask for feedback from peers or mentors to refine your communication style and ensure your ideas are conveyed effectively.





                                                                                    </span>
                                                                                  </li>

                                                                                  <li class="collapsible-content-list-item">
                                                                                    <span class="list-title">Reflect on Interactions: </span>
                                                                                    <span class="list-description"> After conversations or meetings, take time to assess your communication style and behaviors. Identify areas for improvement and recognize your successes.






                                                                                    </span>
                                                                                  </li>

                                                                                  
                                                                               
                                                                            </ol>

                                                                            <p class="comparison-description">
                                                                            You can enhance your ability to connect with others and foster meaningful, productive relationships in all areas of your life. Your analytical thinking, independence, and solution-oriented mindset make you a valuable partner and contributor in any setting.


                                                        </p>

                                                        
                                                    </div>


                                                    <?php elseif ($compare_brain_profile_id === '13' ): ?>

<div class="col-12">

<p class="comparison-description">
As a Visionary Dreamer or Conceptual Creative, your communication and behavior styles are characterized by creativity, empathy, and a strong focus on collaboration. You value meaningful interactions and often seek to foster deeper understanding in your relationships. Here’s how your communication and behavior typically manifest:

</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Creative and Imaginative

                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You tend to express your thoughts and ideas in imaginative and engaging ways. This creative approach makes conversations more dynamic and invites others to think outside the box.

                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your creativity in communication can inspire others and stimulate rich discussions.

                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Empathetic and Relational


                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You possess a strong ability to understand and connect with the emotions of others. Your empathetic nature allows you to engage in meaningful conversations and create supportive environments.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This empathy builds trust and fosters deeper connections with peers.



                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative and Inclusive




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in discussions that encourage participation from everyone involved. You value diverse perspectives and seek to create a collaborative atmosphere where all voices are heard.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This inclusivity enhances group dynamics and fosters a sense of belonging among your peers.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Visionary and Inspirational




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> Your communication often includes visionary ideas and ideals that inspire others. You enjoy sharing your thoughts on possibilities and future scenarios, encouraging others to dream big.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This visionary quality can motivate those around you to explore new ideas and perspectives.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Open and Honest




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You value transparency in your interactions and prefer to communicate openly about your thoughts and feelings. This honesty fosters trust and authenticity in relationships.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your straightforwardness encourages others to share your ideas and concerns, leading to more meaningful conversations.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Thoughtful



                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You take time to consider your interactions and the ideas presented during conversations. This thoughtful approach helps you digest information and respond meaningfully.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This reflection enhances your understanding and allows for deeper discussions.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Imaginative and Visionary



                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach tasks and relationships with a sense of creativity and vision. You enjoy brainstorming new ideas and exploring possibilities for the future.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This imaginative quality helps you think outside the box and come up with innovative solutions.


                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative and Team-Oriented




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in collaborative settings where teamwork is emphasized. You value input from others and enjoy working together to achieve common goals.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This teamwork fosters strong relationships and enhances the overall effectiveness of group efforts.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Supportive and Nurturing





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You often take on a supportive role in relationships, offering encouragement and motivation to those around you. You enjoy uplifting others and celebrating your successes.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your supportive behavior creates a positive environment that fosters growth and collaboration.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Curious and Open-Minded




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You possess a natural curiosity about the world and the people around you. You enjoy exploring new ideas and concepts, which can lead to creative insights.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This curiosity encourages lifelong learning and personal growth.



                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You value self-reflection and take time to assess your interactions and behaviors within relationships. This introspective approach allows for personal growth and deeper connections.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your ability to reflect enhances your emotional intelligence and helps you develop stronger, more meaningful relationships.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Flexible and Adaptive




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> You are often driven by personal goals and interests, seeking out challenges that stimulate your analytical thinking. This self-motivation fuels your independent learning and growth.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   Your adaptability can lead to innovative solutions in evolving environments.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Engage fully when others speak, showing genuine interest in your thoughts and feelings. This enhances empathy and understanding.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description"> Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Imagination: </span>
                            <span class="list-description"> Use your creativity to enhance presentations or discussions, incorporating visuals or storytelling to make your points more engaging.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Seek Diverse Perspectives:  </span>
                            <span class="list-description"> Actively encourage input from others in group settings, valuing different viewpoints and fostering a collaborative atmosphere.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions: </span>
                            <span class="list-description"> Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.







                            </span>
                          </li>

                          
                       
                    </ol>

                    <p class="comparison-description">
                    By understanding and embracing your communication and behavioral tendencies as a LOW L2 dominant individual, you can enhance your ability to connect with others and foster meaningful, fulfilling relationships in all areas of your life. Your imaginative thinking, empathetic nature, and strong relational abilities make you a valuable partner and contributor in any relationship.



</p>


</div>

<?php elseif ($compare_brain_profile_id === '12' ): ?>

<div class="col-12">

<p class="comparison-description">
As a Abstract Idealist or Relational Planner, your communication and behavior styles are characterized by creativity, relational engagement, and an emphasis on meaningful connections. You value open dialogue and collaboration, which shapes how you interact with others. Here’s how your communication and behavior typically manifest:

</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Creative and Expressive


                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You often use imaginative language and creative expression in your communication. You enjoy exploring ideas and concepts, making your conversations engaging and thought-provoking.


                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This creativity can inspire others and foster a dynamic exchange of ideas.


                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Empathetic and Relational



                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You possess a strong ability to understand and connect with the emotions of others. Your empathetic nature allows you to engage in meaningful conversations and create supportive environments.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This empathy builds trust and fosters deeper connections with others.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative and Inclusive




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in discussions that encourage participation from everyone involved. You value diverse perspectives and seek to create a collaborative atmosphere where all voices are heard.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This inclusivity enhances group dynamics and fosters a sense of belonging among peers.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Thoughtful





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You tend to reflect on your interactions and the ideas presented during conversations. This thoughtful approach helps you consider different viewpoints before responding.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This reflection enhances your understanding and allows for more nuanced discussions.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Visionary and Inspirational




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">Your communication often includes visionary ideas and ideals that inspire others. You enjoy sharing your thoughts on possibilities and future scenarios.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This visionary quality can motivate those around you to explore new ideas and perspectives.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Open and Honest




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You value transparency in your interactions and prefer to communicate openly about your thoughts and feelings. This honesty fosters trust and authenticity in relationships.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your openness encourages others to share your ideas and concerns, leading to more meaningful conversations.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Imaginative and Visionary



                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach tasks and relationships with a sense of creativity and vision. You enjoy brainstorming new ideas and exploring possibilities for the future.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This imaginative quality helps you think outside the box and come up with innovative solutions.



                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative and Team-Oriented




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in collaborative settings where teamwork is emphasized. You value input from others and enjoy working together to achieve common goals.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This teamwork fosters strong relationships and enhances the overall effectiveness of group efforts.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Supportive and Encouraging






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You often take on a supportive role in relationships, offering encouragement and motivation to those around you. You enjoy uplifting others and celebrating your successes.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your supportive behavior creates a positive environment that fosters growth and collaboration.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Curious and Open-Minded




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You possess a natural curiosity about the world and the people around you. You enjoy exploring new ideas and concepts, which can lead to creative insights.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This curiosity encourages lifelong learning and personal growth.



                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You value self-reflection and take time to assess your interactions and behaviors within relationships. This introspective approach allows for personal growth and deeper connections.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your ability to reflect enhances your emotional intelligence and helps you develop stronger, more meaningful relationships.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Flexible and Adaptive




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> You tend to be open to change and willing to adapt your approach based on new information or feedback. This flexibility allows you to navigate dynamic situations effectively.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">    Your adaptability can lead to innovative solutions in changing environments.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Engage fully when others speak, showing genuine interest in your thoughts and feelings. This enhances empathy and understanding.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description"> Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Imagination: </span>
                            <span class="list-description"> Use your creativity to enhance presentations or discussions, incorporating visuals or storytelling to make your points more engaging.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Seek Diverse Perspectives:  </span>
                            <span class="list-description"> Actively encourage input from others in group settings, valuing different viewpoints and fostering a collaborative atmosphere.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions: </span>
                            <span class="list-description"> Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.







                            </span>
                          </li>

                          
                       
                    </ol>

                    <p class="comparison-description">
                    You can enhance your ability to connect with others and foster meaningful, fulfilling relationships in all areas of your life. Your imaginative thinking, empathetic nature, and strong relational abilities make you a valuable partner and contributor in any relationship



</p>


</div>


<?php elseif ($compare_brain_profile_id === '11' ): ?>

<div class="col-12">

<p class="comparison-description">
As a Grounded Thinker or Structured Planner, your communication and behavior styles are characterized by a preference for clarity, organization, and logical reasoning. You thrive in environments that value structured interactions and practical approaches. Here’s how your communication and behavior typically manifest:

</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Clear and Concise



                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prefer to communicate in a straightforward manner, focusing on clarity and precision. Your messages are typically well-structured, allowing others to understand your points easily.



                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This clarity reduces misunderstandings and facilitates effective communication in both personal and professional settings.



                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Analytical and Rational




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach conversations with a logical mindset, often providing data or evidence to support your views. You enjoy discussing ideas that are grounded in facts and analysis.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This analytical approach can enhance discussions, leading to well-informed decisions.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Structured and Organized





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">Your communication is often organized, with a clear progression of ideas. You may prefer to outline your thoughts before sharing them, ensuring a logical flow.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This organization helps others follow your reasoning and contributes to more effective discussions.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Supportive Listener






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> While you communicate your ideas clearly, you also prioritize listening to others. You value your input and seek to understand your perspectives, making you a supportive conversational partner.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your listening skills foster a sense of trust and respect in relationships.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Detail-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You tend to focus on details, ensuring that important aspects of a discussion are addressed. You may be inclined to ask clarifying questions to ensure full understanding.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This attention to detail helps prevent misunderstandings and promotes thoroughness in discussions.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Feedback-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You appreciate constructive feedback and often seek it to improve your communication skills. You encourage others to share your thoughts on your ideas and presentations.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This openness to feedback fosters an environment of continuous improvement and collaboration.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Structured and Methodical




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">Your approach to tasks and interactions is highly organized. You thrive on having a clear plan and enjoy breaking down complex tasks into manageable steps.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This structured behavior enhances your ability to meet deadlines and achieve goals 



                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Pragmatic and Practical




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You tend to focus on practical solutions to problems, prioritizing what works best in real-world situations. You prefer to take a no-nonsense approach to challenges.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your pragmatic nature helps you navigate obstacles effectively, finding solutions that are both realistic and achievable.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Calm and Composed







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You usually maintain a calm demeanor, especially in challenging situations. Your grounded nature allows you to approach problems with a level head, providing stability for those around you.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This calmness can help de-escalate tensions and facilitate constructive discussions.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Goal-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You approach tasks with specific objectives in mind, whether it’s completing a project, achieving a personal goal, or collaborating on a team effort.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This focus on goals encourages purposeful interactions and a sense of direction in your work.




                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You value self-reflection and take time to assess your interactions and behaviors within relationships. This introspective approach allows for personal growth and deeper connections.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This reflection enhances your emotional intelligence and helps you navigate relational dynamics more effectively.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reliable and Dependable





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> Others often see you as a reliable team member or friend. You follow through on commitments and ensure that tasks are completed as planned.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This dependability fosters trust and strengthens relationships, making you a valued contributor in group settings.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Continue to engage fully when others speak, showing genuine interest in your thoughts and feelings. Ask clarifying questions to demonstrate your understanding.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description">  Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Analytical Skills: </span>
                            <span class="list-description"> Use your analytical abilities to structure your communication effectively, helping others understand complex information more easily.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions:  </span>
                            <span class="list-description"> Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Support and Encourage Others:</span>
                            <span class="list-description"> Be proactive in providing support to those around you. Your positive reinforcement can enhance relationships and foster a sense of community.








                            </span>
                          </li>

                          
                       
                    </ol>

                    <p class="comparison-description">
                    By understanding and embracing your communication and behavioral tendencies as a LOW R1 dominant individual, you can enhance your ability to connect with others and foster meaningful, fulfilling relationships in all areas of your life. Your structured thinking, practical approach, and strong relational abilities make you a valuable partner and contributor in any relationship.



</p>


</div>

<?php elseif ($compare_brain_profile_id === '10' ): ?>

<div class="col-12">

<p class="comparison-description">
As a Practical Innovator or Grounded Creative, your communication and behavior styles are characterized by a blend of practical application, creativity, and interpersonal engagement. You thrive in environments where you can express innovative ideas while connecting meaningfully with others. Here’s how your communication and behavior typically manifest:

</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Innovative and Clear




                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prefer to communicate in a straightforward manner, presenting your ideas clearly while also being open to creative solutions. Your innovative thinking allows you to propose new concepts that can be easily understood.




                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">    This clarity reduces misunderstandings and encourages collaboration.




                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Empathetic and Relational





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach conversations with empathy and a genuine interest in others’ perspectives. You seek to build connections through shared experiences and mutual understanding.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your empathetic communication fosters trust and encourages open dialogue, making others feel valued.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in group settings where input from others is valued. Your collaborative nature encourages participation and brainstorming, which enhances creativity and group dynamics.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This collaborative approach leads to more comprehensive and innovative solutions.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Active Listener







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You engage in active listening, showing genuine interest in what others are saying. This helps you understand your needs and concerns better, allowing for more effective communication.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your listening skills build rapport and strengthen relationships, as others feel appreciated and heard.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Structured Yet Flexible





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You tend to organize your thoughts logically, but you also allow for flexibility in discussions. This adaptability enables you to explore creative ideas while maintaining a focus on practical applications.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This balance helps you navigate conversations effectively, making them both productive and innovative.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Feedback-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You value constructive feedback and encourage others to share your thoughts on your communication style. This openness to critique helps you refine your approach and enhances your effectiveness.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">This willingness to receive feedback fosters an environment of continuous improvement and mutual respect.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Relational and Connective





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prioritize building meaningful connections with others and seek to create a sense of community. Your social nature enables you to engage with a wide range of you.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This relational focus helps create strong networks and support systems.




                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Innovative Thinker





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach situations with a creative mindset, often generating innovative solutions to challenges. Your ability to think outside the box is a significant asset in both personal and professional contexts.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your innovative thinking can lead to breakthrough ideas and improvements.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Supportive and Nurturing








                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You often take on a supportive role in relationships, offering encouragement and assistance to those you care about. You prioritize the well-being of others and actively seek to uplift them.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your nurturing behavior helps build trust and reinforces positive connections.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Adaptable and Open-Minded





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You are open to new ideas and approaches, adapting your communication and behavior to suit different relational contexts. This flexibility allows you to navigate diverse social dynamics effectively.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your adaptability helps maintain healthy relationships and fosters collaboration.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Goal-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach tasks and interactions with specific goals in mind, whether it’s fostering deeper connections, collaborating on projects, or supporting each other’s aspirations.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This focus on objectives encourages purposeful interactions and a sense of direction in your relationships.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> You value self-reflection and take time to assess your interactions and behaviors within relationships. This introspective approach allows for personal growth and deeper connections.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">    This reflection enhances your emotional intelligence and helps you navigate relational dynamics more effectively.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Continue to engage fully when others speak, asking clarifying questions and demonstrating genuine interest in your thoughts and feelings.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description">  Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Innovative Skills: </span>
                            <span class="list-description"> Use your creativity to explore new ideas and solutions in your communication, making interactions engaging and impactful.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions: </span>
                            <span class="list-description">  Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Support and Encourage Others:</span>
                            <span class="list-description"> Be proactive in providing support to those around you. Your positive reinforcement can enhance relationships and foster a sense of community.
  








                            </span>
                          </li>

                          
                       
                    </ol>

                    


</div>


<?php elseif ($compare_brain_profile_id === '9' ): ?>

<div class="col-12">

<p class="comparison-description">
As an Analytical Connector or Relational Analyst, your communication and behavior styles are characterized by a blend of analytical reasoning and relational understanding. You thrive in environments where you can engage meaningfully with others while applying your analytical skills to navigate complex information. Here’s how your communication and behavior typically manifest:

</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Analytical and Clear





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prefer to communicate with clarity and precision. Your analytical mindset helps you articulate complex ideas in an understandable way, making it easier for others to grasp your insights.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">     This clarity reduces misunderstandings and enhances the effectiveness of your communication.





                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Empathetic and Relational





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach conversations with an empathetic understanding of others’ feelings and perspectives. You seek to connect on an emotional level while providing logical insights.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your empathetic communication fosters trust and strengthens relationships, making it easier for others to share your thoughts with you.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in collaborative environments where input from others is valued. You actively encourage group discussions and enjoy working together to analyze and develop ideas.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This collaborative approach enhances teamwork and fosters creativity in group settings.





                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Active Listener







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You are attentive when others speak, demonstrating genuine interest in your thoughts and feelings. This active listening enhances your understanding and helps you respond thoughtfully.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your listening skills build rapport and strengthen relationships, as others feel appreciated and heard.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Structured and Organized






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prefer to present information in a structured manner, often using logical frameworks to guide your communication. This organization helps others follow your thought process easily.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your structured approach enhances the clarity of your messages and supports effective decision-making.








                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Feedback-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You value feedback and encourage others to share your thoughts on your communication style. This openness to critique helps you refine your approach and enhance your effectiveness.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This willingness to receive feedback fosters an environment of continuous improvement and mutual respect.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Relational and Connective





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prioritize building meaningful connections with others and seek to create a sense of community. Your social nature enables you to engage with a wide range of you.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This relational focus helps create strong networks and support systems.




                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Analytical Thinker






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach situations with a logical mindset, often analyzing data and information to inform your decisions. This analytical trait helps you navigate complex issues effectively.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your analytical thinking allows you to identify patterns and make data-driven decisions.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Supportive and Nurturing








                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You often take on a supportive role in relationships, offering encouragement and assistance to those you care about. You prioritize the well-being of others and actively seek to uplift them.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your nurturing behavior helps build trust and reinforces positive connections.








                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Adaptable and Flexible





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You are open to change and can adjust your communication style based on the needs of the situation or the people involved. This flexibility enhances your effectiveness in various social contexts.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your adaptability allows you to navigate different social dynamics smoothly.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Goal-Oriented





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You approach tasks and interactions with specific goals in mind, whether it’s building deeper connections or collaborating on projects. This focus on objectives encourages purposeful interactions.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   Your goal-oriented mindset can lead to meaningful outcomes in both personal and professional relationships.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> You value self-reflection and take time to assess your interactions and behaviors within relationships. This introspective approach allows you to learn from experiences and grow personally.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">     This reflection enhances your emotional intelligence and helps you develop stronger, more meaningful relationships.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Continue to engage fully when others speak, asking clarifying questions and demonstrating genuine interest in your thoughts and feelings.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description">  Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Analytical Skills:  </span>
                            <span class="list-description"> Use your analytical abilities to structure your communication effectively, helping others understand complex information more easily.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions: </span>
                            <span class="list-description">  Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Support and Encourage Others:</span>
                            <span class="list-description"> Be proactive in providing support to those around you. Your positive reinforcement can enhance relationships and foster a sense of community.
  








                            </span>
                          </li>

                          
                       
                    </ol>

                    <p class="comparison-description">
                    By understanding and embracing your communication and behavioral tendencies as an L1R2 / R2L1 dominant individual, you can enhance your ability to connect with others and foster meaningful, fulfilling relationships in all areas of your life. Your analytical skills, empathetic understanding, and strong relational abilities make you a valuable partner and contributor in any relationship.


</p>

                    


</div>

<?php elseif ($compare_brain_profile_id === '8' ): ?>

<div class="col-12">

<p class="comparison-description">
As a Practical Empath or Grounded Relational Thinker, your communication and behavior styles are characterized by empathy, practicality, and a strong focus on relational dynamics. You thrive in environments where you can connect with others meaningfully and provide grounded solutions to challenges. Here’s how your communication and behavior typically manifest:


</p>


<div class="accordion" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-1" aria-expanded="false" aria-controls="collapseTwo-1">
    Communication Style:
    </button>
  </h2>
  <div id="collapseTwo-1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
        <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Empathetic and Relational






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You communicate with a strong sense of empathy, seeking to understand the emotions and perspectives of others. This relational approach helps you build trust and rapport.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">     Your empathetic communication fosters a supportive environment, making others feel valued and understood.






                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Clear and Direct






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prefer to communicate in a straightforward manner, ensuring your message is clear and easily understood. You value honesty and transparency in your interactions.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This clarity helps prevent misunderstandings and promotes effective communication.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Collaborative






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You thrive in collaborative environments where input from others is valued. You actively encourage group discussions and value diverse perspectives in problem-solving.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">   This collaborative approach enhances teamwork and fosters creativity in group settings.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Active Listener







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You are attentive when others speak, demonstrating genuine interest in your thoughts and feelings. This active listening enhances your understanding and helps you respond thoughtfully.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  Your listening skills build rapport and strengthen relationships, as others feel appreciated and heard.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Practical Problem-Solver







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">Your communication often reflects a practical approach to challenges. You focus on finding solutions and offering grounded advice based on your understanding of the situation.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This practical orientation allows you to provide relevant insights and support to those around you.









                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encouraging and Supportive






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You tend to be encouraging in your communication, providing positive reinforcement and support to others. You celebrate your successes and help them through challenges.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> Your supportive nature fosters a sense of community and belonging, making it easier for others to approach you for help.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>



{{-- Strategic Team Sports --}}
<div class="accordion mt-3" id="accordionExample">
<div class="accordion-item collapsible-div">
  <h2 class="accordion-header">
    <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
    Behavioral Traits:

    </button>
  </h2>
  <div id="collapseTwo-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
    <div class="accordion-body p-0">
        <div class="d-flex flex-column p-lg-3 p-xl-3 p-md-3 p-0 pt-2 justify-content-center">
            <ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Relational and Connective





                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You prioritize building meaningful connections with others and seek to create a sense of community. Your social nature enables you to engage with a wide range of you.





                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description"> This relational focus helps create strong networks and support systems.




                            </span>
                          </li>
                       
                    </ul>
                          </li>


                          <li class="collapsible-content-list-item">
                            <span class="list-title">Adaptable and Flexible







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You are open to change and can adjust your communication style based on the needs of the situation or the people involved. This flexibility enhances your effectiveness in various social contexts.






                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your adaptability allows you to navigate different social dynamics smoothly.








                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Grounded and Practical









                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                          
                            <span class="list-description">You approach situations with a practical mindset, focusing on realistic solutions and achievable goals. This grounded approach helps you stay focused and balanced.









                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">Your practicality can inspire others to adopt a similar mindset when facing challenges.









                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Positive and Optimistic






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description"> You tend to maintain a positive outlook, bringing joy and enthusiasm into your relationships. Your optimism can uplift those around you and create a positive atmosphere.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">  This positivity can be contagious, fostering an environment where others feel encouraged and motivated.







                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflective and Introspective






                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            
                            <span class="list-description">You value self-reflection and take time to consider your interactions and behaviors. This introspective approach allows you to learn from experiences and grow personally.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">    This reflection enhances your emotional intelligence and helps you develop stronger, more meaningful relationships.








                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Goal-Oriented in Relationships







                            </span>
                            <ul class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                           
                            <span class="list-description"> You may approach relationships with specific goals in mind, whether it’s building deeper connections, collaborating on projects, or supporting each other’s aspirations.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Strength: </span>
                            <span class="list-description">     This goal-oriented mindset can lead to purposeful interactions and a sense of accomplishment in shared endeavors.






                            </span>
                          </li>

                          
                       
                    </ul>
                          </li>
                       
                    </ol>
            
            
        </div>
    </div>
  </div>
</div>  
</div>

















                    <h5 class="description-title mt-lg-4 mb-lg-3 my-1">Tips for Enhancing Communication and Behavior:


</h5>

<ol class="collapsible-content-list">
                        <li class="collapsible-content-list-item">
                            <span class="list-title">Practice Active Listening:</span>
                            <span class="list-description">Continue to engage fully when others speak, asking clarifying questions and demonstrating genuine interest in your thoughts and feelings.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Encourage Open Dialogue: </span>
                            <span class="list-description">  Create an environment where everyone feels comfortable sharing your ideas and feedback. Promote discussions that value diverse perspectives.







                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Leverage Your Empathy: </span>
                            <span class="list-description"> Use your empathetic nature to connect with others on a deeper level, fostering trust and understanding in your relationships.








                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Reflect on Interactions: </span>
                            <span class="list-description">  Take time to assess your communication style and behaviors after discussions. Identify areas for improvement and recognize your successes.









                            </span>
                          </li>

                          <li class="collapsible-content-list-item">
                            <span class="list-title">Support and Encourage Others:</span>
                            <span class="list-description"> Be proactive in providing encouragement and support to those around you. Your positive reinforcement can enhance relationships and foster a sense of community.

  








                            </span>
                          </li>

                          
                       
                    </ol>

                    <p class="comparison-description">
                    By understanding and embracing your communication and behavioral tendencies as an L2R2 / R2L2 dominant individual, you can enhance your ability to connect with others and foster meaningful, fulfilling relationships in all areas of your life. Your empathic skills, practical thinking, and strong relational abilities make you a valuable contributor to any team or collaborative effort.


</p>

                    


</div>




                                                        <?php else: ?>


<?php endif; ?>
    
                                                 
    
                                                  
                                                   


                                                   
                                                 
                                                   

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            
                            <div class="tab-pane fade" id="career-options" role="tabpanel"
                                aria-labelledby="career-options-tab" tabindex="-1">
                                <h5>career options</h5>
                            </div>
                            <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab"
                                tabindex="-1">
                                <h5>skills</h5>
                            </div>
                        
                        </div>


                </div>
            </div>
        </div>
    </div>

    </style>

    
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const accordionButtons = document.querySelectorAll('.accordion-button');
            



            accordionButtons.forEach(accordionButton => {
                
                const collapseId = accordionButton.getAttribute('data-bs-target');
                const collapseElement = document.querySelector(collapseId);

                if (collapseElement) {
                    collapseElement.addEventListener('show.bs.collapse', function () {
                        accordionButton.style.border = '2px solid #f1935d'; // Orange when expanded
                        console.log('Color changed to orange');
                    });

                    collapseElement.addEventListener('hide.bs.collapse', function () {
                        accordionButton.style.border = '2px solid #F6C94D'; // Yellow when collapsed
                        
                        console.log('Color changed to yellow');
                    });
                }
            });


    

            

            // adfghjk
            
            const scrollContainer1 = document.querySelector('#comparing-div-1 .scrollable-campare');
            const scrollContainer2 = document.querySelector('#comparing-div-2 .scrollable-campare');

            const scrollContainer3 = document.querySelector('#comparing-div-3 .scrollable-campare');
            const scrollContainer4 = document.querySelector('#comparing-div-4 .scrollable-campare');

            const scrollContainer5 = document.querySelector('#comparing-div-5 .scrollable-campare');
            const scrollContainer6 = document.querySelector('#comparing-div-6 .scrollable-campare');

            let isSyncing = false;

            function syncScroll(scrollSource, scrollTarget) {
                if (!isSyncing) {
                    isSyncing = true;
                    const scrollPercentage = scrollSource.scrollTop / (scrollSource.scrollHeight - scrollSource.clientHeight);
                    const targetPosition = scrollPercentage * (scrollTarget.scrollHeight - scrollTarget.clientHeight);
                    scrollTarget.scrollTop = targetPosition;
                    isSyncing = false;
                }
            }

            scrollContainer1.addEventListener('scroll', () => syncScroll(scrollContainer1, scrollContainer2));
            scrollContainer2.addEventListener('scroll', () => syncScroll(scrollContainer2, scrollContainer1));

            scrollContainer3.addEventListener('scroll', () => syncScroll(scrollContainer3, scrollContainer4));
            scrollContainer4.addEventListener('scroll', () => syncScroll(scrollContainer4, scrollContainer3));

            scrollContainer5.addEventListener('scroll', () => syncScroll(scrollContainer5, scrollContainer6));
            scrollContainer6.addEventListener('scroll', () => syncScroll(scrollContainer6, scrollContainer5));

        });
    </script>



    @include('layouts.dashboard-footer')