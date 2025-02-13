@include('layouts.dashboard-header')

<div class="container-fluid">
    <div class="main-wrapper mb-5 mb-lg-0 mb-xl-0">
        <div>
            <h2 class="page-title">Contact form</h2>
            <p class="page-description">Send Details</p>
        </div>

       <div class="card contact-form-card">
        <div class="card-body">
            <form action="">
                <div class="d-lg-flex d-md-flex d-block gap-5 ">
                    <div class="mb-3 col-12 col-lg-4 col-md-4 col-xl-4">
                        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="nameFormControlInput1" placeholder="Enter Full Name">
                    </div>
    
                    <div class="mb-3 col-12 col-lg-5 col-md-5 col-xl-5">
                        <label for="emailFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emailFormControlInput1" placeholder="Enter email address">
                    </div>
                </div>
                
                <div class="mb-3 col-12 col-lg-11 col-md-11 ">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="How can we help you"></textarea>
                </div>

                <div class="my-5 col-11 text-center text-lg-end text-md-end">
                    <button class="yellow-send-message-btn" style="font-size: 18px; width:fit-content">Send  Message</button>
                </div>
            </form>
        </div>
        
       </div>
    </div>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade brain-connect-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
        <div class="modal-body">
            <div class="d-flex justify-content-between my-3">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Would you like to join brain connect</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#000000" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c-9.4 9.4-9.4 24.6 0 33.9l47 47-47 47c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l47-47 47 47c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-47-47 47-47c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-47 47-47-47c-9.4-9.4-24.6-9.4-33.9 0z"/></svg> --}}
                </button>
            </div>

            <div>
                <p class="modal-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


                <form action="">
                    <div class="mb-3 col-12 col-lg-5 col-md-5 col-xl-5">
                        <label for="emailFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="emailFormControlInput1" placeholder="Enter email address">
                    </div>
                </form>
                <div class="d-flex justify-content-end my-5 col-12 gap-3 ">
                    <button type="button" class="btn-close1" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="yellow-send-message-btn" style="font-size: 18px; width:fit-content">Send Invite</button>
                </div>
            </div>
            
            
            
            
        </div>
       
      </div>
    </div>
  </div>

@include('layouts.dashboard-footer')