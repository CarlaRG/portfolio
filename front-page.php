<!-- //////////////////////////////////////////// -->
<!--                                              -->
<!--                 FRONT-PAGE                   -->
<!--                                              -->
<!-- //////////////////////////////////////////// -->


<?php get_header(); ?>

<section class="contenu">

  <div class="contenu__principal">
  <?php if (have_posts()): ?>
    <article class="article">
    <?php while (have_posts()): ?>

      <?php the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <h3 class="article__titre"><?php the_title(); ?></h3>
      </a>
      <time class="article__date"><?php the_time(); ?></time>
      <span class="article__auteur"><?php the_author(); ?></span>

    <?php endwhile; ?>
    </article>
  <?php endif; ?>
  </div>

  <?php get_sidebar(); ?>

</section>


<?php get_footer(); ?>
