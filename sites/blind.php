<?php 
	include("./connection.php"); 
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
	
	$color = $_REQUEST['color'];
	
	if ( $color != '') { 	
		$query = "SELECT id FROM products where color = '".$color."'";
		$result = $mysqli->query($query);
		$items = $result->fetch_array();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="keywords" content="" />
<title>SQL Injection</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />

</head>
<body class="bg-dark">
	<div id="wrapper" class="bg-dark mt-5 pt-5 pb-5">
		<div class="container bg-dark text-white">
<?php 
	include('nav.php');
?>
			<?php 
				if ( $color != '' ) {
			?>
			<div class="w-100 p-3 d-flex justify-content-center">
				<div><strong>Query: </strong><code><?php echo $query; ?></code></div>
			</div>
			<?php 
				}
			?>		
			<div class="w-100 p-3 d-flex justify-content-center">
				<form method="GET">
					<div class="row mb-3">
						<div class="col-12 d-flex justify-content-center">Check out your favorite color:</div>
					</div>
					<div class="row mb-3">
						<div class="col-12 d-flex justify-content-center"><input type="text" name="color" value="<?php echo $color; ?>" /></div>
					</div>
					<div class="row mb-3">
						<div class="col-12 d-flex justify-content-center"><input class="btn-lg" type="submit" value="Submit" name="submit" /></div>
					</div>
				</form>					
			</div>
			<?php 
				if ( $color != '' ) {
			?>
			<div class="w-100 p-3 d-flex justify-content-center">
				<?php 
					if ( !isset($items) or sizeof($items) == 0 ) {
						echo "<div class=\"text-danger\">Oh no, we can't offer sneakers in your favorite color :-(</div>";
					}
					else{
						echo "<div class=\"text-success\">Good news: sneakers in your favorite color are available :-)</div>";
					}
				?>				
			</div>
			<?php		
				}
			?>
		</div>
	<?php include('footer.php'); ?>
	</div>
<!-- Import Scripts -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- end Import -->
</body>
</html>
