<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Page</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="home.php" id="tert"><img src="./images/cloth.jpg"></a>
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
                        <a class="nav-link" href="shop.php">Shop</a>
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

        </div>
    </nav>


    <!-- text -->

    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h1><strong>Shop</strong></h1>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
                <a href=home.php class="text-muted">Home</a>
                <a href=shop.php class="text-muted">/ Shop</a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h6>PRODUCT CATEGORIES</h6>
                <h5>Men's Collection</h5>
                <ul class="text-muted">

                    <li>T-shirts</li>
                    <li>Hoodies</li>
                    <li>Shorts</li>
                </ul>
                <h5>Women's Collection</h5>
                <ul class="text-muted">
                    <li>T-Shirt's</li>
                    <li>Dresses</li>
                    <li>Pants</li>
                    <li>Shorts</li>
                </ul>
                <h5>Accesories</h5>
                <ul class="text-muted">
                    <li>Wallets</li>
                    <li>Backpack's</li>
                    <li>Belts</li>
                    <li>Necklaces</li>
                </ul>
            </div>
            <div class="col-md-3">
                <img src="./images/hoodie1.jpg" class="w-100">
                <h6 class="text-muted">Men's wear</h6>
                <h5>Elegant Lake</h5>
                <h6 class="text-muted">$40</h6>
            </div>
            <div class="col-md-3">
                <img src="./images/hoodie2.jpg" class="w-100">
                <h6 class="text-muted">Men's wear</h6>
                <h5>Elegant Black</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-3">
                <img src="./images/hoodie3.jpg" class="w-100">
                <h6 class="text-muted">Men's wear</h6>
                <h5>Elegant Blue</h5>
                <h6 class="text-muted">$40</h6>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-2">

                <hr class="mb-4">

                <form>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Calvin Klein</label><br>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> Levi Strauss</label><br>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> Hugo Boss</label><br>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> Tomi Hilfiger</label><br>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> Tom Ford </label><br><br>

                </form>
            </div>
            <div class="col-md-3">
                <img src="./images/hoodie4.jpg" class="w-100">
                <h6 class="text-muted">Men's wear</h6>
                <h5>Elegant Gray</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-3">
                <img src="./images/hoodie6.jpg" class="w-100">
                <h6 class="text-muted">Women's wear</h6>
                <h5>Elegant Gray</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-3">
                <img src="./images/hoodie7.jpg" class="w-100">
                <h6 class="text-muted">Women's wear</h6>
                <h5>Elegant Gray</h5>
                <h6 class="text-muted">$40</h6>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>






    <div class="container">
        <div class="row">
            <div class="col-md-2">

                <hr class="mb-4">

                <form>
                    <input type="radio" id="html" name="fav_language" value="HTML">
                    <label for="html">Small</label><br>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="css">Large</label><br>
                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                    <label for="javascript">Large</label><br>
                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                    <label for="javascript">X-Large</label>
                </form>
            </div>
            <div class="col-md-3">
                <img src="./images/hoodie8.jpg" class="w-100">
                <h6 class="text-muted">Women's wear</h6>
                <h5>Elegant Blue</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-3">
                <img src="./images/hoodie9.jpg" class="w-100">
                <h6 class="text-muted">Women's wear</h6>
                <h5>Elegant Lake</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-3">
                <img src="./images/hoodie10.jpg" class="w-100">
                <h6 class="text-muted">Women's wear</h6>
                <h5>Elegant Gray</h5>
                <h6 class="text-muted">$40</h6>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>









    <div class="container">
        <div class="row">
            <div class="col-md-2">


            </div>
            <div class="col-md-3">
                <img src="./images/hoodie7.jpg" class="w-100">
                <h6 class="text-muted">Women's wear</h6>
                <h5>Elegant Black</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-3">
                <img src="./images/hoodie8.jpg" class="w-100">
                <h6 class="text-muted">Women's wear</h6>
                <h5>Elegant Blue</h5>
                <h6 class="text-muted">$40</h6>
            </div>

            <div class="col-md-3">
                <img src="./images/hoodie9.jpg" class="w-100">
                <h6 class="text-muted">Women's wear</h6>
                <h5>Elegant Lake</h5>
                <h6 class="text-muted">$40</h6>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>








    <div class="container ">
        <div class="row mt-5">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4"></div>

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