<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EMPLOYEE LOGIN</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <h1>employee LOGIN PORTAL</h1>
  <form method="post" >
    <br>

    <label for="eid" class="form-label">EID NUMBER:</label>
    <input type="number" placeholder="EId4 NUMBER" class="form-control" id="eid" name="eid" required>
    <br>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary" onclick="checkLogin()">LOGIN</button>
  </form>

  <script src="elscript.js" async defer></script>
</body>
<?php
$conn = oci_connect('hr', 'hr', 'localhost');
var_dump($conn);
if (oci_error()) {
  echo "an error occured krishant";
} else {
  echo "DB conn successful krishant";
}

$query = "SELECT mastemp.eid, mastemp.email, elogin.password
FROM mastemp
INNER JOIN elogin ON mastemp.eid = elogin.eid";
echo $query;
$result = oci_parse($conn, $query);
$r = oci_execute($result);
$bool = false;
var_dump($_POST);
while($row = oci_fetch_assoc($result))
{
  var_dump($row);
  if ($row['EID'] == $_POST['eid'] && $row['EMAIL'] == $_POST['email'] && $row['PASSWORD'] == $_POST['password']) {
    
    $bool = true;break;
  }
  
}

var_dump($bool);
if ($bool) {
  
  echo " <h1> welcome  " . $_POST['eid']."</h1> <br>";
echo ' <button class="btn btn-dark btn-lg" class="btn btn-link" type="button"><a href="http://localhost/CIL_TRAINING/Mentor%20choice%20filling%20form.php">click here to proceed</a></button>';


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
</html>
