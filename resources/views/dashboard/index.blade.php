<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/jpg" href="<?php echo url('/'); ?>/src/assets/img/logo.jpg" />         
        <title>Business Consultancy</title>
 
        <link href="<?php echo url('/'); ?>/dist/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    
</head>

       
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo url('/'); ?>">
            <img src="/dist/assets/img/logo.jpg" height="50" style="border-radius:0px 0px 5px 5px" alt="CoolBrand">
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div  class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a style="color:#006400;" class="dropdown-item" href="#">
                        {{ auth()->user()->email}}
                    </a>
                        <a class="dropdown-item" data-toggle="modal" id="mediumButton" data-target="#mediumModal">My Profile</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}" style="color:#FF0000">
                            
                        
                        Logout
                    
                    </a>
                    </div>
                </li>
            </ul>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav bg-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    
                    <div class="nav">

                    @if(auth()->user()->level=='0')
                            <a class="nav-link" href="<?php echo url('/Ubutumwa'); ?>"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Messages
                            </a>
                            


                            
                            <a class="nav-link" href="<?php echo url('/manageusers'); ?>"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Users
                            </a>
                            

                                 
                            <a  class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsusers" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Consultants
                                 
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsusers" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a  class="nav-link" href="{{url('/addconselor')}}">Add new Conselors</a>
                                    <a  class="nav-link" href="{{url('/addcategory')}}">Add new category</a>
                                </nav>
                            </div>
                    
                            </div>
                    
                            @elseif(auth()->user()->level=='2')
                            <a class="nav-link" href="<?php echo url('/Ubutumwa'); ?>"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Replies
                            </a>

                            <a class="nav-link" href="<?php echo url('/askquestion'); ?>"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Ask questions
                            </a>
                            @elseif(auth()->user()->level=='1')
                            <a class="nav-link" href="<?php echo url('/'); ?>"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Conselor Dashboard
                            </a>
                            
                            <a class="nav-link" href="<?php echo url('/Ubutumwaconselor'); ?>"  >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Messages
                            </a>
                     @endif

                            <div class="sb-sidenav-footer " >


<div class="small" style="color:#000">
<img
src="<?php echo url('/'); ?>/dist/assets/img/default.jpg"
class="rounded-circle z-depth-0"
alt="avatar image"
height="30"
width="30"
/>

    {{ auth()->user()->name}}  

</div>
</div>



                </nav>
            </div>
            <div id="layoutSidenav_content">
        
            <main> 
            @section('contentmaindashboard')
            @show


            @section('contentmanageuser')
            @show

            @section('contentedituser')
            @show

            @section('contentaddconselor')
            @show

            
            @section('contentaddcategory')
            @show

            @section('contentaskquestion')
            @show
 
 
            @section('contentmessages')
            @show

            
            @section('contentprofile')
            @show
            


            @section('contentreplies')
            @show
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo url('/'); ?>/dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo url('/'); ?>/dist/assets/demo/chart-area-demo.js"></script>
        <script src="<?php echo url('/'); ?>/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo url('/'); ?>/dist/assets/demo/datatables-demo.js"></script>

                 
      
  <!--profile modal  -->
  
  <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                   
                <div>
                 
                <!-- the result to be displayed apply here -->
                 <h7 style="color:#000;"> My Profile  
                
                
                </h7> <br> <label style="color:#FF0000;"> Unit -> {{ auth()->user()->usertype}} </label> 
                <form method="post" action="#">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                            <div class="form-row">
                                                

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Names</label>
                                                        <input class="form-control py-4"required id="inputLastName" name="name" type="text" value="{{ auth()->user()->name}}" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputemail">Email</label>
                                                        <input class="form-control py-4" required id="inputemail" type="text"name="Email" value="{{ auth()->user()->email}}" />
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputphone">Phone number</label>
                                                        <input class="form-control py-4"required id="inputphone" name="Phone number" value="{{ auth()->user()->phone_number}}" type="text" placeholder="{{ auth()->user()->phone_number}}" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                              
  @error('level')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                            
                                                
                                            <!-- </div>
                                            <div  class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <Button class="btn btn-primary" name="update">update</Button>
                                            </div> -->
                                        </form>
        


                        <!-- end of result from DB> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
      
        <script>
    // display a modal (medium modal)
        $(document).on('click', '#mediumButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#mediumModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        });

    </script>
        
        <!-- end of profile modal-->
    
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="/__/firebase/8.3.3/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="/__/firebase/8.3.3/firebase-analytics.js"></script>

<!-- Initialize Firebase -->
<script src="/__/firebase/init.js"></script>


    </body>
</html>
