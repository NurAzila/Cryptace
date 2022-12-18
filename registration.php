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
			echo "---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
			echo "<h3>Registration successful</h3>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Register</title>
        <link rel="icon" href="register.png" type="image/gif"> <link rel="stylesheet" href="Style.css"/>
    </head>

<body>
	<div class="row" style="padding-top:50px">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div id="home-section">
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <h1 class="login-title">Registration</h1>
        <div class="input-group">
            <label> Username </label>
            <input type="text" name="username" class = "login-input" value="" placeholder="Username">
        </div>
        <div class="input-group">
            <label> Password </label>
            <input type="password" name="password" class = "login-input" value="" placeholder="Password">
        </div>
        <div class="input-group" align="center">
            <input type="submit" class = "login-button" value="Register" name="submit">
        </div>
        <p>
            Already a member? <a href="login.php">Click to Login</a></p>
    </form>
	</div>
    </div>
  <div id="hr" style="padding-top:50px">
  <hr>
  </div>
</div>
</body>
</html>