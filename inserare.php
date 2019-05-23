
<?php
//insereaza
session_start();
include 'connection.php';
$sql= "SELECT * FROM honey";
    
if(isset($_POST['submit'])){
        

              $Denumire= $_POST['Denumire'];
              $Pret= $_POST['Pret'];
              $Tip_Produs=$_POST['Tip_Produs'];
            
                $target="img/" .basename($_FILES['Poza']['name']);
                    $Poza =$_FILES['Poza']['name']; 
                    
     
  $sql="INSERT INTO honey (Denumire,Poza,Pret,Tip_Produs) VALUES ('$Denumire','$Poza','$Pret','$Tip_Produs')";
 $result= mysqli_query($conn, $sql);
 if(move_uploaded_file ($_FILES['Poza']['tmp_name'],$target)){
     
         echo"imaginea a fost incarcata cu succes";
         echo '<a href="admin.php">Back</a>';
         header("Location:admin.php");
     }
     else{
         echo"imaginea nu a fost incarcata";
           echo '<a href="inserare.php">Back</a>';
        
}
}

          
