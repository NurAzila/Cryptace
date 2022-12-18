<?php 
require_once("config.php");
if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password = $_POST['password'];
		
		$options = array("cost"=>4);
		$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
		
		$sql = "insert into users (username, password) value('".$username."','".$hashPassword."')";
		$result = mysqli_query($conn, $sql);
		if($result)
		{
			echo "Registration successfully";
		}
	}
?>

<h1>Registration Form</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<input type="text" name="username" value="" placeholder="Username">
	<input type="password" name="password" value="" placeholder="Password">
	<button type="submit" name="submit">Submit</buttom>
</form>