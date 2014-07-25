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