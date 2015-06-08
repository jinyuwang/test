<?php header("ContentType=text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: hadoop
 * Date: 2015/5/31
 * Time: 22:53
 */
class table
{
    private $x;
    function table($px=9)
    {
        $this->x=$px;
    }
    function setx($vx)
    {
        $this->x=$vx;
    }
    function getx()
    {
        return $this->x;
    }
    function print_table()
    {
        for($i=1;$i<=$this->x;$i++)
        {
            for($j=1;$j<=$i;$j++)
            {
                echo $j." * ".$i." = ".$j*$i."&nbsp;";
            }
            echo "<br/>";
        }
    }
}

$table1=new table;
$table1->print_table();
echo "<br>";
$table2=new table;
$table2->setx(6);
$table2->print_table();
echo "<br>";
$table2->setx(16);
$table2->print_table();
echo "<br>";