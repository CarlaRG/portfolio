<aside class="sidebar">
  <ul>
    <?php dynamic_sidebar( 'right-sidebar' ); ?>
    <li class="sidebar__widget
               sidebar__widget--calendrier">
      <?php the_widget('WP_Widget_Calendar'); ?>
      <li>
    <li class="sidebar__widget
               sidebar__widget--commentaires">
      <?php the_widget('WP_Widget_Recent_Comments', 'number=4'); ?>
    </li>
  </ul>
</aside>
