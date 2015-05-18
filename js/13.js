var carname1 = "Volvo XC60";
var carname2 = 'Volvo XC60';

var character = carname[7];

var answer1 = "It's alright";
var answer2 = "He is called 'Johnny'";
var answer3 = 'He is called "Johnny"';

var answer4 = 'It\'s alright';
var answer5 = "He is called \"Johnny\"";

var txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var sln = txt.length;

var x = "John";
var y = new String("John");
function dw() {
    if (x === y) {
        return ("x === y<br/>");
    }
    else {
        return ("x !== y<br/>");
    }
}
//字符串实例
function link(){
    var olink = getElementById("link");
    var text = olink.innerHTML;
    var start = text.indexOf(">")+1;
    var end = text.lastIndexOf("<");
    text = text.substring(start,end);
    location.href=text;
}
//<a href="java:void(0)" ="link()">maito:smvcn@yahoo.com.cn</a>