<html>
<head><title>First Choice</title></head>
<h1 style="color:white; text-align: center;font-size:30;">Bad login</h1>
<body style= "background-color: blue; color:white; text-align: center;font-size:30;">

<?php

$con = new mysqli("vconroy.cs.uleth.ca",$_POST["kopr3660"],$_POST["aes4shohZ1"]);
if($con->connect_errno){
      echo "$con->connect_errno";
      echo "<h3>Invalid username or password!</h3><p><a href=\"index.php\">Try Again</a></p>";
      exit;
   }


$username = $_POST["kopr3660"];
$password = $_POST["aes4shohZ1"];

echo "<p>the username is $username and the password is $password</p>";

setcookie("username",$username,time()+3600);
setcookie("password",$password,time()+3600);

header('Location:main.php');

?>

</body>
</html>
