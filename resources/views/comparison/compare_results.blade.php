@include('layouts.dashboard-header')
<div class="dashboard-page-content">

    <div class="d-flex flex-row ps-5 pt-2 w-100">
        <div class="col-10 scrollable-column">
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
                                aria-selected="false">Communication</button>
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

                                                <div class="col-12 col-lg-6 p-2">
                                                    <img src="{{ asset('assets/images/brain-cartoon.png') }}" height="300px">
                                                </div>

                                                <div class="row data-box-row ps-4 gap-0">
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
                                                <div class="row data-box-row ps-4 gap-0">
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
                                                    <img src="{{ asset('assets/images/thinking.png') }}" height="300px"
                                                        width="250px">
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

                                                <div class="col-12 col-lg-6 p-2">
                                                    <img src="{{ asset('assets/images/brain-cartoon.png') }}" height="300px">
                                                </div>

                                                <div class="row data-box-row ps-4 gap-0">
                                                    <div class="col-4 p-1">
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
                                                    <div class="col-4 p-1">
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
                                                <div class="row data-box-row ps-4 gap-0">
                                                    <div class="col-4 p-1">
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
                                                    <div class="col-4 p-1">
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
                                                    <img src="{{ asset('assets/images/thinking.png') }}" height="300px"
                                                        width="250px">
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
    
                                                <div class="col-12 mt-5 d-flex justify-content-center p-2">
                                                    <img src="{{ asset('assets/images/patterns.png') }}">
                                                </div>
    
                                                <div class="row data-box-row ps-4 pe-0 gap-0">
    
    
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
    
                                                <div class="col-12 mt-5 d-flex justify-content-center p-2">
                                                    <img src="{{ asset('assets/images/patterns.png') }}">
                                                </div>
    
                                                <div class="row data-box-row ps-4 gap-0">
    
    
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
                                                        <h5 class="description-title mt-5 mb-3">Sports and other extracurricular activities naturally preferred</h5>
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
                                                        <h5 class="description-title mt-5 mb-3">Sports and other extracurricular activities naturally preferred</h5>
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
                                                   
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item collapsible-div">
                                                          <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
                                                                Mind Sports
                                                            </button>
                                                          </h2>
                                                          <div id="collapseTwo-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
                                <h5>Communication</h5>
                            </div>
                            <div class="tab-pane fade" id="inclination" role="tabpanel"
                                aria-labelledby="inclination-tab" tabindex="-1">
                                <h5>Communic</h5>
                            </div>
                            <div class="tab-pane fade" id="diet" role="tabpanel" aria-labelledby="diet-tab"
                                tabindex="-1">
                                <h5>Diet</h5>
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