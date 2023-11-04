<?php
$file=$_FILES['data'];
//data和表单属性的name一样
if($file['error'>0]){
    echo 'Error:',$file['error'].'<br>';
    die;
}
$filePath='upload/'.$file['name'];
move_uploaded_file($file['temp_name'],$filePath);
?>
<p>
    filename:<?=$file['name']?><br/>
    filetype:<?=$file['type']?><br>
    filesize:<?=$file['size']/1024?>kb<br>
    tempfile:<?=$file['temp_name']?><br>
    filekeep:<?=$filePath?><p>
    <p><img src="<?=$filePath?>"></p>
</p>
