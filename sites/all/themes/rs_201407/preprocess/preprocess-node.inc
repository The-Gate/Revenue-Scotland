<?php

function rs_201407_alpha_preprocess_node(&$vars) {
// the category_overview displays empty regions which then get styled.
  if ($vars['type'] == 'category_overview') {
    drupal_add_js(drupal_get_path('theme', 'rs_201407') . '/js/category_overview.js');
  }
}
?>