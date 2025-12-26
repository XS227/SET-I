<?php
/**
 * SETai Landing theme setup.
 */

if (!defined('ABSPATH')) {
  exit;
}

function setai_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);

  register_nav_menus([
    'primary' => __('Primary Menu', 'setai'),
  ]);
}
add_action('after_setup_theme', 'setai_setup');

function setai_scripts() {
  $theme = wp_get_theme();
  $version = $theme->get('Version');

  wp_enqueue_style('setai-style', get_stylesheet_uri(), [], $version);
  wp_enqueue_script('setai-site', get_template_directory_uri() . '/assets/js/site.js', [], $version, true);
}
add_action('wp_enqueue_scripts', 'setai_scripts');

function setai_nav_link_attributes($atts, $item) {
  $atts['data-nav'] = 'true';
  $classes = isset($atts['class']) ? $atts['class'] . ' ' : '';
  $classes .= in_array('cta', (array) $item->classes, true) ? 'cta' : 'pill';
  $atts['class'] = trim($classes);

  return $atts;
}
add_filter('nav_menu_link_attributes', 'setai_nav_link_attributes', 10, 2);

function setai_default_menu() {
  $items = [
    ['label' => __('AI-agent', 'setai'), 'url' => home_url('/ai-agent/')],
    ['label' => __('Tjenester', 'setai'), 'url' => home_url('/tjenester/')],
    ['label' => __('Moduler', 'setai'), 'url' => home_url('/moduler/')],
    ['label' => __('Kurs', 'setai'), 'url' => home_url('/kurs/')],
    ['label' => __('Kontakt', 'setai'), 'url' => home_url('/kontakt/'), 'cta' => true],
  ];

  echo '<ul class="navlinks" aria-label="' . esc_attr__('Navigasjon', 'setai') . '">';
  foreach ($items as $item) {
    $class = !empty($item['cta']) ? 'cta' : 'pill';
    printf(
      '<li class="menu-item"><a class="%1$s" data-nav="true" href="%2$s">%3$s</a></li>',
      esc_attr($class),
      esc_url($item['url']),
      esc_html($item['label'])
    );
  }
  echo '</ul>';
}
