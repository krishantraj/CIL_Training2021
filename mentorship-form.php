

<?php
  if(isset($_GET['eid']) and $_GET['eid'] != '')
  {
    $conn = oci_connect('hr', 'hr', 'localhost');
    var_dump($conn);
    if (oci_error()) {
      echo "an error occured krishant";
    } else {
      echo "DB conn successful krishant";
    }
   
  
    $query = "insert into MENTORAPPLICANTS (EID,full_name,designation,) values('". $_GET['eid'] ."')";
    echo $query;
    $result = oci_parse($conn, $query);
    $r=oci_execute($result);
  }
  
    ?>