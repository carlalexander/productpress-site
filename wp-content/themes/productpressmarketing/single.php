<?php get_header(); ?>

<div id="screenshots1" style="padding-top:0; margin-top:0;">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="section_title">
  <h2><?php the_title(); ?></h2>
     <div class="title_border"></div>
</div>
<div class="section_intro" style="text-align:left;">
  <?php the_content(); ?>
</div>
<?php endwhile; wp_reset_query(); ?>

<div class="section_intro" style="text-align:left;">
<?php comments_template( '', true ); ?>
</div>

</div>
<?php get_footer(); ?>