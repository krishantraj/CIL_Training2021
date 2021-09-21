
  <?php

$conn = oci_connect('hr', 'hr', 'localhost');
//var_dump($conn);



$conn = oci_connect('hr', 'hr', 'localhost');
//var_dump($conn);
// if (oci_error()) {
//   echo "an error occured krishant";
// } else {
//   echo "DB conn successful krishant";
// }

if ($_GET['pref1'] && $_GET['pref2'] && $_GET['pref3'] != '') {

  if (($_GET['pref1'] != $_GET['pref2']) && ($_GET['pref3'] != $_GET['pref1']) && ($_GET['pref2'] != $_GET['pref3'])) {

    $query = 'insert into MENTORPREFERANCE (EID,EMAIL,FULL_NAME,DESIGNATION,MENTORPREF_1	,MENTORPREF_2,MENTORPREF_3) values(\'' . $_GET['eid'] . '\' ,\'' . $_GET['email'] . '\',\'' . $_GET['name'] . '\',\'' . $_GET['designation'] . '\',\'' . $_GET['pref1'] . '\',\'' . $_GET['pref2'] . '\',\'' . $_GET['pref3'] . '\')';
   // echo $query;
    $result = oci_parse($conn, $query);
    $r = oci_execute($result);
    echo " <br> mentor preference filled successfully";

  }
  else{
    echo "<br> <h3>submission unsuccessful, please choose different mentors in three choices given!</h3>";
  }
} else {
  echo "<h3>preferances not filled/fill atleast 3 preferances.</h3>";
}

?>