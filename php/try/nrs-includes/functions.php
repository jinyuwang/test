<?php header("content-type:text/html;charset=utf-8");
//显示错误信息
function nrs_die( $message, $title=''){
    $message="<p>".$message."</p>";
    $back_text='&laquo; 返回';
    $message .= "\n<p><a href='javascript:history.back()'>$back_text</a></p>\n";
    if(strpos($_SERVER['PHP_SELF'], 'nrs-admin')!==false){
        $admin_dir='';
    }else{
        $admin_dir='nrs-admin/';
    }
    if(!headers_sent())
        header('Content-Type: text/html; charset=utf-8');
    if(empty($title)){
        $title='新闻发布系统 &rsaquo; 错误';
    }
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="<?php echo $admin_dir; ?>css/install.css" type="text/css" />
    </head>
    <body id="error-page">
    <?php echo $message;?>

    </body>
    </html>
    <?php
    die();
}
//载入数据库文件
function require_nrs_db(){
    global $nrsdb;
    require_once(ABSPATH.'nrs-includes/nrs-db.php');
}
function wp_get_nocache_headers() {
    $headers = array(
        'Expires' => 'Wed,  11 Jan 1984 05:00:00 GMT',
        'Last-Modified' => date( 'D,  d M Y H:i:s' ),
        'Cache-Control' => 'no-cache,  must-revalidate,  max-age=0',
        'Pragma' => 'no-cache',
    );
    return $headers;
}
function nocache_headers() {
    $headers = wp_get_nocache_headers();
    foreach( (array) $headers as $name => $field_value )
        @header("{$name}: {$field_value}");
}
function nrs(){
    global $nrs;
    require_once(ABSPATH."nrs-includes/nrs.php");
    $nrs->main();
}
?>
