@include('layouts.dashboard-header')
<div class="dashboard-page-content">
    
    <div class="d-flex flex-row p-3 w-100">
        <div class="col-9 scrollable-column">
            <h3 class="section-title text-purple mt-3">
                Comparison Request
                    <!--{{var_dump(session('user_details'))}}-->
            </h3>
            @if(Session::has('fail')) <p style="color:red;font-size:14px;"><?php echo Session::get('fail') ?></p>@endif
        @if(Session::has('success')) <p style="color:green;font-size:14px;"><?php echo Session::get('success') ?></p>@endif

        <div class="w-100 profileContent">

         
            <div class="row">
               
               
                    <div class="col-md-5">
                         <form action="" method="post" enctype="multipart/form-data" class="w-100 justify-content-center">
                        @csrf
                            
                        <div class="mb-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Recipient's Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="">
                            @if($errors->has("email")) <p style="color:red;font-size:14px;">{{ $errors->first('email') }}
                            </p>
                            @endif
                        </div>
                        
                          <button type="submit" name="submit_type" value="basic_details" class="yellow-btn mt-2 mt-lg-4 px-4 px-lg-5 mb-5">Save</button>
                          </form>
                    </div>
                  

               
            </div>
            
             <div class="row mt-2">
               
               
                    <div class="col-md-12">
                        <h5 class=" text-purple mt-4 mb-3">Recieved Requests</h5>
                         <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Requested Date</th>
                              <th scope="col">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                             <?php foreach($recieved_requests as $recieved_request){ ?> 
                            <tr>
                              <th scope="row">{{$recieved_request->name}}</th>
                              <td>{{$recieved_request->email}}</td>
                              <td>{{$recieved_request->requested_date}}</td>
                              <td><a href="{{url('accept-comparison-request/'.$recieved_request->id.'')}}"><button type="button" value="basic_details" class="btn btn-success ">Accept</button></a>
                              <a href="{{url('reject-comparison-request/'.$recieved_request->id.'')}}"><button type="button"  value="basic_details" class="btn btn-danger ">Reject</button></a></td>
                            </tr>
                           <?php } ?>
                           
                          </tbody>
                        </table>
                    </div>
                  

               
            </div>
            
             <div class="row mt-2">
               
               
                    <div class="col-md-12">
                        <h5 class=" text-purple mt-4 mb-3">Sent Requests</h5>
                         <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Email</th>
                              <th scope="col">Requested Date</th>
                              <th scope="col">Status</th>
                              <th scope="col">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                             <?php foreach($sent_requests as $sent_request){ ?> 
                            <tr>
                              <td>{{$sent_request->to_email}}</td>
                              <td>{{$sent_request->requested_date}}</td>
                              <td>{{$sent_request->status}}</td>
                              <td>
                                  <?php if($sent_request->status == 'accepted'){ ?> 
                                  <a href="{{url('compare-results/'.$sent_request->id.'')}}"><button type="button" value="basic_details" class="btn btn-success ">Compare</button></a>
                                  <?php } ?>
                                  
                              </td>
                            </tr>
                           <?php } ?>
                           
                          </tbody>
                        </table>
                    </div>
                  

               
            </div>

        </div>
            
        </div>

    </div>


</div>
@include('layouts.dashboard-footer')