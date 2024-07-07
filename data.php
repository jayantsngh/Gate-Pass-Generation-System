<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhelerp";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query="SELECT * from gateerp";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Data</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>


  <table border="1">
        <thead>
    <tr>
    <th>ID</th>
        <th>Pass Number</th>
        <th>Visitor Name</th>
        <th>Gender</th>
        <th>ID Type</th>
        <th>ID Details</th>
        <th>Purpose of Visit</th>
        <th>Department</th>
        <th>Mobile Number</th>
        <th>Visitor Entry Time</th>
        <th>Gate Pass Generation Time</th>
        <th>Pass Created By</th>
        <th>Photo</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = $result->fetch_assoc()) {
        ?>
  
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['passnumber']; ?></td>
            <td><?php echo $row['visitorname']; ?></td>
            <td><?php echo $row['visitorsgender']; ?></td>
            <td><?php echo $row['visitorsidtype']; ?></td>
            <td><?php echo $row['iddetails']; ?></td>
            <td><?php echo $row['purposeofvisit']; ?></td>
            <td><?php echo $row['visitingdepartment']; ?></td>
            <td><?php echo $row['mobilenumber']; ?></td>
            <td><?php echo $row['visitorentrytime']; ?></td>
            <td><?php echo $row['gatepassgenerationtime']; ?></td>
            <td><?php echo $row['passcreatedby']; ?></td>
            <td> <img src="uploads/<?php echo $row['visitorsphoto']; ?>"></img></td>
        </tr>
      
        <?php
    }
    ?>
      </tbody>
</table>

    
</body>
</html>