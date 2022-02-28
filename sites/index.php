<?php 
	include("./connection.php"); 
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];
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
	if ( !isset($_REQUEST['submit']) ){
?>
			<div class="w-100 p-3 d-flex justify-content-center">
				<form method="POST">
				<div class="row mb-5">
					<div class="col-12 text-center"><h3>Login</h3></div>
				</div>
				<div class="row mb-2">
					<div class="col-md-4">Username:</div>
					<div class="col-md-8"><input type="text" name="user" value="<?php echo $user; ?>" /></div>
				</div>
				<div class="row mb-5">
					<div class="col-md-4">Password:</div>
					<div class="col-md-8"><input type="password" name="pass" value="<?php echo $pass; ?>" /></div>
				</div>
				<div class="row">
					<div class="col-12 text-center"><input class="btn-lg" type="submit" value="Submit" name="submit" /></div>
				</div>	
				</form>
			</div>
<?php
	}
	else{
?>
			<div class="w-100 p-3 d-flex justify-content-center">
				<div class="row">
					<div class="col-12">
						<?php
							$query = sprintf("SELECT id, username, password FROM users WHERE username = '%s' AND password = '%s'", $user, $pass);
							echo "<strong>Query: </strong><br/>";
							echo "<code>".$query."</code><br/><br/>";
							
							if( $result = $mysqli->query($query) ){
								echo '<div class="row"><div class="col-12"><h2>User page:</h2></div></div>';
								if( $arr = $result->fetch_array() ){
									echo sprintf('<div class="row"><div class="col-12">Welcome %s</div></div>', $arr[1]);
								}
								else{
									echo '<div class="row"><div class="col-12">No userdata found!</div></div>';
								}
							}
							
						?>
					</div>
				</div>			
			</div>
<?php
	}
?>
	</div>
<!-- Import Scripts -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- end Import -->
</body>
</html>
