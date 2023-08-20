<html>
<body style= "background-color: blue; color:white; text-align: center;font-size:30; ">

<?php

if(isset($_COOKIE["username"])) {
   $username = $_COOKIE["kopr3660"];
   $password = $_COOKIE["aes4shohZ1"];

   $conn = new mysqli("vconroy.cs.uleth.ca",kopr3660,aes4shohZ1,kopr3660);

   $sql = "select salary from EMPLOYEE where idnumber=$_POST[idnumber]";

   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
     echo "<table
     border='1px';
     width='20%'
     height='10%'
     style='margin-left:auto; margin-right:auto;border-color: white;'>";
      while($rec = $result->fetch_assoc()) {



    echo "<tr align = 'center'>";
    echo "<th>Salary </th>";
		echo "<td>$rec[salary]</td>";
		echo "</tr>";
      }
      echo "</table>";


   } else {

      echo "<p>Employee $_POST[idnumber] does not exist.</p>";

   }

}
else
{
  echo "<h3>You are not logged in!</h3><p> <a href=\"index.php\">Login First</a></p>";

}

echo "<a href=\"main.php\">Return</a> to Home Page.";

?>
