<HTML>
<HEAD>
    <TITLE>用substr_count函数统计字符串出现次数</TITLE>
</HEAD>
<BDOY>
    <?php
    $str="I am an abstract about abroad.";
    echo substr_count($str,"ab");
    echo "，";
    echo substr_count($str,"ab",6,4);
    ?>
</BDOY>
</HTML>