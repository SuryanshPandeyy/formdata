<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Document</title>
</head>

<?php
include 'conn.php';
include 'submit.php';
?>

<body>
    <div class="button-data" style="margin-left: 30px">
      <button class="btn btn-primary" onclick="window.location.href='index.php'">Back</button>
    </div>

  <?php
  echo '
 <div class="container">
  <form class="form" action="' . upload($mysqli) . '" method="POST">

   <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name"/>
   </div>

   <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" />
   </div>

   <div class="form-group">
    <label for="phone">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone"/>
   </div>

   <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address"/>
   </div>

   <div class="form-group">
    <label for="house">House</label>
    <input type="text" class="form-control" id="house" name="house"/>
   </div>

   <button type="submit" name="submit" class="btn btn-primary">Submit</button>
 </div>
 </form>
 </div>';
  ?>
</body>

</html>