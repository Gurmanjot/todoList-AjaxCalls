<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            //  if(empty($_GET["id"])){
            //         $response=array();
            //         $result = mysqli_query($db_handle,"SELECT * FROM task");
            //         while($row=mysqli_fetch_array($result))
            //         {
            //            $response[]=$row;
            //         }
                 
            //         echo json_encode($response);
            //   }
            //  else{
            //          $i=$_GET['id'];
            //          $sql = "SELECT * FROM  task WHERE id=$i";

            //          $result=$db_handle->query($sql);
            //          $row = mysqli_fetch_array($result);
            //          echo json_encode($row);
            //   } 
            $result = mysqli_query($db_handle,"SELECT * FROM task");
                    while($row=mysqli_fetch_array($result))
                    {
                       $response[]=$row;
                    }
                  
                    echo json_encode($response);
 }

 ?>    