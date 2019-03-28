@extends('layouts.app-inner')

@section('content')
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">ez-eye</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/avatar-1.jpg')}}" alt=""
                                    class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"> </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                

                           


                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fas fa-power-off mr-2"></i>Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">

                            <li class="nav-divider">
                                Dashboard
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('home') }}">Recent Ticket</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('statics') }}">Statistics</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('ticket.index') }}">All Ticket</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">


                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Edit Ticket </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus
                                    vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Edit Ticket</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">

                        <div class="row">


                            <!-- ============================================================== -->
                            <!-- item  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Item#id{{$ticket->id}}</h5>
                                    <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="row">
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12  ">
                                                    <div class="">
                                                        <div class="">
                                                            <img class="d-block" style="width: 100%; margin-top: 16px;" src="{{ asset($ticket->image) }}" alt="">
                                                        </div>
                                                        <div style="display: none;" id="productslider-1" class="product-carousel carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img class="d-block" src="{{ asset('assets/images/eco-slider-img-1.png') }}" alt="First slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block" src="{{ asset('assets/images/eco-slider-img-2.png')}}" alt="Second slide">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block" src="{{ asset('assets/images/eco-slider-img-3.png')}}" alt="Third slide">
                                                                </div>
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                             <span class="sr-only">Previous</span>
                                                                  </a>
                                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                 <span class="sr-only">Next</span>
                                                                     </a>
                                                        </div>
                                                    </div>
                                
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                                                    <div class="product-details">
                                                        
                                                         
                                                        
                                                        <div class="product-description">
                                                           
                                                            <a href="javascript:void('0');"  onclick="statusChange('Approve');" class="btn btn-success btn-block btn-lg">Approve</a>
                                                             <a href="javascript:void('0');" onclick="statusChange('Decline');" class="btn btn-danger btn-block btn-lg">Decline</a>
                                                        </div></br>
                                                        license plate : <input type="text" id="license_plate" value="">
                                                    </div>

                                                </div>
                                                </div></div>
                                    
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end item  -->
                            <!-- ============================================================== -->

                        
                        </div>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            Copyright © 2019 ez-eye. All rights reserved to Umm al Qura university CIS College.
                        </div>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->



<script>
function statusChange($arg){
    event.preventDefault();
    var status;
    if($arg == "Approve"){
        status = "Approved";
    }else if($arg == "Decline"){
        status = "Declined";
    }else{
        status = ""
    }


    $.ajax({
        url: "{{route('ticket.update', $ticket->id)}}",
        type: "PUT",
        data:{"status":status,"_token": "{{ csrf_token() }}","lcnsplt":$("#license_plate").val()},
        dataType: "json",
        success: function(response){
            if(response.code == 100){
                alert("Successfully updated the status");
                window.location.href = '{{route("home")}}';
            }
        }
    });
}
</script>>


@endsection
