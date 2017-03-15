<?php

/**
 * @file
 * Contains \Drupal\viro2\Controller\list_devices::listDev
 */

 namespace Drupal\viro2\Controller;

 use Drupal\Core\Controller\ControllerBase;

 class list_device extends ControllerBase {

   /**
   *
   *
   */

   public function listDev() {
#definicia premennych
    $build = '';
    $pomArray = '';
    $rows = array(explode("\n",shell_exec('virsh list --all')));

     $header =  array(t('Id'), t('Name'), t('State'));
     $build['table'] = array(
       '#type' => 'table',
       '#header' => $header,
       '#rows' => $rows,
       '#empty' => t('No Entries available')
     );
     return $build;
   }

 }
