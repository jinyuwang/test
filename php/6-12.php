<HTML>
<HEAD lang="en"><meta charset="UTF-8">
    <TITLE>字符串替换函数综合范例</TITLE>
</HEAD>
<BODY>
    <?php
    //单个字符替换
    $str = "当所有的人[逗]离开我的时候[逗]你劝我要耐心等候[句]";
    echo "原字符串：<b>".$str."</b><br>";
    $str = str_replace("[","(",$str);
    $str = str_replace("]",")",$str);
    echo "字符替换之后：<b>".$str."</b><br>";
    //字符串替换
    $str = str_replace("(逗)","，",$str);
    $str = str_replace("(句)","。",$str);
    echo "字符串替换之后：<b>".$str."</b><br>";
    ?>

        <?php
    echo "///////////////////////////////////////////////////////////str_replace()<br>";
        //单个字符替换
        $str = "当所有的人[逗]离开我的时候[逗]你劝我要耐心等候[句]";
        echo "原字符串：<b>".$str."</b><br>";
        $arr1 =  array("[","]");
        $arr2 = array("({","})");
        $str = str_replace($arr1,$arr2,$str);/////////////////高级替换，使用数组换数组
        echo "字符替换之后：<b>".$str."</b><br>";
        //字符串替换
        $arr3 = array("({逗})","({句})");
        $arr4 = array("，，，","。。。");
        $str = str_replace($arr3,$arr4,$str);
        echo "字符串替换之后：<b>".$str."</b><br>";
        ?>

    <?php
    echo "///////////////////////////////////////////////////////////substr()<br>";
    //构造字符串
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    echo "原字符串：<b>".$str."</b><br>";
    //按各种方式进行截取
    $str1 = substr($str,5);
    echo "从第5个字符开始取至最后：".$str1."<br>";
    $str2 = substr($str,9,4);
    echo "从第9个字符开始取4个字符：".$str2."<br>";
    $str3 = substr($str,-5);
    echo "取倒数5个字符：".$str3."<br>";
    $str4 = substr($str,-8,4);
    echo "从倒数第8个字符开始向后取4个字符：".$str4."<br>";
    $str5 = substr($str,-8,-2);
    echo "从倒数第8个字符开始取到倒数第2个字符为止：".$str5."<br>";
    ?>

    <?php
    echo "///////////////////////////////////////////////////////////explode()<br>";
    //构造字符串
    $str = "苹果，空心菜，香蕉，萝卜，大蒜，牛肉";
    echo "原字符串：<b>".$str."</b><br>";
    echo "1.以逗号为分割符分割字符串：<br>";
    $arr1 = explode("，",$str);
    echo "---\$arr1[0]的值：".$arr1[0]."<br>";
    echo "---\$arr1[4]的值：".$arr1[4]."<br>";
    echo "2.分割时指定limit参数：<br>";
    $arr2 = explode("，",$str,3);
    echo "---\$arr2[0]的值：".$arr2[0]."<br>";
    echo "---\$arr2[1]的值：".$arr2[1]."<br>";
    echo "---\$arr2[2]的值：".$arr2[2]."<br>";
    //echo "---\$arr2[4]的值：".$arr2[4]."<br>";/////报错，下标只有：0,1,2
    ?>

    <?php
    echo "///////////////////////////////////////////////////////////str_split()<br>";
    //分割英文字符串
    $str = "Quietly I leave,just as quietly I came.";
    echo "原字符串：<b>".$str."</b><br>";
    echo "1.以默认长度分割字符串：<br>";
    $arr1 = str_split($str);
    echo "---\$arr1[0]的值：".$arr1[0]."<br>";
    echo "---\$arr1[1]的值：".$arr1[1]."<br>";
    echo "---\$arr1[10]的值：".$arr1[10]."<br>";
    echo "2.以指定长度5分割字符串：<br>";
    $arr2 = str_split($str,5);
    echo "---\$arr2[0]的值：".$arr2[0]."<br>";
    echo "---\$arr2[1]的值：".$arr2[1]."<br>";
    echo "---\$arr2[5]的值：".$arr2[5]."<br>";
    //测试分割中文
    $str2="轻轻地我走了，正如我轻轻地来。";
    echo "原字符串：<b>".$str2."</b><br>";
    echo "1.以指定长度5分割字符串：<br>";
    $arr3 = str_split($str2,5);
    echo "---\$arr3[0]的值：".$arr3[0]." <br>";
    echo "---\$arr3[1]的值：".$arr3[1]." <br>";
    echo "2.以指定长度4分割字符串：<br>";
    $arr4 = str_split($str2,4);
    echo "---\$arr4[0]的值：".$arr4[0]." <br>";
    echo "---\$arr4[1]的值：".$arr4[1]." <br>";
    echo "---\$arr4[4]的值：".$arr4[4]." <br>";
    //合并输出，可正常显示
    for($i=0;$i<count($arr4);$i++)
    {
      echo $arr4[$i];
    }
    echo "<br/>";
    ?>
</BODY>
</HTML>
