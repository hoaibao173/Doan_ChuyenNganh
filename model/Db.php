<?php 
class Db{
    protected static $conn;
    function __construct()
    {
        try{
            Db::$conn = new PDO('mysql:host='. HOST.';dbname='.DB, USER, PW);
            Db::$conn->query('set names utf8');
        }
        catch(Exception $e)
        {
            echo 'Err connect';exit;
        }
        
    }
    protected function selectQuery($sql, $params=[])
    {
        $stm = Db::$conn->prepare($sql);
        $stm->execute($params);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}