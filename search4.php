<?php 
//controller index
include 'config.php';
function load($className)
{
    include ROOT ."/model/$className.php";
}
spl_autoload_register('load');
$bookName = isset($_GET['bookName'])?$_GET['bookName']:'';
$book = new Book();
$dataBook = [];
include 'view/search4.php';