@extends('dashboard.index')

@section('contentprofile')


@foreach($user_profile as $user)




<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-profile thumbnail" 
src="<?php echo url('/'); ?>/dist/assets/img/{{$user->profile}}" 
class="rounded-circle z-depth-0"
alt="avatar image"
height="250"
width="250"

alt="Profile image example"/>
        <div class="fb-profile-text">
            <h1>{{$user->firstname}}  {{$user->lastname}}</h1>
            <h3>Gender {{$user->sex}}  </h3>
            <h5>Age {{$user->age}}  years old</h5>
            <h5>Role {{$user->role}}  </h5>
            <p>Email: {{$user->email }}</p>
        </div>
    </div>
</div> <!-- /container -->  

@endforeach

@endsection