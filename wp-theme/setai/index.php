<?php
/**
 * Main template file
 *
 * @package SETai
 */

global $post;
get_header();
?>
<main class="page-content">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <article class="card">
      <h1><?php esc_html_e('Ingen innhold funnet', 'setai'); ?></h1>
      <p class="muted"><?php esc_html_e('Opprett en side i WordPress og tildel en av temamalenene.', 'setai'); ?></p>
    </article>
  <?php endif; ?>
</main>
<?php
get_footer();
