<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
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

        </div>

    </nav>




    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h1><strong>Checkout</strong></h1>
                <p class="text-muted">You currently have 3 item(s) in your basket.</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
                <a href=home.php class="text-muted">Home</a>
                <a href=checkout2.php class="text-muted">/ Checkout</a>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">


                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="checkout.php">ADDRESS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="checkout1.php">DELIVERY METHOD</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="checkout2.php">PAYMENT METHOD</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="checkout3.php" tabindex="-1" aria-disabled="true">ORDER REVIEW</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <br>
                <p>
                    <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Credit Card
                    </a>

                </p>
                <div class="collapse" id="collapseExample">
                    <label for="exampleFormControlInput2" class="form-label text-muted" placeholder="Name on Card">Name on Card</label>
                    <input type="name" class="form-control" id="exampleFormControlInput1">

                    <label for="exampleFormControlInput2" class="form-label text-muted" placeholder="Card Number">Card Number</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1">

                    <label for="exampleFormControlInput2" class="form-label text-muted" placeholder="date">Date</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1">

                    <label for="exampleFormControlInput2" class="form-label text-muted" placeholder="123">CVC/CVV</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1">

                    <label for="exampleFormControlInput2" class="form-label text-muted" placeholder="123">ZIP</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1">
                </div>


                <p>
                    <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Paypal
                    </a>
                </p>
                <div class="collapse" id="collapseExample1">

                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Continue with Paypal
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </label>
                </div>


                <p>
                    <a class="btn btn-dark" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Pay on delivery
                    </a>
                </p>
                <div class="collapse" id="collapseExample2">

                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Pay on delivery
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </label>
                </div>

                <br>
                <br>
                <a class="btn btn-primary" href="checkout1.php" role="button">Back To delivery method</a>

                <a class="btn btn-primary" href="checkout3.php" role="button">Continue to order review</a>

            </div>
            <div class="col-md-4">
                <div class="h-50 w-100 border border-text-muted block">
                    <br>
                    <br>
                    <h5 class="ms-2"><strong>ORDER SUMMARY</strong></h5>
                    <p class="ms-2 text-muted">Shipping and additional costs are calculated based on values you have entered.</p>
                    <ul class="list-unstyled">
                        <li class="text-muted d-flex justify-content-between py-3 border-bottom"><span>Order Subtotal </span><strong class="fw-normal">$390.00</strong></li>
                        <li class="text-muted d-flex justify-content-between py-3 border-bottom"><span>Shipping and handling</span><strong class="fw-normal">$10.00</strong></li>
                        <li class="text-muted d-flex justify-content-between py-3 border-bottom"><span>Tax</span><strong class="fw-normal">$0.00</strong></li>
                        <li class="text-muted d-flex justify-content-between py-3 border-bottom"><span>Total</span><strong class="text-primary h5 mb-0">$400.00</strong></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-1"></div>
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