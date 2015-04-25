<html>
<meta charset="UTF-8">
</html>
<?php
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/4/25
 * Time: 21:02
 */
/**
 * 1.php与对象
 * 知识点：
 * a.关于引用赋值
 * $other = &my_obj;
 * 按照引用复制，指向相同对象。
 */
echo "关于引用赋值:\$other = &amp\$my_obj;<br/>";
$my_obj = 1;
echo $my_obj."<br/>";//１
$other = &$my_obj;
echo $other."<br/>";//1
$my_obj = 2;
echo $other."<br/>";//2
echo "//按照引用复制，指向相同对象。<br/>";
/**
 * 2.类与对象
知识点
a.类是对象的模板，对象是类实现的实例
变量函数对应类中的属性和方法。
和函数不同的是，方法必须在类体中声明。
$this是伪变量，可以将类指向一个对象实例。
 */
echo "类与对象:类是对象的模板，对象是类实现的实例<br/>
变量函数对应类中的属性和方法。<br/>
和函数不同的是，方法必须在类体中声明。<br/>
\$this是伪变量，可以将类指向一个对象实例。<br/>
";
class ShopProduct{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;
    function __construct($title,$firstName,$mainName,$price){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    function getProducer(){
        return $this->producerFirstName." ".$this->producerMainName;
    }
}
$product1 = new ShopProduct("My pro","Willa","Tom",5.99);
print "author:{$product1->getProducer()}\n";



?>