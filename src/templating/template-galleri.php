<?php
/*
Template Name: Galleri
*/
get_header(); ?>

<section id="banner-portfolio">
	<!-- <h1>Overskrift</h1> -->
</section>
<section id="content">

	<section class="container"> 
		<div class="gallery">
		<?php
		$i = 1;
		if( have_rows('image_repeater') ){
		 while ( have_rows('image_repeater') ) {
			the_row();

	        $image = get_sub_field('image');
	        $image_large = $image['sizes']['large'];
	        $image_thumb = $image['sizes']['thumbnail'];
	       	if($i == 1 || $i == 4 || $i == 7){
	        	?><div class="row"><?
	        }
			?>
				<div class="col-xs-12 col-sm-4">
					<div class="thumbnail">
						<a title="Mj-elteknik elektriker" href="<?php echo $image_large ?>"><img src="<?php echo $image_thumb ?>" alt="Mj-elteknik"></a>
					</div>
				</div>
			<?
			if($i % 3 == 0){
			?></div><?
			}
			$i++;
			};
		};
		?>
		</div>
	</section>
</section>

<?php get_footer(); ?>