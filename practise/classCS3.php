<html>
<meta charset="UTF-8">
</html>
<?php
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/4/25
 * Time: 21:39
 * 子类中也有自己的构造方法
 */
class ShopProduct{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    function __construct($title,$firstName,$mainName,$price){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
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
    public $playLength;
    function __construct($title,$firstName,$mainName,$price,$playLength){
        parent::__construct($title,$firstName,$mainName,$price);//继承父类的构造函数
        $this->playLength = $playLength;
    }

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
    public $numPages;
    function __construct($title,$firstName,$mainName,$price,$numPages){
        parent::__construct($title,$firstName,$mainName,$price);
        $this->numPages = $numPages;
    }
    function getNumPages(){
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

$product2 = new CdProduct("My pro","Willa","Tom",5.99,5);
print "SummaryLine:{$product2->getSummaryLine()}<br/>";

$product3 = new BookProduct("My pro","Willa","Tom",5.99,10);
print "SummaryLine:{$product3->getSummaryLine()}<br/>";

print "类--继承的案例<br/>

结果同上一个效果一点，这里面每个子类都有自己的构造方法了，同时继承了父类parent::__construct中的构造方法。这样就保证了子类的灵活性。不完全受制于父类。<br/>
";