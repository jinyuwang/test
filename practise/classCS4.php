<html>
<meta charset="UTF-8">
</html>
<?php
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/4/25
 * Time: 21:44
 * 类中  进一步添加访问权限设置
 */
class ShopProduct{
    private $title;
    private $producerMainName;
    private $producerFirstName;
    //在子类中可以通过self::var 或self::method调用,　可以通过parent::method来调用父类中的方法
    //在实例中不能通过$obj->var 来调用  protected类型的方法或属性
    protected $price;
    //该类型的属性或方法只能在该类中使用，在该类的实例、子类中、子类的实例中都不能调用私有类型的属性和方法
    private $discount = 0; //属性设置为私有的，只能通过方法来设置和获取
    function __construct($title,$firstName,$mainName,$price){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducerFirstName(){
        return $this->producerFirstName;
    }

    public function getProducerMainName(){
        return $this->producerMainName;
    }
//对private属性进行set和get操作
    public function setDiscount($num){
        $this->discount = $num;
    }
//对private属性进行set和get操作
    public function getDiscount(){
        return $this->discount;
    }

    public function getTitle(){
        return $this->title;
    }
//protect属性,子类可以对其进行操作
    public function getPrice(){
        return ($this->price - $this->discount);
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
    private $playLength; //属性设置为私有的，只能通过方法来设置和获取
    function __construct($title,$firstName,$mainName,$price,$playLength){
        parent::__construct($title,$firstName,$mainName,$price);//继承父类的构造函数
        $this->playLength = $playLength;
    }

    function getPlayLength(){
        return $this->playLength;
    }

    function getSummaryLine(){
        $base = parent::getSummaryLine();
        $base .= ":playing time {$this->playLength}";
        return $base;
    }
}

class BookProduct extends ShopProduct{
    private $numPages = 0; //属性设置为私有的，只能通过方法来设置和获取
    function __construct($title,$firstName,$mainName,$price,$numPages){
        parent::__construct($title,$firstName,$mainName,$price);
        $this->numPages = $numPages;
    }
    function getNumPages(){
        return $this->numPages;
    }

    function getSummaryLine(){
        $base = parent::getSummaryLine();
        $base .= ":page count {$this->numPages}";
        return $base;
    }
}


$product1 = new ShopProduct("My pro","Willa","Tom",5.99);
print "SummaryLine:{$product1->getSummaryLine()}<br/>";
$product1->setDiscount(1);

$product2 = new CdProduct("My pro","Willa","Tom",5.99,5);
print "SummaryLine:{$product2->getSummaryLine()}<br/>";

$product3 = new BookProduct("My pro","Willa","Tom",5.99,10);
print "SummaryLine:{$product3->getSummaryLine()}<br/>";

print "类--访问权限设置<br/>

一般属性设置为私有的，只能通过方法来设置和获取，这样能保证安全性。<br/>
";