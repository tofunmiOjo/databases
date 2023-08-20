
<html>
<body style= "background-color: blue; color:white; text-align: center;font-size:30; ">

<?php

if (isset($_COOKIE["username"])) {
   $username = $_COOKIE["kopr3660"];
   $password = $_COOKIE["aes4shohZ1"];

   $conn = new mysqli("vconroy.cs.uleth.ca",kopr3660,aes4shohZ1,kopr3660);

   $sql_st = "INSERT INTO FAN values ($_POST[seatnumber],'$_POST[name]','$_POST[favouriteteam]')";


   if(mysqli_query($conn, $sql_st))
   {
      echo "<h3> New Fan Added</h3>";

   }
   else {
      $err = $conn->errno;
      if($err == 1062)
      {
         echo "<p> FAN with that seat number already exists $_POST[date]!</p>";
      }
      else {
      echo "<p>empty primary key</p>";
         echo "<p>error number $err</p>";
      }

   }
   echo "<a href=\"main.php\">Return</a> to Home Page.";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}

?>
</body>
</html>
