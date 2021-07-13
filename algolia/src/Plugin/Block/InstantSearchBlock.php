<?php

namespace Drupal\algolia\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "instantsearch_block",
 *   admin_label = @Translation("Instant Search Block"),
 *   category = @Translation("Instant Search Block"),
 * )
 */
class InstantSearchBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    return [
      '#theme' => 'instantsearchblock',
      '#attached' => [
        'library' => 'algolia/algolia-javascript',
      ],
    ];
  }

}
