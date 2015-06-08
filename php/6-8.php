<HTML>
<HEAD lang="en"><meta charset="UTF-8">
    <TITLE>用substr_count函数统计字符串出现次数</TITLE>
</HEAD>
<BDOY>
    <?php
    $str="I am an abstract about abroad.";
    echo "原始字符串：".$str."<br>";
    echo "子字符串：\"ab\"<br>";
    echo substr_count($str,"ab");
    echo "，";
    echo substr_count($str,"ab",6,4);
    ?>
</BDOY>
</HTML>