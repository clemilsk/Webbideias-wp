<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php  bloginfo( 'charset' ); ?>">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <title><?php bloginfo( 'title' ); ?></title>

  <!-- Vendor CSS Files -->
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
     
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
		
		<?php   
				$logo = array(
				   'post_type'=>'logo',
				   'posts_per_page'=> 1,
				);
				
				$logosite = new WP_Query( $logo );
				if($logosite->have_posts()):

				while( $logosite->have_posts() ) : $logosite->the_post(); 
		?>
       
	    <a href="<?php the_field('logo_link'); ?>" class="logo d-flex align-items-center">
			<?php the_post_thumbnail('post_thumbnail', array('class' => 'img_custom')); ?>
			<span><?php the_field('logo_titulo'); ?></span>
        </a>

		<?php 
		    	endwhile; 
				else:
		?>	

          <span> Insira uma Logo! </span>

		<?php endif; ?>

     <nav id="navbar" class="navbar">
        
		<?php 
			$theme_location = 'primary';
			create_bootstrap_menu( $theme_location );
	    ?>

      </nav><!-- .navbar -->

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
			<?php 
				$args = array(
				   'post_type'=>'header',
				   'posts_per_page'=> 1,
				);
				$query = new WP_Query( $args );
				while( $query->have_posts() ) : $query->the_post(); 
			?>
          <h1 data-aos="fade-up"><?php the_field('texto_principal_h1'); ?></h1>
          <h2 data-aos="fade-up" data-aos-delay="400"><?php the_content(); ?></h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span><?php the_field('buttom'); ?></span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <?php the_post_thumbnail('post_thumbnail', array('class' => 'img-fluid')); ?>
        </div>
		<?php endwhile; ?>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    

