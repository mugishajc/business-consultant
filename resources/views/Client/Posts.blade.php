@extends('dashboard.index')

@section('contentmessages')

<div class="container-fluid">
                   <br>
                     <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                            
                            Posts wall for {{ auth()->user()->role}}
                            </li>
                        </ol>


                        <div class="col-md-14">
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

                  @foreach($posts as $f)

                  <div class="card" style="width: 30rem;">
    
  <div class="card-title">
  <a href = 'UserProfile/{{ $f->client_id }}'>

<img
src="<?php echo url('/'); ?>/dist/assets/img/{{$f->client_profile}}"
class="rounded-circle z-depth-0"
alt="avatar image"
height="25"
width="25"
/>


By 
{{$f->client_name}} </a>  -   {{Carbon\Carbon::parse($f->updated_at)->diffForHumans() }} </sub> 

</div>
<h7 class="card-title" style="color:#000" >
Title : {{$f->title}}
</h7>

<h7 class="card-title" style="color:#000" >
Expert : {{$f->expert}}
</h7>

<p style="color:black">Question : {{$f->description }}  <br> <sub style="color:grey">
    
  <sub>  
<h7 class="card-title" style="color:#000" >
<!-- Status : {{$f->status}} 

<input type="text" value="{{$f->client_id}}" name="client_id"> -->

</h7>
</sub>
<br>
<a href = 'ReplyConselor/{{ $f->id }}'>
<button class="btn btn-info btn-sm" >Replies</button>
</a>
</div>

<br>
@endforeach

</div>
</div>
</div>


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