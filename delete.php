<?php

/* include "connection.php";
  
 $sql1="SELECT * FROM honey WHERE ID='{$_GET['ID']}'";
 $query=mysqli_query($conn, $sql1)or die(mysqli_error($conn));
 $row=mysqli_fetch_array($query);
unlink($row["ID"]);
 $sql2="DELETE FROM honey WHERE ID='{$_GET['ID']}'";
 $query=mysqli_query($conn, $sql2)or die(mysqli_error($conn));
 
header('location:admin.php');
 
 */

class Stergere{
   public function Delete(){

if(isset($_GET['ID'])){
   $ID=$_GET['ID'];
   
  $conn=mysqli_connect("localhost","root","root","mead");
$sql="DELETE FROM `honey` WHERE `ID`=$ID";
 mysqli_query($conn,$sql); 
}
    }
    
}
 header("Location:admin.php");

$Stergere= new Stergere;
  Stergere::Delete();
