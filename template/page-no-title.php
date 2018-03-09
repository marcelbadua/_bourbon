<?php
/**
* Template Name: No Title
*
* @package _bourbon 2.0.0
*/ ?>
<?php get_header(); ?>
<section id="content-main" role="main">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php get_template_part( 'template/entry', 'content' ); ?>
    </article>
  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
