<?php 
class Book extends Db 
{
    function all()
    {
        return $this->selectQuery('select * from book');
    }
    function search($bookName)
    { 
        if ($bookName=='') return [];
        return $this->selectQuery('select * from book where book_name like ?', ['%' .$bookName.'%']);
    }

   
}