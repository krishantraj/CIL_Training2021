<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>mentor login</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <script src='main.js'></script>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<?php
$conn = oci_connect('hr', 'hr', 'localhost');
//var_dump($conn);
// if (oci_error()) {
//   echo "an error occured krishant";
// } else {
//   echo "DB conn successful krishant";
// }

$query = "SELECT mastemp.eid, mastemp.email, elogin.password
FROM mastemp
INNER JOIN elogin ON mastemp.eid = elogin.eid";
//echo $query;
$result = oci_parse($conn, $query);
$r = oci_execute($result);
$bool = false;
//var_dump($_POST);
while($row = oci_fetch_assoc($result))
{
 // var_dump($row);
  if ($row['EID'] == $_POST['eid'] && $row['EMAIL'] == $_POST['email'] && $row['PASSWORD'] == $_POST['password']) {
    
    $bool = true;break;
  }
  //
}

//var_dump($bool);
if ($bool) {
  echo "welcome  " . $_POST['email']." <br>";
echo ' <button class="btn btn-dark btn-lg" class="btn btn-link" type="button"><a href="http://localhost/CIL_TRAINING/employee%20mentoreship%20form.php">click here to proceed</a></button>';


} else {
  echo " sorry! not a valid email / password or eid";
}




if (empty($_POST["eid"] or $_POST["email"] or $_POST["password"] )) {  
  $errMsg = "Error! You didn't enter some required fields.";  
           echo $errMsg;  
} else {  
  $name = $_POST["email"];  
}  

?>
</body>
</html>
