<!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
         
		<?php 
				$qs = array(
				   'post_type'=>'quemsomos',
				   'posts_per_page'=> 1,
				);
				$queryqs = new WP_Query( $qs );
				while( $queryqs->have_posts() ) : $queryqs->the_post(); 
		?>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3><?php the_title(); ?></h3>
              <h2><?php the_field('subtitulo'); ?></h2>
              <p><?php the_content(); ?></p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span><?php the_field('button'); ?></span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
			<?php the_post_thumbnail('post_thumbnail', array('class' => 'img-fluid')); ?>
          </div>
          <?php endwhile; ?>
        </div>
      </div>

    </section><!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">

<div class="container" data-aos="fade-up">

  <header class="section-header">
	<h2>Services</h2>
	<p>Veritatis et dolores facere numquam et praesentium</p>
  </header>

  <div class="row gy-4">

	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
	  <div class="service-box blue">
		<i class="ri-discuss-line icon"></i>
		<h3>Nesciunt Mete</h3>
		<p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
		<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
	  <div class="service-box orange">
		<i class="ri-discuss-line icon"></i>
		<h3>Eosle Commodi</h3>
		<p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
		<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
	  <div class="service-box green">
		<i class="ri-discuss-line icon"></i>
		<h3>Ledo Markt</h3>
		<p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
		<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
	  <div class="service-box red">
		<i class="ri-discuss-line icon"></i>
		<h3>Asperiores Commodi</h3>
		<p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
		<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
	  <div class="service-box purple">
		<i class="ri-discuss-line icon"></i>
		<h3>Velit Doloremque.</h3>
		<p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
		<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
	  <div class="service-box pink">
		<i class="ri-discuss-line icon"></i>
		<h3>Dolori Architecto</h3>
		<p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
		<a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
	  </div>
	</div>

  </div>

</div>

</section><!-- End Services Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">

<div class="container" data-aos="fade-up">

  <header class="section-header">
	<h2>F.A.Q</h2>
	<p>Frequently Asked Questions</p>
  </header>

  <div class="row">
	<div class="col-lg-6">
	  <!-- F.A.Q List 1-->
	  <div class="accordion accordion-flush" id="faqlist1">
		<div class="accordion-item">
		  <h2 class="accordion-header">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
			  Non consectetur a erat nam at lectus urna duis?
			</button>
		  </h2>
		  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
			<div class="accordion-body">
			  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
			</div>
		  </div>
		</div>

		<div class="accordion-item">
		  <h2 class="accordion-header">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
			  Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
			</button>
		  </h2>
		  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
			<div class="accordion-body">
			  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
			</div>
		  </div>
		</div>

		<div class="accordion-item">
		  <h2 class="accordion-header">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
			  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
			</button>
		  </h2>
		  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
			<div class="accordion-body">
			  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
			</div>
		  </div>
		</div>

	  </div>
	</div>

	<div class="col-lg-6">

	  <!-- F.A.Q List 2-->
	  <div class="accordion accordion-flush" id="faqlist2">

		<div class="accordion-item">
		  <h2 class="accordion-header">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-1">
			  Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
			</button>
		  </h2>
		  <div id="faq2-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
			<div class="accordion-body">
			  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
			</div>
		  </div>
		</div>

		<div class="accordion-item">
		  <h2 class="accordion-header">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-2">
			  Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
			</button>
		  </h2>
		  <div id="faq2-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
			<div class="accordion-body">
			  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
			</div>
		  </div>
		</div>

		<div class="accordion-item">
		  <h2 class="accordion-header">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-3">
			  Varius vel pharetra vel turpis nunc eget lorem dolor?
			</button>
		  </h2>
		  <div id="faq2-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
			<div class="accordion-body">
			  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
			</div>
		  </div>
		</div>

	  </div>
	</div>

  </div>

</div>

</section><!-- End F.A.Q Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

<div class="container" data-aos="fade-up">

  <header class="section-header">
	<h2>Portfolio</h2>
	<p>Check our latest work</p>
  </header>

  <div class="row" data-aos="fade-up" data-aos-delay="100">
	<div class="col-lg-12 d-flex justify-content-center">
	  <ul id="portfolio-flters">
		<li data-filter="*" class="filter-active">All</li>
		<li data-filter=".filter-app">App</li>
		<li data-filter=".filter-card">Card</li>
		<li data-filter=".filter-web">Web</li>
	  </ul>
	</div>
  </div>

  <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

	<div class="col-lg-4 col-md-6 portfolio-item filter-app">
	  <div class="portfolio-wrap">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
		<div class="portfolio-info">
		  <h4>App 1</h4>
		  <p>App</p>
		  <div class="portfolio-links">
			<a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
			<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
		  </div>
		</div>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6 portfolio-item filter-web">
	  <div class="portfolio-wrap">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
		<div class="portfolio-info">
		  <h4>Web 3</h4>
		  <p>Web</p>
		  <div class="portfolio-links">
			<a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
			<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
		  </div>
		</div>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6 portfolio-item filter-app">
	  <div class="portfolio-wrap">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
		<div class="portfolio-info">
		  <h4>App 2</h4>
		  <p>App</p>
		  <div class="portfolio-links">
			<a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
			<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
		  </div>
		</div>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6 portfolio-item filter-card">
	  <div class="portfolio-wrap">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
		<div class="portfolio-info">
		  <h4>Card 2</h4>
		  <p>Card</p>
		  <div class="portfolio-links">
			<a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
			<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
		  </div>
		</div>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6 portfolio-item filter-web">
	  <div class="portfolio-wrap">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
		<div class="portfolio-info">
		  <h4>Web 2</h4>
		  <p>Web</p>
		  <div class="portfolio-links">
			<a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
			<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
		  </div>
		</div>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6 portfolio-item filter-app">
	  <div class="portfolio-wrap">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
		<div class="portfolio-info">
		  <h4>App 3</h4>
		  <p>App</p>
		  <div class="portfolio-links">
			<a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
			<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
		  </div>
		</div>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6 portfolio-item filter-card">
	  <div class="portfolio-wrap">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
		<div class="portfolio-info">
		  <h4>Card 1</h4>
		  <p>Card</p>
		  <div class="portfolio-links">
			<a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
			<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
		  </div>
		</div>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6 portfolio-item filter-card">
	  <div class="portfolio-wrap">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
		<div class="portfolio-info">
		  <h4>Card 3</h4>
		  <p>Card</p>
		  <div class="portfolio-links">
			<a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
			<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
		  </div>
		</div>
	  </div>
	</div>

	<div class="col-lg-4 col-md-6 portfolio-item filter-web">
	  <div class="portfolio-wrap">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
		<div class="portfolio-info">
		  <h4>Web 3</h4>
		  <p>Web</p>
		  <div class="portfolio-links">
			<a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
			<a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
		  </div>
		</div>
	  </div>
	</div>

  </div>

</div>

</section><!-- End Portfolio Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">

<div class="container" data-aos="fade-up">

  <header class="section-header">
	<h2>Testimonials</h2>
	<p>What they are saying about us</p>
  </header>

  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
	<div class="swiper-wrapper">

	  <div class="swiper-slide">
		<div class="testimonial-item">
		  <div class="stars">
			<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
		  </div>
		  <p>
			Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
		  </p>
		  <div class="profile mt-auto">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
			<h3>Saul Goodman</h3>
			<h4>Ceo &amp; Founder</h4>
		  </div>
		</div>
	  </div><!-- End testimonial item -->

	  <div class="swiper-slide">
		<div class="testimonial-item">
		  <div class="stars">
			<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
		  </div>
		  <p>
			Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
		  </p>
		  <div class="profile mt-auto">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
			<h3>Sara Wilsson</h3>
			<h4>Designer</h4>
		  </div>
		</div>
	  </div><!-- End testimonial item -->

	  <div class="swiper-slide">
		<div class="testimonial-item">
		  <div class="stars">
			<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
		  </div>
		  <p>
			Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
		  </p>
		  <div class="profile mt-auto">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
			<h3>Jena Karlis</h3>
			<h4>Store Owner</h4>
		  </div>
		</div>
	  </div><!-- End testimonial item -->

	  <div class="swiper-slide">
		<div class="testimonial-item">
		  <div class="stars">
			<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
		  </div>
		  <p>
			Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
		  </p>
		  <div class="profile mt-auto">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
			<h3>Matt Brandon</h3>
			<h4>Freelancer</h4>
		  </div>
		</div>
	  </div><!-- End testimonial item -->

	  <div class="swiper-slide">
		<div class="testimonial-item">
		  <div class="stars">
			<i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
		  </div>
		  <p>
			Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
		  </p>
		  <div class="profile mt-auto">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
			<h3>John Larson</h3>
			<h4>Entrepreneur</h4>
		  </div>
		</div>
	  </div><!-- End testimonial item -->

	</div>
	<div class="swiper-pagination"></div>
  </div>

</div>

</section><!-- End Testimonials Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">

<div class="container" data-aos="fade-up">

  <header class="section-header">
	<h2>Team</h2>
	<p>Our hard working team</p>
  </header>

  <div class="row gy-4">

	<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
	  <div class="member">
		<div class="member-img">
		  <img src="<?php bloginfo('template_url'); ?>/assets/img/team/team-1.jpg" class="img-fluid" alt="">
		  <div class="social">
			<a href=""><i class="bi bi-twitter"></i></a>
			<a href=""><i class="bi bi-facebook"></i></a>
			<a href=""><i class="bi bi-instagram"></i></a>
			<a href=""><i class="bi bi-linkedin"></i></a>
		  </div>
		</div>
		<div class="member-info">
		  <h4>Walter White</h4>
		  <span>Chief Executive Officer</span>
		  <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
		</div>
	  </div>
	</div>

	<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
	  <div class="member">
		<div class="member-img">
		  <img src="<?php bloginfo('template_url'); ?>/assets/img/team/team-2.jpg" class="img-fluid" alt="">
		  <div class="social">
			<a href=""><i class="bi bi-twitter"></i></a>
			<a href=""><i class="bi bi-facebook"></i></a>
			<a href=""><i class="bi bi-instagram"></i></a>
			<a href=""><i class="bi bi-linkedin"></i></a>
		  </div>
		</div>
		<div class="member-info">
		  <h4>Sarah Jhonson</h4>
		  <span>Product Manager</span>
		  <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
		</div>
	  </div>
	</div>

	<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
	  <div class="member">
		<div class="member-img">
		  <img src="<?php bloginfo('template_url'); ?>/assets/img/team/team-3.jpg" class="img-fluid" alt="">
		  <div class="social">
			<a href=""><i class="bi bi-twitter"></i></a>
			<a href=""><i class="bi bi-facebook"></i></a>
			<a href=""><i class="bi bi-instagram"></i></a>
			<a href=""><i class="bi bi-linkedin"></i></a>
		  </div>
		</div>
		<div class="member-info">
		  <h4>William Anderson</h4>
		  <span>CTO</span>
		  <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
		</div>
	  </div>
	</div>

	<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
	  <div class="member">
		<div class="member-img">
		  <img src="<?php bloginfo('template_url'); ?>/assets/img/team/team-4.jpg" class="img-fluid" alt="">
		  <div class="social">
			<a href=""><i class="bi bi-twitter"></i></a>
			<a href=""><i class="bi bi-facebook"></i></a>
			<a href=""><i class="bi bi-instagram"></i></a>
			<a href=""><i class="bi bi-linkedin"></i></a>
		  </div>
		</div>
		<div class="member-info">
		  <h4>Amanda Jepson</h4>
		  <span>Accountant</span>
		  <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
		</div>
	  </div>
	</div>

  </div>

</div>

</section><!-- End Team Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">

<div class="container" data-aos="fade-up">

  <header class="section-header">
	<h2>Our Clients</h2>
	<p>Temporibus omnis officia</p>
  </header>

  <div class="clients-slider swiper">
	<div class="swiper-wrapper align-items-center">
	  <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
	  <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
	  <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
	  <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
	  <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
	  <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
	  <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
	  <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
	</div>
	<div class="swiper-pagination"></div>
  </div>
</div>

</section><!-- End Clients Section -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

<div class="container" data-aos="fade-up">

  <header class="section-header">
	<h2>Blog</h2>
	<p>Recent posts form our Blog</p>
  </header>

  <div class="row">

	<div class="col-lg-4">
	  <div class="post-box">
		<div class="post-img"><img src="<?php bloginfo('template_url'); ?>/assets/img/blog/blog-1.jpg" class="img-fluid" alt=""></div>
		<span class="post-date">Tue, September 15</span>
		<h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
		<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
	  </div>
	</div>

	<div class="col-lg-4">
	  <div class="post-box">
		<div class="post-img"><img src="<?php bloginfo('template_url'); ?>/assets/img/blog/blog-2.jpg" class="img-fluid" alt=""></div>
		<span class="post-date">Fri, August 28</span>
		<h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
		<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
	  </div>
	</div>

	<div class="col-lg-4">
	  <div class="post-box">
		<div class="post-img"><img src="<?php bloginfo('template_url'); ?>/assets/img/blog/blog-3.jpg" class="img-fluid" alt=""></div>
		<span class="post-date">Mon, July 11</span>
		<h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
		<a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
	  </div>
	</div>

  </div>

</div>

</section><!-- End Recent Blog Posts Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

<div class="container" data-aos="fade-up">

  <header class="section-header">
	<h2>Contact</h2>
	<p>Contact Us</p>
  </header>

  <div class="row gy-4">

	<div class="col-lg-6">

	  <div class="row gy-4">
		<div class="col-md-6">
		  <div class="info-box">
			<i class="bi bi-geo-alt"></i>
			<h3>Address</h3>
			<p>A108 Adam Street,<br>New York, NY 535022</p>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="info-box">
			<i class="bi bi-telephone"></i>
			<h3>Call Us</h3>
			<p>+1 5589 55488 55<br>+1 6678 254445 41</p>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="info-box">
			<i class="bi bi-envelope"></i>
			<h3>Email Us</h3>
			<p>info@example.com<br>contact@example.com</p>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="info-box">
			<i class="bi bi-clock"></i>
			<h3>Open Hours</h3>
			<p>Monday - Friday<br>9:00AM - 05:00PM</p>
		  </div>
		</div>
	  </div>

	</div>

	<div class="col-lg-6">
	  <form action="forms/contact.php" method="post" class="php-email-form">
		<div class="row gy-4">

		  <div class="col-md-6">
			<input type="text" name="name" class="form-control" placeholder="Your Name" required>
		  </div>

		  <div class="col-md-6 ">
			<input type="email" class="form-control" name="email" placeholder="Your Email" required>
		  </div>

		  <div class="col-md-12">
			<input type="text" class="form-control" name="subject" placeholder="Subject" required>
		  </div>

		  <div class="col-md-12">
			<textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
		  </div>

		  <div class="col-md-12 text-center">
			<div class="loading">Loading</div>
			<div class="error-message"></div>
			<div class="sent-message">Your message has been sent. Thank you!</div>

			<button type="submit">Send Message</button>
		  </div>

		</div>
	  </form>

	</div>

  </div>

</div>

</section><!-- End Contact Section -->