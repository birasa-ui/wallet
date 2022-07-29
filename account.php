
<?php
	include "connect.php";
	$result=$conn->query("SELECT balance FROM  wallet");
	$row=mysqli_fetch_array($result)    
?>                       
<!DOCTYPE html>
<html>
<head>
	<title>My wallet</title>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

		  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		  	<link rel="stylesheet" type="text/css" href="account.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">

		<h1 style="color: white; text-align: center;">My wallet</h1>
			<?php
			if(isset($_SESSION['Username'])){

echo " <a href='logout.php' style='margin-left:80%; font-size:30px; text-decoration:none; color:#808080;'><b>" . $_SESSION['Username']."</a></a>";
}
?>
	</nav>
	<div class="container-fluid col-lg-6 container-1">
		<h1 class="balance">BALANCE</h1>
		<center>
			<H1 class="initial_balance"><B><?php echo $row['balance']; ?> RWF</B></H1>
		</center>
	</div>
	<div class="container-fluid col-lg-6">
       <div class="service">
			<center>
				<h1 class="balance">SERVICE</h1>
				<div class="row service-1 b ">
					<div class="col-lg-6 v ">
						<i class="fas fa-users icon "> <br><a class="link">pay</a></i>
					</div>
					<div class="col-lg-6 ">
						<i class="fa fa-tint icon "><br><a class="link"> bills</a></i>
					</div>
				</div>
				<div class="row service-1">
					<div class="col-lg-6 v">
						<i class="fa fa-plane icon"> <Br><a class="link">flight</a></i>
					</div>
					<div class="col-lg-6">
						<i class="fa fa-train icon"> <br><a class="link">transport</a></i>
					</div>
				</div>
			</center>    	
		</div>
	</div>
</body>
</html>