<html>
<meta charset="UTF-8">
</html>
<?php
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/4/25
 * Time: 21:34
 * 下面是继承的案例
 */
class ShopProduct{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    function __construct($title,$firstName,$mainName,$price,$numPages=0,$playLength=0){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
        $this->playLength = $playLength;
    }

    function getProducer(){
        return $this->producerFirstName." ".$this->producerMainName;
    }

    function getSummaryLine(){
        $base = "$this->title({$this->producerMainName},";
        $base .= "{$this->producerFirstName})";
        return $base;
    }
}

class CdProduct extends ShopProduct{
    function getPlayLength(){
        return $this->playLength;
    }

    function getSummaryLine(){
        $base = "{$this->title}({$this->producerMainName},";
        $base .= "{$this->producerFirstName})";
        $base .= ":playing time {$this->playLength}";
        return $base;
    }
}

class BookProduct extends ShopProduct{
    function getnumPages(){
        return $this->numPages;
    }

    function getSummaryLine(){
        $base = "{$this->title}({$this->producerMainName},";
        $base .= "{$this->producerFirstName})";
        $base .= ":page count {$this->numPages}";
        return $base;
    }
}


$product1 = new ShopProduct("My pro","Willa","Tom",5.99);
print "SummaryLine:{$product1->getSummaryLine()}<br/>";

$product2 = new CdProduct("My pro","Willa","Tom",5.99,null,5);
print "SummaryLine:{$product2->getSummaryLine()}<br/>";

$product3 = new BookProduct("My pro","Willa","Tom",5.99,10,null);
print "SummaryLine:{$product3->getSummaryLine()}<br/>";

print "类--继承的案例<br/>

子类继承父类的属性和构造行数，以及一些基本的函数。<br/>

继承之后，可以覆盖父类的函数，也可以新建自己的函数。继承可以避免类内容的重复，代码的重复。<br/>";