@extends('dashboard.index')

@section('contentmaindashboard')

<div class="container-fluid">
<br>
<h2 class="mt-1">Dashboard -> {{ auth()->user()->role}} </h2>

                                        
                        <ol class="breadcrumb mb-4">
                             
                            <li class="breadcrumb-item active">
                            
                           Dashboard ---- Welcome  {{auth()->user()->firstname." ".auth()->user()->lastname }}
                            </li>
                            
                        </ol>
                            

                        <div class="col-md-15"> 
            <!-- <div class="card"> -->


<!--start static -->


<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-black mb-4">
                                    <div class="card-body">Specialists <h7 style="color:#000"> -- 90 </h7></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link" href="#">View Details</a>
                                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-light text-black mb-4">
                                    <div class="card-body">Queries <h7 style="color:#000"> -- 98 </h7></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-black stretched-link" href="#">View Details</a>
                                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        


<!-- 
end of static -->

           <br>
           <div class="card-footer">
           <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Conselling system</div>
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

                 
                            @endsection
                            