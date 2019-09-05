
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
           
    <body>
        <div class=" position-ref full-height">
            <div class="col-md-6 offset-md-3">
                <h3>Password Reset</h3> 
                <p>
                Hello<br>
                You are receiving this email because we have received a password reset request for your account.
                <br>If you did not request a password reset, no further action is required.</p>
                <a target="_blank" href="{{url('/reset-password',$token)}}" class="mui-btn mui-btn-primary mui-btn-lg" role="button"><b>Reset Password<b></a>
                <br>
                <p>Regards,<br>
                   Project Team</p>
            </div>
        </div>
    </body>
</html>