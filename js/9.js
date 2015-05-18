//JS数据类型：字符串（String）、数字(Number)、布尔(Boolean)、数组(Array)、对象(Object)、空（Null）、未定义（Undefined）。
//js拥有动态类型
var x;               // x 为 undefined
var x = 5;           // 现在 x 为数字
var x = "John";      // 现在 x 为字符串
//js字符串
var carname="Volvo XC60";
var carname='Volvo XC60';
var answer="It's alright";
var answer="He is called 'Johnny'";
var answer='He is called "Johnny"';
//js数字
var x1=34.00;      //使用小数点来写
var x2=34;         // //不使用小数点来写
var y=123e5;      // 12300000
var z=123e-5;     // 0.00123
//js布尔
var x=true;
var y=false;
//js数组
var cars=new Array();
cars[0]="Saab";
cars[1]="Volvo";
cars[2]="BMW";
//condensed array
var cars1=new Array("Saab","Volvo","BMW");
//literal array
var cars2=["Saab","Volvo","BMW"];
//js对象,对象由花括号分隔。在括号内部，对象的属性以名称和值对的形式 (name : value) 来定义。属性由逗号分隔：
var person={firstname:"John", lastname:"Doe", id:5566};

var person1={
    firstname : "John",
    lastname  : "Doe",
    id        :  5566,
    fullName  : function()
    {
    return this.firstname+" "+this.lastname;
    }
};
document.write("person1.fullName = "+person1.fullName()+"<br/><pre/>");
//对象属性有两种寻址方式：
name=person.lastname;
name1=person1["lastname"];
//Undefined 和 Null ; Undefined 这个值表示变量不含有值。可以通过将变量的值设置为 null 来清空变量。
cars1=null;
//person1=null;
//js声明变量类型, 当您声明新变量时，可以使用关键词 "new" 来声明其类型：
//JavaScript 变量均为对象。当您声明一个变量时，就创建了一个新的对象。
var carname=new String;
var x=      new Number;
var y=      new Boolean;
var cars1=   new Array;
//var person1= new Object;
///////////////////////////////////////////// JS对象，JavaScript 对象是拥有属性和方法的数据
var car = "Fiat";
//对象也是一个变量，但对象可以包含多个值(多个变量)。JS对象是变量的容器(是键值对/对象属性的容器)。
var car1 = {type:"Fiat",model:500,color:"white"};
var person = {firstName:"John",lastName:"Doe",age:50,eyeColor:"Blue"};
document.write(person.firstName+" is "+person.age+" years old.<br/><pre/>");

///////////////////////////////////////////// JS函数 , 函数是由事件驱动的或者当它被调用时执行的可重复使用的代码块。
function myFunction()
{
    alert("Hello World!");
}
function myFunc1(name,job)
{
    alert("Welcome " + name + ", the " + job);
}
function myFunc2(a,b)
{
    return a*b;
}
//全局 JavaScript 变量, 在函数外声明的变量是全局变量，网页上的所有脚本和函数都能访问它。
//JavaScript 变量的生存期, JavaScript 变量的生命期从它们被声明的时间开始。
//局部变量会在函数运行以后被删除。
//全局变量会在页面关闭后被删除。
// ****** 如果您把值赋给尚未声明的变量，该变量将被自动作为全局变量声明。
// 将声明一个全局变量 carname，即使它在函数内执行。
carname="Volvo"; ////如果您把值赋给尚未声明的变量，该变量将被自动作为全局变量声明。

///////////////////////////////////////////// JS作用域，作用域可访问变量的集合。
//在 JavaScript 中, 对象和函数同样也是变量。在 JavaScript 中, 作用域为可访问变量，对象，函数的集合。
//变量在函数内声明，变量为局部作用域。
// 此处不能调用 carName 变量
function myFunc3() {
    var carName = "Volvo";
    // 函数内可调用 carName 变量
}
//变量在函数外定义，即为全局变量。
//全局变量有 全局作用域: 网页中所有脚本和函数均可使用。
var carName = " Volvo";

// 此处可调用 carName 变量

function myFunction() {

    // 函数内可调用 carName 变量

}
//函数参数只在函数内起作用，是局部变量。
//在 HTML 中, 全局变量是 window 对象: 所有数据变量都属于 window 对象。

//此处可使用 window.carName
function myFunction() {
    carName = "Volvo";
}