<?php


    if(isset($_POST['id'])){
        require '../db_conn.php';

        $id = $_POST['id'];


        if(empty($id)){
            echo 0;
        }else{
            $almedin = $conn->prepare("DELETE FROM todos WHERE id=?");
            $hysen = $almedin->execute([$id]);

            if ($hysen) {
                echo 1;
            }else{
                echo 0;
            }
            $conn = null;
            exit();
        }



    }else{
        header("Location: ../index.php?mess=error");
    }

    
?>