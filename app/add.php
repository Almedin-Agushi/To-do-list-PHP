<?php


    if(isset($_POST['title'])){
        require '../db_conn.php';

        $title = $_POST['title'];


        if(empty($title)){
            header("Location: ../index.php?mess=error");
        }else{
            $almedin = $conn->prepare("INSERT INTO todos(title) VALUE(?)");
            $hysen = $almedin->execute([$title]);

            if ($hysen) {
                header("Location: ../index.php?mess=succes");
            }else{
                header ("Location ../index.php");
            }
            $conn = null;
            exit();
        }



    }else{
        header("Location: ../index.php?mess=error");
    }

    
?>