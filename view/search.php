<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim kiem sach</title>
</head>
<body>
<a href="index.php">Trang chu</a> &nbsp;
    <a href="search.php">tim kiem</a>
    <a href="search1.php">tim kiem 1</a>
    <a href="search2.php">tim kiem 2</a>
    <a href="search3.php">tim kiem 3</a>
    <a href="search4.php">tim kiem 4</a>
    <form action='search.php'>
        Ten sach <input type="text" name="bookName" value="<?php echo $bookName ?>"> 
        <input type="submit" value='search'>
    </form>
    <h1>Ket qua tim kiem sach </h1>
    <pre><?php 
    print_r($dataBook);
    ?>
</body>
</html>