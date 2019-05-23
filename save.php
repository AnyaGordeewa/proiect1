<?php



include 'connection.php';

/*if(isset($_POST['submit'])){
    echo 'Aici';
if(is_uploaded_file($_FILES['image']['tmp_name'])) {

$image="./img/". md5(uniqid(time())). basename($_FILES['image']['name']);
//$data =addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name=$_POST["image_name"];
$image_price=$_POST["image_price"];
$image_tip=$_POST["image_tip"];
$sql = "INSERT INTO honey (Denumire,Poza,Pret,Tip_Produs)VALUES('$image_name','$image' '$image_price', '$image_tip')";
mysqli_query($conn, $sql);
//$current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));

if(move_uploaded_file($_FILES['image']['tmp_name'],$image)){
       header('location:insert.php');
    }else
        {
       echo'nuuuu';
    
}

} 

        }*/
/*if (isset($_POST['submit'])){
              $ID= $_POST['ID'];
              $Denumire= $_POST['Denumire'];
              $Poza = $_FILES['Poza'];
              $Pret= $_POST['Pret'];
              $Tip_produs=$_POST['Tip_Produs'];
              if(!empty($Poza['name'])){
                  $path="img/".basename($Poza['name']);
                  move_uploaded_file($Poza['tmp_name'],$path);
              }
              $Pozan=$Poza['name'];
              $conn= mysqli_connect("localhost","root","root","mead");
              $sql="INSERT INTO `honey` (`ID`,`Denumire`,`Poza`,`Pret`,`Tip_Produs`) VALUES ('$ID','$Denumire','$Pozan','$Pret','$Tip_produs')";
                 mysqli_query($conn,$sql) ;    
            if($sql) echo'yaayy'; else echo'nuuu';
          }      
          
             // header("Location:admin.php"); */


           class Inserare{
     public function Insert(){ //metoda
 
          if (isset($_POST['submit'])){
              $ID= $_POST['ID'];
              $Denumire= $_POST['Denumire'];
              $Poza = $_FILES['Poza'];
              $Pret= $_POST['Pret'];
              $Tip_produs=$_POST['Tip_Produs'];
              if(!empty($Poza['name'])){
                  $path="img/".basename($Poza['name']);
                  move_uploaded_file($Poza['tmp_name'],$path);
              }
              $Pozan=$Poza['name'];
              $conn= mysqli_connect("localhost","root","root","mead");
              $sql="INSERT INTO honey (ID,`Denumire`,`Poza`,`Pret`,`Tip_Produs`) VALUES ('$ID','$Denumire','$Pozan','$Pret','$Tip_produs')";
                 mysqli_query($conn,$sql) ;    
            
          }      
          
              header("Location:admin.php");
 }}
 $Inserare= new Inserare;
  Inserare::Insert();

         ?>
