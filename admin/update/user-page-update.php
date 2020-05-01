<?php 
	include "../include/connect.php";
	session_start();
if (isset($_SESSION['u_id']) && $_SESSION['u_admin'] == 0) {
    	header("Location:../index.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="shortcut icon" href="../../assets/ico/favicon.ico">
<title>CodeCrush</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<script src="../js/jquery.min.js"> </script>
<script src="../js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="../js/jquery.metisMenu.js"></script>
<script src="../js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="../css/custom.css" rel="stylesheet">
<script src="../js/custom.js"></script>
<script src="../js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>



</head>
<body>
<div id="wrapper">
       <!----->
<?php include "nav.php"; ?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="../index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Update</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
			<div class="blank-page">
				<div class="panel-group">
					
				<?php
					$user_sql = "select * from users";
					$users = mysqli_query($conn,$user_sql);
					while ($row_user = mysqli_fetch_array($users)): ?>
						<div class="panel-body">
						<form class="col-md-12 col-sm-12" method="post" action="user-individual-update.php">
							<div class="well well-sm"><p><?php echo $row_user['user_uid'];?></p></div>
							<div class="col-md-6">
								<?php  $id = $row_user['user_id']; ?>
								<button class="btn btn-primary btn-block" name="update" value="<?php echo $id;?>">update</button>
							</div>
							<div class="col-md-6">
								<input type="hidden" name="uid" value="<?php echo $row_user['user_id'] ?>" disabled>
								<button class="btn btn-info btn-block" name="delete" value="<?php echo $id;?>">delete</button>
							</div>
						</form>
						</div>
						<?php
					endwhile;
				?>
				</div>
	        </div>
	</div>
	
	
	<!--//faq-->
		<!---->
<?php include "../footer.php"; ?>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="../js/jquery.nicescroll.js"></script>
	<script src="../js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

