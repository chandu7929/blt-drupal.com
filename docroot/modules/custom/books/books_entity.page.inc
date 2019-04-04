<?php

/**
 * @file
 * Contains books_entity.page.inc.
 *
 * Page callback for Books entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Books templates.
 *
 * Default template: books_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_books_entity(array &$variables) {
  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
