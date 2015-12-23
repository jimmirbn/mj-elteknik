<?php
/*
Template Name: Forside
*/
get_header(); ?>
<section id="banner">
	<h2><?php echo get_field('banner_text'); ?></h2>
</section>
 <section id="content">
        <section class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="minheight310">
                        <h2><?php echo get_field('left_headline'); ?></h2>
                        <?php echo get_field('left_text'); ?>
                    </div>
                    <div class=""><a title="Mj-elteknik kontakt" class="customBtn" href="<?php echo get_page_link(10) ?>">Kontakt mig</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="minheight310">
                        <h1><?php echo get_field('right_headline'); ?></h1>
                        <?php echo get_field('right_text'); ?>
                    </div>
                    <div class=""><a title="Mj-elteknik galleri" class="customBtn" href="<?php echo get_page_link(7) ?>">Galleri</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
<?php get_footer(); ?>