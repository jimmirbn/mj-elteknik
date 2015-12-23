<?php
/*
Template Name: Kontakt
*/
get_header(); ?>

<section id="banner-kontakt">
	<!-- <h1>Overskrift</h1> -->
</section>
<section id="content">
	<section class="container"> 
		<div class="row">
			<div class="col-md-6">
				<h1><?php echo get_field('left_text_kontakt'); ?></h1>
			</div>
			<div class="col-md-6">
				<!-- <iframe src="http://www.digitaljimmi.com/mj-elteknik/contact.php" style="border:0px #FFFFFF none;" name="Contact" scrolling="no" frameborder="0" marginheight="0px" marginwidth="0px" height="270px" width="100%"></iframe> -->

				<fieldset id="contact_form" class="kontaktForm">
					<div id="result"></div>
					<div class="required-field-block">
						<input class="form-control" type="text" name="name" id="name" placeholder="Navn" />
						<div class="required-icon">
							<div class="text">*</div>
						</div>
					</div>
					<div class="required-field-block">
						<input class="form-control" type="email" name="email" id="email" placeholder="Email" />
						<div class="required-icon">
							<div class="text">*</div>
						</div>
					</div>
					<div class="required-field-block">
						<input class="form-control" type="text" name="phone" id="phone" placeholder="Tlf nr" />
						<div class="required-icon">
							<div class="text">*</div>
						</div>
					</div>
					<div class="required-field-block">
						<textarea rows="3" class="form-control" name="message" id="message" placeholder="Besked"></textarea>
						<div class="required-icon">
							<div class="text">*</div>
						</div>
					</div>
					<label>
						<button class="submit_btn btn btn-primary" data-email="<?php echo get_field('email', 'option'); ?>" id="submit_btn">Send</button>
					</label>
				</fieldset>
			</div>	
		</div>
	</section>
</section>

<?php get_footer(); ?>