<html>
<head><title>First Choice Stadium - Query Works</title></head>

<h1 style="color:white; text-align: center;font-size:30;">First Choice - Employee information</h1>
<h2 style="color:white; text-align: center;font-size:30;">Select Employee</h2>
<body style= "background-color: blue; color:white; text-align: center;font-size:30; ">

<?php
if(isset($_COOKIE["username"])){

   echo "<form action=\"selectworks.php\" method=post>";

   $username = $_COOKIE["kopr3660"];
   $password = $_COOKIE["aes4shohZ1"];

   $conn = new mysqli("vconroy.cs.uleth.ca",kopr3660,aes4shohZ1,kopr3660);

   $sql = "select idnumber from WORKS GROUP BY idnumber";
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "ID of Working EMPLOYEE: <select name=\"idnumber\">";

      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[idnumber]'>$val[idnumber]</option>";

      }
      echo "</select>";
      echo "<input type=submit name=\"submit\" value=\"View\">";
   }
   else
   {
      echo "<p>There are no employees working this game!</p>";
   }

   echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}
?>



</body>
</html>
