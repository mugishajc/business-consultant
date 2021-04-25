@extends('layouts.app')

@section('content')


<div class="container-fluid">


                        <div class="col-md-10">
            
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"></button>
        Create your new Account
    </div>
            <div class="card">
            
            <div class="card-body">
            @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(session()->has('message'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('message') }}
    </div>
@endif

            <form method="POST" action="{{ route('addclient') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                          <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputfname">First Name</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="firstname" placeholder="Enter Firstname" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="lastname" type="text" placeholder="Lastname" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputemail">Email</label>
                                                        <input class="form-control py-4" required id="inputemail" type="text"name="email" placeholder="Email" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputphone">Phone number</label>
                                                        <input class="form-control py-4"required id="inputphone" name="Phone_number" type="number" placeholder="Phone number" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Enter your age</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="number"name="age" placeholder="Enter your age" />
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                <div class="form-group">
                                                <label class="small mb-1" >Sex</label>
                                                        
                                                <div class="form-check">
  
  <input class="form-check-input" type="radio" name="sex" id="exampleRadios1" value="Male" checked>
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="sex" id="exampleRadios2" value="Female">
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>
                                                </div>
                                                
                                            </div>
</div>


                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputfname">Password</label>
                                                        <input class="form-control py-4" required id="inputpassword" type="password"name="password" placeholder="Enter password" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-xs-12">
                                   <div class="white-box">
                                                        <label class="small mb-1" >Choose profile photo</label>
                                       <div id="add-messages"></div>
                                        <input type="file" id="input-file-now" class="dropify" name="profile" accept="image/jpeg,image/gif,image/png,image/x-eps" />
                                    </div>
                                </div>
 
                                                
                                  
                                            
                                                      
                                                
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button type="submit" class="btn btn-danger" >{{ __('Register') }}</Button>
                                            
                                            </div>
                                        </form>
        
           
           </div>
           </div>
                    </div>

                    @endsection