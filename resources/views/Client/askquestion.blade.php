
@extends('dashboard.index')

@section('contentaskquestion')
<div class="container-fluid">
                    <h2 class="mt-1">Dashboard -> {{ auth()->user()->role}} </h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            
                           Ask any question to our specialists/experts in different Academia fields
                            </li>
                        </ol>


                        <div class="col-md-15">
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

            <form method="POST" action="{{ route('addQuery')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                            
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputfname">Title</label>
                                                        <input class="form-control py-4" required id="inputpassword" type="text"name="title" placeholder="Example: I'm headache or my chest is paining" />
                                                    </div>
                                                </div>

                                                
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputfname"> Choose specialist or experts</label>
                                                        
                                                <select required  name="expert" id="usertype" class="form-control">

<option value=""disabled selected>--select specialists--</option>
@foreach($ikiciro as $iki)
<option value="{{$iki->category_name}}">{{$iki->category_name}}</option>
@endforeach
 </select>
                                                </div>
                                            </div>
                            </div>
                        </div>


                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <TextArea cols="40" name="description" rows="4" placeholder="Description of your question or requests"></TextArea>
                                                    </div>
                                                </div>
                                                </div>


                                            
                        <div class="form-row">
                                                      
                                <div class="col-sm-6 col-md-6 col-xs-12">
                                   
                                </div>
                                                
                                            </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button type="submit" class="btn btn-danger" >{{ __('POST') }}</Button>
                                            
                                            </div>
                                        </form>
        
                                        <br>
           <div class="card-footer">
           <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Conselling system <?php echo date("Y");?></div>
                            <div>
                                &middot;
                                <a href="#">Academic project</a>
                            </div>
                        </div>
                    </div>
</div>

           </div>
           </div>
                    </div>

                 

                                        @overwrite