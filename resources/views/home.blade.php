<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Landing Page - Now Ui Kit by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body class="landing-page sidebar-collapse">
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
                <a class="navbar-brand" href="/" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
                    Now Ui Kit
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{asset('img/blurred-image-1.jpg')}}">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Back to Kit</a>
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
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('img/bg6.jpg')}}');">
            </div>
            <div class="container">
                <div class="content-center">
                    <h1 class="title">This is our great company.</h1>
                    <div class="text-center">
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-about-us">

    <div class="section">
        <div class="row">
            <div class="col-md-8 ml-auto">

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
                Launch demo modal
                </button>

                <div class="modal fade" tabindex="-1" id="loginModal" data-keyboard="false"  aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="section" id="carousel">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <h3 class="product-title">United States</h3>
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block" src="{{asset('img/bg1.jpg')}}" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Nature, United States</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block" src="{{asset('img/bg3.jpg')}}" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Somewhere Beyond, United States</h5>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block" src="{{asset('img/bg4.jpg')}}" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Yellowstone National Park, United States</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <i class="now-ui-icons arrows-1_minimal-right"></i>
                                    </a>
                                </div>
                            </div>
                          </div>
                        </div>


                        <div class="row col-md-12">
                          <div class="col-md-6">
                          <div class="rating">
                            <div class="stars">
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">41 reviews</span>
                          </div>
                          <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                        </div>
                        <div class="col-md-6">
                          <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                          <h3 class="price">current price: <span>$180</span></h3>


                          <div class="action">
                            <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                          </div>
                        </div>
                      </div>


                      </div>
                    </div>
                </div>
                </div>
            </div>

    </div>



            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">Who we are?</h2>
                        <h5 class="description">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record low maximum sea ice extent tihs year down to low ice extent in the Pacific and a late drop in ice extent in the Barents Sea.</h5>
                    </div>
                </div>
                <div class="separator separator-primary"></div>
                <div class="section-story-overview">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-container image-left" style="background-image: url('{{asset('img/login.jpg')}}')">
                                <!-- First image on the left side -->
                                <p class="blockquote blockquote-primary">"Over the span of the satellite record, Arctic sea ice has been declining significantly, while sea ice in the Antarctichas increased very slightly"
                                    <br>
                                    <br>
                                    <small>-NOAA</small>
                                </p>
                            </div>
                            <!-- Second image on the left side of the article -->
                            <div class="image-container" style="background-image: url('{{asset('/img/bg3.jpg')}}')"></div>
                        </div>
                        <div class="col-md-5">
                            <!-- First image on the right side, above the article -->
                            <div class="image-container image-right" style="background-image: url('{{asset('/img/bg1.jpg')}}')"></div>
                            <h3>So what does the new record for the lowest level of winter ice actually mean</h3>
                            <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
                            </p>
                            <p>
                                For a start, it does not automatically follow that a record amount of ice will melt this summer. More important for determining the size of the annual thaw is the state of the weather as the midnight sun approaches and temperatures rise. But over the more than 30 years of satellite records, scientists have observed a clear pattern of decline, decade-by-decade.
                            </p>
                            <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-team text-center">
            <div class="container">
                <h2 class="title">Here is our team</h2>
                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{asset('img/avatar.jpg')}}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Romina Hadid</h4>
                                <p class="category text-primary">Model</p>
                                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                    <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-instagram"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{asset('img/ryan.jpg')}}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Ryan Tompson</h4>
                                <p class="category text-primary">Designer</p>
                                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                    <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{asset('img/eva.jpg')}}" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                                <h4 class="title">Eva Jenner</h4>
                                <p class="category text-primary">Fashion</p>
                                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                                    <a href="#">links</a> for people to be able to follow them outside the site.</p>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-google-plus"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-youtube-play"></i></a>
                                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-contact-us text-center">
            <div class="container">
                <h2 class="title">Want to work with us?</h2>
                <p class="description">Your project is very important to us.</p>
                <div class="row">
                    <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons users_circle-08"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="First Name...">
                        </div>
                        <div class="input-group input-lg">
                            <span class="input-group-addon">
                                <i class="now-ui-icons ui-1_email-85"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Email...">
                        </div>
                        <div class="textarea-container">
                            <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
                        </div>
                        <div class="send-button">
                            <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Send Message</a>
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
<script src="{{asset('js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('js/plugins/bootstrap-switch.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{asset('js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('js/now-ui-kit.js?v=1.1.0')}}" type="text/javascript"></script>
<script>


// $(document).ready(function () {
//             $("#btnShowModal").click(function () {
//                 $("#loginModal").modal('show');
//             });
//
//
//         });
</script>




</html>
