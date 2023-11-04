<?php
$list=[2,4,6,8];
unset($list[2]);//删掉关键字为2的元素
$str='April in Prais';
$word=explode('',$str);
//explode 用空格进行字符切割
//$word=['April','in','Paris']
$str2=implode('',$word);
//用空格进行字符连接
$len=sizeof($word);
//返回元素个数