<?php

/**
 * @file
 * Contains \Drupal\firma\Plugin\Block\FirmaBlock.
 */

namespace Drupal\viro\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;

/**
 * @Block(
 *   id = "firma_block"
 * )
 */


class ViroBlock extends BlockBase {

  public function build(){
    $build='';

    $select = db_select('node_field_data','n');
    $select->fields('n', array('nid','title'));
    $select->condition('n.status',1)
    ->orderBy('n.created','DESC')
    ->range(0,5);
    $entries = $select->execute()->fetchAll();

    $rows = array();
    foreach ($entries as $entry) {
      $url = Link::createFromRoute($entry->title,
      'entity.node.canonical',
      ['node' => $entry->nid],
      ['attributes' => ['class' => 'my-link-class']]);
      $rows[] = $url;
    }

    return array(
    '#theme' => 'item_list' ,
    '#items' => $rows,
    '#list_type' => 'ol'
    );
  }

}
