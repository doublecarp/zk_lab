<?php
$arr=array('foo'=>array(6=>5,13=>9,'a'=>42));
echo $arr['foo'][6];//5
//若对给出的值没有指定键名，则取当前最大的整数索引值，新的键名
//应该是把该值加一
//eg.
$aa=array(5=>43,'c'=>'A',32,56,'b'=>12);
echo $aa[6];//32
$array=array(1,2,3,4,5);
$nn=count($array);
for ($i=0;$i<$nn;$i++)
    echo $array[$i];
//=print_r  $array