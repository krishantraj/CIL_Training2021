<!DOCTYPE html>
<?php
///connect to the database
//$conn=mysqli_connect("localhost","hr","hr",'mastemp');
$res = oci_connect('hr','hr');
var_dump($res);
mysqli_connect_error();




//store the sql query in a variable $sql
$query = 'select * from mastemp';

//Store the output of the query from the mysql server in the multidimension array  variable
$result = mysqli_query($conn, $query);
$r=mysqli_num_rows($result);
print("<table border=1>");
print("<tr><th>EID</th><th>FULL_NAME</th></tr>");
$s=0;
if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result))
                {
                        echo "<tr><td>";
                        echo $row["eid"];
                        echo "</td><td>";
                        echo $row["FULL_NAME"];
                        echo "</td></tr>";
               }
      }
print("</table>");
?>
