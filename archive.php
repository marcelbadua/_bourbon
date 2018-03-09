<?php
/**
* Home Template
*
* @package _bourbon 2.0.0
*/ ?>

<?php get_header(); ?>
<section class="has-sidebar">

  <div id="content-main" role="main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php echo '<a class="post-thumbnail" href="' . get_the_permalink() .'" style="background-image: url(' . get_the_post_thumbnail_url( get_the_id(), 'large' ) . ')"></a>'; ?>
      <section class="post-summary">
      <header class="post-header"><?php the_title('<h3>', '</h3>'); ?></header>
      <?php the_excerpt(); ?>
      <?php echo '<a class="link-to-post" href="' . get_the_permalink() .'" title="' . the_title_attribute(array( 'before' => 'Permalink to: ', 'after' => '', 'echo' => false )) .'" rel="bookmark">'. __('View Post', '_bourbon').'</a>';?>
      </section>
    </article>
  <?php endwhile; endif; ?>
    <?php _pagination(); ?>
  </div>

  <?php get_sidebar(); ?>

</section>
<?php get_footer(); ?>
