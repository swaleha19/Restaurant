<?php

  include 'connection.php';
  $name = $_POST['name'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $mob = $_POST['mobile'];
  $pas = md5($pass);
  $quer = "INSERT INTO user_details_master VALUES ( NULL ,'$name' ,'$mob', CURRENT_TIMESTAMP ,NULL)";
  $rs=mysqli_query($con , $quer);
  if ($rs) {
    $query = "SELECT MAX(user_id) as id FROM user_details_master WHERE user_mobile='$mob'";
    $rs = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($rs);
    $id = $row['id'];
    $query = "INSERT INTO login_control_master VALUES ('$id','$uname','$pas','$email','2')";
    $result = mysqli_query($con , $query);
    if ($result) {
      echo json_encode(array('status' => 'success' ));
    } else {
      echo json_encode(array('status' => 'error2' ));
    }
  } else {
    echo json_encode(array('status' => 'error1'));
  }

?>
