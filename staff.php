<!DOCTYPE html>
<?php
session_start();
?>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/untitled-1-copy-400x400.png" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  <title>staff</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  

  
</head>
<body>

  <?php
  

include 'includes/header.php';

?>
<section class="engine"><a href="https://mobirise.co/p">bootstrap navbar</a></section><section class="mbr-section form1 cid-qBdKF9DdiO mbr-parallax-background" id="form1-17">

    

    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(0, 0, 0);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">LOGIN HERE</h2>
                
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8">
                  
            	 <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$myuser = $_POST['username'];
$mypass= $_POST['password'];
    if ($myuser == '' || $mypass == '') {
        echo " <div>Enter username or password</div>";

}
else
{


include 'includes/dbconnection.php';
$result = mysql_query("select * from tbl_login where username = '$myuser' and password='$mypass'");


if (mysql_num_rows($result)>0)
{
   $row = mysql_fetch_array($result);

   if ($row[3]=='admin')
	$_SESSION['uname']=$myuser;
    echo "<script>location.href='admin/home.php'</script>";

 
}
else
{
  echo " <div>Your username or password is incorrect</div>";
  echo ""; 
 
}
}
}
?>
                    <form class="mbr-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                     
                           
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-17">USERNAME</label>
                                    <input  class="form-control" name="username" type="username" >
                                </div>
                         
                            
                        
                       
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-17">PASSWORD</label>
                                    <input class="form-control"  name="password" type="password" value="">
                                </div>
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary btn-form display-4">LOGIN</button>
                        </span>
            
                       <!--<span class="input-group-btn">
                            <input  type="submit" class="btn btn-primary btn-form display-4" name="login">LOGIN</input>
                       </span>-->
                    </form>
            </div>
        </div>
    </div>
</section>


<?php
include 'includes/footer.php';
?>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>