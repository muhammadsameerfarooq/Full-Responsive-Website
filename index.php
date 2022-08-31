<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>My Own Responsive Bootstrap Design</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">

            <a class="navbar-brand" href="home.php"><img src="./images/cloth.jpg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Home
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="home.php">Classic home</a></li>
                            <li><a class="dropdown-item" href="#">Parallax section</a></li>
                            <li><a class="dropdown-item" href="#">Video bckground</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href=shop.php>Shop</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href=blog.php>Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href=contactus.php>Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php"><i class="bi bi-search"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer-login.php"><i class="bi bi-person-fill"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-cart"></i><span class="position-absolute start-100 badge rounded-pill bg-danger">
                                1
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="shopping-cart.php">View cart</a></li>
                            <li><a class="dropdown-item" href="checkout.php">Checkout</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>


            <!-- <i class="bi bi-cart"></i> -->

        </div>

    </nav>



    <!-- Slider -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-block w-100 image">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <h3>HUB</h3>
                                <ul>
                                    <li><strong>Bootstrap 4 E-commerce</strong> template
                                    <li><strong>24</strong> pages,<strong>6</strong> colour variants</li>
                                    <li><strong>SCSS</strong> sources</li>
                                    <li>frequent & <strong>free updates</strong></li>

                                    <a href=shop.php class="contactbutton" type="submit" name="btnContactUsSubmit">Shop Now</a>
                                </ul>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2"></div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/main1.jpg" class="d-block w-100 image">
            </div>
            <div class="carousel-item">
                <img src="./images/main2.jpg" class="d-block w-100 image">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- First Text -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5 pt-5">
                <h5 class="text-muted">TOP FOR THIS MONTH</h5>
                <h2>OUR FEATURED PICKS</h2>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <!-- 3 Pics Image -->
    <div class="container pt-5 mt-5">

        <div class="row">
            <div class="col-lg-4">

                <div class="image1">
                    <div class="pt-5">
                        <h5 class="pt-5 mt-5">Men's</h5>
                        <h6 class="text-muted">New Collection</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="image2">
                    <div class="pt-5">
                        <h5 class="pt-5 mt-5">Women's</h5>
                        <h6 class="text-muted">New Collection</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="image3">
                    <div class="pt-5">
                        <h5 class="pt-5 mt-5">Accessories</h5>
                        <h3 class="text-muted">Sale of 20%</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Second text -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5 pt-5">
                <h5 class="text-muted">AUTUMN CHOICE</h5>
                <h2>MEN COLLECTION</h2>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <!-- 5 Pics Image -->

    <div class="container mt-5 pt-5">
        <div class="row ">
            <div class="col-md-1">

            </div>
            <div class="col-md-2">
                <img src="./images/hoodie1.jpg" class="w-100">
                <h5>Elegant Lake</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-2">
                <img src="./images/hoodie2.jpg" class="w-100">
                <h5>Elegant Black</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-2">
                <img src="./images/hoodie3.jpg" class="w-100">
                <h5>Elegant Blue</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-2">
                <img src="./images/hoodie4.jpg" class="w-100">
                <h5>Elegant Gray</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-2">
                <img src="./images/hoodie5.jpg" class="w-100">
                <h5>Elegant Lake</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-1">

            </div>
        </div>
    </div>

    <!-- Single Image -->

    <img src="./images/boy.jpg" class="mt-5 pt-5 w-100 img-fluid">


    <!-- Third Text -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5 pt-5">
                <h5 class="text-muted">Ladies Time</h5>
                <h2>WOMEN COLLECTION</h2>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>


    <!-- Second 5 Pics Image -->
    <div class="container mt-5 pt-5">
        <div class="row ">
            <div class="col-md-1">

            </div>
            <div class="col-md-2">
                <img src="./images/hoodie6.jpg" class="w-100">
                <h5>Elegant Gray</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-2">
                <img src="./images/hoodie7.jpg" class="w-100">
                <h5>Elegant Black</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-2">
                <img src="./images/hoodie8.jpg" class="w-100">
                <h5>Elegant Blue</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-2">
                <img src="./images/hoodie9.jpg" class="w-100">
                <h5>Elegant Lake</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-2">
                <img src="./images/hoodie10.jpg" class="w-100">
                <h5>Elegant Gray</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-1">

            </div>
        </div>
    </div>


    <!-- Fourth Text -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 mt-5 pt-5">
                <h5 class="text-muted">MADE IT HARD WAY</h5>
                <h2>LATEST FROM THE BLOG</h2>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    <!-- Text and image -->
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-2">
                <img src="./images/boy1.jpg" class="image2">
            </div>

            <div class="col-md-3">
                <h3 class="hovers">Newest photo apps</h3>
                <h6 class="text-muted"><i class="bi bi-clock-fill"></i> May 10th 2016</h6>
                <br>
                <p class="text-muted">ellentesque habitant morbi tristique senectus<br>et netus et malesuada fames ac
                    turpis<br>egestas. Vestibulum tortor quam, feugiat<br>vitae, ultricies eget, tempor sit amet,
                    ante.<br>Aenean ultricies mi vitae est.</p>
            </div>

            <div class="col-md-2">
                <img src="./images/shoes.jpg" class="image2">
            </div>

            <div class="col-md-3">
                <h3 class="hovers">Best Books about Photography</h3>
                <h6 class="text-muted"><i class="bi bi-clock-fill"></i> May 10th 2016</h6>
                <br>
                <p class="text-muted">Vestibulum tortor quam, feugiat vitae, ultricies<br>eget, tempor sit amet, ante.
                    Mauris placerat<br>eleifend leo.</p>
            </div>
            <div class="col-md-1"></div>

        </div>
    </div>



    <!-- Logo -->

    <div class="container">
        <div class="mt-5 pt-5 row">
            <div class="col-sm-6 col-md-2 col-lg-2 col-xl-2">
                <img src="./images/vintage.jpg" class="w-100">
            </div>
            <div class="col-sm-6 col-md-2 col-lg-2 col-xl-2">
                <img src="./images/creatives.jpg" class="w-100">
            </div>
            <div class="col-sm-6 col-md-2 col-lg-2 col-xl-2">
                <img src="./images/creatives-design.jpg" class="w-100">
            </div>
            <div class="col-sm-6 col-md-2 col-lg-2 col-xl-2">
                <img src="./images/hipster.jpg" class="w-100">
            </div>
            <div class="col-sm-6 col-md-2 col-lg-2 col-xl-2">
                <img src="./images/retro.jpg" class="w-100">
            </div>
            <div class="col-sm-6 col-md-2 col-lg-2 col-xl-2">
                <img src="./images/retro-logo.jpg" class="w-100">
            </div>
        </div>
    </div>



    <!-- Footer -->


    <footer class="bg-dark text-white pt-5 pb-4 pt-5 mt-5">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left ">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <img src="./images/cloth.jpg">

                    <p class="text-muted"><br>Lorem ipsum dolor sit amet, consectetur
                        adipisicing.</p>
                    <i class="text-muted bi bi-twitter hovers"></i>

                    <i class="text-muted bi bi-facebook hovers"></i>

                    <i class="text-muted bi bi-instagram hovers"></i>

                    <i class="text-muted bi bi-pinterest hovers"></i>

                    <i class="text-muted bi bi-vimeo hovers"></i>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-light">Shop</h5>
                    <p>
                        <a href="#" class="text-muted" style="text-decoration: none;">For Women</a>
                    </p>
                    <p>
                        <a href="#" class="text-muted" style="text-decoration: none;">For Men</a>
                    </p>
                    <p>
                        <a href="#" class="text-muted" style="text-decoration: none;">Stores</a>
                    </p>
                    <p>
                        <a href="#" class="text-muted" style="text-decoration: none;">Our Blog</a>
                    </p>
                    <p>
                        <a href="#" class="text-muted" style="text-decoration: none;">Shop</a>
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase font-weight-bold text-light">COMPANY</h5>
                    <p>
                        <a href="#" class="text-muted" style="text-decoration: none;">Login</a>
                    </p>
                    <p>
                        <a href="#" class="text-muted" style="text-decoration: none;">Register</a>
                    </p>
                    <p>
                        <a href="#" class="text-muted" style="text-decoration: none;">WishList</a>
                    </p>
                    <p>
                        <a href="#" class="text-muted" style="text-decoration: none;">Our Products</a>
                    </p>
                    <p>
                        <a href="#" class="text-muted" style="text-decoration: none;">Checkouts</a>
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase font-weight-bold text-light">Daily Offers & DISCOUNTS</h6>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                    <input type="Email" placeholder="Your Email Address" class="w-100 text-muted">
                </div>
            </div>

            <hr class="mb-4">
            <div class="row align-items-center">
                <div class=".col-md-7 col-lg-8">
                    <p class="text-muted">© 2021 Bootstrapious All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>




    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>
