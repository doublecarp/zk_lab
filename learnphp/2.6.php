<?php
$day ='some';
if($day=='some'||$day=='other')
    $today='weekend';
else
    $today='another'
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo $day;
$n=10;
for ($i=1,$sum=0;$i<$n;$i++){
    $sum+=$i;
}
?>
<table border="border">
    <caption>平方根表</caption>
    <tr>
        <th>number</th>
        <th>平方根</th>
        <th>平方</th>
        <th>立方</th>
        <th>四次方</th>
    </tr>
    <?php
    for($i=1;$i<=10;$i++){
        $root=sqrt($i);
        $square=pow($i,2);
        $cube=pow($i,3);
        $quad=pow($i,4);
        echo('<tr align="center">');
        echo("<td>$i</td>");
        echo("<td>$root</td>");
        echo("<td>$square</td>");
        echo("<td>$quad</td>");
        echo('</tr>');
    }
    ?>
</table>
</body>
</html>