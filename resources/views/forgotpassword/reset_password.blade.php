
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
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
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/')}}" style="font-weight: 700"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/login-form')}}" style="font-weight: 700"><b>Login</b></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/register-from')}}" style="font-weight: 700"><b>Register</b></a>
                    </li>
                  </ul>
                </nav>
            </div>
            
    <body>
        @if (session('message'))
            <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('message') }}
            </div>
        @endif
        <div class=" position-ref full-height">
                <div class="col-md-6 offset-md-3">
                    <h2>Reset Password</h2>
                    <form method="POST" action="{{route('resetPassword')}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$data->email}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" >
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Confirm Password:</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" >
                        </div>
                 
                        <div class="form-group">
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">Reset Password</button>
                        </div>
                    </form>
                </div>
        </div>
    </body>
</html>