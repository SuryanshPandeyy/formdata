<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <title>Data</title>
</head>

<body>

<?php 
include 'conn.php';

 $sql = "SELECT * FROM form";
 $result = $mysqli->query($sql);

 while ($row = $result->fetch_assoc()){
?>
 <div class="data">
  <div class="button-data">
   <button class="btn btn-primary" onclick="window.location.href='form.php'">Insert Data</button>
  </div>
  <div>
   <table class="data-table">
    <tr class="bg-primary">
     <th>Id</th>
     <th>Name</th>
     <th>Email</th>
     <th>Phone</th>
     <th>Address</th>
     <th>House No.</th>
    </tr>
    <tr>
     <td><?php echo $row['id'] ?></td>
     <td><?php echo $row['name'] ?></td>
     <td><?php echo $row['email'] ?></td>
     <td><?php echo $row['phone'] ?></td>
     <td><?php echo $row['address'] ?></td>
     <td><?php echo $row['house'] ?></td>
    </tr>
   </table>
  </div>
 </div>

<?php } ?>
</body>

</html>