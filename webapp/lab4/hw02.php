<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        p {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            /*    决定是否让单元格合并 */
            text-align: center;
            width: 800px;
            margin: 20px auto;
            font-size: 14px;

        }

        td, th {
            width: 80px;
            border: 2px solid black;
        }

        th, tr
        td:first-child {
            color: red;
            font-weight: bold;
        }

        /*    每行和每列的第一个元素是红色*/
    </style>
</head>
<body>
<table>
    <?php
    echo "<tr><th>x</th>";
    for ($j = 1; $j <= 9; $j++){
        echo "<th>{$j}</th>";
        }
    echo "</tr>";
    //    输出了第一行
    for ($i = 1; $i <= 9; $i++){
        echo "<tr>";
    echo "<td>{$i}</td>";
    //然后按行输出
    for ($j = 1; $j <= $i; $j++) {
        $sum = $i * $j;
        echo "<td>{$i}×{$j}={$sum}</td>";
    }
    for ($k = $i + 1; $k <= 9; $k++) {
        echo "<td>&nbsp;</td>";
    }
    echo "</tr>";
    }
    ?>
</table>
</body>
</html>