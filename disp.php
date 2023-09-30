

<html>
<body bgcolor="#3BB9FF">
<h1 align="center"> <b>AIR INDIA EMPLOYEE DETAILS </b></h1>

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

$result = mysqli_query($con,"SELECT emp_ssn, name, address, salary, age, shift, phone_number FROM emp_info WHERE emp_ssn= '$_POST[ssn]' ");

echo "<table border='1' width='600' height='200' align='center'>
<caption> <b>Employee Details</b></caption>
<tr>
<th>SSN</th>
<th>Name</th>
<th>address</th>
<th>salary</th>
<th>age</th>
<th>shift</th>
<th>Ph no</th>
</tr>";


while($row = mysqli_fetch_array($result))
 {
   echo "<tr>";
  echo "<td>" . $row['emp_ssn'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['salary'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['shift'] . "</td>";
  echo "<td>" . $row['phone_number'] . "</td>";
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