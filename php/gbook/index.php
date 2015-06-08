<HTML>
<HEAD lang="en">
    <meta charset="UTF-8">
    <TITLE>欢迎使用简约不简单-我的留言本</TITLE>
    <style type=text/css>
        TD{
            font-size:12px;
            line-height:150%;
        }
    </style>
</HEAD>
<BODY>
<table border=1 cellspacing=0 cellspadding=0
       style="border-collapse:collapse"
       align=center width=800 bordercolor=black height="382">
    <!--style="border-collapse:collapse"使边框变成一条线，而不是两条线的-->
    <tr><td height=100 bgcolor=#6C6C6C style="font-size:30px;line-height:30px" >
            <p align="center"><font color=#ffffff face="黑体">简约不简单-我的留言本</font></p>
        </td><tr>
    <tr><td height=25>
           <p align="center"><a href=send.php>[我要写留言]</a>&nbsp;&nbsp;<a href=login.php>[管理留言]</a></p>
        </td></tr>
    <tr><td height=200>
            <?php
            $id=mysqli_connect("localhost","root","");
            mysqli_select_db($id,"test");
            $query="select * from message ";
            $result=mysqli_query($id,$query);
            if(mysqli_num_rows($result)<1){
                echo "&nbsp;目前数据表中还没有任何留言！";
            }else{ //ELSE开始
                $totalnum=mysqli_num_rows($result);
                $pagesize=10;
                @$page=$_GET["page"];
                if($page==""){
                    $page=1;
                }
                $begin=($page-1) * $pagesize;
                $totalpage=ceil($totalnum/$pagesize);

                echo "<table border=1 cellspacing=0 cellspadding=0 style='border-collapse:collapse;border-color: #55CC33' width=95% align='center'><tr><td>";

                echo "共有留言".$totalnum."条。";
                echo "每页".$pagesize."条，共".$totalpage."页<br>";

                for($j=1;$j<=$totalpage;$j++){
                    echo "<a href=index.php?page=".$j.">[".$j."]&nbsp;</a>";
                }
                //echo "<br>";
                echo "</td></tr>";

                $query="SELECT * FROM message  order by addtime desc limit $begin,$pagesize";
                $result=mysqli_query($id,$query);
                $datanum=mysqli_num_rows($result);
                for($i=1;$i<=$datanum;$i++){
                    $info=mysqli_fetch_array($result,MYSQL_ASSOC);
                    //echo "->[".$info['author']."]于".$info['addtime']."说：<br>";
                    echo "<tr><td>->[".$info['author']."]于".$info['addtime']."说：<br>";
                    echo nl2br($info['content'])."<br>";
                    if($info['reply']!=""){
                        echo "<b>管理员回复：</b>".nl2br($info['reply'])."<br>";
                    }
                    //echo "<hr>";/////////////加一条横线
                    echo "</td></tr>";/////////////加一条横线
                }
                echo "</table>";///////////
            } //ELSE结束
            mysqli_close($id);
            ?>
        </td></tr>
    <tr><td height=60 bgcolor=#6c6c6c align=center>
            <font color=#FFFFFF>版权所有&copy;：我的工作室<br>E-mail:jinyu345@163.com
        </td></tr>
</table>
</body>
</html>