<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/css.css?load_time='.date('Y-m-d H:i:s')) }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>D&R Perfume</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="menu-icon" onclick="toggleMenu()">☰ Menu</div>
                <div class="dropdown-menu" id="dropdown-menu">
                    <h5>Menu</h5>
                        <a href="../pages/main/man.blade.php">Man</a>
                        <a href="../pages/main/woman.blade.php">Woman</a>
                        <a href="../pages/main/about.blade.php">About</a>
                        <a href="../pages/main/login.blade.php">Account</a>
                        <a href="#">Store Location</a>
                        <a href="#">Contact Us</a>
                </div>
            <div class="logo">
                <a href="../pages/main/home.blade.php">
                    <img src="{{ asset('/images/logo/logo-3.png') }}" alt="">
                </a>
            </div> 
                <div class="nav-menu">
                    <ul>
                        <li><a href="#">Store Location</a></li>
                        <li><a href="../pages/main/login.blade.php">Login</a></li>
                            <div class="icon_cart" onclick="openCart()">
                                <i class="fa-solid fa-cart-shopping" a href="../pages/main/cart.blade.php"></i>
                            </div>
                </ul>
            </div>          
        </nav>
    </header>
    @yield('container')


    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h5>Customer Service</h5>
                    <p>Monday to Saturday 9am - 10pm EST</p>
                    <p>+62 8123-4567-8911</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>Newsletter</h5>
                    <p>Receive our newsletter and discover our stories, collections, and surprises.</p>
                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Enter your email" required>
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form> 
                </div>
                <div class="col-lg-4 col-md-12">
                    <h5>Follow Us</h5>
                    <div class="d-flex gap-3">
                        <a href="#" class="icon-link"><i class="fa-instagram"></i></a>
                        <a href="#" class="icon-link"><i class="fa-youtube"></i></a>
                        <a href="#" class="icon-link"><i class="fa-envelope"></i></a>
                        <a href="#" class="icon-link"><i class="facebook-f"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="bootstrap/js/bootstrap.bundle.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    @if ($javascript_file)
        <script src="{{ asset('js/' . $javascript_file) }}"></script>
    @endif
</body>
</html>