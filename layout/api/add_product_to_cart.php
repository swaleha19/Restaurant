<?php

  session_start();
  require 'connection.php';
  $user='';
  $mid_query = '';
  if (isset($_SESSION['user_id'])) {
    $user = $_SESSION['user_id'];
    $mid_query = " NULL , '$user'";
  } else {
    $user = session_id();
    $mid_query = " '$user' , NULL ";
  }
  if (!isset($_SESSION['cart_id'])) {
    $qr = "SELECT MAX(cart_id) as max FROM user_cart WHERE cart_del_status = '0' and user_id = '$user' or temp_id = '$user'";
    $result = mysqli_query($con,$qr);
    $row=mysqli_fetch_assoc($result);
    if ($row['max']!=NULL) {
      $_SESSION['cart_id'] = $row['cart_id'];
    } else {
      $qr = "INSERT INTO user_cart VALUES (NULL , $mid_query , '0')";
      $result = mysqli_query($con,$qr);
      if($result){
        echo "5";
        $qr = "SELECT MAX(cart_id) as max FROM user_cart WHERE user_id = '$user' AND cart_del_status = '0'";
        $result = mysqli_query($con,$qr);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['cart_id'] = $row['max'];
      } else {
        echo 'error';
      }
    }
  }
  $cartid = $_SESSION['cart_id'];
  $foodid = $_POST['id'];
  $quantity = $_POST['quantity'];
  $query = "INSERT INTO cart_details VALUES ('$cartid' , '$foodid' , '$quantity' , '0')";
  $execute = mysqli_query($con , $query);
  if($execute){
    echo 'success';
  } else {
    echo "cart not updated";
  }
 ?>
