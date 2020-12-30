




<head>



    <title>Health Abj</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

</head>


<body class="is-preload">
    @yield('Scripts')


<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

    <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
                <header id="header">
                    <div class="logo">
                    
                    </div>
                    <div class="content">
                        <div class="inner">
                            <h1>Health Abj </h1>
                            <h6><p> </a></h6> 
                            <p>Website made by: <p>Pedro Martins | Gonçalo Soares | Francisco  </p>  </p>
                            
                        </div>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="Location">Location</a></li>
                            <li><a href="ContacUs">Contact</a></li>
                            <li><a href="Backoffice">Back </a></li>
                            <li><a href="Backoffice">Office</a></li>
                            <!--<li><a href="#elements">Elements</a></li>-->
                        </ul>
                    </nav>
                </header>

            <!-- Main -->
                <div id="main">

                    <!-- Intro -->
                        <article id="intro">


                           


                        </article>

                    <!-- Work -->
                        <article id="work">
                            
<h1>PEDRO PILA GIGANTE</h1>

                        </article>

                    <!-- About -->
                        <article id="about">
                            
                        </article>

                    <!-- Contact -->
                        <article id="contact">
                            
                        <h1>
                            
                        </h1>
                        </article>

                    <!-- Elements -->
                        <article id="elements">
                          

                        </article>

                </div>

            <!-- Footer -->
                <footer id="footer">
                    <h6><p class="copyright">&copy; <small>Template made by: <a href="https://html5up.net">HTML5 UP</smallf></a></p></h6>
                </footer>

        </div>

    <!-- BG -->
        <div id="bg"></div>

    <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

</body>
</html>

           