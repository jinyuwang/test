<HTML>
<HEAD lang="en"><meta charset="UTF-8">
    <TITLE>nl2br()函数的使用</TITLE>
</HEAD>
<BDOY>

    <form action="#" method="post">
        请输入一段包含回车的文字：<br>
        <textarea cols="30" rows="6" name="content"></textarea>
        <input type=submit value="提交看效果">
    </form>

    <?php
    $content=$_POST["content"];
    //如果用户输入内容不为空
    if($content!=""){
        echo "<hr>";
        echo "直接输出接收到的内容：<br>";
        echo $content;
        echo "<br>（内容长度：".strlen($content)."）<br>";
        echo "<hr>";
        echo "用nl2br()处理接收到的内容，然后输出：<br>";
        echo nl2br($content);
        echo "<br>（内容长度：".strlen(nl2br($content))."）<br>";
    }
    ?>
</BDOY>
</HTML>
