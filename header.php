<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Description" CONTENT="émai is an Italian restaurant, café &amp; homestay in a beautiful and romantic garden cottage home in Dalat, Vietnam.">
  <title>
    <?php wp_title(); ?>
  </title>
  <link rel="icon" href="images/logo/reznor.jpg">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

  <header id="header">
    <h1 class="remove-header">
      <?php bloginfo('name'); ?>
    </h1>
    <div class="column-reverse">
      <nav id="header-navbar" class="navbar" role="navigation" aria-label="main navigation">
        <h2 class="remove-header">Navigation</h2>
        <div class="navbar-brand">
          <button class="navbar-burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>

        <?php
          $defaults = array(
            'container' => false,
            'theme_location'  => 'header-menu',
            'menu_class'  => 'navbar-menu is-uppercase',
            'menu_id' => 'navMenu'
          );

          wp_nav_menu( $defaults );
        ?>

      </nav>
      <div id="header-logo" class="column center is-one-third is-offset-2 is-offset-3-fullhd">
        <a href="<?php bloginfo('url'); ?>">
          <img id="emai-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo/logo.png" alt="emai dalat logo">
        </a>
      </div>
    </div>
    <div id="first-background"></div>
  </header>
