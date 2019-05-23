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
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    
 <br><br>
   
    
<div class="w3-container w3-orange">
          <h1> DESPRE PRODUS:</h1>

    <div align='left'>
<?php


         //include connection file
        include 'connection.php';
        $sql="SELECT * FROM honey WHERE ID='{$_GET['ID']}'";
        $query= mysqli_query($conn,$sql)or die(mysqli_error($conn));
        $row=mysqli_fetch_array($query);
             echo "Denumire: ".$row["Denumire"]."<br/>";
             echo "Poza: <img src=".$row['Poza']."><br/>";
             echo "Pret: ".$row["Pret"]." lei <br/>";
             echo "Tip_Produs: ".$row["Tip_Produs"]."  <br/>";

            ?>

<a href="admin.php">Back</a>

</div>
</div>

 <br><br>


 
 <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Made by Gordeev Anya, 2018</p>
             <a href="#" class="fa fa-facebook"></a>
             <a href="#" class="fa fa-twitter"></a>
             <a href="#" class="fa fa-instagram"></a>
        </div>
        </footer>
    
        <script src="vendor/jquery/jquery.min.js"></script>
       <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
