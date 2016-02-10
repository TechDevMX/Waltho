<?php
error_reporting(1);
ini_set('display_errors', 1);
date_default_timezone_set('America/Mexico_City');

class AppConfig {
  // Protected static properties
  protected static $database = null;

  public static function getBaseUrl() {
    return 'http://waltho.solar';
  }

	public static function getDatabase() {
		return self::$database;
	}

  public static function getErrorUrl() {
    return self::getBaseUrl() .'/error/';
  }

  public static function getNotificationEmail() {
    return 'athoma@techdev.mx';
  }

  public static function isDevMode() {
    return false;
  }

}
