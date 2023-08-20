<html>
<head><title>First Choice Stadium - Query of Game</title></head>

<h1 style="color:white; text-align: center;font-size:30;">First Choice - Fan information</h1>
<h2 style="color:white; text-align: center;font-size:30;">Select Fan</h2>
<body style= "background-color: blue; color:white; text-align: center;font-size:30; ">



<?php
if(isset($_COOKIE["username"])){

   echo "<form action=\"selectsection.php\" method=post>";

   $username = $_COOKIE["kopr3660""];
   $password = $_COOKIE["aes4shohZ1"];

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select teams from GAME";
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "GAME home team: <select name=\"hometeam\">";
      echo "GAME away team: <select name=\"awayteam\">";

      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[hometeam]'>$val[hometeam]</option>";
   echo "<option value='$val[awayteam]'>$val[awayteam]</option>";

      }
      echo "</select>";
      echo "<input type=submit name=\"submit\" value=\"View\">";
   }
   else
   {
      echo "<p>There are no games on this date!</p>";
   }

   echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}
?>



</body>
</html>
