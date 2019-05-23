<?php

$conn= mysqli_connect("localhost", "root", "root","mead") or die("Error connecting to database: ".mysql_error());
 

 ?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gordeev's Mead | Home </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <!-- social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-lower">Gordeev's Mead</span>
      <span class="site-heading-upper text-primary mb-3">Homemade Goods</span>
 
    </h1>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Gordeev's Mead</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">About  </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.php">Store</a>
               <li class="nav-item px-lg-4">
                   <a class="nav-link text-uppercase text-expanded" href="location.php">Contact </a>
           
            </li>
              <li class="nav-item px-lg-4">
                  <a class="nav-link text-uppercase text-expanded" href="admin.php">Login </a>
           
            </li>
    
            </li>
          </ul>
        </div>
      </div>
     
     </nav>
          <?php
include "connection.php";

$sql="SELECT * FROM honey ";
if(isset($_POST["search"])){
$search_term= mysqli_real_escape_string($conn,$_POST["search_box"]);
$sql.="WHERE Denumire='{$search_term}'";
$sql.="OR Pret='{$search_term}'";
}
 $query= mysqli_query($conn, $sql)or die(mysqli_error($conn));
?>

<form name="search_form" method="post" action="cautare.php">
     Search:<input type="text" name="search_box" value="" />
     <input type="submit" name="search" value="Search the table">
     <input type="reset" value="Reset">
     
     
     
 </form>
  <table width="70" cellpadding="4" cellspace="4" align="center">
            <tr>
                <th>Name</th><br>
                <th>Price</th><br>
                <th>Image</th><br>
             
               
                
            </tr>
            <?php while($row= mysqli_fetch_array($query)){?>
            <tr>
                <td><?php echo $row["Denumire"]; ?></td>
                <td><?php echo $row["Pret"]; ?></td>
                <td><?php echo $row["Tip_Produs"]; ?></td>

                <td><img src="<?php echo $row["Poza"]; ?>" height="100" width="100"></td>
                
                 </tr>
            <?php }?>
        </table>
</div>
  <?php
         //include connection file
      if(isset($_POST['cuvant'])){
            $cuvant=$_POST['cuvant'];
 $conn=mysqli_connect("localhost","root","root","mead")  or die("Failed to connect:".mysqli_error());
$sql="SELECT *FROM honey WHERE Denumire LIKE '%$cuvant%' OR Pret LIKE '%$cuvant%'";
 $query= mysqli_query($conn,$sql)or die(mysqli_error()); 
 
       while($row=mysqli_fetch_array($query)){
        $ID = $row['ID']; 
        $Denumire = $row['Denumire']; 
        $Poza=$row['Poza'];
        $Pret=$row['Pret']; 
        
       echo  '<div id="honey" class="float_l">
       <div id="Denumire">'.$Denumire.'</div>
            <div id="Poza"><img src="img/'.$Poza.'" width="250px"/></div>
            <div id="Pret"> Pret articol:'.$Pret.'</div>
        </div> ';
        }
      }
      else  {
      echo'Nu s-au gasit rezultate.';}
        ?>
</div>
         </div>
          </section>
    
    
    
    
    
        

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Made by Gordeev Anya, 2018</p>
      
        <a href="#" class="fa fa-facebook"></a>
             <a href="#" class="fa fa-twitter"></a>
             <a href="#" class="fa fa-instagram"></a>
             </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>