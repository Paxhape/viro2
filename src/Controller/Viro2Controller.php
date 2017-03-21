<?php

/**
 * @file
 * Contains \Drupal\viro2\Controller\Viro2Controller.
 */

 namespace Drupal\viro2\Controller;

 use Drupal\Core\Controller\ControllerBase;
 use Drupal\Core\Url;

 class Viro2Controller extends ControllerBase {

   /**
   * @function
   * Funkcia intra do ViRo2 prostredia
   */

   public function list_topologies(){

    $build='';
    $rows = array();

    $select = db_query("SELECT name,description FROM `topology` WHERE active=1");
    while ($prvok = $select->fetchAll()) {
      $rows[] = array($prvok->name,
              $prvok->description,
            );
    }

    $header = array(t('Name'),t('Description'));
    $build['topologies'] = array(
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $rows,
      '#empty' => t('No topologies available'),
    );
    return $build;
   }

   /**
   * @function
   * Funkcia intra do ViRo2 prostredia
   */

   public function list_reservations (){

     $build = '' ;
     $rows = array();

     $select = db_query("");

   }

 }
