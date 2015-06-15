<?php header("content-type:text/html;charset=utf-8");
define( 'ABSPATH',  dirname(__FILE__) .'/' );
error_reporting(E_ALL);
if ( file_exists( ABSPATH .'nrs-config.php') ) {
    require_once( ABSPATH .'nrs-config.php' );
} elseif ( file_exists( dirname(ABSPATH) .'/nrs-config.php' ) && ! file_exists( dirname(ABSPATH).'/nrs-settings.php' ) ) {
    require_once( dirname(ABSPATH).'/nrs-config.php' );
} else {
    if (strpos($_SERVER['PHP_SELF'],  'nrs-admin') !== false) $path = '';
    else $path = 'nrs-admin/';
    require_once( ABSPATH .'/nrs-includes/functions.php' );
    nrs_die(sprintf('缺少 <code>nrs-config.php</code> 文件。现在您可以通过这个 Web 界面创建一个 <code>nrs-config.php</code> 文件，您也可以手动创建它。</p><p><a href=\'%ssetup-config.php\' class=\'button\'>创建配置文件</a>',  $path),  '新闻发布系统 &rsaquo; 错误');
}
?>
