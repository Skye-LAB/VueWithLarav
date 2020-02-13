<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> @yield('title') </title>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Footer-Basic.css') }}">
    <link rel="stylesheet" href="{{ asset('/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/Navigation-with-Search.css') }}">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
    <div class="container"><a class="navbar-brand" href="#">Foody</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse"
             id="navcol-1">
            <ul class="nav navbar-nav">
                <li class="nav-item mx-1" role="presentation"><a class="nav-link" href="#"><!--<span class="badge badge-danger badge-counter">3+</span>--><ion-icon name="cart"></ion-icon></a></li>
            </ul>
            <form class="form-inline mr-auto" target="_self">
                <div class="form-group"><span for="search-field"><ion-icon name="search"></ion-icon></span><input class="form-control search-field" type="search" id="search-field" name="search"></div>
            </form><a class="btn btn-light action-button mr-1" role="button" href="#" data-toggle="modal" data-target="#signUp">Sign Up</a><a class="btn btn-light action-button" role="button" href="#" data-target="#signIn" data-toggle="modal">Sign in</a>
{{--            <ul class="nav navbar-nav ml-auto">--}}
{{--                <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Options</a>--}}
{{--                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Change Password</a><a class="dropdown-item" role="presentation" href="#">Logout</a></div>--}}
{{--                </li>--}}
{{--            </ul>--}}
        </div>
    </div>
</nav>
            <div class="modal fade" role="dialog" tabindex="-1" id="signIn">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Sign In</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                        <div class="modal-body">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend"><span class="input-group-text"><ion-icon name="person"></ion-icon></span></div><input class="form-control" type="text" placeholder="Username">
                                <div class="input-group-append"></div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><ion-icon name="lock-closed"></ion-icon></span></div><input class="form-control" type="text" placeholder="Password">
                                <div class="input-group-append"></div>
                            </div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-primary" type="button">Submit</button></div>
                    </div>
                </div>
            </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="signUp">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign Up</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend"><span class="input-group-text"><ion-icon name="person"></ion-icon></span></div><input class="form-control" type="text" placeholder="Username">
                            <div class="input-group-append"></div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend"><span class="input-group-text"><ion-icon name="mail"></ion-icon></span></div><input class="form-control" type="text" placeholder="Email">
                            <div class="input-group-append"></div>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend"><span class="input-group-text"><ion-icon name="lock-closed"></ion-icon></span></div><input class="form-control" type="text" placeholder="Password">
                            <div class="input-group-append"></div>
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><ion-icon name="call"></ion-icon></span></div><input class="form-control" type="text" placeholder="No. HP">
                            <div class="input-group-append"></div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-primary" type="button">Submit</button></div>
                </div>
            </div>
        </div>
@yield('isi')
<div class="footer-basic">
    <footer>
        <p class="copyright">Foody © 2020</p>
    </footer>
</div>

@yield('javascript')
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</body>

</html>
