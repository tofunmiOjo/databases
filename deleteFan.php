<html>
<body style= "background-color: blue; color:white; text-align: center;font-size:30; ">

<?php                                                                                  
                                                                                       
if (isset($_COOKIE["username"])) {                                                     
                                                                                       
   $username = $_COOKIE["kopr3660"];                                                   
   $password = $_COOKIE["aes4shohZ1"];                                                 
                                                                                       
   $conn = new mysqli("vconroy.cs.uleth.ca",kopr3660,aes4shohZ1,kopr3660);             
                                                                                       
   $sql = "delete from FAN where seatnumber='$_POST[seatnumber]'";                    
   if($conn->query($sql))
   {
    echo "<h3> FAN has been removed!</h3>";

   } else {
      $err = $conn->errno;
      $errtext = $conn->error;
      echo "You got an error code of $err.";
      echo "Text for this code: $errtext.";
   }
   echo "<br><br><a href=\"main.php\">Return</a> to Home Page.";
} else {

   echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

   }
?>
</body>
</html>

