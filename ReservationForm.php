<?php

/**
 * @file
 *Contrains Drupal\viro2\Form\ReservationForm.
 */

namespace Drupal\viro2\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class FirmaForm extends FormBase {

  public function getFormId(){
    return 'reserve_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['reserve_topo'] = array(
      '#type' => 'textfield'
    )
  }
}
