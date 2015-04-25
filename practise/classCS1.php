<html>
<meta charset="UTF-8">
</html>
<?php
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/4/25
 * Time: 21:14
 */
//一个更复杂的例子
/**
 * Class CdProduct
 *
这三个类写在同一个文件下面，说明php支持一个文件包含多个类。只是这样有点不太好，最好单独一个文件，把他们引入进来，然后创建对象，使用。
这三个类还有一个缺点就是，代码重复了，每个类中都有getSummaryLine()方法，和getProducer()方法。这样就冗余了，这个时候怎么办呢？
如果类之间有一定的继承关系，可以用继承这种机制，当然也不要继承很多层次，那样太深了也不好。
适当的继承能够让类更简洁，更利索！
 */
class CdProduct{
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    function __construct($title,$firstName,$mainName,$price,$playLength){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->playLength = $playLength;
    }

    function getPlayLength(){
        return $this->playLength;
    }

    function getSummaryLine(){
        $base = "{$this->title}({$this->producerMainName},";
        $base .= "{$this->producerFirstName})";
        $base .= ":playing time -{$this->playLength}";
        return $base;
    }

    function getProducer(){
        return $this->producerFirstName." ".$this->producerMainName;
    }
}

class BookProduct{
    public $numPages;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    function __construct($title,$firstName,$mainName,$price,$numPages){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
    }

    function getnumPages(){
        return $this->numPages;
    }

    function getSummaryLine(){
        $base = "{$this->title}({$this->producerMainName},";
        $base .= "{$this->producerFirstName})";
        $base .= ":page count -{$this->numPages}";
        return $base;
    }

    function getProducer(){
        return $this->producerFirstName." ".$this->producerMainName;
    }
}

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
    function getSummaryLine(){
    $base = "{$this->title}({$this->producerMainName},";
    $base .= "{$this->producerFirstName})";
    return $base;
}

    function getProducer(){
        return $this->producerFirstName." ".$this->producerMainName;
    }
}
$product1 = new ShopProduct("My pro","Willa","Tom",5.99);
print "author:{$product1->getProducer()}<br/>";

$product2 = new CdProduct("My pro","Willa","Tom",5.99,1);
print "PlayLength:{$product2->getPlayLength()}<br/>";
print "product2(CdProduct)--getSummaryLine:&nbsp;{$product2->getSummaryLine()}<br/>";

$product3 = new BookProduct("My pro","Willa","Tom",5.99,10);
print "numPages:{$product3->getnumPages()}<br/>";
print "product3(BookProduct)--getSummaryLine:&nbsp;{$product3->getSummaryLine()}<br/>";
?>