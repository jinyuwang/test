<HTML lang="en"><meta charset="UTF-8">
<HEAD>
    <TITLE>字符串处理函数的使用</TITLE>
<BODY>
</HEAD>
<?php
//trim, ltrim, rtrim, chop, strlen
echo "trim去除两边空格<br/>
    ltrim去除左边空格<br/>
    rtrim和chop去除右边空格<br/>
    strlen输出自符串长度。<br/><br/><br/>";
//ucwords, ucfirst, strtoupper, strtolower, str_word_count
echo "ucwords, 将每个单词首字符大写<br/>
    ucfirst, 将每个字符串首字母大写<br/>
    strtoupper, 将字符全部都大写<br/>
    strtolower, 将字符全部都小写<br/>
    str_word_count, 统计字符串中单词个数。<br/>";

//字符串查找
//substr_count, 查找子串在字符串中出现次数.字符串offset是从0开始计算；
//strrpos, 返回子串在母串中出现最后一处的下标
//strpos, 返回子串在母串中第一次出现的位置
//strstr, 查找子串在母串中第一次出现的位置
//strrchr
//
phpinfo();
?>
</BODY>
</HTML>
