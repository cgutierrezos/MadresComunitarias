<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <!-- Styles -->
        <style>

            


            

            html, body {
                    background-color: #fff;
                    color: #636b6f;
                    font-family: 'Raleway', sans-serif;
                    font-weight: bold;
                    
                    margin: 0;
                    font-size: 14px;
                }



                .full-height {
                    height: 90vh;

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

                .container-fluid {
                    text-align: center;
                }

                .title {
                    font-size: 84px;
                }

                .links > a {
                    color: white;
                    padding: 0 25px;
                    font-size: 13px;
                    font-weight: bold;
                    letter-spacing: .1rem;
                    text-decoration: none;
                    text-transform: uppercase;


                }

                .m-b-md {
                    margin-bottom: 30px;
                }

                img{}

                .imgcarouselprim-init{
                    width: 80vw;
                    height: 30vh; 
                }

                .imgcarouselsec-init{
                    width: 60vw;
                    height: 50vh; 
                }

                .imgcarouselprim-login{
                    width: 50vw;
                    height: 20vh; 
                }

                .imgcarouselsec-login{
                    width: 40vw;
                    height: 50vh; 
                }

                nav.navbar {
                background-color: #4682B4;
                }

                .nav  {
                    
                    margin-left: 5%;
                    margin-right: 2%;
                }

                
                div.title {
                    color:white; 
                    width: 100%; 
                    height: 100%;
                }

                a.link-title {
                    color: white;
                    text-decoration: none;
                }

            


            @media screen and (max-width: 1000px) {

                div.container-login {
                    display: none;
                }
            }


            

        </style>
    </head>
    <body style="background-color: #FF8C00">

        

        @include('layouts.nav')

        @yield('body')

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

        @yield('scripts')

    </body>
</html>
