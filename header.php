<!DOCTYPE html>
  <html <?php language_attributes(); ?>
    <head>
      <meta charset="<?php echo get_bloginfo('charset')?>" />

      <meta name="description" content="<?php echo get_bloginfo('description')?>" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?php echo get_bloginfo('stylesheet_url')?>" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/cf98cc2618.js"></script>
      <?php
      if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
      wp_head() ?>
    </head>
    <body class=<?php body_class(); ?>>
      <div class="container">
        <header>
          <!-- header title -->
          <h1>  <?php echo get_bloginfo('name') ?></h1>
          <?php if(is_home() && ! is_front_page()) : ?>
            <?php single_post_title() ?>
          <?php endif; ?>
          <!-- future navigation here -->
          <nav class="navbar navbar-expand-lg navbar-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controlls="navbarCollapse" aria-expanded="false" aria-label="Open Navigation" />
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <?php wp_nav_menu(array('theme_location' => 'header-menu',
                                        'menu_class' => 'navbar-nav mr-auto',
                                        'menu_id' => 'navbarCollapse',
                                        'container' => 'ul',
                                        'items_wrap' => '<li nav-item></li>'));  ?>

</div>

                                                  </nav>

        </header>
