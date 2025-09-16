<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet"/> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Les pétales d'Or</span>
                <span class="site-heading-lower blue">La poésie naît d’un pétale.</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <!--<a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Start Bootstrap</a>-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/home">Accueil</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/about">À propos</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/products">Produits</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/store">Boutique</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/contact">Contactez-nous</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- content -->
        @yield('content')
        <!-- Footer-->
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Crédit &copy; Les pétales d'Or - 2025</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js')}}"></script>
        @yield('js')
    </body>
</html>