<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Admission System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        
    </head>
    <body data-spy="scroll">
        <div class="flex-center position-ref full-height">
            
            <div id="home">
                <!-- navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
                    <a class="navbar-brand" href="#">
                        Ministry of Education, Myanmar
                        <!-- <img src="img/brand.png" alt=""> -->
                    </a>
        
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#uni">Universities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contactus">Contact Us</a>
                            </li>
                        </ul>
                        @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/profile') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </nav>
                <!-- end of navbar -->
                <!-- carousel -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        
                    <div class="carousel-inner" role="listbox">
        
                        <div class="carousel-item active">
                        <img src="/img/banner2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h1>Welcome to Online admission system</h1>
                                <p>The all you need to do is just a click</p>
                            </div>
                        </div>
        
                    </div>
                </div> 
            </div>
        
            <!-- section for universities -->
            <div id="uni">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1>Discover many universities</h1>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card shadow-sm">
                        <img src="img/WYTU.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">WYTU</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <a href="#" class="btn btn-primary">button</a>
                        </div>
                    </div>
                    <div class="card shadow-sm">
                        <img src="img/UCSY.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">UCSY</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <a href="#" class="btn btn-primary">button</a>                              
                        </div>
                    </div>
                    <div class="card shadow-sm">
                        <img src="img/YU.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">YU</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <a href="#" class="btn btn-primary">button</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of university -->
            <!-- features -->
            <div id="features">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1>Enjoy features of online admission system</h1>
                    </div>
                </div>
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/banner1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- end of features -->
                <!-- footer -->
                <div id="contactus">
                    <div class="container-fluid bg-light">
                        <div class="footer-content">
                            <h1>Contact Us</h1>
                            <div class="input-group justify-content-center mb-3">
                                <input type="text" class="form-control col-5" placeholder="Enter Your email address" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon2">Submit</button>
                                </div>
                            </div>
                            
                            <img src="img/facebook.png" alt="">
                            <img src="img/twitter.png" alt="">
                            <img src="img/youtube.png" alt="">
                            <hr>
                            Copyright © 2019 AUNG HTET PAING. All right reserved.
                        </div>
                    </div>
                </div>
                <!-- end of footer -->
            </div>
            
        </div>
        <!-- javascript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
