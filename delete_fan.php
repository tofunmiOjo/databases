
<html>
<head><title>First Choice</title></head>
<h1 style="color:white; text-align: center;font-size:30;">Delete a Fan</h1>
<body style= "background-color: blue; color:white; text-align: center;font-size:30;">



<?php                                                                                                                                                                                                     
                                                                                                                                                                                                          
if(isset($_COOKIE["username"])){                                                                                                                                                                          
                                                                                                                                                                                                    
   echo "<form action=\"deleteFan.php\" method=post>";

   $username = $_COOKIE["kopr3660"];
   $password = $_COOKIE["aes4shohZ1"];

   $conn = new mysqli("vconroy.cs.uleth.ca",kopr3660,aes4shohZ1,kopr3660);

   $sql = "select seatnumber from FAN";
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "FAN seatnumber: <select name=\"seatnumber\">";

      while($val = $result->fetch_assoc())
      {
         echo "<option value='$val[seatnumber]'>$val[seatnumber]</option>";

      }
      echo "</select>";
      echo "<input type=submit name=\"submit\" value=\"Delete\">";
   }
   else
   {
      echo "<p>No FANS! </p>";
   }

   echo "</form>";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}
?>



</body>
</html>
