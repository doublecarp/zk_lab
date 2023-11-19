<?php
if (!isset($_POST['action']) || empty($_POST['sno']) || empty($_POST['psw'])) {
    header('Location:input.html');
    die;
}
$db = @new mysqli('127.0.0.1', 'root', 'mysql');
$db->select_db('php');
$sno = $_POST['sno'];
$name = $_POST['name'];
$psw = $_POST['psw'];
$title = $_POST['title'];
$partner = $_POST['partner'];
$action = $_POST['action'];
if ($action == 0) {
    // SELECT * FROM students WHERE sno = '201211314115';
    $idSql = sprintf("SELECT * FROM students WHERE sno = '%s';", $sno);
    $r1 = $db->query($idSql);
    $obj = $r1->fetch_row();
    if ($obj != null) {
        header('Location:error.html');
        header('Location:error.html');
        die;
    }
    $r1->close();
    // INSERT INTO students (sno, name, psw, title, last_time, state, partner) 
    // VALUES ('a','b','c','d','2020-01-01',0,'e');
    $insertSql = sprintf("INSERT INTO students (sno, name, psw, title, last_time, state, partner) VALUES ('%s','%s','%s','%s','%s',0,'%s');", $sno, $name, $psw, $title, (date('Y-m-d H:i:s')), $partner);
    $r2 = $db->query($insertSql);
    if (!$r2) {
        header('Location:error.html');
        die;
    } else {
        header('Location:show_student.php');
        die;
    }
    $r2->close();
} else {
    // SELECT * FROM students WHERE sno = '201211314115' AND psw = '179036';
    $loginSql = sprintf("SELECT * FROM students WHERE sno = '%s' AND psw = '%s';", $sno, $psw);
    $r1 = $db->query($loginSql);
    $obj = $r1->fetch_row();
    if ($obj == null) {
        header('Location:error.html');
        die;
    }
    $r1->close();
    $update2Sql = '';
    if (!empty($title) && !empty($partner)) {
        // UPDATE students SET title = '4', last_time = '2022-1-1', partner = 'dd' WHERE sno = 'a';
        $update2Sql = sprintf("UPDATE students SET title = '%s', last_time = '%s', partner = '%s' WHERE sno = '%s';", $title, (date('Y-m-d H:i:s')), $partner, $sno);
    } else if (!empty($title)) {
        $update2Sql = sprintf("UPDATE students SET title = '%s', last_time = '%s' WHERE sno = '%s';", $title, (date('Y-m-d H:i:s')), $sno);
    } else if (!empty($partner)) {
        $update2Sql = sprintf("UPDATE students SET last_time = '%s', partner = '%s' WHERE sno = '%s';", (date('Y-m-d H:i:s')), $partner, $sno);
    } else {
        header('Location:error.html');
        die;
    }
    $r2 = $db->query($update2Sql);
    if (!$r2) {
        header('Location:error.html');
        die;
    } else {
        header('Location:show_student.php');
        die;
    }
    $r2->close();
}
$db->close();
