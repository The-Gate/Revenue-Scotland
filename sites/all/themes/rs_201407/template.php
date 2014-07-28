<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function rs_201407_preprocess_html(&$vars) {
// this did not load if in the preprocess-html file!!
//  drupal_add_css(path_to_theme() . '/css/acc-201406-ie7.css', array(
//    'type' => 'file',
//    'group' => 3000,
//    'media' => 'all',
//    'browsers' => array('IE' => '(lt IE 8)&(!IEMobile)', '!IE' => FALSE),
//    'weight' => 100
//  ));
//  drupal_add_css(path_to_theme() . '/css/acc-201406-ie8.css', array(
//    'type' => 'file',
//    'group' => 3000,
//    'media' => 'all',
//    'browsers' => array('IE' => '(lt IE 9)&(!IEMobile)', '!IE' => FALSE),
//    'weight' => 100
//  ));

  $prefixes = array();
  $namespaces = explode("\n", trim($vars['rdf_namespaces']));
  foreach ($namespaces as $name) {
    list($key, $url) = explode('=', $name, 2);
    list($xml, $space) = explode(':', $key, 2);
    $url = trim($url, '"');
    if (!empty($space) && !empty($url)) {
      $prefixes[] = $space . ': ' . $url;
    }
  }
  $prefix = implode(" ", $prefixes);
  $vars['doctype'] = '<!DOCTYPE HTML>' . "\n";
  $vars['rdf']->version = '';
  $vars['rdf']->namespaces = ' xmlns="http://www.w3.org/1999/xhtml" prefix="' . $prefix . '"';
  $vars['rdf']->profile = '';
}
/**
 * theme_field()
 * 
 * theme the publications / tech manual to wrap the title in the field collection in <h2>
 * 
 * @param type $variables
 * @return string
 */
function rs_201407_field__field_title__field_publication($variables) {
  $output = '';
  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';
  }

  // Render the items.
  $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
  foreach ($variables['items'] as $delta => $item) {
    $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
    $output .= '<div class="' . $classes . '"' . $variables['item_attributes'][$delta] . '><h2>' . drupal_render($item) . '</h2></div>';
  }
  $output .= '</div>';

  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';

  return $output;
}


function rs_201407_form_alter(&$form, $form_state, $form_id) {
  if ($form_id == 'views_exposed_form') {
    $view = $form_state['view'];
    if ($view->name == 'site_search') {
      $form['keys']['#attributes']['placeholder'] = t('Search');
      $form['submit'] = array(
        '#type' => 'image_button',
        '#value' => t('Search'),
        '#src' => drupal_get_path('theme', 'rs_201407') . '/images/button_search.png',
      );
    }
  }
}