<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <form id="form" action="mentor-choice-bknd.php">
    <h1>PRIORITY SELECTION APPLICATION FOR MENTORSHIP</h1>
    <label for="name" class="form-label">NAME OF THE TRAIEE:</label>
    <input type="text" placeholder="Name" class="form-control" id="name" name="name">
    <br>

    <label for="eid" class="form-label">EID NUMBER:</label>
    <input type="number" placeholder="EIS NUMBER" class="form-control" id="eid" name="eid">

    <br>
    <label for="designation" class="form-label">DESIGNATION:</label>
    <select class="form-select" aria-label="Default select example" id="designation" name="designation">
      <option selected>E1</option>
      <option value="1">E2</option>
      <option value="2">E3</option>
      <option value="3">E4</option>
      <option value="4">E5</option>
      <option value="5">E6</option>
      <option value="6">E7</option>

    </select>

    <br>

    <label for="Place of posting" class="form-label">Place of posting:</label>
    <input type="Address" placeholder="Place of posting" class="form-control" id="Place of posting">
    <br>

    <label for="residence " class="form-label"> Place of residence :</label>
    <input type="Address" placeholder="Place of residence " class="form-control" id="residence" name="residence">
    <br>
    <label for="contact" class="form-label">contact number:</label>
    <input type="number" placeholder="contact" class="form-control" id="contact" name="contact">
    <br>


    <div class="mb-3">
      <label for="Email" class="form-label">Email address:</label>
      <input type="email" class="form-control" id="Email" placeholder="name@example.com" name="email">
    </div>




    <br>
    <label for="pref1" class="form-label">CHOOSE YOUR 1st MENTOR PREFERANCE:</label>

    <?php
    $conn = oci_connect('hr', 'hr', 'localhost');
    //var_dump($conn);
    // if (oci_error()) {
    //   echo "an error occured    ";
    // } else {
    //   echo "DB conn successful   ";
    // }

    // $query = 'Select mastemp.full_name
    //     from mastemp
    //     inner join mentorapplicants on mentorapplicants.eid = mastemp.eid';
    $query = 'select full_name from mentorapplicants';
    //echo $query;


    $result = oci_parse($conn, $query);
    $r = oci_execute($result);
    $i = 1;
    echo '<select class="form-select" aria-label="Default select example" id="pref1" name="pref1">';
    if ($r) {
      while ($row = oci_fetch_assoc($result)) {

        echo "<option value=" . $row['FULL_NAME'] . ">";
        echo $row['FULL_NAME'];
        print "</option>";

        $i++;
      }
    }
    echo '</select>';

    ?>

    <br>




    <label for="pref2" class="form-label">CHOOSE YOUR 2nd MENTOR PREFERANCE:</label>
    <?php
    $conn = oci_connect('hr', 'hr', 'localhost');
    //var_dump($conn);
    // if (oci_error()) {
    //   echo "an error occured    ";
    // } else {
    //   echo "DB conn successful   ";
    // }
    // $query = 'Select mastemp.full_name
    //   from mastemp
    //   inner join mentorapplicants on mentorapplicants.eid = mastemp.eid';
    // echo $query;
    $query = "select full_name from mentorapplicants";
    //echo $query;

    $result = oci_parse($conn, $query);
    $r = oci_execute($result);
    $i = 1;
    //echo '<label for="PREFERANCE" class="form-label">CHOOSE YOUR 2nd MENTOR PREFERANCE:</label>';
    echo 'pref2<select class="form-select" aria-label="Default select example" id="pref2" name="pref2">';
    if ($r) {
      while ($row = oci_fetch_assoc($result)) {

        echo "<option value=" . $row['FULL_NAME'] . ">";
        echo $row['FULL_NAME'];
        print "</option>";

        $i++;
      }
      echo '</select>';
    }




    ?>

    <br>



    <label for="pref3" class="form-label">CHOOSE YOUR 3rd MENTOR PREFERANCE:</label>


    <?php
    $conn = oci_connect('hr', 'hr', 'localhost');
    //var_dump($conn);
    // if (oci_error()) {
    //   echo "an error occured    ";
    // } else {
    //   echo "DB conn successful   ";
    // }
    // $query = 'Select mastemp.full_name
    //   from mastemp
    //   inner join mentorapplicants on mentorapplicants.eid = mastemp.eid';
    $query = 'select full_name from mentorapplicants';
    //echo $query;


    $result = oci_parse($conn, $query);
    $r = oci_execute($result);
    $i = 1;
    echo '<select class="form-select" aria-label="Default select example" id="pref3" name="pref3">';
    if ($r) {
      while ($row = oci_fetch_assoc($result)) {

        echo "<option value=" . $row['FULL_NAME'] . ">";
        echo $row['FULL_NAME'];
        print "</option>";

        $i++;
      }
      echo '</select>';
    }
    ?>

    <button type="submit" class="btn btn-primary" onclick="checkpreference()">SUBMIT</button>





  </form>
  <script src="checkprefscript.js" async defer></script>




  
</body>

</html>