<?php 
 if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
               parse_str(file_get_contents("php://input"), $data);
               $i = $data['id']; 
               $sql="DELETE FROM task WHERE id=".$i;
               mysqli_query($db_handle,$sql);

               echo json_encode($i);
   }
?>