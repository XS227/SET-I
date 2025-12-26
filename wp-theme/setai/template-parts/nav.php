<nav class="nav">
  <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('Gå til forsiden', 'setai'); ?>">
    <span class="logo" aria-hidden="true"></span>
    <span><?php bloginfo('name'); ?></span>
  </a>

  <?php
    if (has_nav_menu('primary')) {
      wp_nav_menu([
        'theme_location' => 'primary',
        'menu_class' => 'navlinks',
        'container' => false,
        'fallback_cb' => false,
      ]);
    } else {
      setai_default_menu();
    }
  ?>
</nav>
