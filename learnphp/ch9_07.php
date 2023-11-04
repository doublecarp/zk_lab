<!doctype html>
<html>
<head><meta charset="UTF-8">
</head>
<body>
<p>hello<?=$_POST['user']?>!</p>
<p>your password is <?= $_POST['psw']?>!</p>
<p>login time<?=date('Y-m-d H:i:s')?></p>
</body>
</html>
