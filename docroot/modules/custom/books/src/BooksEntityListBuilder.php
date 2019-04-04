<?php

namespace Drupal\books;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Books entities.
 *
 * @ingroup books
 */
class BooksEntityListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Books ID');
    $header['title'] = $this->t('Title');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\books\Entity\BooksEntity */
    $row['id'] = $entity->id();
    $row['title'] = Link::createFromRoute(
      $entity->label(),
      'entity.books_entity.edit_form',
      ['books_entity' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
