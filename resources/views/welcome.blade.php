
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
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">


            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{asset('img/blurred-image-1.jpg')}}">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Login Now" data-placement="bottom" href="{{ route('login') }}" target="_blank">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <p>Login</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Register Now" data-placement="bottom" href="{{ route('register') }}" target="_blank">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <p>Register</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>


    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('{{asset('img/426408.jpg')}}');">
            </div>
            <div class="container">
                <div class="content-center brand">
                  <img class="n-logo" src="{{asset('img/now-logo.png')}}" alt="">
                  <h1 class="h1-seo">Now Your Trip Start's Here!!</h1>
                  <section class="container">
                    	<form onsubmit="submitFn(this, event);">
                            <div class="search-wrapper">
                                <div class="input-holder">
                                    <input type="text" class="search-input" placeholder="Type to search">
                                    <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                                </div>
                                <span class="close" onclick="searchToggle(this, event);"></span>
                                <div class="result-container">
                                </div>
                            </div>
                        </form>
                	</section>
                </div>


                  <a href="#about" title="About"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>


            </div>
        </div>
        <div class="main">

            <div class="section section-navbars">
                <div class="container" id="menu-dropdown">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Menu</h4>
                            <nav class="navbar navbar-expand-lg bg-primary">
                                <div class="container">
                                    <a class="navbar-brand" href="#">Menu</a>
                                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-bar bar1"></span>
                                        <span class="navbar-toggler-bar bar2"></span>
                                        <span class="navbar-toggler-bar bar3"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="example-navbar" data-nav-image="assets/img/blurred-image-1.jpg">
                                        <ul class="navbar-nav">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="#">
                                                    <p>Link</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">
                                                    <p>Link</p>
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <p>
                                                        Dropdown
                                                    </p>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-6">
                            <h4>Menu with Icons</h4>
                            <nav class="navbar navbar-expand-lg bg-info">
                                <div class="container">
                                    <a class="navbar-brand" href="#">Icons</a>
                                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#example-navbar-icons" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-bar bar1"></span>
                                        <span class="navbar-toggler-bar bar2"></span>
                                        <span class="navbar-toggler-bar bar3"></span>
                                    </button>
                                    <div class="collapse navbar-collapse justify-content-end" id="example-navbar-icons">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#pablo"><i class="now-ui-icons ui-1_send" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#pablo"><i class="now-ui-icons users_single-02" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                                                    <i class="now-ui-icons ui-1_settings-gear-63" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-header">Dropdown header</a>
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                    <div class="divider"></div>
                                                    <a class="dropdown-item" href="#">One more separated link</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <h4>Navigation</h4>
                </div>
            </div>
            <!-- End .section-navbars  -->
            <div class="section section-tabs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-lg-8 col-xl-6 ml-auto mr-auto">
                            <p class="category">Tabs with Icons on Card</p>
                            <!-- Nav tabs -->
                            <div class="card">
                                <ul class="nav nav-tabs justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                                            <i class="now-ui-icons objects_umbrella-13"></i> Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                                            <i class="now-ui-icons shopping_cart-simple"></i> Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#messages" role="tab">
                                            <i class="now-ui-icons shopping_shop"></i> Messages
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                            <i class="now-ui-icons ui-2_settings-90"></i> Settings
                                        </a>
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="home" role="tabpanel">
                                            <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                        </div>
                                        <div class="tab-pane" id="profile" role="tabpanel">
                                            <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                                        </div>
                                        <div class="tab-pane" id="messages" role="tabpanel">
                                            <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                        </div>
                                        <div class="tab-pane" id="settings" role="tabpanel">
                                            <p>
                                                "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-lg-8 col-xl-6 ml-auto mr-auto">
                            <p class="category">Tabs with Background on Card</p>
                            <!-- Tabs with Background on Card -->
                            <div class="card">
                                <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="orange">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Messages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Settings</a>
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="home1" role="tabpanel">
                                            <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                        </div>
                                        <div class="tab-pane" id="profile1" role="tabpanel">
                                            <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                                        </div>
                                        <div class="tab-pane" id="messages1" role="tabpanel">
                                            <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                                        </div>
                                        <div class="tab-pane" id="settings1" role="tabpanel">
                                            <p>
                                                "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tabs on plain Card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section Tabs -->
            <div class="section section-pagination">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Progress Bars</h4>
                            <div class="progress-container">
                                <span class="progress-badge">Default</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                        <span class="progress-value">25%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-container progress-primary">
                                <span class="progress-badge">Primary</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="progress-value">60%</span>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <h4>Navigation Pills</h4>
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#active" role="tablist">
                                        <i class="fa fa-diamond"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#link" role="tablist">
                                        <i class="fa fa-thermometer-full"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#link" role="tablist">
                                        <i class="fa fa-suitcase"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" data-toggle="tab" href="#disabled" role="tablist">
                                        <i class="fa fa-exclamation"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4>Pagination</h4>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-primary">
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#link">5</a>
                                    </li>
                                </ul>
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#link" aria-label="Previous">
                                            <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#link" aria-label="Next">
                                            <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <br>
                            <h4>Labels</h4>
                            <span class="badge badge-default">Default</span>
                            <span class="badge badge-primary">Primary</span>
                            <span class="badge badge-success">Success</span>
                            <span class="badge badge-info">Info</span>
                            <span class="badge badge-warning">Warning</span>
                            <span class="badge badge-danger">Danger</span>
                        </div>
                    </div>
                    <div class="space"></div>
                    <h4>Notifications</h4>
                </div>
            </div>
            <div class="section section-notifications" id="notifications">
                <div class="alert alert-success" role="alert">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="now-ui-icons ui-2_like"></i>
                        </div>
                        <strong>Well done!</strong> You successfully read this important alert message.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="alert alert-info" role="alert">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="now-ui-icons travel_info"></i>
                        </div>
                        <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="alert alert-warning" role="alert">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                        </div>
                        <strong>Warning!</strong> Better check yourself, you're not looking too good.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="alert alert-danger" role="alert">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="now-ui-icons objects_support-17"></i>
                        </div>
                        <strong>Oh snap!</strong> Change a few things up and try submitting again.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <!--  end notifications -->
            <!-- Typography -->
            <div class="section">
                <div class="container">
                    <h3 class="title">Typography</h3>
                    <div id="typography">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="typography-line">
                                    <h1>
                                        <span>Header 1</span>The Life of Now UI Kit </h1>
                                </div>
                                <div class="typography-line">
                                    <h2>
                                        <span>Header 2</span>The Life of Now UI Kit</h2>
                                </div>
                                <div class="typography-line">
                                    <h3>
                                        <span>Header 3</span>The Life of Now UI Kit</h3>
                                </div>
                                <div class="typography-line">
                                    <h4>
                                        <span>Header 4</span>The Life of Now UI Kit</h4>
                                </div>
                                <div class="typography-line">
                                    <h5>
                                        <span>Header 5</span>The Life of Now UI Kit</h5>
                                </div>
                                <div class="typography-line">
                                    <h6>
                                        <span>Header 6</span>The Life of Now UI Kit</h6>
                                </div>
                                <div class="typography-line">
                                    <p>
                                        <span>Paragraph</span>
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                                    </p>
                                </div>
                                <div class="typography-line">
                                    <span>Quote</span>
                                    <blockquote>
                                        <p class="blockquote blockquote-primary">
                                            "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                                            <br>
                                            <br>
                                            <small>
                                                - Noaa
                                            </small>
                                        </p>
                                    </blockquote>
                                </div>
                                <div class="typography-line">
                                    <span>Muted Text</span>
                                    <p class="text-muted">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                    </p>
                                </div>
                                <div class="typography-line">
                                    <span>Primary Text</span>
                                    <p class="text-primary">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                                </div>
                                <div class="typography-line">
                                    <span>Info Text</span>
                                    <p class="text-info">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                </div>
                                <div class="typography-line">
                                    <span>Success Text</span>
                                    <p class="text-success">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                </div>
                                <div class="typography-line">
                                    <span>Warning Text</span>
                                    <p class="text-warning">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                                    </p>
                                </div>
                                <div class="typography-line">
                                    <span>Danger Text</span>
                                    <p class="text-danger">
                                        I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                                </div>
                                <div class="typography-line">
                                    <h2>
                                        <span>Small Tag</span>
                                        Header with small subtitle
                                        <br>
                                        <small>Use "small" tag for the headers</small>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-50"></div>
                    <div id="images">
                        <h4>Images</h4>
                        <div class="row">
                            <div class="col-sm-2">
                                <p class="category">Image</p>
                                <img src="{{asset('img/avatar.jpg')}}" alt="Rounded Image" class="rounded">
                            </div>
                            <div class="col-sm-2">
                                <p class="category">Circle Image</p>
                                <img src="{{asset('img/avatar.jpg')}}" alt="Circle Image" class="rounded-circle">
                            </div>
                            <div class="col-sm-2">
                                <p class="category">Raised</p>
                                <img src="{{asset('img/avatar.jpg')}}" alt="Raised Image" class="rounded img-raised">
                            </div>
                            <div class="col-sm-2">
                                <p class="category">Circle Raised</p>
                                <img src="{{asset('img/avatar.jpg')}}" alt="Thumbnail Image" class="rounded-circle img-raised">
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>    


            <div class="section">
                <div class="container text-center">
                    <div class="row justify-content-md-center">
                        <div class="col-md-12 col-lg-8">
                            <h2 class="title">Completed with examples</h2>
                            <h5 class="description">The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go. More importantly, looking at them will give you a picture of what you can built with this powerful Bootstrap 4 ui kit.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-signup" style="background-image: url('{{asset('img/bg11.jpg')}}'); background-size: cover; background-position: top center; min-height: 700px;">
                <div class="container">
                    <div class="row">
                        <div class="card card-signup" data-background-color="orange">
                            <form class="form" method="" action="">
                                <div class="header text-center">
                                    <h4 class="title title-up">Sign Up</h4>
                                    <div class="social-line">
                                        <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="First Name...">
                                    </div>
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </span>
                                        <input type="text" placeholder="Last Name..." class="form-control" />
                                    </div>
                                    <div class="input-group form-group-no-border">
                                        <span class="input-group-addon">
                                            <i class="now-ui-icons ui-1_email-85"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Email...">
                                    </div>
                                    <!-- If you want to add a checkbox to this form, uncomment this code -->
                                    <!-- <div class="checkbox">
	  								<input id="checkboxSignup" type="checkbox">
	  									<label for="checkboxSignup">
	  									Unchecked
	  									</label>
	  						  		</div> -->
                                </div>
                                <div class="footer text-center">
                                    <a href="#pablo" class="btn btn-neutral btn-round btn-lg">Get Started</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col text-center">
                        <a href="examples/login-page.html" class="btn btn-simple btn-round btn-white btn-lg" target="_blank">View Login Page</a>
                    </div>
                </div>
            </div>
            <div class="section section-examples" data-background-color="black">
                <div class="space-50"></div>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <a href="examples/landing-page.html" target="_blank">
                                <img src="{{asset('img/landing.jpg')}}" alt="Image" class="img-raised">
                            </a>
                            <a href="examples/landing-page.html" class="btn btn-simple btn-primary btn-round">View Landing Page</a>
                        </div>
                        <div class="col">
                            <a href="examples/profile-page.html" target="_blank">
                                <img src="{{asset('img/profile.jpg')}}" alt="Image" class="img-raised">
                            </a>
                            <a href="examples/profile-page.html" class="btn btn-simple btn-primary btn-round">View Profile Page</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-download" id="#download-section" data-background-color="black">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="text-center col-md-12 col-lg-8">
                            <h3 class="title">Do you love this Bootstrap 4 UI Kit?</h3>
                            <h5 class="description">Cause if you do, it can be yours for FREE. Hit the button below to navigate to Creative Tim or Invision where you can find the kit in HTML or Sketch/PSD format. Start a new project or give an old Bootstrap project a new look!</h5>
                        </div>
                        <div class="text-center col-md-12 col-lg-8">
                            <a href="https://www.creative-tim.com/product/now-ui-kit" class="btn btn-primary btn-lg btn-round" role="button">
                                Download HTML
                            </a>
                            <a href="https://www.invisionapp.com/now" target="_blank" class="btn btn-primary btn-lg btn-simple btn-round" role="button">
                                Download PSD/Sketch
                            </a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="row text-center mt-5">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h2>Want more?</h2>
                            <h5 class="description">We've just launched
                                <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" target="_blank">Now UI Kit PRO</a>. It has a huge number of components, sections and example pages. Start Your Development With A Badass Bootstrap 4 UI Kit.</h4>
                        </div>
                        <div class="col-md-12">
                            <a href="http://demos.creative-tim.com/now-ui-kit-pro/presentation.html" class="btn btn-neutral btn-round btn-lg" target="_blank">
                                <i class="now-ui-icons arrows-1_share-66"></i> Upgrade to PRO
                            </a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row justify-content-md-center sharing-area text-center">
                        <div class="text-center col-md-12 col-lg-8">
                            <h3>Thank you for supporting us!</h3>
                        </div>
                        <div class="text-center col-md-12 col-lg-8">
                            <a target="_blank" href="https://www.twitter.com/creativetim" class="btn btn-neutral btn-icon btn-twitter btn-round btn-lg" rel="tooltip" title="Follow us">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon btn-facebook btn-round btn-lg" rel="tooltip" title="Like us">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/company-beta/9430489/" class="btn btn-neutral btn-icon btn-linkedin btn-lg btn-round" rel="tooltip" title="Follow us">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a target="_blank" href="https://github.com/creativetimofficial/now-ui-kit" class="btn btn-neutral btn-icon btn-github btn-round btn-lg" rel="tooltip" title="Star on Github">
                                <i class="fa fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sart Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                        <h4 class="title title-up">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default">Nice Button</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Modal -->
        <!-- Mini Modal -->
        <div class="modal fade modal-mini modal-primary" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <div class="modal-profile">
                            <i class="now-ui-icons users_circle-08"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>Always have an access to your profile</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link btn-neutral">Back</button>
                        <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Modal -->
        <footer class="footer" data-background-color="black">
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
<script type="text/javascript">


    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
<script type="text/javascript">
    window.alert = function(){};
    var defaultCSS = document.getElementById('bootstrap-css');
    function changeCSS(css){
        if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
        else $('head > link').filter(':first').replaceWith(defaultCSS);
    }

</script>
<script type="text/javascript">
      function searchToggle(obj, evt){
          var container = $(obj).closest('.search-wrapper');

          if(!container.hasClass('active')){
                container.addClass('active');
                evt.preventDefault();
          }
          else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
                container.removeClass('active');
                // clear input
                container.find('.search-input').val('');
                // clear and hide result container when we press close
                container.find('.result-container').fadeOut(100, function(){$(this).empty();});
          }
      }

      function submitFn(obj, evt){
          value = $(obj).find('.search-input').val().trim();

          _html = "Yup yup! Your search text sounds like this: ";
          if(!value.length){
              _html = "Yup yup! Add some text friend :D";
          }
          else{
              _html += "<b>" + value + "</b>";
          }

          $(obj).find('.result-container').html('<span>' + _html + '</span>');
          $(obj).find('.result-container').fadeIn(100);

          evt.preventDefault();
      }
</script>


</html>
