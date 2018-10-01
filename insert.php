<!DOCTYPE html>
<html>
<head>
	<title>INSERT</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="./styles.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{		
include('connect.php');
$name=$_POST['name'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
if($name!='')
{
$sql = "INSERT INTO tab1 VALUES ('$name','$Email','$Phone')";

if ($conn->query($sql) === TRUE) {
	echo "<script>window.alert('User inserted')</script>";
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}



$conn->close();
}
?>


<div class="container">
		<h1>Create an account:</h1>
		<br>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<div class="form-group">
			<label>Name:</label> 
			<input type="text" name="name" class="form-control">
		</div>
		
		<div class="form-group">
			<label>Email:</label>
			<input type="Email" name="email" class="form-control">
		</div>	
		
		<div class="form-group">
			<label>Phone:</label>
			<input type="number" name="phone" class="form-control">
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-default">Submit</button>
		</div>
	</form>
	<br>
				<a href="main.html"><button type="submit" class="btn btn-danger">GO Back to Main Page</button></a>

	</div>
</body>
</html>