<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EMPLOYEE(mentor) LOGIN</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<h1>MENTOR LOGIN PORTAL</h1>
  <br><hr>
  <form method="post" action="mentor-login-bknd.php">
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

</html>
