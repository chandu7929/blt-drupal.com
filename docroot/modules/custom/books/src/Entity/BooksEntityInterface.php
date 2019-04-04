<?php

namespace Drupal\books\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Books entities.
 *
 * @ingroup books
 */
interface BooksEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  /**
   * Gets the Books title.
   *
   * @return string
   *   Title of the Books.
   */
  public function getTitle();

  /**
   * Sets the Books title.
   *
   * @param string $title
   *   The Books title.
   *
   * @return \Drupal\books\Entity\BooksEntityInterface
   *   The called Books entity.
   */
  public function setTitle($title);

  /**
   * Gets the Books creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Books.
   */
  public function getCreatedTime();

  /**
   * Sets the Books creation timestamp.
   *
   * @param int $timestamp
   *   The Books creation timestamp.
   *
   * @return \Drupal\books\Entity\BooksEntityInterface
   *   The called Books entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Books published status indicator.
   *
   * Unpublished Books are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Books is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Books.
   *
   * @param bool $published
   *   TRUE to set this Books to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\books\Entity\BooksEntityInterface
   *   The called Books entity.
   */
  public function setPublished($published);

}
