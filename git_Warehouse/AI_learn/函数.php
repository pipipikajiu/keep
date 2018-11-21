<?php 
//ksort:按照键名对关联数组进行升序排序. 
//krsort() 函数对关联数组按照键名进行降序排序。
//asort() 函数对关联数组按照键值进行升序排序。
$age=array("Bill"=>"60","Steve"=>"56","mark"=>"31");
ksort($age);
等于:
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
运行结果:
Key=Bill, Value=60
Key=Steve, Value=56
Key=mark, Value=31

//array_splice 从数组中移除元素，并用新元素取代它.
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);




?>
