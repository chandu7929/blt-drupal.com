<?php

/**
 * @file
 * Theme settings form for BLT Drupal theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function blt_drupal_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['blt_drupal'] = [
    '#type' => 'details',
    '#title' => t('BLT Drupal'),
    '#open' => TRUE,
  ];

  $form['blt_drupal']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
