<?php 
//controller index
include 'config.php';
function load($className)
{
    include ROOT ."/model/$className.php";
}
spl_autoload_register('load');
$book = new Book();
$dataBook = $book->all();

include 'view/index.php';