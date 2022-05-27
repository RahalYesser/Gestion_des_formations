<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>Gestion de formation</title>
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/brand/favicon.ico') }}" type="image/x-icon"><!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('assets/libs/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/quick-website.css') }}" id="stylesheet">
</head>

<body>
   
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">
                
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                    
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        
                        <div class="dropdown-menu dropdown-menu-single">
                            <a href="" class="dropdown-item">Homepage</a>
                            <a href="" class="dropdown-item">About us</a>
                            <a href="" class="dropdown-item">Contact</a>
                            
                            
                        </div>
                    </li>
                   
                </ul>
                <!-- Button -->
                <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="{{ route('loginadmin') }}">
                    Admin Login
                </a>
                
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <section class="slice py-7">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-8 col-md-3 col-lg-4 order-md-2 text-center">
                    <!-- Image -->
                    <figure class="w-100">
                        <img alt="Image placeholder" src="assets/img/svg/illustrations/illustration-3.svg" class="img-fluid mw-md-100">
                    </figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                    <!-- Heading -->
                    <h1 class="display-4 text-center text-md-left mb-3">
                        It's time to Learn <strong class="text-primary">Something New</strong>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-center text-md-left text-muted">
                        Get that "ready for anything" feeling with Professional Certificates, and degrees from the best trainers
                    </p>
                    <!-- Buttons -->
                    <div class="text-center text-md-left mt-5">
                        <a href="{{route('register')}}" class="btn btn-primary btn-icon" target="_blank">
                            <span class="btn-inner--text">Sign Up</span>
                            <span class="btn-inner--icon"><i data-feather="chevron-right"></i></span>
                        </a>
                        <a href="{{ route('loginetudiant') }}" class="btn btn-neutral btn-icon d-none d-lg-inline-block" target="_blank">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="position-relative" id="footer-main">
       
    </footer>
    <!-- Core JS  -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/svg-injector/dist/svg-injector.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/dist/feather.min.js') }}"></script>
    <!-- Quick JS -->
    <script src="{{ asset('assets/js/quick-website.js') }}"></script>
    <!-- Feather Icons -->
    <script>
        feather.replace({
            'width': '1em',
            'height': '1em'
        })
    </script>
</body>

</html>