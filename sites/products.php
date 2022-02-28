<?php 
	include("./connection.php"); 
	$color = ($_REQUEST['color'] == '') ? 'any' : $_REQUEST['color'];
	$query = "SELECT id, productname, description, color, price, image FROM products";
	if( $color != 'any' ){
		$query = $query." WHERE color = '".$color."'";
	}
	$result = $mysqli->query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="keywords" content="" />
<title>SQL Injection</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script>
	function changeColor(){
		window.location.href="union.php?color="+$("#color").val();
	}
</script>
</head>
<body class="bg-dark">
	<div id="wrapper" class="bg-dark mt-5 pt-5 pb-5">
		<div class="container bg-dark text-white">
			<div class="w-100 p-3 justify-content-center">
				<div class="row mb-5">
					<div class="col-12"><strong>Query: </strong><code><?php echo $query; ?></code></div>
				</div>
				<div class="row mb-5">
					<div class="col-9"><h3>Products</h3></div>
					<div class="col-3">Color:
						<select id="color" onChange="javascript:changeColor()">
							<option value="any" <?php if ($color == 'any') echo "selected"; ?>>any</option>
							<option value="blue"<?php if ($color == 'blue') echo "selected"; ?>>blue</option>
							<option value="green" <?php if ($color == 'green') echo "selected"; ?>>green</option>
							<option value="purple" <?php if ($color == 'purple') echo "selected"; ?>>purple</option>
							<option value="red" <?php if ($color == 'red') echo "selected"; ?>>red</option>
						</select>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-1">ID:</div>
					<div class="col-2">IMAGE:</div>
					<div class="col-3">NAME:</div>
					<div class="col-4">DESCRIPTION:</div>
					<div class="col-2">PRICE:</div>
				</div>
				<?php
					while( $row = $result->fetch_array() ){
						echo '<div class="row mb-4">';
						echo sprintf('<div class="col-1">%d</div><div class="col-2"><img src="%s" width="100" /></div><div class="col-3">%s</div><div class="col-4">%s</div><div class="col-2">%01.2f $</div>', $row[0], $row[5], $row[1], $row[2], $row[4]);
						echo '</div>';
					}
				?>
			</div>
		</div>
	</div>
<!-- Import Scripts -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- end Import -->
</body>
</html>
