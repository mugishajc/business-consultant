@extends('layouts.app')

@section('content')
<div class="container-fluid">
                    <br>
                        <div class="col-md-8">
                        <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert"></button>
        Create new account
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


<form method="post" action="{{ route('adduser') }}">
                                       <input type="hidden" value="{{csrf_token()}}" name="_token" id="token">

                                          
                                          <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Firstame</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="text"name="firstname" placeholder="Enter firstname" />
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Lastname</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="lastname" type="text" placeholder="Enter lastname" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Eamil</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="email"name="email" placeholder="Enter your email" />
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Phone Number</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="phone_number" type="number" placeholder="Enter your phone number" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Enter your age</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="number"name="age" placeholder="Enter your email" />
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                <div class="form-group">
                                                <label class="small mb-1" >Sex</label>
                                                        
                                                <div class="form-check">
  
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Male" checked>
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Female">
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>
                                                </div>
                                                
                                            </div>
</div>
                                            <div class="form-row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="small mb-1" >Password</label>
                                                        <input class="form-control py-4" required id="inputFirstName" type="password"name="password" placeholder="Enter password" />
                                                    </div>
                                                </div>

                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Confirm Password</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="confirm_password" type="password" placeholder="Retype your password" />
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            

                                            
                              
                                            
                            </div>
                        </div>

                                            
                                                
                                            </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button class="btn btn-danger" type="submit">{{ __('Register') }}</Button>
                                            </div>
                                        </form>

                                        <br>
           <div class="card-footer">
           <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Student project <?php echo date("Y");?></div>
                            <div>
                                &middot;
                                <a href="#">Conseling</a>
                            </div>
                        </div>
                    </div>
</div>

           </div>
           </div>
                    </div>

                 
@endsection
