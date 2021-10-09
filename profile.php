<?php
session_start();
include "config.php";
$user = $_SESSION['login_user'];
if(isset($user))
{?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Profile Page</title>
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
                    <th>Details</th>
                    <th>Values</th>
</tr>
<?php
    $sql = "SELECT *FROM personal_details where Roll_no= $user";
    $qu = mysqli_query($conn,$sql);
    if (mysqli_num_rows($qu)>0) {
        // Fetch one and one row
        while ($row = mysqli_fetch_assoc($qu)) {
            ?>
            <tbody>
         <tr>
             <td>Name</td>
             <td><?php echo $row["Name"];?></td>
        </tr>
          <tr><td>Roll number</td>
          <td><?php echo $row["Roll_no"];?></td>
        </tr>
          <tr><td>Email</td>
          <td><?php echo $row["Email"];?></td></tr>
          <tr><td>Department</td>
          <td><?php echo $row["Department"];?></td></tr>
          <tr><td>Year</td>
          <td><?php echo $row["Year"];?></td></tr>
          <tr><td>Hostel name</td>
          <td><?php echo $row["Hostel_name"];?></td></tr>
          <tr><td>Room number</td>
          <td><?php echo $row["Room_no"];?></td></tr>
          <tr><td>Parent/Gaurdian</td>
          <td><?php echo $row["Parent_Gaurdian"];?></td></tr>
          <tr><td>Parent/Gaurdian Phone number</td>
          <td><?php echo $row["Parent_Gaurdian_Phone_no"];?></td></tr>
          <tr><td>Phone</td>
          <td> <?php echo $row["Phone_number"];?></td></tr>
          <tr><td>Password</td>
          <td><?php echo $row["Password"];?></td></tr>
        </tbody>
       <?php }
    }
}
    mysqli_close($conn);
    ?>