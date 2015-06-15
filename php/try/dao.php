<?php
header('content-type:text/html;charset=utf-8');
include 'dao.class.php';
$dao = new dao();
$sql = "select * from ep_area where parent_id=0";
$p = $dao->query($sql);
?>
