@include('layouts.dashboard-header')
<div class="dashboard-page-content">

    <div class="d-flex flex-row p-5 w-100">
        <div class="col-9 scrollable-column">
            <h3 class="section-title text-purple mt-3">
                Let's Compare
                    <!--{{var_dump(session('user_details'))}}-->
            </h3>
            <p class="comparison-sub-title">
                View and analyze the details side by side for better decisions.
            </p>
            @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
            @if(Session::has('success')) <p style="color:green;font-size:14px;"><?php echo Session::get('success') ?></p>@endif

        <div class="w-100 profileContent mt-4">
            <div class="tab-container card nav-card p-0">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active first-link" id="basic-brain-report" data-bs-toggle="pill" data-bs-target="#basic-brain-report" type="button" role="tab" aria-controls="pills-basic-brain-report" aria-selected="true">Basic Brain Report</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#thinking-style" type="button" role="tab" aria-controls="pills-thinking-style" aria-selected="false">Thinking Style</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="advance-brain-report-tab" data-bs-toggle="pill" data-bs-target="#advance-brain-report" type="button" role="tab" aria-controls="pills-advanced-brain-report" aria-selected="false">Advance Brain Report</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="prefered-learning-tab" data-bs-toggle="pill" data-bs-target="#prefered-learning" type="button" role="tab" aria-controls="pills-prefered-learning-style" aria-selected="false">Preferred Learning Styles</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="extra-activities-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-Extracurricular-Activities" aria-selected="false">Extracurricular Activities</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-Communication" aria-selected="false">Communication</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-inclination" aria-selected="false">Inclination for Subjects
    
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-Diet" aria-selected="false">Diet and Nutrition</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-matching" aria-selected="false">Matching Career Options</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link last-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-skill-test" aria-selected="false">Skill Test</button>
                    </li>
                    
                  </ul>

                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="basic-brain-report" role="tabpanel" aria-labelledby="basic-brain-report" tabindex="0">
                        
                    </div>



                    <div class="tab-pane fade" id="thinking-style" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                  </div>
            </div>
            
             
        </div>
        </div>
    </div>
</div>
@include('layouts.dashboard-footer')