
<html>
<body style= "background-color: blue; color:white; text-align: center;font-size:30; ">



<?php
if (isset($_COOKIE["username"])) {
$username = $_COOKIE["kopr3660"];
$password = $_COOKIE["aes4shohZ1"];

$conn = new mysqli("vconroy.cs.uleth.ca",kopr3660,aes4shohZ1, kopr3660);
if($mysqli->connect_errno)
{
   echo "Connection Issue!";
   exit;
}

$sql = "INSERT INTO WORKS(date, idnumber) values ('$_POST[date]',$_POST[idnumber])";


if($conn->query($sql))
{
        echo "<h3> Employee is now working on this date</h3>";

} else {
   $err = $conn->errno;
   if($err == 1062)
   {
      echo "<p> Employee ID Number: $_POST[idnumber] on '$_POST[date]' already exists!</p>";
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

