<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
               $val=$_POST["caption"];
               $sql = "INSERT INTO  task (caption, is_completed) VALUES ('$val', '0')";
               $row = mysqli_query($db_handle, $sql);
               
     }
?>    