<?php


   

    $sName = 'localhost:3307';
    $uName = 'root';
    $pass = '';
    $db_name = 'to_do_list';


  
  
        try {
            $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo " <font color='Blue'>  Jeni Lidhur Me Suksess!<br/>";

       
        } catch (PDOException $e) {
            echo "Connection failed : ". $e->getMessage();
            
    
            }
    
?>

