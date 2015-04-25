<html>
<meta charset="UTF-8">
</html>
<?php
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/4/25
 * Time: 22:09
 * 高级特性
包括：
1.静态方法和属性（通过类而不是对象来访问数据和功能）
2.抽象类和接口（设计，实现分离）
3.错误处理（异常）
4.Final类和方法（限制继承）
5.拦截器（自动委托）
6.析构方法（对象销毁前的清理工作）
7.克隆对象（创建对象的副本）
8.把对象解析成字符串
 */

class StaticExample{
    static public $aNum = 10;
    static public function sayHello(){
        print "hello";
    }
}
print StaticExample::$aNum."<br/>";
StaticExample::sayHello();
print "<pre/>静态方法的小例子<br/>
tips:<br/>
1.静态方法不能访问类中的普通属性，因为那些属性属于一个对象，但可以访问静态属性。<br/>
2.我们不能在对象中调用静态方法，因此不能再静态方法中使用伪变量\$this。<br/>
";
print "<pre/>静态方法的大例子<br/>";
class ShopProduct{
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    private $discount = 0;
    private $id = 0;
    function __construct($title,$firstName,$mainName,$price){
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }


    public function setID($id){
        $this->id = $id;
    }
    public static function getInstance($id,PDO $pdo){
        $query = "select * from products where id= '$id'";
        //var_dump($query);
        $stmt = $pdo->query($query);
        var_dump($stmt);
        $row = $stmt->fetch();

        if(empty($row)){
            return null;
        }

        //var_dump($row);

        if($row['type'] == "book"){
            $product = new BookProduct($row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price'],
                $row['numpages']
            );
        }else if($row['type'] == "cd"){
            $product = new CdProduct($row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price'],
                $row['playlength']
            );
        }else{
            $product = new ShopProduct($row['title'],
                $row['firstname'],
                $row['mainname'],
                $row['price']
            );
        }
        $product->setId($row['id']);
        $product->setDiscount($row['discount']);

        var_dump($product);

        return $product;
    }

    public function getProducerFirstName(){
        return $this->producerFirstName;
    }

    public function getProducerMainName(){
        return $this->producerMainName;
    }

    public function setDiscount($num){
        $this->discount = $num;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function getTitle(){
        return $this->title;
    }

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
    private $playLength;
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
    private $numPages = 0;
    function __construct($title,$firstName,$mainName,$price,$numPages){
        parent::__construct($title,$firstName,$mainName,$price);
        $this->numPages = $numPages;
    }
    function getnumPages(){
        return $this->numPages;
    }

    function getSummaryLine(){
        $base = parent::getSummaryLine();
        $base .= ":page count {$this->numPages}";
        return $base;
    }
}

/**
 * 用于显示对象的--getSummaryLine()
 * @param ShopProduct $obj
 * @return null
 */
function showinfo(ShopProduct $obj=null){
    if(!empty($obj)) {
        echo $obj->getSummaryLine();
    }else{
        var_dump($obj);
        echo "查无数据<pre/>";
    }
    return null;
}

$dsn = "mysql:host=localhost;dbname=test";
$pdo = new PDO($dsn,"test","test");
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$obj = ShopProduct::getInstance(0,$pdo);
var_dump($obj);
echo "===========================<br/>";
showinfo($obj);
$obj = CdProduct::getInstance(1,$pdo);
var_dump($obj);
echo "===========================<br/>";
showinfo($obj);
$obj = ShopProduct::getInstance(3,$pdo);
var_dump($obj);
echo "===========================<br/>";
showinfo($obj);
$obj = ShopProduct::getInstance(2,$pdo);
var_dump($obj);
echo "===========================<br/>";
showinfo($obj);
