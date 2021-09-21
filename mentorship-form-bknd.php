

<?php
  if(isset($_GET['eid']) and $_GET['email'] != '')
  {
    $conn = oci_connect('hr', 'hr', 'localhost');
    // var_dump($conn);
    // if (oci_error()) {
    //   echo "an error occured krishant";
    // } else {
    //   echo "DB conn successful krishant";
    // }
   
  
    $query = "insert into MENTORAPPLICANTS (EID,FULL_NAME,GRADE) values(". $_GET['eid'] .",'". $_GET['name']."','". $_GET['designation'] ."')";
    //echo $query;
    $result = oci_parse($conn, $query);
    $r=oci_execute($result);
    
    if($r){
      echo  " <h1> form submission successful </h1>";
    }
    else{
      echo " <h1>some error occured </h1> ";
    }

  }
  else{
    $errMsg = "<h1>Error! You didn't enter some required fields.</h1>";  
    echo $errMsg; 
  }
  
    ?>