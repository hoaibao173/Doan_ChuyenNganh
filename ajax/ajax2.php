<?php 
//controller index
include '../config.php';
function load($className)
{
    include ROOT ."/model/$className.php";
}
spl_autoload_register('load');
// print_r($_GET);
$bookName = isset($_GET['bookName'])?$_GET['bookName']:'';
$book = new Book();
$bookData = $book->search($bookName);
// print_r($bookData);
foreach($bookData as $r)
{
    echo "<br> {$r['book_id']} - {$r['book_name']} ";
}

