<?php

//require_once 'customizer/customizer-css-wphead.php';

add_filter( 'fl_theme_compile_less_paths', function( $paths ){
    $paths[] = get_stylesheet_directory() . '/less/b42s-customizer.less';

   return $paths;
});

add_filter( 'fl_less_vars', function( $vars ) {
  $mods = FLCustomizer::get_mods();
  
  for( $h = 2; $h <= 6; $h++ ){
	  $vars['b42s__h' . $h . '__color'] = $mods['b42s__h' . $h . '__color'] ?: '#4a4a4a';
	  $vars['b42s__h' . $h . '__font_weight'] = $mods['b42s__h' . $h . '__font_weight'] ?: 'inherit';
	  $vars['b42s__h' . $h . '__font_format'] = $mods['b42s__h' . $h . '__font_format'] ?: 'inherit';
  }
  
    $vars['b42s__body_font__margin_bottom'] = $mods['b42s__body_font__margin_bottom'] ?: 27;
    $vars['b42s__body_font__margin_bottom_medium'] = $mods['b42s__body_font__margin_bottom_medium'] ?: 25;
    $vars['b42s__body_font__margin_bottom_mobile'] = $mods['b42s__body_font__margin_bottom_mobile'] ?: 25;
    
    $vars['b42s__intro_text__font_size'] = $mods['b42s__intro_text__font_size'] ?: 23;
    $vars['b42s__intro_text__font_size_medium'] = $mods['b42s__intro_text__font_size_medium'] ?: 22;
    $vars['b42s__intro_text__font_size_mobile'] = $mods['b42s__intro_text__font_size_mobile'] ?: 20;
	$vars['b42s__intro_text__line_height'] = $mods['b42s__intro_text__line_height'] ?: 1.6;
	$vars['b42s__intro_text__line_height_medium'] = $mods['b42s__intro_text__line_height_medium'] ?: 1.6;
	$vars['b42s__intro_text__line_height_mobile'] = $mods['b42s__intro_text__line_height_mobile'] ?: 1.6;
	$vars['b42s__intro_text__margin_bottom'] = $mods['b42s__intro_text__margin_bottom'] ?: 37;
	$vars['b42s__intro_text__margin_bottom_medium'] = $mods['b42s__intro_text__margin_bottom_medium'] ?: 35;
	$vars['b42s__intro_text__margin_bottom_mobile'] = $mods['b42s__intro_text__margin_bottom_mobile'] ?: 32;
	$vars['b42s__intro_text__font_style'] = $mods['b42s__intro_text__font_style'] ?: 'normal';
	
	$vars['b42s__intro_text_alt__font_size'] = $mods['b42s__intro_text_alt__font_size'] ?: 23;
	$vars['b42s__intro_text_alt__font_size_medium'] = $mods['b42s__intro_text_alt__font_size_medium'] ?: 22;
	$vars['b42s__intro_text_alt__font_size_mobile'] = $mods['b42s__intro_text_alt__font_size_mobile'] ?: 20;
	$vars['b42s__intro_text_alt__line_height'] = $mods['b42s__intro_text_alt__line_height'] ?: 1.6;
	$vars['b42s__intro_text_alt__line_height_medium'] = $mods['b42s__intro_text_alt__line_height_medium'] ?: 1.6;
	$vars['b42s__intro_text_alt__line_height_mobile'] = $mods['b42s__intro_text_alt__line_height_mobile'] ?: 1.6;
	$vars['b42s__intro_text_alt__margin_bottom'] = $mods['b42s__intro_text_alt__margin_bottom'] ?: 37;
	$vars['b42s__intro_text_alt__margin_bottom_medium'] = $mods['b42s__intro_text_alt__margin_bottom_medium'] ?: 35;
	$vars['b42s__intro_text_alt__margin_bottom_mobile'] = $mods['b42s__intro_text_alt__margin_bottom_mobile'] ?: 32;
	$vars['b42s__intro_text_alt__font_style'] = $mods['b42s__intro_text_alt__font_style'] ?: 'normal';
	
	$vars['b42s__small_text__font_size'] = $mods['b42s__small_text__font_size'] ?: 14;
	$vars['b42s__small_text__font_size_medium'] = $mods['b42s__small_text__font_size_medium'] ?: 14;
	$vars['b42s__small_text__font_size_mobile'] = $mods['b42s__small_text__font_size_mobile'] ?: 13;
	$vars['b42s__small_text__line_height'] = $mods['b42s__small_text__line_height'] ?: 1.6;
	$vars['b42s__small_text__line_height_medium'] = $mods['b42s__small_text__line_height_medium'] ?: 1.6;
	$vars['b42s__small_text__line_height_mobile'] = $mods['b42s__small_text__line_height_mobile'] ?: 1.4;
	$vars['b42s__small_text__margin_bottom'] = $mods['b42s__small_text__margin_bottom'] ?: 22;
	$vars['b42s__small_text__margin_bottom_medium'] = $mods['b42s__small_text__margin_bottom_medium'] ?: 22;
	$vars['b42s__small_text__margin_bottom_mobile'] = $mods['b42s__small_text__margin_bottom_mobile'] ?: 18;
	
	$vars['b42s__header_nav__font_size'] = $mods['b42s__header_nav__font_size'] ?:16;
	$vars['b42s__header_nav__font_size_medium'] = $mods['b42s__header_nav__font_size_medium'] ?:16;
	$vars['b42s__header_nav__font_size_mobile'] = $mods['b42s__header_nav__font_size_mobile'] ?:16;
	$vars['b42s__header_nav__line_height'] = $mods['b42s__header_nav__line_height'] ?: 1.4;
	$vars['b42s__header_nav__line_height_medium'] = $mods['b42s__header_nav__line_height_medium'] ?: 1.4;
	$vars['b42s__header_nav__line_height_mobile'] = $mods['b42s__header_nav__line_height_mobile'] ?: 1.4;
	$vars['b42s__header_nav__font_weight'] = $mods['b42s__header_nav__font_weight'] ?: 'inherit';
	$vars['b42s__header_nav__font_format'] = $mods['b42s__header_nav__font_format'] ?: 'inherit';
	$vars['b42s__header_nav__letter_spacing'] = $mods['b42s__header_nav__letter_spacing'] ?: .7;
	$vars['b42s__header_nav__letter_spacing_medium'] = $mods['b42s__header_nav__letter_spacing_medium'] ?: .7;
	$vars['b42s__header_nav__letter_spacing_mobile'] = $mods['b42s__header_nav__letter_spacing_mobile'] ?: .7;
	
	$vars['b42s__blockquote__color'] = $mods['b42s__blockquote__color'] ?: '#4a4a4a';
	$vars['b42s__blockquote__font_size'] = $mods['b42s__blockquote__font_size'] ?: 22;
	$vars['b42s__blockquote__font_size_medium'] = $mods['b42s__blockquote__font_size_medium'] ?: 20;
	$vars['b42s__blockquote__font_size_mobile'] = $mods['b42s__blockquote__font_size_mobile'] ?: 15;
	$vars['b42s__blockquote__line_height'] = $mods['b42s__blockquote__line_height'] ?: 1.6;
	$vars['b42s__blockquote__line_height_medium'] = $mods['b42s__blockquote__line_height_medium'] ?: 1.6;
	$vars['b42s__blockquote__line_height_mobile'] = $mods['b42s__blockquote__line_height_mobile'] ?: 1.6;
	$vars['b42s__blockquote__margin_bottom'] = $mods['b42s__blockquote__margin_bottom'] ?: 35;
	$vars['b42s__blockquote__margin_bottom_medium'] = $mods['b42s__blockquote__margin_bottom_medium'] ?: 32;
	$vars['b42s__blockquote__margin_bottom_mobile'] = $mods['b42s__blockquote__margin_bottom_mobile'] ?: 24;
	
  return $vars;
});