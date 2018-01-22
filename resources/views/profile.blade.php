

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon')}}.png">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Now Ui Kit by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
</head>
<body class="profile-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-header">Dropdown header</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">One more separated link</a>
                </div>
            </div>
            <div class="navbar-translate">
                <a class="navbar-brand" href="http://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
                    Now Ui Kit
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{asset('/img/blurred-image-1.jpg')}}">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{asset('/')}}">Back to Kit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Have an issue?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li>
                            <a class="dropdown-item" href="/profile">User Profile
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                  {{ csrf_field() }}
                              </form>
                          </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('/img/bg5.jpg')}}')">
            </div>
            <div class="container">
                <div class="content-center">
                    <div class="photo-container">
                        <img src="{{asset('/img/ryan.jpg')}}" alt="">
                  </div>
                    <p>
                      <button type="button" class="btn btn-danger">
                        <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                      </button>
                    </p>
                    <h3 class="title" >{{ Auth::user()->name }}</h3>
                    <p class="category">Photographer</p>
                    <div class="content">
                        <div class="social-description">
                            <h2>26</h2>
                            <p>Comments</p>
                        </div>
                        <div class="social-description">
                            <h2>26</h2>
                            <p>Comments</p>
                        </div>
                        <div class="social-description">
                            <h2>48</h2>
                            <p>Bookmarks</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="button-container">
                    <a href="#button" class="btn btn-primary btn-round btn-lg">Follow</a>
                    <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
                <h3 class="title">About me</h3>
                <h5 class="description">An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</h5>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <h4 class="title text-center">My Portfolio</h4>
                        <div class="nav-align-center">
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tablist">
                                        <i class="now-ui-icons design_image"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tablist">
                                        <i class="now-ui-icons location_world"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tablist">
                                        <i class="now-ui-icons sport_user-run"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content gallery">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <img src="{{asset('/img/bg1.jpg')}}" alt="" class="img-raised">
                                        <img src="{{asset('/img/bg3.jpg')}}" alt="" class="img-raised">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('/img/bg8.jpg')}}" alt="" class="img-raised">
                                        <img src="{{asset('/img/bg7.jpg')}}" alt="" class="img-raised">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <img src="{{asset('/img/bg6.jpg')}}" class="img-raised">
                                        <img src="{{asset('/img/bg11.jpg')}}" alt="" class="img-raised">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('/img/bg7.jpg')}}" alt="" class="img-raised">
                                        <img src="{{asset('/img/bg8.jpg')}}" alt="" class="img-raised">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <img src="{{asset('/img/bg3.jpg')}}" alt="" class="img-raised">
                                        <img src="{{asset('/img/bg8.jpg')}}" alt="" class="img-raised">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{asset('/img/bg7.jpg')}}" alt="" class="img-raised">
                                        <img src="{{asset('/img/bg6.jpg')}}" class="img-raised">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-default">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                                MIT License
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{asset('/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('/js/now-ui-kit.js?v=1.1.0')}}" type="text/javascript"></script>


</html>
