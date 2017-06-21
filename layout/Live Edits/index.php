<?php
/*
Template Name: Home
*/
get_header();
?>
            <div class="info-section">
                <div class="container">
                	<?php echo get_field("location_text"); ?>
                    <a href="<?php echo get_field("button_link"); ?>" class="btn btn-primary">Read More</a>
                </div>
            </div>
            
            <div class="banner">
                <div class="banner-inner">
                    <div class="container">
                        <h2>the lounge</h2>
                        <h1>Party is always ready</h1>
                        <h4>Johnny's Cafe also is an entertainment hub, <br> offering live music as many as five days a week.</h4>
                        <a href="#" class="btn btn-default">View Upcoming Events</a>
                    </div>
                </div>
            </div>
            
            <div class="service-section">
                <div class="container">
                    <div class="head-section">
                        <h1>Open Your Round</h1>
                        <p>Serving Breakfast, Lunch, and Dinner</p>
                        <hr>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="service-col">
                                <a href="#">
                                    <img src="<?php bloginfo("template_url"); ?>/images/image1.jpg" alt="Image" class="img-responsive">
                                    <p>Best Happy Hour on the Island<br> Begins at 4:00pm every day!</p>
                                </a>
                                <p class="bottom-link"><a href="#">Reserve a Table</a></p>
                            </div>
                        </div>
                        
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="service-col">
                                <a href="#">
                                    <img src="<?php bloginfo("template_url"); ?>/images/image2.jpg" alt="Image" class="img-responsive">
                                    <p>Half Priced Bottled Wine<br> Every Tuesday & Thursday </p>
                                </a>
                                <p class="bottom-link"><a href="#">Reserve a Table</a></p>
                            </div>
                        </div>
                        
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="service-col">
                                <a href="#">
                                    <img src="<?php bloginfo("template_url"); ?>/images/image3.jpg" alt="Image" class="img-responsive">
                                    <p>Sunday Gravy<br> Let our family feed yours!</p>
                                </a>
                                <p class="bottom-link"><a href="#">Reserve a Table</a></p>
                            </div>
                        </div>
                        
                        <div class="col-xs-6 col-sm-6 col-md-3">
                            <div class="service-col">
                                <a href="#">
                                    <img src="<?php bloginfo("template_url"); ?>/images/image4.jpg" alt="Image" class="img-responsive">
                                    <p>Homemade Dessert<br> Created by Chef Johnny!</p>
                                </a>
                                <p class="bottom-link"><a href="#">Reserve a Table</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php get_footer(); ?>