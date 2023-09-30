

<html>
<body bgcolor="#3BB9FF">
<h1 align="center"><font size='10' face="Times New Roman"> AIR INDIA PLANE DETAILS </font></h1> </br></br></br>

</--?php
$con=mysqli_connect("localhost","root","","Pizza_Hut");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Customer(Name, Address, Phone_number)
VALUES
('$_POST[name]','$_POST[address]','$_POST[Phone]')";

if (!mysqli_query($con,$sql))
  {
  die('Error connecting db');
  }

mysqli_close($con);
?-->



<?php
$con=mysqli_connect("localhost","root","","air india");


// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }




// display results in a table

$result = mysqli_query($con,"SELECT  plane_id, model_id, capacity, source, destination, pilot_id FROM plane_info WHERE plane_id= '$_POST[ssn]' ");

echo "<table  border='1' width='600' height='200' align='center'>

<caption> <b>PLANE DETAILS</b></caption><tr>
<th>plane id</th>
<th>model no.</th>
<th>capacity</th>
<th>source</th>
<th>destination</th>
<th>pilot id</th>
</tr>";


while($row = mysqli_fetch_array($result))
 {
   echo "<tr>";
  echo "<td>" . $row['plane_id'] . "</td>";
  echo "<td>" . $row['model_id'] . "</td>";
  echo "<td>" . $row['capacity'] . "</td>";
  echo "<td>" . $row['source'] . "</td>";
  echo "<td>" . $row['destination'] . "</td>";
  echo "<td>" . $row['pilot_id'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


mysqli_close($con);
?>
</br>
</br>
</br>
</br>
</br>
</body>
</html>