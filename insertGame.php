<html>
<body style= "background-color: blue; color:white; text-align: center;font-size:30; ">


<?php

if (isset($_COOKIE["username"])) {
   $username = $_COOKIE["kopr3660"];
   $password = $_COOKIE["aes4shohZ1"];

   $conn = new mysqli("vconroy.cs.uleth.ca",kopr3660,aes4shohZ1,kopr3660);



   $sql_st = "INSERT INTO GAME values ('$_POST[date]','$_POST[time]','$_POST[hometeam]','$_POST[awayteam]',$_POST[hometeamscore],$_POST[awayteamscore], '$_POST[location]')";


   if(mysqli_query($conn, $sql_st))
   {
      echo "<h3> New Game Added</h3>";

   }
   else {
      $err = $conn->errno;
      if($err == 1062)
      {
         echo "<p> Game during $_POST[date] already exists! </p>";
      }
      else {
      echo "<h4> Something Wrong is happening </h4>";
         echo "error number $err";
      }

   }
   echo "<a href=\"main.php\">Return</a> to Home Page.";
} else {
   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}

?>

</body>
</html>
