<?php

/**
 * @file
 * Contains \Drupal\viro2\Controller\list_devices::listDev
 */

 namespace Drupal\viro2\Controller;

 use Drupal\Core\Controller\ControllerBase;
 use Drupal\Core\Url;
 use Symphony\Component\HttpKernel\Exception\AccessDeniedHttpException;

 class list_device extends ControllerBase {

   public function listDev() {
#definicia premennych
    $build = '';
    $rows = array();
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
 
