<html>

 
<head>
  <?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css" />
  <meta name="author" content="Carla et Antoine" />
  <meta name="description" content="<?php bloginfo('description');?>" />
  <title><?php bloginfo('name');?></title>
</head>


<body <?php body_class(); ?>>
  <header class="header">
    <h1 class="header__titre">
      Bienvenue sur le <?php bloginfo('name');?>
    </h1>
    <p class="header__description">
      <?php bloginfo('description');?>
    </p>
    <nav class="header__menu">
      <?php wp_page_menu('show_home=1'); ?>
    </nav>
  </header>
