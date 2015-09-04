			<!-- footer -->
            <?php

                if(is_page(4)){
                    echo '<footer class="footer footer-home" role="contentinfo">';
                } else if(is_page(6)){
                    echo '<footer class="footer footer-about" role="contentinfo">';
                }

            ?>
                <div class="row widgets container">
                    <div class="col-sm-3">
                        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('left-footer')) ?>
                    </div>
                    <div class="col-sm-3">
                        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('middle-left-footer')) ?>
                    </div>
                    <div class="col-sm-3 widget-col">
                        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('middle-right-footer')) ?>
                    </div>
                    <div class="col-sm-3 widget-col">
                        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('right-footer')) ?>
                    </div>
                </div>

				<!-- copyright -->
				<p class="copyright container">
					&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
				</p> <!-- /copyright -->

			</footer> <!-- /footer -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
