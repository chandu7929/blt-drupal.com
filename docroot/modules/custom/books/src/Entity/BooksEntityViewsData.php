<?php

namespace Drupal\books\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Books entities.
 */
class BooksEntityViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
