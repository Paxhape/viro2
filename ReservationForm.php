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

    $topo = db_query("SELECT name FROM `topology` WHERE active=1")


    $form['topology_select'] = array(
      '#type' => 'select',
      '#title' => t('Select topology to reserve'),
      '#options' => array(
        'topology1' => t("Topo1"),
        'topology2' => t("Topo2"),
      ),
      '#description' => t("Select topology"),
      '#required' => TRUE,
    );
    $form['day_select'] = array(
      '#type' => 'select',
      '#title' => t('Select day when to reserve'),
      '#options' => array(
        'day1' => t("Monday"),
        'day2' => t("Thusday"),
      ),
      '#description' => t("Select day when to reserve topology"),
      '#required' => TRUE,
    );
    $form['hour_select'] = array(
      '#type' => 'select',
      '#title' => t('Select hour when to reserve'),
      '#options' => array(
        'hour1' => t("12:00"),
        'hour2' => t("16:00"),
      ),
      '#description' => t("Select hour"),
      '#required' => TRUE,
    );
    $form['actions']['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit reservation'),
    '#button_type' => 'primary',
    );
    return $form;
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (strlen($form_state->getValue('topology_select')) > 3){
      $form_state->setErrorByName('topology_select', t('Controll error'))
    }
  }

public function submitForm(array &$form, FormStateInterface $form_state) {

  drupal_set_message(
    t('Your reservation has been sucessfully written to database')
  );
}

}
