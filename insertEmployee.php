<html>
<body style= "background-color: blue; color:white; text-align: center;font-size:30; ">
<?php
if (isset($_COOKIE["username"])) {
$username = $_COOKIE["kopr3660"];
$password = $_COOKIE["aes4shohZ1"];

$conn = new mysqli("vconroy.cs.uleth.ca",kopr3660,aes4shohZ1, kopr3660);


$sql_st = "INSERT INTO EMPLOYEE values ($_POST[idnumber],$_POST[salary],'$_POST[name]', '$_POST[duty]')";
$sql = "INSERT INTO WORKS(idnumber, salary, name, duty) values ($_POST[idnumber],$_POST[salary],'$_POST[name]', '$_POST[duty]')";

if(mysqli_query($conn, $sql_st))  
{
	echo "<h3> New Employee Added!</h3>";

} else {
   $err = $conn->errno;
   if($err == 1062)
   {
      echo "<p>Employee_ID $_POST[idnumber] already exists!</p>";
   } else if ($err == 1064) {
     echo "<p>All fields must be entered appropriately!</p>";
    } else {
      echo "<p>MySQL error code $err </p>";

   }

}

echo "<a href=\"main.php\">Return</a> to Home Page.";

} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";
}
?>
</body>
</html>
