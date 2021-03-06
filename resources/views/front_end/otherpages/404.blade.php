@extends('front_end.master')

@section('title')
    Home
@endsection

@section('content')

    <div class="content">
        <div class="space-large">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                   <div class="error-img"> <img src="images/error-img.png" alt=""></div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <!-- error-block -->
                    <div class="error-block">
                        
                        <div class="error-content">
                            <h1 class="error-title">404</h1>
                            <h2 class="error-second-title">Opps! Looks like the page is gone.</h2>
                            <p class="lead">The Link is brokern or the page has beed moved. Try these pages instead:</p>
                        </div>
                    </div>
                    <!-- /.error-block -->
                    <!-- simple-links -->
                    <div class="simple-links">
                        <ul class="list-unstyled">
                            <li><a href="#">Venues</a></li>
                            <li><a href="#">Vendors</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Events</a></li>
                        </ul>
                    </div>
                    <!-- simple-links -->
                </div>
            </div>
        </div>
    	</div>
    </div>

@endsection
