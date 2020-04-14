<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href={{asset('css\admin_style.css')}}>
    <link rel="stylesheet" href={{asset('css\app.css')}}>
    <link rel="stylesheet" href={{asset('css\register.css')}}>
    <link rel="stylesheet" href={{asset('css\templatemo-style.css')}}>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title> Website</title>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-light"  >
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="row">
                <!-- top-nav -->
                <div class="col-xl-12 col-lg-12 col-md-12 ml-auto bg-dark fixed-top py-2 top-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h4 @yield('WebsiteNamePos') style="font-weight: bold; color: white">My Website</h4>
                        </div>
                        <div class="col-md-5">
                           @yield('search')
                        </div>
                        <div class="col-md-1">
                            <ul class="navbar-nav">
                                <!-- if login -->
                                <li class="nav-item ml-md-auto"><a href="{{route('login')}}" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end of top-nav -->
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->
@yield('body')


</body>
</html>






