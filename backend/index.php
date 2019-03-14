<?php
   require("config.php");
   // if(!empty($_GET["id"]))
   // {
   //    echo  $db_handle->host_info." ".$_GET["id"];
   // }

   // if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   //           if(empty($_GET["id"])){
   //                  $response=array();
   //                  $result = mysqli_query($db_handle,"SELECT * FROM task");
   //                  while($row=mysqli_fetch_array($result))
   //                  {
   //                     $response[]=$row;
   //                  }
                 
   //                  echo json_encode($response);
   //            }
   //           else{
   //                   $i=$_GET['id'];
   //                   $sql = "SELECT * FROM  task WHERE id=$i";

   //                   $result=$db_handle->query($sql);
   //                   $row = mysqli_fetch_array($result);
   //                   echo json_encode($row);
   //            } 
         
   //   }
   //  else if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   //             $data = json_decode(file_get_contents('php://input'), true);
   //             $val=$data["caption"];
   //             $sql = "INSERT INTO  task (caption, is_completed) VALUES ('$val', '0')";
   //             $row = mysqli_query($db_handle, $sql);

	//   }
   // else if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
      
   //             $i=$_GET['id'];
   //             $data = json_decode(file_get_contents("php://input"),true);
   //             $val=$data["caption"];
   //             $sql="UPDATE task SET caption='".$val."' WHERE id=".$i;
   //             $db_handle->query($sql);
            
   // }
   // else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
   //             $i=$_GET['id'];
   //             $sql="DELETE FROM task WHERE id=".$i;
   //             mysqli_query($db_handle,$sql);
   // }

   require("display.php");
   require("add.php");
   require("update.php");
   require("delete.php");
?>