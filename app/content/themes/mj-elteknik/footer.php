	<footer id="footer">
        <section class="container">
            <section class="left">
                <section id="quote1">
                    <blockquote><?php echo get_field('quote_text', 'option'); ?></blockquote>
                </section>
                <!--end of #quote1-->
                <p><?php echo get_field('quote_name', 'option'); ?></p>
            </section>
            <section class="right">
                <h3>Kontakt</h3>
                <p><?php echo get_field('address', 'option'); ?><span class="glyphicon glyphicon-home"></span></p>
                <br>
                <p><?php echo get_field('phone', 'option'); ?></p><span class="glyphicon glyphicon-earphone"></span>
                <br>
                <p><a title="kontakt mj-elteknik" href="mailto:<?php echo get_field('email', 'option'); ?>?Subject=Tilbud%20på%20installation" target="_top">
								<?php echo get_field('email', 'option'); ?></a></p><span class="glyphicon glyphicon-envelope"></span>
            </section>
            <section class="bottom">
<!--                 <section>
                    <p class="pull-right">Created by <a title="Mj-elteknik elektriker" href="http://www.digitaljimmi.com">DJ</a></p>
                </section> -->
            </section>
            <div></div>
        </section>
    </footer>
        </div><!-- /wrap -->	
    <?php wp_footer(); ?>
        
	</body>
</html>