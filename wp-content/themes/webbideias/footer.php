
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<!--<div class="footer-newsletter">
<div class="container">
  <div class="row justify-content-center">
	<div class="col-lg-12 text-center">
	  <h4>Our Newsletter</h4>
	  <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
	</div>
	<div class="col-lg-6">
	  <form action="" method="post">
		<input type="email" name="email"><input type="submit" value="Subscribe">
	  </form>
	</div>
  </div>
</div>
</div>-->

<div class="footer-top">
<div class="container">
  <div class="row gy-4">
	<div class="col-lg-5 col-md-12 footer-info">
	 
	    <?php 
				$footer = array(
				   'post_type'=>'footer',
				   'posts_per_page'=> 1,
				);
				$fsite = new WP_Query( $footer );
				while( $fsite->have_posts() ) : $fsite->the_post(); 
		?>
       
	    <a href="<?php the_field('logo_link'); ?>" class="logo d-flex align-items-center">
			<?php the_post_thumbnail('post_thumbnail', array('class' => 'img_custom')); ?>
			<span><?php the_field('logo_titulo'); ?></span>
        </a>
		

	  <p><?php the_content(); ?></p>
       
	  <?php endwhile; ?>	

	  <div class="social-links mt-3">
		<a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
		<a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
		<a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
		<a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
	  </div>
	</div>

	<div class="col-lg-2 col-6 footer-links">
	  <h4>Useful Links</h4>
	  <ul>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
	  </ul>
	</div>

	<div class="col-lg-2 col-6 footer-links">
	  <h4>Our Services</h4>
	  <ul>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
		<li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
	  </ul>
	</div>

	<div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
	  <h4>Contact Us</h4>
	  <p>
		A108 Adam Street <br>
		New York, NY 535022<br>
		United States <br><br>
		<strong>Phone:</strong> +1 5589 55488 55<br>
		<strong>Email:</strong> info@example.com<br>
	  </p>

	</div>

  </div>
</div>
</div>

<div class="container">
<div class="copyright">
  &copy; Copyright <strong><span>WebbIdeias</span></strong>. Todos os direitos reservados
</div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


	<!-- Vendor JS Files -->
	<script src="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
