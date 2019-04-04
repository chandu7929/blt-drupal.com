<?php

namespace Drupal\books;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Books entity.
 *
 * @see \Drupal\books\Entity\BooksEntity.
 */
class BooksEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\books\Entity\BooksEntityInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished books entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published books entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit books entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete books entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add books entities');
  }

}
