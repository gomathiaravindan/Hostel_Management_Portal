
<?php
  include "config.php";
  $sql = "SELECT *FROM personal_details";
  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Details Page</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid">
        <div class="table table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Roll Number</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Year</th>
                    <th>Hostel name</th>
                    <th>Room number</th>
                    <th>Parent/Gaurdian</th>
                    <th>Parent/Gaurdian Phone number</th>
                    <th>Phone number</th>
                    <th>Password</th>
</tr>
<tbody>

  <?php  $qu = mysqli_query($conn,$sql);
if (mysqli_num_rows($qu)>0) {
        // Fetch one and one row
        while ($row = mysqli_fetch_assoc($qu)) {
            ?>
            <tbody>
         <tr>
             
             <td><?php echo $row["Name"];?></td>
       
          
          <td><?php echo $row["Roll_no"];?></td>
       
        
          <td><?php echo $row["Email"];?></td>
          <td><?php echo $row["Department"];?></td>
          
          <td><?php echo $row["Year"];?></td>
          <td><?php echo $row["Hostel_name"];?></td>
          <td><?php echo $row["Room_no"];?></td>
          <td><?php echo $row["Parent_Gaurdian"];?></td>
          <td><?php echo $row["Parent_Gaurdian_Phone_no"];?></td>
          
          <td> <?php echo $row["Phone_number"];?></td>
          
          <td><?php echo $row["Password"];?></td></tr>
        </tbody>
<?php } }?>