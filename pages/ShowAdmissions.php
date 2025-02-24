<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
    <p>checking !</p>
    <iframe
<table class="table">
    <thead>
        <tr>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">address</th>
            <th scope="col">PinCode</th>
            <th scope="col">Phone</th>
            <th scope="col">Gender</th>
            <th scope="col">State</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Last Passout Year</th>
            <th scope="col">Password</th>
            <th scope="col">Is Approved</th>
            <th scope="col">Is Admin</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            <th scope="col">Approve</th>
            
        </tr>
    </thead>
    <tbody>
    
<?php 

require '../config/dbconn.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){

?>

        <tr>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["pin"] ?></td>
            <td><?php echo $row["Phone"] ?></td>
            <td><?php echo $row["gender"] ?></td>
            <td><?php echo $row["state"] ?></td>
            <td><?php echo $row["dob"] ?></td>
            <td><?php echo $row["lyp"] ?></td>
            <td><?php echo $row["pass"] ?></td>
            <td><?php echo $row["isapprove"] ?></td>
            <td><?php echo $row["isadmin"] ?></td>
            <td><button type="button" class="btn btn-info">Edit</button></td>
            <td><button type="button" class="btn btn-danger">Delete</button></td>
            <td><button type="button" class="btn btn-success">Delete</button></td>
        </tr>

<?php
}
}

?>
</tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>