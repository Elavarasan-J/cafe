<?php get_header(); ?>
            <div class="subpage-banner" style="background:url('<?php echo get_the_post_thumbnail_url(202); ?>');">
                <div class="cbanner-inner">
                    <div class="sbanner-inner">
                        <div class="event-section">
                            <h1 class="lg-title text-center"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="calendar-section">
                <div class="container">
					<div class="single-event">
						<?php the_content(); ?>
					</div>
                </div>
            </div>
<?php get_sidebar("make_reservation"); ?>
<?php get_footer(); ?>