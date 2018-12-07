<!-- //////////////////////////////////////////// -->
<!--                                              -->
<!--                PAGE ARTICLE                  -->
<!--                                              -->
<!-- //////////////////////////////////////////// -->


<?php get_header(); ?>

<section class="contenu">

  <div class="contenu__principal">
  <?php while (have_posts()): ?>
    <?php the_post(); ?>
    <h2><?php the_title(); ?></h2>
    <time class="article__date"><?php the_time(); ?></time>
    <p><?php the_content(); ?></p>
    <?php endwhile; ?>
  </div>

  <?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>
