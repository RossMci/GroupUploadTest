
        <main class="main">
            <div class="intro-slider-container">
                <div class="intro-slider owl-carousel owl-simple owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{"nav":false, "dots": false, "loop": false}'>
                    <div class="intro-slide" style="background-image: url(<?php echo $this->config->item('image_url')?>backgrounds/index-bg.jpg);">
                        <div class="container intro-content text-center">
                            <h3 class="intro-subtitle">Established since 1980</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">Sullimar Academy of Music</h1><!-- End .intro-title -->

                            <a href="#scroll-to-content" class="btn btn-outline-white scroll-to">
                                <span>Learn music with us</span>
                                <i class="icon-long-arrow-down"></i>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader text-white"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->
            
            <div class="pt-7"></div><!-- End .pt-6 -->
            <div class="row" id="scroll-to-content">
                    <div class="col-lg-3 col-sm-6">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                                <p>Fast Delivery within 24 hours</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-3 col-sm-6 -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-rotate-left"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                                <p>Free 100% money back guarantee</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-3 col-sm-6 -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon text-dark">
                                <i class="la la-unlock"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Secure Payment</h3><!-- End .icon-box-title -->
                                <p>100% secure payment</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-3 col-sm-6 -->

                    <div class="col-lg-3 col-sm-6">
                        <div class="icon-box text-center">
                            <span class="icon-box-icon text-dark">
                                <i class="la la-university"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Certified Exams</h3><!-- End .icon-box-title -->
                                <p>SAOM Certified Exams</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-3 col-sm-6 -->
                </div><!-- End .row -->
                
                
            <div class="bg-lighter pt-6 pb-9">
                <div class="container">
                    <div class="heading text-center">
                        <h2 class="title">Featured Full-Time Courses</h2><!-- End .title -->
                        <p class="title-desc">Build music interests with <br>Sullimar Music of Academy</p><!-- End .title-desc -->
                    </div><!-- End .heading -->

                    <div class="owl-carousel owl-simple" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                       <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                      <img src="<?php echo $this->config->item('image_url')?>courses/piano.jpg" alt="Product image" class="product-image">
                                    <img src="<?php echo $this->config->item('image_url')?>courses/piano-hover.jpg" alt="Product image" class="product-image-hover">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>Apply Now</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body pl-3">
                                <div class="product-cat">
                                    <a href="#">Instruments</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="#"> Piano</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    € 58.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                    <img src="<?php echo $this->config->item('image_url')?>courses/piano.jpg" alt="Product image" class="product-image">
                                    <img src="<?php echo $this->config->item('image_url')?>courses/piano-hover.jpg" alt="Product image" class="product-image-hover">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>Apply Now</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body pl-3">
                                <div class="product-cat">
                                    <a href="#"> Instruments</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="#"> Violin</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    € 58.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                      <img src="<?php echo $this->config->item('image_url')?>courses/piano.jpg" alt="Product image" class="product-image">
                                    <img src="<?php echo $this->config->item('image_url')?>courses/piano-hover.jpg" alt="Product image" class="product-image-hover">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>Apply Now</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body pl-3">
                                <div class="product-cat">
                                    <a href="#"> Instruments</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="#"> Cello</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                   € 58.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product  -->

                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                      <img src="<?php echo $this->config->item('image_url')?>courses/piano.jpg" alt="Product image" class="product-image">
                                    <img src="<?php echo $this->config->item('image_url')?>courses/piano-hover.jpg" alt="Product image" class="product-image-hover">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>Apply Now</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body pl-3">
                                <div class="product-cat">
                                    <a href="#"> Instruments</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="#"> Guitar</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                   € 58.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product product-4">
                            <figure class="product-media">
                                <a href="#">
                                      <img src="<?php echo $this->config->item('image_url')?>courses/piano.jpg" alt="Product image" class="product-image">
                                    <img src="<?php echo $this->config->item('image_url')?>courses/piano-hover.jpg" alt="Product image" class="product-image-hover">
                                </a>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"><span>Apply Now</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body pl-3">
                                <div class="product-cat">
                                    <a href="#"> Singing</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="#"> Singing</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                  €  58.00
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                </div><!-- End .container -->
                <div class="more-container text-center pt-3 pb-2 mb-0">
                        <a href="#" class="btn btn-outline-primary-2 btn-more"><span>View more courses</span><i class="icon-long-arrow-right"></i></a>
               </div><!-- End .more-container -->
              
            </div><!-- End .bg-lighter pt-5 pb-5 -->
             
          
            <hr class="mb-5"/>
            
            <!--Video Introduction Section-->
            <div class="video-banner video-banner-bg bg-image text-center" style="background-image: url(<?php echo $this->config->item('image_url')?>index/video-bg.jpg)">
                <div class="container">
                    <h3 class="video-banner-title h1 text-white"><span>Music Clips</span><strong>SAOM</strong><br> Classical Concert 2019</h3><!-- End .video-banner-title -->
                    <a href="https://www.youtube.com/watch?v=Wu0YDJENKiE" class="btn-video btn-iframe"><i class="icon-play"></i></a>
                </div><!-- End .container -->
            </div><!-- End .video-banner bg-image -->

            <div class="mb-6"></div><!-- End .mb-6 -->
            <hr />
            
            <div class="blog-posts">
                <div class="container">
                    <div class="heading text-center">
                        <h2 class="title">Upcoming Events</h2><!-- End .title -->
                        <p class="title-desc">Buy your tickets before it's too late</p><!-- End .title-desc -->
                    </div><!-- End .heading -->
                    
                    <div class="owl-carousel owl-simple mb-4" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                },
                                "1200": {
                                    "items":3,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                        <article class="entry entry-display">
                            <figure class="entry-media">
                                <a href="#">
                                    <img style="height:250px;" src="<?php echo $this->config->item('image_url')?>events/event_1.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body pb-2 text-center">
                                <div class="entry-meta">
                                    Jan 22, 2021
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="#">Event 1</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="#" class="read-more">View Details</a>
                                    <a href="#" class="pl-3 read-more">Buy Tickets</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    
                        <article class="entry entry-display">
                            <figure class="entry-media">
                                <a href="#">
                                    <img style="height:250px;" src="<?php echo $this->config->item('image_url')?>events/event_2.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body pb-2 text-center">
                                <div class="entry-meta">
                                    Jan 24, 2021
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="#">Event 2</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                      <a href="#" class="read-more">View Details</a>
                                    <a href="#" class="pl-3 read-more">Buy Tickets</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry entry-display">
                            <figure class="entry-media">
                                <a href="#">
                                    <img style="height:250px;" src="<?php echo $this->config->item('image_url')?>events/event_3.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body pb-2 text-center">
                                <div class="entry-meta">
                                    Feb 19, 2021
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="#">Event 3</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                     <a href="#" class="read-more">View Details</a>
                                    <a href="#" class="pl-3 read-more">Buy Tickets</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->            
                    </div><!-- End .owl-carousel -->

                    <div class="more-container text-center">
                        <a href="blog.html" class="btn btn-outline-primary-2 btn-more"><span>View more events</span><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .more-container -->

                    <hr class="mb-3">
                </div><!-- End .container -->
            </div><!-- End .events -->
            


            <div class="cta-newsletter text-center pt-4 pb-7">
                <div class="container">
                    <span class="cta-icon"><i class="icon-envelope"></i></span>
                    <h3 class="title">Subscribe for Our Newsletter</h3><!-- End .title -->
                    <p class="title-desc">and receive <span class="text-primary">10% discount coupon</span> for first purchase</p><!-- End .title-desc -->
                    
                    <form action="#">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" aria-describedby="newsletter-btn" required>
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="submit" id="newsletter-btn"><span>SUBSCRIBE</span><i class="icon-long-arrow-right"></i></button>
                            </div><!-- .End .input-group-append -->
                        </div><!-- .End .input-group -->
                    </form>

                    <p class="newsletter-desc">Your personal details are safe with us.</p><!-- End .newsletter-desc -->
                </div><!-- End .container -->
            </div><!-- End .cta-newsletter -->

        </main><!-- End .main -->