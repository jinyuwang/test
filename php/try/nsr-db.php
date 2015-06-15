<?php header("content-type:text/html;charset=utf-8");
//-----------连接数据库服务器，选择数据库-----------------
require_once("nrs-config.php");

function nrsdb($dbuser, $dbpassword, $dbname, $dbhost) {
return $this->__construct($dbuser, $dbpassword, $dbname, $dbhost);
}
function __construct($dbuser, $dbpassword, $dbname, $dbhost){
register_shutdown_function(array(&$this, "__destruct"));
$this->dbuser=$dbuser;
//连接数据库服务器
$this->dbh=@mysql_connect($dbhost, $dbuser, $dbpassword, true);
if(!$this->dbh){
nrs_die(sprintf('
<h1>数据库连接错误</h1>
<p>您在<code>nrs-config. php</code>文件中提供的数据库用户名和密码可能不正确，或者无法与数据库服务器<code>%s</code>连接. 。</p>
<ul>
    <li>您确认您提供的用户名和密码正确么？</li>
    <li>您确认您提供的主机名正确么？</li>
    <li>您确认数据库服务器正常运行么？</li>
</ul>
<p>如果您无法确定这些问题，请联系您的主机管理员。</p>',  $dbhost),  'db_connect_fail');
return;
}
$this->reday=true;
//选择数据库
$this->select($dbname);
}
function __destruct(){
@mysql_close($this->dbh);
return true;
}
//选择数据库
function select($db){
if(!mysql_select_db($db, $this->dbh)){	//选择数据库失败
$this->reday=false;
nrs_die(sprintf('
<h1>无法选择数据库</h1>
<p>我们可以和数据库服务器建立连接(您提供的用户名和密码正确)，但是我们无法选择 <code>%1$s</code> 数据库。</p>
<ul>
    <li>您确认数据库存在？</li>
    <li>您确认用户 <code>%2$s</code> 拥有使用 <code>%1$s</code> 数据库的权限？</li>
    <li>在某些系统上您的数据库名可能还包含了您用户名的前缀，例如 <code>username_%1$s</code>，会不会这里出了问题？</li>
</ul>
<p如果您不知道如何设置一个数据库，您应该<strong>联系您的主机管理员</strong>。</p>',  $db,  $this->dbuser),  'db_select_fail');
return;
}
}
?>