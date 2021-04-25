
@extends('dashboard.index')

@section('contentreplies')

<div class="container-fluid">
                   <br>
                 
    <div class="alert alert-success">
    
                            @foreach ($mes as $mail)

<h4> Question:</h4> 
{{ $mail->description }}

<a href = 'UserProfile/{{ $mail->client_id }}'>

<img
src="<?php echo url('/'); ?>/dist/assets/img/{{$mail->client_profile}}"
class="rounded-circle z-depth-0"
alt="avatar image"
height="25"
width="25"
/>


By 
{{$mail->client_name}} </a>  -   {{Carbon\Carbon::parse($mail->updated_at)->diffForHumans() }} </sub> 

                 
</div>
             

                        <div class="col-md-10">
                        Replies
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
    <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('message') }}
    </div>
@endif

<form method="POST" action="/submitreply/<?php echo $mail->id; ?>">
{{ csrf_field() }}
<div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputemail">.</label>
                                                        <TextArea cols="50"  required name="answer" rows="5" placeholder="Type your reply here !!!"></TextArea> 
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <button class="btn btn-info btn-sm" type="submit">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>

</div>
</div>
</div>



@endforeach
<br>
@foreach($ibisubizo as $subiza)

<div class="card" style="width: 30rem;" >
    
    <div class="card-title">
    <a href = 'UserProfile/{{ $subiza->user_id }}'>
  
  <img
  src="<?php echo url('/'); ?>/dist/assets/img/{{$subiza->replier_profile}}"
  class="rounded-circle z-depth-0"
  alt="avatar image"
  height="25"
  width="25"
  />
  
  
  Replied by
  {{$subiza->replier_name}} </a>  -   {{Carbon\Carbon::parse($subiza->updated_at)->diffForHumans() }} </sub> 
  
  </div>
  <h7 class="card-title" style="color:#000" >
  Speciality / Expertise : {{$subiza->replier_expert}}
  </h7>
  
  
  <p style="color:black">Reply : {{$subiza->answer}}  <br> <sub style="color:grey">
      
    <sub>  
  <h7 class="card-title" style="color:#000" >
  
  </h7>
  </sub>
  
  </div>
  
  <br>



@endforeach

                            <br>
           <div class="card-footer">
           <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Conseloring 2020</div>
                            <div>
                                &middot;
                                <a href="#">Student project</a>
                            </div>
                        </div>
                    </div>
</div>

           </div>
           </div>
                    </div>

                 
                            @endsection