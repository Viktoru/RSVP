<?php
/**
 * @file
 * contains \Drupal\rsvplist\Plugin\Block
 */
namespace Drupal\rsvplist\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Class RSVPBlock
 *
 * @package Drupal\rsvplist\Plugin\Block
 */
  class RSVPBlock extends BlockBase {

    public function build() {
      // TODO: Implement build() method.
      return array('#markup' => $this->t('My RSVP List Block'));
    }
  }