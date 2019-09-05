
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <!-- custom style files-->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
          <!-- custom style files end-->

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 55px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 700;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                
            }
            .td{
                color: blue !important;
                text-decoration: underline !important;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /*custom classes*/
            .bg-dark{
                background-color:#fff !important;
            }
            .navbar-dark .navbar-nav .nav-link
            {
                color:#636b6f !important;
                
            }

            /*custom classes end*/

        </style>
    </head>
            <div class="container-fluid">
                <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                  
                  <!-- Links -->
                  <ul class="navbar-nav ml-auto">
                    @if( auth()->check() )

                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{url('/')}}">Hi {{ auth()->user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{url('/logout')}}">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{url('/login-form')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold" href="{{url('/register-from')}}">Register</a>
                        </li>
                    @endif
                  </ul>
                </nav>
            </div>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Dashboard
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">You are logged in...!!!</a>
                </div>
                <div class="links">
                    <a class="td" href="{{route('reset_password')}}">Change Password</a>
                </div>
            </div>
        </div>
    </body>
</html>