<?php
/**
 * php5中public,private,protected 三种类属性的区别
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/4/25
 * Time: 23:57
 *
 * public: 公有属性或方法
在子类中可以通过self::var 或self::method 来调用　,可以通过parent::method来调用父类中的方法,但不能调用公有属性.
在实例中可以通过$obj->var或self::method 来调用
protected: 受保护类型
在子类中可以通过self::var 或self::method调用,　可以通过parent::method来调用父类中的方法
在实例中不能通过$obj->var 来调用  protected类型的方法或属性
private: 私有类型
该类型的属性或方法只能在该类中使用，在该类的实例、子类中、子类的实例中都不能调用私有类型的属性和方法
2.self 和　parent 的区别
a).在子类中常用到这两个对象。他们的主要区别在于self可以调用父类中的公有或受保护的属性，但parent不可以调用
b).self:: 它表示当前类的静态成员(方法和属性)　与 $this　不同,$this是指当前对象
 */
class BaseClass {
    public $public = 'public';
    private $private = 'private';
    protected $protected = 'protected';
    function __construct(){
    }
    function print_var(){
        print $this->public;echo '<br />';
        print $this->private; echo '<br />';
        print $this->protected; echo '<br />';
    }
}

class Subclass extends BaseClass {
    // public $public = 'public2';
    protected $protected ='protected2';
    function __construct(){
        echo $this->protected;//可以访问，因为类中定义为受保护的，所以在本类或子类中可以，子类中还可以重复付值
        echo '<br />';
        echo $this->private;//error 因为是私有的只有在定义她的类baseclass中可以用
    }
}
$obj1 = new BaseClass();
$obj1->print_var();
//echo $obj1->protected;//error 因为是受保护的，只有在本类内部或子类父类中可以调用
//echo $obj1->private;//error 同上私有的，只有在本类内调用
echo $obj1->public;
echo "<hr />";
$obj2 = new Subclass();
echo '<br />';
echo $obj2->public;echo '<br />';
echo $obj2->protected;
//echo $obj2->private;//error
//echo $obj2->protected;//error