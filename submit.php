<?php

function upload($mysqli)
{
 if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $house = $_POST['house'];
  $sql = "INSERT INTO form (id, name, email, phone, address, house) VALUES('$id','$name','$email','$phone', '$address', '$house')";
  $result = $mysqli->query($sql);

  header("Location: index.php?submitted");
 }
}
?>