<?php
require_once(__DIR__ . '/../classes/Tools.php');

// initialize
$return = new stdClass();
$return->status = 'error';

$formData = ( !empty($_POST['formData']) ? json_decode($_POST['formData']) : null );
if ( empty($formData) ) {
  echo json_encode($return);
  exit;
}

// send email
$title = 'Contacto desde Waltho.solar';
$body = '';
foreach ($formData as $field) {
  $body .= '<span>'. $field->key .':</span> '. $field->value . '<br />';
}
Tools::sendNotificationEmail($title, $body);

$return->status = 'success';
echo json_encode($return);
