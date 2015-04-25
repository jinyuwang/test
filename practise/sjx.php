<html>
    <meta charset="UTF-8">
</html>
<?php
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/4/25
 * Time: 20:34
 */

$string = "This weekend,I'm going shopping for a pet chicken.";
$vowels = 0;
for ($i = 0, $j = strlen($string); $i < $j; $i++) {
    if (strstr('aeiouAEIOU', $string[$i])) {
        $vowels++;
    }
}
echo $vowels;
echo "<br/>";
/**
 * php画个菱形
 *
 * 思路：多少行for一次，然后在里面空格和标记符号for一次。
 *
 * @author jiqing
 * @date 2012-08-02
 *
 */
echo "php画个菱形<br/>";
//上半部分
for ($i=0;$i<10; $i++) {
    for ($j = 0; $j < 9 - $i; $j++) {
        echo "&nbsp";
    }
    for ($k = 0; $k < (2 * $i + 1); $k++) {
        echo "·";
    }
    echo "<br/>";
}
//下半部分
for ($i=1; $i<10;$i++){
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp";
    }
    for ($k = (18 - 2 * $i + 1); $k > 0; $k--) {
        echo "·";
    }
    echo "<br/>";
}

/**
 * PHP实现杨辉三角
 *
 * 思路：每一行的第一位和最后一位是1，没有变化，中间是前排一位与左边一排的和，这种算法是用一个二维数组保存，一行一行的输出。
 * 1
1 1
1 2 1
1 3 3 1
1 4 6 4 1
1 5 10 10 5 1
 *
 * @author jiqing
 * @date 2012-08-02
 *
 */
//变量初始化
echo "PHP实现杨辉三角<br/>";
$arr = array();//设置固定值1
for ($i = 0; $i < 9; $i++) {
    $arr[$i][0] = 1;
    $arr[$i][$i] = 1;
}              //计算中间值
for ($i = 2; $i < 9; $i++) {
    for ($j = 1; $j < $i; $j++) {
        $arr[$i][$j] = $arr[$i - 1][$j - 1] + $arr[$i - 1][$j];
    }
}              //排列输出展示
for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . "&nbsp;";
    }
    echo "<br/>";
}
