<?php
/**
 * Page template
 *
 * @package SETai
 */

global $post;
get_header();
?>
<main class="page-content">
  <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
      <div class="entry-content">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
</main>
<?php
get_footer();
