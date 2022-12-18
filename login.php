<?php 
require_once("config.php");
if(isset($_POST['submit'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	
	$sql = "select * from users where username = '".$username."'";
	$rs = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($rs);
	
	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		if(password_verify($password,$row['password'])){
			echo "---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
			echo "<h3>Password verified</h3>";
		}
		else{
			echo "*********************************************************************************************************************************************************************--";
			echo "<h2>Wrong Password</h2>";
		}
	}
	else{
		echo "*********************************************************************************************************************************************************************--";
		echo "<h5>No User found</h5>";
	}
}

?>
 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <link rel="shortcut icon" type="img/png" href="login.png">
    <link rel="stylesheet"type="text/css" href="Style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    </head>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <body>
    <div class="row" style="padding-top:50px">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div id="home-section">
		  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <h1 class="login-title">Login</h1>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" class="login-input" value="" placeholder="Username"/>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" class="login-input" value="" placeholder="Password"/>
        </div>
        <div class="input-group" align="center">
            <input type="submit" class="login-button" value="Login" name="submit"/>
        </div>

        <p>
            Not yet a member? <a href="registration.php">New Registration</a></p>
  </form>
      </div>
    </div>
  <div id="hr" style="padding-top:50px">
  <hr>
  </div>
</div>

  </body>

</html>