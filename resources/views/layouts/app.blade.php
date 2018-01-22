
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
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

<body class="login-page sidebar-collapse">
  <div class="page-header" filter-color="orange">
      <div class="page-header-image" style="background-image:url({{asset('img/login.jpg')}})"></div>
      <div class="container">
        <div class="col-md-6 content-center">
          <div class="card card-login card-plain">
            <form class="form" method="POST" action="">
              <div class="header header-primary text-center">
                <div class="logo-container">
                  <img src="{{asset('img/now-logo.png')}}" alt="">
                </div>
                @yield('content')
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
