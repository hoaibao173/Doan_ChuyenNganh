<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim kiem sach</title>
    <script src="jquery/jquery-3.6.3.min.js"></script>
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
    <div id="ketqua"></div><hr>
    <div id="ketqua2"></div>

    <script>
        function F2() {
            $.ajax({
                url:"ajax/ajax4.php",
                type:"GET",//Get_Post,mac định la get
                dataType:'json',//kiêu dữ liệu trả về (text,json,..)Mac định là 
                //data:'bookName='+S('#book+Name'),//du liệu gui lên server
                data:{bookkName:$('#book_Name').val()},
                success: function(dataReturn)// dataReturn la biến chứa kết quả trả về
                {
                    console.log(dataReturn);
                    var s1='';
                    var s2='';
                    $.each(dataReturn,function(k,v){
                        //alert(k+", id:"+v.book_id)
                        if(v.price<100000){
                            s1+=`<div class="sp">
                            ${v.book_id}-${v.book_name}-${v.price}
                            <div>`;
                        }
                        else{
                            s2+=`<div class="sp">
                            ${v.book_id}-${v.book_name}-${v.price}
                            </div>`;
                        }
                    });
                  //  $('#ketqua').html(dataReturn);
                  $('#ketqua').html(s1);
                  $('#ketqua2').html(s2);

                },
                error:function(dataError)//nếu quá trình sảy ra lôic
                {
                    console.log(dataError);
                }
            });
        }
    </script>
</body>

</html>