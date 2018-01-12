<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  


	

<!-- Stylesheets -->
		
		
		
	
		

	<!-- The Menu -->


	<!-- Optional - Adds useful class to manipulate icon font display -->


<link rel="stylesheet" href="css/sass-compiled.css" />
<!-- Custom Theme files -->



  
</head>
<body>
<?php
include 'includes/header.php';
?>
<section class="features5 cid-qAKBvYtkMB" id="features5-6" style="padding-top:133px; background-color:#2e2e2e;">
</section>
<section class="features5 cid-qAKBvYtkMB" id="features5-6" >
    
    

    
    <div class="container">
        <div class="media-container-row">

            





	 <div class="container">
        
			<section class="wrapper cl" >
			<?php  
		include 'includes/connect.php';
if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 12;
$sql = "SELECT * FROM tbl_album where status='process' ORDER BY albumid DESC LIMIT $start_from, 12";
$rs_result = mysql_query ($sql,$con);



		
####### Fetch Results From Table ########

while ($row = mysql_fetch_assoc($rs_result)) 
{
$aimage=$row['image'];
$aid=$row['albumid'];
$aname=$row['name'];
$astatus=$row['status'];

?>
		<div class="pic" style="margin-right:1px;margin-left:1px;margin-top:1px;margin-bottom:1px">
        <?php echo "<img src='admin/acatch/$aimage' class='pic-image imgg' alt='Pic' alt='$aname'>"; ?>
		   <?php echo"<a href='gindex.php?id=$aid'>
		    <span class='pic-caption left-to-right'>
            
		        <p style='color:#FFFFFF;font-size:24px'>$aname</p>
		    </span></a>"?>
		</div>
<?php } ?>
	</section>
	

			
		</div>

		

</div>
</div>
</section>
<div class="seeall_div2">
			<!--   NAVIGATION FOR BLOG POST -->
				<div class="blog_navigation" style="background-color:rgba(248, 249, 250, 1);">
					<div style="margin-left:180px" style="background-color:rgba(248, 249, 250, 1);">
               
                    <?php
$sql = "SELECT COUNT(name) FROM tbl_album";
$rs_result = mysql_query($sql,$con);
$row = mysql_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 12);
for ($i=1; $i<=$total_pages; $i++) {
echo "<span class='navigations_items_span'>";
echo "<b>Page </b>";
echo "<a href='gallery.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a>";							
echo "</span>";
};
?>
						
						
					</div>
				</div>
		</div>
		<?php
include 'includes/footer.php';
?>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>