<?php
require_once(__DIR__ .'/AppConfig.php');

class Tools {

  // General methods

  public static function getBaseUrl() {
    return AppConfig::getBaseUrl();
  }

  public static function getBootstrapFooter() {
    return '
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>';
  }

  public static function getBootstrapHeader() {
    return '
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->';
  }

  public static function getErrorUrl() {
    return AppConfig::getErrorUrl();
  }

  public static function isDevMode() {
    return AppConfig::isDevMode();
  }

  public static function sendNotificationEmail($title, $body) {
    // send notification email
    $to = AppConfig::getNotificationEmail();
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: Waltho <no-reply@waltho.solar>' . "\r\n";
    ob_start(); ?>
    <html>
      <head>
        <title><?php echo $title; ?></title>
        <style>
          body {
            color: #000;
            font-size: 16px;
            font-family: 'Arial', 'Tahoma';
          }
          span {
            display: inline-block;
            width: 120px;
            font-weight: bold;
          }
        </style>
      </head>
      <body>
        <?php echo $body; ?>
      </body>
    </html>
    <?php
    $message = ob_get_clean();
    $mailError = true;
    try {
      if ( mail($to, $title, $message, $headers) ) { $mailError = false; }
    } catch (Exception $ex) {}
    return $mailError;
  }

  // General database methods

	public static function getDatabase() {
		return AppConfig::getDatabase();
	}

}
