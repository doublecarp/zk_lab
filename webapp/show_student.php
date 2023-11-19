<?php
// SELECT COUNT(*) FROM students;
// SELECT * FROM students LIMIT 0 , 20;
$page = 1;
$db = @new mysqli('127.0.0.1', 'root', 'mysql');
$db->select_db('php');
$countSql = "SELECT COUNT(*) c FROM students;";
$r1 = $db->query($countSql);
$max = $r1->fetch_object()->c;
$r1->close();
$max = $max % 20 == 0 ? intval($max / 20) : ceil($max / 20);
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page < 1) {
        $page = 1;
    } else if ($page > $max) {
        $page = $max;
    }
}
/*
 *1.
 * */
$limitSql = sprintf('SELECT * FROM students LIMIT %d , 20;', (($page - 1) * 20));
$result = $db->query($limitSql);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ALL</title>
        <style>
            .wrapper {
                width: 1000px;
                margin: 10px auto;
            }

            table {
                width: 1000px;
                border-collapse: collapse;
                text-align: center;
            }

            th {
                border: 1px solid rgb(46, 117, 101);
                background-color:lightblue;
            }

            td {
                border: 1px solid rgb(46, 117, 101);
            }

            tr:nth-child(2n+1) td {
               color: gray;
            }

            tr:nth-child(2n) td {
                color: cornflowerblue;
            }

            .submit {
                text-align: center;
                font-size: 0;
            }

            form {
                display: inline-block;
                width: 200px;
                margin: 10px auto;
                font-size: 16px;
            }

            form input {
                width: 50px;
                text-align: center;
            }

            a {
                text-decoration: none;
                display: inline-block;
                width: 100px;
                font-size: 16px;
            }
        </style>
    </head>

    <body>
    <div class="wrapper">
        <table>
            <tr>
                <th>序号</th>
                <th>学号</th>
                <th>姓名</th>
                <th>题目</th>
                <th>状态</th>
                <th>录入时间</th>
                <th>合作学生</th>
            </tr>
            <?php
            $i = 0 + ($page - 1) * 20;
            while ($obj = $result->fetch_object()) {
                $i++;
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $obj->sno ?></td>
                    <td><?= $obj->name ?></td>
                    <td><?= $obj->title ?></td>
                    <td><?= $obj->state ?></td>
                    <td><?= $obj->last_time ?></td>
                    <td><?= $obj->partner ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <div class="submit">
            <a href="./input.html">首页</a>
            <form action="./show_student.php">
                <label for="page">页数</label>
                <input type="text" name="page" id="page" value=<?= "$page" ?>>
                <input type="submit" value="跳转">
            </form>
            <a href="show_student.php?page=<?= $page - 1 ?>">上一页</a>
            <a href="show_student.php?page=<?= $page + 1 ?>">下一页</a>
        </div>
    </div>
    </body>

    </html>
<?php
$result->close();
$db->close();
?>