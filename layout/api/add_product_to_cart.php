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
      $_SESSION['cart_id'] = $row['max'];
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
  $query = "SELECT * FROM cart_details WHERE cart_id = '$cartid' and food_id='$foodid'";
  $exec = mysqli_query($con , $query);
  if($row = mysqli_fetch_assoc($exec)){
    $quantity = $quantity + $row['quantity'];
    $upd_query = "UPDATE cart_details SET quantity='$quantity' WHERE id='$row[id]'";
    $execute = mysqli_query($con , $upd_query);
    if($execute){
      echo 'success';
    } else {
      echo "cart not updated";
    }
  } else {
    $query = "INSERT INTO cart_details VALUES (NULL , '$cartid' , '$foodid' , '$quantity' , '0')";
    $execute = mysqli_query($con , $query);
    if($execute){
      echo 'success';
    } else {
      echo "cart not updated";
    }
  }
 ?>
