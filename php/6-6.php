<HTML>
<HEAD>
    <TITLE>字符串处理中的单词处理</TITLE>
</HEAD>
<BDOY>
    <?php
    $str="ni hao, wo jiao Wang Xiao-ming.";

    echo "原始字符串：".$str."<br>";
    $str1=ucfirst($str);
    echo "执行ucfirst()之后：".$str1."<br>";
    $str2=ucwords($str);
    echo "执行ucwords()之后：".$str2."<br>";
    $str3=strtoupper($str);
    echo "执行strtoupper()之后：".$str3."<br>";
    $str4=strtolower($str);
    echo "执行strtolower()之后：".$str4."<br>";
    echo "字符串中一共有：".str_word_count($str)."个单词。";
    ?>
</BDOY>
</HTML>