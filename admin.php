
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gordeev's Mead | Login</title>

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
              <a class="nav-link text-uppercase text-expanded" href="about.php">About </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">Products</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="store.php">Store</a>
            </li>
             <li class="nav-item px-lg-4">
                 <a class="nav-link text-uppercase text-expanded" href="location.php">Contact </a>
            </li>
     
    
             <li class="nav-item px-lg-4">
                 <a class="nav-link text-uppercase text-expanded" href="admin.php">Login </a>
              </li>
              
     
              
          </ul>
        </div>
      </div>
    </nav>
   
    
      <div class="search grid_4 omega" align="right">
<form>
             <?php
  

           $client=new MongoDB\Driver\Manager("mongodb://localhost:27017");
          /* $sql="SELECT * FROM honey";
         if(isset($_POST["search"])){
             $search_term= mysqli_real_escape_string($conn,$_POST['cautare_ceva']);
             $sql.=" WHERE Denumire='{$search_term}'";
             $sql.=" OR Pret='{$search_term}'";
         }
            $query= mysqli_query($conn,$sql)or die(mysqli_error($conn));*/
            ?>
             </form>
              </div>
    
    

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/bees2.jpg" alt=""> <br>
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
                
                
            <div class="loginPage grid_8 omega">
     
     
       
       
            <?php
            
session_start();
if(isset($_SESSION["user_name"])) {
    echo "Welcome ".$_SESSION["user_name"]." !";
?>
                <span class="section-heading-lower"> Admin account</span>
                <a href="logout.php">LOGOUT</a>
  

             </div>            
            </div>        
        </div>
    
        
           </div>
   
 
     <center>
 
     <form name='cautare'  align='left' method="post" action='admin.php'>
        <font color="white">  Search:</font> <input type='text' name='cautare_ceva' value=''/>
            <input type="submit" name="search" value="Search">
            <input type="reset" value="Reset"/>
        </form>
  </center>
        <br><br>        <br><br>        <br><br>
 <section class="page-section cta">
      <div class="container">
          
          
          
          
          
          
          
          
          <table rules="rows">
        <font color="white">
         <tr>
             <th><h1><font color="white">Name:</font></h1></th>
             <th><h1><font color="white">Price:</font></h1></th>
             <th><h1><font color="white">Type:</font></h1></th>
             <th><h1><font color="white">Image</font></h1></th>

             <th colspan="3" ><h1><font color="white">Actions:</font></h1></th>
         </tr>
         
         
          <?php
          $query = new MongoDB\Driver\Query([]); 
        $rows = $client->executeQuery("mead.mead", $query);
foreach($rows as $val): ?> 

         <tr style="border-bottom: 1px solid black;">
             <td style="width:300px">
                 <h1><font color="white"> <?php echo $val->Denumire; ?></font></h1>
             </td>
             <td style="width:300px" >
                 <h1> <font color="white"><?php echo $val->Pret; ?></font></h1>
             </td>
             <td style="width:300px" >
                 <h1> <font color="white"><?php echo $val->Tip_Produs; ?></font></h1>
             </td>
             <td style="width:300px"><h1><font color="white">
               
                     <img src="img/<?php echo $val->Poza; ?>" height="200" width="200" />
                   
                     </font></h1>
                    </td>

                        <td>
            <?php echo "<a href=\"view.php?ID=".$val->_id."\"><h1>View<br/></a> <a href=\"editeaza.php?ID=".$val->_id."\">Edit</br></a> 
            <a href=\"delete.php?ID=".$val->_id."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"?>
            </td>
                </tr>
<?php endforeach;?>
                </font>
</table>
  </center>
  <font color="white">
    <a href="insert.php"><b>Upload another product</b></a>
   </font>
          </div>
          </section>
          
   
  <?php
} else{
    ?>
                 <h1>Login</h1>
                 <form  name='login_form' method="post" action="admin.php">
            
          <fieldset align='left' >
            <label for="email2">User:</label>
            
            <input type="text" tabindex="1" size="16" value="" id="email2" name="email" class="text" />
            <br />
            <label for="password2">Password:</label>
            <input type="password" tabindex="2" size="10" value="" id="password2" name="password" class="text" />
            <br />
   
            <label>
         <input type="checkbox"  text-size='5' checked="checked" name="remember"> Remember me
            </label>
            <br> 
            <?php 
          
             $number1=rand(1,9);
             $number2=rand(1,9);
             $sum=$number1+$number2; 
       echo' '.$number1.'+'.$number2.'='.'<input type="text" name="captcha"> 
               <input type="hidden" name="suma" value="'.$sum.'"> ';
            ?>
            </br>
           <div class="clear"></div>
          </fieldset>
            
            <div class="submit-button mx-auto">
                 <a class="btn btn-primary btn-xl" > <td align="center" colspan="4"><input type="submit" name="submit" value="Login"></td></a>
                           
<?php
$user = 'Mead';
$pass = '123';
$message='';
if((isset($_POST["email"]))&&(isset($_POST["password"]))){
    if(($_POST["email"]==$user)&&($_POST["password"]==$pass)&&($_POST['captcha']==$_POST['suma'])){
        
               if(isset($_POST['remember'])){
                   setcookie("email",$_POST["email"],time()+60*60*24*365);
                   setcookie("password",md5($_POST["password"]),time()+60*60*24*365);
                   echo"Remember me cookie set !";
                   
               }              else {
                   setcookie("email",$_POST["email"],false);
                   setcookie("password",md5($_POST["password"]),false);
                   echo"Remember me cookie not set! ";
                   
               }
                 
        $_SESSION["user_name"] = $_POST["email"];
        //header("Location:admin.php");
       } else {
        $message = "Invalid Username or Password!";
    }
}
   
   // header("location:login.php");
}
//echo $message;      
    ?> </div>
                  </section>
       
    
<!-- footer -->

   <!-- <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Our Promise</span>
                <span class="section-heading-lower">To You</span>
              </h2>
              <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->

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


