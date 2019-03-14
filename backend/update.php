<?php

 if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
      
               // $i=$_GET['id'];
               // $data = json_decode(file_get_contents("php://input"),true);
               // $val=$data["caption"];
               // $sql="UPDATE task SET caption='".$val."' WHERE id=".$i;
               // $db_handle->query($sql);

               parse_str(file_get_contents("php://input"), $data);
               $i = $data['id']; 
               $val=$data['caption'];
               $sql="UPDATE task SET caption='".$val."' WHERE id=".$i;
               $db_handle->query($sql);
   }
   
?>