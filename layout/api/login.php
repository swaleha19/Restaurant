<?php

  require '../session.php';
  include 'connection.php';
  $uname = $_POST['uname'];
  $pass = md5($_POST['pass']);
  $query = "SELECT * FROM login_control_master WHERE user_username = '$uname' or user_email = '$uname'";
  $result = mysqli_query($con , $query);
  if ($row = mysqli_fetch_assoc($result)) {
    if ($row['user_userpassword']==$pass) {
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['user_name'] = $row['user_username'];
      $_SESSION['status'] = $row['user_status'];
      echo json_encode(array('status'=>'success'));
    }else{
      echo json_encode(array('status'=>"error"));
    }
  } else {
    echo json_encode(array('status'=>"error"));
  }

?>
