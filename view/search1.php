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
        Ten sach <input type="text" name="bookName" id='book_Name' value="<?php echo $bookName ?>">
        <input type="button" value='search' onclick="F2()">
    </form>
    <h1>Ket qua tim kiem sach </h1>
    <div id="ketqua"></div>
    <script>
        function F2() {
            var v = document.getElementById('book_Name').value;
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", "ajax/ajax1.php?bookName=" + v, true);

            xhttp.onreadystatechange = function() {

                console.log(xhttp.readyState, xhttp.status);
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    document.getElementById("ketqua").innerHTML =
                        xhttp.responseText;
                    console.log(xhttp.responseText);
                }
            };

            xhttp.send(null);
        }
    </script>
</body>

</html>