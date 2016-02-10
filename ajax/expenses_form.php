<?php
require_once(__DIR__ . '/../classes/Tools.php');

// initialize
$return = new stdClass();
$return->status = 'error';

$installationType = !empty($_POST['installationType']) ? trim(htmlspecialchars($_POST['installationType'], ENT_COMPAT, 'UTF-8')) : '';

$expensesRange = !empty($_POST['expensesRange']) ? trim(htmlspecialchars($_POST['expensesRange'], ENT_COMPAT, 'UTF-8')) : '';

$email = !empty($_POST['email']) ? trim(htmlspecialchars($_POST['email'], ENT_COMPAT, 'UTF-8')) : '';

// validate
if ( empty($installationType)
|| !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
  echo json_encode($return);
  exit;
}

// send email
$title = 'Formulario de ahorro desde Waltho.solar';
$body = '<span>Tipo de instalación:</span> '. $installationType;
if ($installationType == 'Residencial') {
  $body .= '<br /><span>Gasto mensual:</span> '. $expensesRange;
}
$body .= '<br /><span>Email:</span> '. $email;
Tools::sendNotificationEmail($title, $body);

$return->status = 'success';
echo json_encode($return);
