<?php

add_theme_support( 'title-tag' );

function my_theme_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/dist/output.css', array(), filemtime(get_template_directory() . '/dist/output.css'), 'all');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

  


function register_custom_menus() {
    register_nav_menu('top-links', 'Top Header Links');
}
add_action('init', 'register_custom_menus');




class Custom_Dropdown_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
      $indent = str_repeat("\t", $depth);
      $output .= "\n$indent<ul class=\"dropdown-menu absolute left-0 mt-2 hidden bg-white text-gray-800 shadow-lg py-2 rounded z-50 min-w-max text-sm\">\n";
    }
  
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      $has_children = in_array('menu-item-has-children', $item->classes);
      $icon = $has_children ? '<svg class="w-4 h-4 ml-1 transition-transform duration-300 caret-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>' : '';
  
      $output .= '<li class="relative">';
      $output .= '<a href="' . esc_url($item->url) . '" class="dropdown-toggle inline-flex items-center px-3 py-2 uppercase focus:outline-none" ' . ($has_children ? 'data-toggle="dropdown"' : '') . '>';
      $output .= $item->title . $icon;
      $output .= '</a>';
  }
  
  
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
      $output .= "</li>\n";
    }
  
    function end_lvl( &$output, $depth = 0, $args = array() ) {
      $output .= "</ul>\n";
    }
}
  

  class Mobile_Dropdown_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
      $output .= '<ul x-show="openDropdown" x-cloak  class="mt-2 submenu text-sm text-gray-700 border rounded-sm border-gray-200 p-2">';
    }
  
    function end_lvl( &$output, $depth = 0, $args = array() ) {
      $output .= '</ul>';
    }
  
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      $has_children = in_array('menu-item-has-children', $item->classes);
      $title = esc_html($item->title);
      $url = esc_url($item->url);
  
      if ($has_children) {
        $output .= '<li x-data="{ openDropdown: false }" class="flex flex-col">';
        $output .= '<button type="button" @click="openDropdown = !openDropdown" class="flex items-center justify-between gap-2 py-2 w-full text-left">';
        $output .= '<span>' . $title . '</span>';
        $output .= '<svg :class="{ \'!rotate-180\': openDropdown }" class="w-4 h-4 ml-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">';
        $output .= '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />';
        $output .= '</svg>';
        $output .= '</button>';
      } else {
        $output .= '<li>';
        $output .= '<a href="' . $url . '" class="block py-2">' . $title . '</a>';
      }
    }
  
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
      $output .= '</li>';
    }
  }
  