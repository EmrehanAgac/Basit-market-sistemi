<?php
try{
    $db=new PDO("mysql:hostname=localhost;dbname=market; charset=utf8","root","796796796");
}   

catch (PDOException $e){
    echo $e->getMessage();
}
?>