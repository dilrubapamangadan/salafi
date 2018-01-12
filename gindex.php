<?php $aid=$_REQUEST['id']; ?>

<!DOCTYPE html>
<html lang="en"> 
<head>
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
	
	<meta charset="utf-8">
	<title>DotCode - Gallery</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	


		
		
		
		<link href="litebox-master/assets/css/litebox.css" rel="stylesheet" type="text/css" media="all" />
		

	<!-- The Menu -->
	<link href="stylesheets/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="pe-icon-7-stroke/css/pe-icon-7-stroke.css">

	<!-- Optional - Adds useful class to manipulate icon font display -->
	<link rel="stylesheet" href="pe-icon-7-stroke/css/helper.css">


	
</head>
<body>




	<!--<div class="container">
		 <div class="logo">
			 <a href="index.php"><img src="assets/images/logo.png" alt="salafi" title="" style="height: 8rem;"></a>
		 </div>
		 <div class="top-menu">
				<span class="menu"> </span>
				<ul>
					 <li><a href="#.html">HOME</a></li>
					 <li><a href="#.html">ABOUT US</a></li>
					 <li class="active"><a href="index.php">GALLERY</a></li>					
					 <li><a href="#.html">BLOG</a></li>					 
					 <li><a href="#.html">CONTACT</a></li>
                     <li>|</li>		
                     <li><a href="admin/login.php">Admin panel</a></li>			 
				 </ul>
		 </div>
		 <div class="clearfix"></div>
			 <!--script-nav-->
		<!-- <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>		  
	 </div>-->
	 <?php
	 include 'includes/header.php'
	 ?>
	 
<section class="features5 cid-qAKBvYtkMB" id="features5-6" style="padding-top:90px; background-color:#2e2e2e;">
</section>
		<!-- Blog Section
	================================================== -->
<div class="gallery-head">
	 <div class="gallery-info">
		 <div class="container">
			
                       <?php  
include 'includes/connect.php';
$sql = "SELECT * FROM tbl_album where albumid='$aid'";
$rs_result = mysql_query ($sql,$con);



		
####### Fetch Results From Table ########

while ($row = mysql_fetch_assoc($rs_result)) 
{
$aimage=$row['image'];
$aname=$row['name'];
$adesc=$row['adesc'];
$astatus=$row['status'];

?>
				<h2>
				<?php echo "$aname"; ?> 
				</h2>
            
             
           			 
		 </div>		 
	 </div>
	 <div class="gallery-text">
		 
	 </div>

		<div class="container">
			<div class="one-whole text-center">
            
            <p><?php echo "$adesc"; ?></p>
				<?php } ?>
                <hr style="border:solid 1px;margin-top:0px;">
<p style="margin-left:75px">
				<?php  
		include "includes/connect.php";

$sql = "SELECT * FROM tbl_gallery where aid=$aid and status='process'";
$num_rows = mysql_num_rows(mysql_query($sql));		
####### Fetch Results From Table ########

$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
$gimage=$row['gimages'];

?>	
	
<?php	echo "<a href='admin/gupload/$gimage' target='_self' class='inline-block litebox' data-litebox-group='group-1'><img src='admin/gcatch/$gimage' class='inline-block' /></a> ";?>			
<?php } ?>				
</p>
				
</div>			
</div>
<div class="clearfix"></div>
</div>	
</div>	





	
	<!-- Bottom Footer Section
	================================================== -->
<div class="bottom_footer_section">
	<div class="container">
	<div class="sixteen columns bottom_line_dev">	
		
<br/><br/>		
<hr style="border:solid 1px;margin-top:0px">
<br/>
<br/>
<br/>
		</div>	
        
	</div>	
</div>	
 <?php
	 include 'includes/footer.php'
	 ?>

	<!-- Primary Page Layout
	================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="litebox-master/assets/js/smoothscroll.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/images-loaded.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/tipsy.min.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/backbone.js" type="text/javascript"></script>
		<script src="litebox-master/assets/js/litebox.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			$('.litebox').liteBox();
		</script>
	
<!-- JavaScript
	================================================== -->
	<script src="js/jquery-main.js" type="text/javascript"></script>
	<script type='text/javascript' src="js/jquery-latest.min.js"></script>
	<script type='text/javascript' src='js/menu_jquery.js'></script>
	<script src="js/car/jquery-1.7.2.min.js" type="text/javascript"></script> <!-- jQuery -->
    <script src="js/car/jquery.easing.1.3.js" type="text/javascript"></script> <!-- jQuery easing -->
    <script src="js/car/custom.js" type="text/javascript"></script> <!-- jQuery initialization -->
	<script src="js/ticker.js" type="text/javascript"></script>
	<script type='text/javascript' src='js/jquery.common.min.js'></script>


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = '../../apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>


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


<!-- End Document
================================================== -->
</body>

</html>