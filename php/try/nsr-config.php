<?php header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/6/14
 * Time: 21:51
 */
define('DB_NAME',  'test');
define('DB_USER',  'test');
define('DB_PASSWORD',  'test');
define('DB_HOST',  '127.0.0.1');
if ( !defined('ABSPATH') )
    define('ABSPATH',  dirname(__FILE__) .'/');
require_once(ABSPATH .  'nrs-settings.php');
?>
