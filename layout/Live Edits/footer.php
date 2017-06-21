            <footer>
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3 col-md-3">
                                <div class="footer-col">
                                    <img class="footer-logo" src="<?php bloginfo("template_url"); ?>/images/logo.png" alt="Johnny's Cafe">
                                    <ul class="social-list">
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                    </ul>
                                    <h5 class="footer-title">3 Great Restaurants</h5>
                                    <p><a href="#">Johnny's Cafe</a></p>
                                    <p><a href="#">Shucker's Bar & Grille</a></p>
                                    <p><a href="#">Tipsy Taco & Tequila Bar</a></p>
                                </div>
                            </div>
                            
                            <div class="col-sm-3 col-md-3">
                                <div class="footer-col addr">
                                    <h5 class="footer-title">Book Your Party With Us</h5>
                                    <p>Wedding/Baby Showers</p>
                                    <p>Rehearsal Dinners</p>
                                    <p>Small Weddings</p>
                                    <p>Birthday Parties</p>
                                    <p>Retirement Parties</p>
                                    <p>Bar Mitzvahs/Bat Mitzvahs</p>
                                    <p>Corporate Outings</p>
                                    <p>Banquets</p>
                                    <p>Graduation Parties</p>
                                    <p>And Many Other Special Events</p>
                                </div>
                            </div>
                            
                            <div class="col-sm-3 col-md-3">
                                <div class="footer-col">
                                    <h5 class="footer-title">Gallery On Instagram</h5>
                                    <ul class="insta-list">
                                        <li>
                                            <a href="#">
                                                <img class="img-responsive" src="<?php bloginfo("template_url"); ?>/images/image1.jpg" alt="Image">
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="#">
                                                <img class="img-responsive" src="<?php bloginfo("template_url"); ?>/images/image2.jpg" alt="Image">
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="#">
                                                <img class="img-responsive" src="<?php bloginfo("template_url"); ?>/images/image3.jpg" alt="Image">
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="#">
                                                <img class="img-responsive" src="<?php bloginfo("template_url"); ?>/images/image4.jpg" alt="Image">
                                            </a>
                                        </li>
                                    </ul>
                                    <br>
                                    <h5 class="footer-title">ONLINE GIFT CERTIFICATES</h5>
                                    <p><a href="https://www.giftly.com/gift-card/johnnys-caf%C3%A9-and-bar-margate?spec=treat-gcd" target="_blank">Purchase a Gift Certificate</a></p>
                                </div>
                            </div>
                            
                            <div class="col-sm-3 col-md-3">
                                <div class="footer-col">
                                    <div class="contact-info">
                                        <h5 class="footer-title">Contact Info</h5>
                                        <p class="addr"><i class="fa fa-map-marker"></i> 9407 Ventor Ave.<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Margate, NJ 08402</p>
                                        <p class="phone"><i class="fa fa-phone"></i> 609.822.1789</p>
                                        <p class="email"><i class="fa fa-envelope"></i> info@johnnyscafenj.com</p>
                                    </div>
                                    
                                    <div class="open-time">
                                        <h5 class="footer-title">OPen 7 Days a Week</h5>
                                        <p class="addr">Breakfast: 7:00pm - 2.00pm</p>
                                        <p class="phone">Lunch: 11:00am - 3.00pm</p>
                                        <p class="email">Dinner: First Seating 4.00pm</p>
                                        <img style="margin-top:12px;" class="img-responsive" src="<?php bloginfo("template_url"); ?>/images/payment-logo.png" alt="Payment Logos">
                                    </div>
                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>
                
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <p>&copy; Copyright Johnny's Cafe</p>
                            </div>
                            <div class="col-md-8">
                                <p class="text-right"><a href="#">Johnny's Cafe</a> &nbsp;&nbsp;::&nbsp;&nbsp; <a href="#">Shucker's Bar & Grille</a> &nbsp;&nbsp;::&nbsp;&nbsp; <a href="#">Tipsy Taco & Tequila Bar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            
        </div>
        <!--/ Main wrapper -->
        
        <script src="<?php bloginfo("template_url"); ?>/js/jquery.min.js"></script>
        <script src="<?php bloginfo("template_url"); ?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo("template_url"); ?>/js/jQuery.scrollSpeed.js"></script>
<?php global $masonry; if($masonry==1) { ?>
        <script src="<?php bloginfo("template_url"); ?>/js/masonry.pkgd.min.js"></script>
<?php } ?>
<?php global $imagesloaded; if($imagesloaded==1) { ?>
        <script src="<?php bloginfo("template_url"); ?>/js/imagesloaded.pkgd.min.js"></script>
<?php } ?>
<?php global $carousel; if($carousel==1) { ?>
        <script src="<?php bloginfo("template_url"); ?>/js/owl.carousel.min.js"></script>
<?php } ?>
<?php global $lightgallery; if($lightgallery==1) { ?>
        <script src="<?php bloginfo("template_url"); ?>/js/lightgallery/lightgallery.js"></script>
        <script src="<?php bloginfo("template_url"); ?>/js/lightgallery/lg-fullscreen.js"></script>
        <script src="<?php bloginfo("template_url"); ?>/js/lightgallery/lg-thumbnail.js"></script>
        <script>
             $( function() {
                
                // Masonry Gallery
                var $grid = $('.gallery-grid');
                $grid.imagesLoaded( function() {
                  $grid.masonry({                      
                      percentPosition: true,
                      itemSelector: '.gallery-item',
                      columnWidth: '.gallery-sizer',
                      gutter:'.gutter-sizer'
                  });
                });
                setTimeout(function(){
                    var selectedTab = $('.gallery-list li a[href="#all-tab"]');
                    selectedTab.trigger('click', true);
                    $('.gallery-grid').masonry({initLayout:true}); 
                },100);
            });
            
            // Lightbox gallery
            $('.gallery-grid').lightGallery({thumbnail:false,loop:false}); 
                
            // Laout            
            $('[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $('.gallery-grid').masonry({initLayout:true});
            });
        </script>
<?php } ?>
        <script src="<?php bloginfo("template_url"); ?>/js/main.js"></script>
<?php if(is_page('Home')) { ?>
        <script>
            // FullScreen Slider
            window.onload = function(){

                (function(){

                    if(document.getElementById('slider')) {
                        var slider = document.getElementById('slider').getElementsByClassName('item');
                        if( slider.length != 0 ) {
                            var sliderLength = slider.length;			
                            var count = 0;
                            bg_switch();
                            var setInter = setInterval(bg_switch, 7000);
                        }
                    }

                    document.getElementById("snext").onclick = function(){
                        getNext();
                    };
                    document.getElementById("sprev").onclick = function(){
                        getPrev();
                    };

                    // Next Slide
                    function getNext(){

                        clearInterval(setInter);
                        var activeIndex;

                        for(var i=0;i<sliderLength; i++){
                            if(slider[i].classList.contains('active')){
                                activeIndex = i;                     
                            }
                        }
                        if(activeIndex == (sliderLength - 1)){
                            count = 0;
                        }else{
                            count = activeIndex + 1;
                        }
                        bg_switch();
                        setInter = setInterval(bg_switch, 7000);
                    }

                    // Previous Slide
                    function getPrev(){

                        clearInterval(setInter);
                        var activeIndex;

                        for(var i=0;i<sliderLength; i++){
                            if(slider[i].classList.contains('active')){
                                activeIndex = i;                     
                            }
                        }
                        if(activeIndex == 0){
                            count = sliderLength - 1;

                            slider[activeIndex].style.removeProperty('z-index');
                            setTimeout(function(){
                                slider[activeIndex].classList.remove('active');
                            },10);

                        }else{
                            count = activeIndex - 1;
                            slider[activeIndex].style.removeProperty('z-index');
                            setTimeout(function(){
                                slider[activeIndex].classList.remove('active');
                            },10);
                        }
                        bg_switch();
                        setInter = setInterval(bg_switch, 7000);
                    }

                    // Images Sliding
                    function bg_switch(){

                        slider[count].classList.add('active');
                        slider[count].style.zIndex = 1;
                        var scount = count;

                        if(scount === 0) {
                            slider[sliderLength - 1].style.removeProperty('z-index');
                            setTimeout(function(){
                                slider[sliderLength - 1].classList.remove('active');
                            },10);
                        } else {
                            slider[scount - 1].style.removeProperty('z-index');
                            setTimeout(function(){
                                slider[scount - 1].classList.remove('active');
                            },10);
                        }

                        (sliderLength === count + 1) ? count = 0 : count++;
                    }
                }());
            }
        </script>
<?php } ?>
<?php if($masonry==1) { ?>
        <script>
            $('.menu-grid').masonry({
				percentPosition: true,
				itemSelector: '.grid-item',
				columnWidth: '.grid-sizer',
				gutter:'.gutter-sizer'
			});
            
			$('[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				$('.menu-grid').masonry('layout');
			});
        </script>
<?php } ?>
<?php global $event_carousel;  if($event_carousel==1) { ?>
        <script>
            // Owl carousel
            $('.event-carousel').owlCarousel({
                nav:false,
                items:1,
                dots:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
        </script>
<?php } ?>
        <?php wp_footer(); ?>
	</body>
</html>