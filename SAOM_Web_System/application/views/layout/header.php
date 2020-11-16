<!DOCTYPE html>
<html lang="en">


<!-- molla/index-16.html  22 Nov 2019 10:00:09 GMT -->
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sulimar Academy of Music</title>
    <meta name="description" content="Sullimar Academy of Music">
    <!-- Favicon -->
<!--    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->config->item('image_url')?>icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $this->config->item('image_url')?>icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $this->config->item('image_url')?>icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $this->config->item('image_url')?>icons/site.html">
    <link rel="mask-icon" href="<?php echo $this->config->item('image_url')?>icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="<?php echo $this->config->item('image_url')?>icons/favicon.ico">-->
    <meta name="apple-mobile-web-app-title" content="Sullimar Academy of Music">
    <meta name="application-name" content="Sullimar Academy of Music">
    <meta name="msapplication-TileColor" content="#cc9966">
<!--    <meta name="msapplication-config" content="<?php echo $this->config->item('image_url')?>icons/browserconfig.xml">-->
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php echo $this->config->item('vendor_url')?>line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?php echo $this->config->item('css_url')?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('css_url')?>plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('css_url')?>plugins/magnific-popup/magnific-popup.css">
    
    <!--Font Awesome-->
    <link  rel="stylesheet" href="<?php echo $this->config->item('vendor_url')?>fontawesome/css/all.css"> <!--load all styles -->
    
    
    <!-- Main CSS File -->
     <link rel="stylesheet" href="<?php echo $this->config->item('css_url')?>main.css">
    <link rel="stylesheet" href="<?php echo $this->config->item('css_url')?>style.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-6">
            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in.." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>
                    <div class="header-center">
                        <a href="<?php $this->config->item('base_url')?>" class="logo">
<!--                            <img src="<?php echo $this->config->item('image_url')?>demos/demo-6/logo.png" alt="Molla Logo" width="82" height="20">-->
                        Sullimar Academy of Music
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                          
                        <a href="" class="wishlist-link"  data-toggle="modal" data-target="#signin-modal">
                            <i class="icon-user"></i>
                            <span class="wishlist-txt">Login / Register</span>
                        </a>
                        
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">2</span>
                                <span class="cart-txt">€ 38.00</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="">Book 1</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x €12.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="" class="product-image">
                                                <img src="<?php echo $this->config->item('image_url')?>books/piano_exam_book_1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="">Book 2</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x €16.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="" class="product-image">
                                                <img src="<?php echo $this->config->item('image_url')?>books/piano_exam_book_2.jpg"  alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">€38.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="#" class="btn btn-outline-darker">View Cart</a>
                                    <a href="#" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="<?php $this->config->item('base_url')?>" class="">Home</a>
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">Exams</a>
                                        <ul>
                                            <li><a href="">Location 1</a></li>
                                            <li><a href="">Location 2</a></li>
                                        </ul>
                                </li>
                                <li>
                                    <a href="" class="">Courses</a>
                                        <ul>
                                            <li><a href="">Course 1</a></li>
                                            <li><a href="">Course 2</a></li>
                                        </ul>
                                </li>
                                <li>
                                    <a href="#" class="">Lessons</a>
                                        <ul>
                                            <li><a href="">Lesson 1</a></li>
                                            <li><a href="">Lesson 2</a></li>
                                        </ul>
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">Events</a>

                                        <ul>
                                            <li><a href="">Event 1</a></li>
                                            <li><a href="">Event 2</a></li>
                                        </ul>
                                </li>
                                <li>
                                    <a href="">Books</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->

                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                    </div><!-- End .header-left -->
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
        <script>
            $('#signin-modal').trigger('click');
        </script>