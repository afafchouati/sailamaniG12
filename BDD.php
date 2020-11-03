<?php



//INTErtionnese
function InsertIntodata($value){
    
     $db_host="localhost"; 
     $db_user="root";
     $db_pwd="";
     $db_name="client";

     $conn_db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pwd);
     $conn_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
     $conn_db->exec($value);
     $conn_db = NULL;
}


?>