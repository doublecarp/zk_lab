<?php
if(!isset($_POST['user'])&&!isset($_POST['PSW']))
{
    header('Location:ch');
    die;
}