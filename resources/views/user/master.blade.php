<!octype html>
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
    <link rel="stylesheet" href={{asset('css\show_product.css')}}>

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
                <!-- sidebar -->
                <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top" style=" overflow-y: auto;" >
                    <!-- if login -->
                    <div class="bottom-border pb-3">
                        <a href="{{route('profile')}}"><img src={{asset('image/ali.jpg')}} width="50" height="48" class="rounded-circle mr-3"></a>
                        <a href="{{route('profile')}}" class="text-white">Ali mohammed</a>
                    </div>

                    <ul class="navbar-nav flex-column mt-4">
                        <li class="nav-item"><a href="{{route('user.index')}}" class="nav-link text-white p-3 mb-2 current"><i class="fa fa-home text-light fa-lg mr-3"></i>Home</a></li>
                    </ul>
                    <ul class="list-group">
                        <a href="/user/cloths" class="list-group-item d-flex justify-content-between align-items-center sidebar-link">
                            Cloths
                            <span class="badge badge-primary badge-pill">5</span>
                            </a>
                        <a href="/user/phone" class="list-group-item d-flex justify-content-between align-items-center sidebar-link">
                            Phone
                            <span class="badge badge-primary badge-pill">3</span>
                        </a>
                        @for($i=0;$i<10;$i++)
                        <a href="/user/laptop" class="list-group-item d-flex justify-content-between align-items-center sidebar-link">
                          Laptop
                            <span class="badge badge-primary badge-pill">8</span>
                        </a>
                            @endfor


                    </ul>
                </div>
                <!-- end of sidebar -->

                <!-- top-nav -->
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-4 col-lg-4 col-xl-4">
                            <h4 @yield('WebsiteNamePos') style="font-weight: bold; color: white">My Website</h4>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-7">
                            @yield('search')
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1" >
                            <ul class="navbar-nav">
                                <li><a href="/user/card" data-tip="Show Cart"><i class="fas fa-shopping-cart fa-2x text-warning"></i></a></li>
                                <!-- if login -->
                                <li class="nav-item ml-md-auto" ><a href="{{route('login')}}" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
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

<!-- modal -->
<div class="modal fade" id="sign-out">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Want to leave?</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                Press logout to leave
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
            </div>
        </div>
    </div>
</div>
<!-- end of modal -->

@yield('body')
</body>
</html>






