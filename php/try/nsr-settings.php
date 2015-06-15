<?php header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/6/14
 * Time: 21:56
 */
//设置时区
date_default_timezone_set("Asia/ShangHai");
require_once(ABSPATH. "nrs-includes/functions.php");
require_nrs_db();
if(!is_nrs_installed() && !defined("NRS_INSTALLING")){
    $message = "出错了，数据库不完整。<br />①请将数据库<code style='padding:5px;color:brown;'>". DB_NAME. "</code>清空；<br />②删除文件<code style='padding:5px;color:brown;'>nrs-config. php</code>。<br /><br />然后重试！";
    nrs_die($message);
}
require_once(ABSPATH. "nrs-admin/includes/post.php");
require_once(ABSPATH. "nrs-admin/includes/taxonomy.php");
require_once(ABSPATH. "nrs-admin/includes/link.php");
require_once(ABSPATH. "nrs-admin/includes/user.php");
?>
