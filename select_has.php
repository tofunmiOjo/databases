<html>
<head><title>First Choice Stadium - Query of Has</title></head>

<h1 style="color:white; text-align: center;font-size:30;">First Choice - Fan information</h1>
<h2 style="color:white; text-align: center;font-size:30;">Select Fan</h2>
<body style= "background-color: blue; color:white; text-align: center;font-size:30; ">



<?php
if(isset($_COOKIE["username"])){

   echo "<form action=\"selecthas.php\" method=post>";

   $username = $_COOKIE["kopr3660"];
   $password = $_COOKIE["aes4shohZ1"];

   $conn = new mysqli("vconroy.cs.uleth.ca",kopr3660,aes4shohZ1,kopr3660);

   $sql = "select seatnumber from HAS";
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "Seat Number: <select name=\"seatnumber\">";

      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[seatnumber]'>$val[seatnumber]</option>";

      }
      echo "</select>";
      echo "<input type=submit name=\"submit\" value=\"View\">";
   }
   else
   {
      echo "<p>There are no fans with this seat number!</p>";
   }

   echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}
?>



</body>
</html>
