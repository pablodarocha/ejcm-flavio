<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="description" content="Responsive Bootstrap Landing Page Template">
        <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="author" content="Grayrids">

        <!--[if lt IE 9]>
        <script src="{{asset('lib/html5shiv/dist/html5shiv.js')}}"></script>
        <![endif]-->

        <title>@yield("titulo")</title>
        <link rel="shortcut icon" href="{{asset('img/ejcmicon.ico')}}">

        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.indigo-pink.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="fonts/font-awesome.min.css" type="text/css" media="screen">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
        <link href="css/material.min.css" rel="stylesheet">
        <link href="css/ripples.min.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">

        <link rel = "stylesheet" href = "{{asset('css/custom/template.css')}}"/>
        @yield('css')

    </head>

    <body>

        <div>
            @include('templates.sidebar_dash')
        </div>


        <div class="content-wrap">
            @yield('conteudo')
        </div>


        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap_dash.min.js"></script>
        <script src="js/ripples.min.js"></script>
        <script src="js/material.min.js"></script>
        <script src="js/wow.js"></script>
        <script src="js/jquery.mmenu.min.all.js"></script>
        <script src="js/count-to.js"></script>
        <script src="js/jquery.inview.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/smooth-on-scroll.js"></script>
        <script src="js/smooth-scroll.js"></script>

        <script src="{{asset("lib/mdl/material.js")}}"></script>

        <script src="{{asset("lib/jquery-2.1.4.min.js")}}"></script>

        @yield('js')


        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>

    </body>

</html>
