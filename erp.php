<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhelerp";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $passnumber=$_POST['passnumber'];
    $visitorname=$_POST['visitorname'];
    $visitorsgender=$_POST['visitorsgender'];
    $visitorsidtype=$_POST['visitorsidtype'];
    $iddetails=$_POST['iddetails'];
    $purposeofvisit=$_POST['purposeofvisit'];
    $visitingdepartment=$_POST['visitingdepartment'];
    $mobilenumber=$_POST['mobilenumber'];
    

    $passcreatedby=$_POST['passcreatedby'];
    $visitorsphoto=$_FILES['visitorsphoto']['name'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["visitorsphoto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if ($uploadOk == 0) {
        echo "File Not Uploaded";
    } else {
        if (move_uploaded_file($_FILES["visitorsphoto"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["visitorsphoto"]["name"])). "has been uploaded";
        } else {
        echo "Error Uploading File";
        }
    }

    $sql = "INSERT INTO gateerp (passnumber,visitorname,visitorsgender,visitorsidtype,iddetails,purposeofvisit,visitingdepartment,mobilenumber,passcreatedby,visitorsphoto) VALUES ('$passnumber','$visitorname','$visitorsgender','$visitorsidtype','$iddetails','$purposeofvisit','$visitingdepartment','$mobilenumber','$passcreatedby','$visitorsphoto')";

    if ($conn->query($sql) === true) {
        exit();
    }

    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visitor ERP Portal</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <br>
    <img src="logo_0.png" alt="logo">
    <br>
    <h1>Visitor's ERP Portal</h1>
       <form id="visitor-form" method="post" action="" enctype="multipart/form-data" ><ol type="1">
        <li><label for="passnumber">Gate Pass Number:</label>
          <br><input type="text" id="passnumber" name="passnumber" readonly>
          <button type="button" onclick="generatePassNumber()">Generate Pass Number</button></li><br>
        <li><label for="visitorsname">Visitor's Name:</label><br>
          <input type="text" name="visitorname" id="visitorname">
          </li>
          <li><label for="visitorsgender">Visitor's Gender:</label></li><br>
             <select name="visitorsgender" id="visitorsgender">
                <option value="select">-select-</option>
                <option value="male">Male</option>
                <option value="female">female</option>
                <option value="other">Other</option>
             </select>
        <br><br>
        <li><label for="visitorsidtype" >Visitor's ID Type:</label></li><br>
             <select name="visitorsidtype" id="visitorsidtype">
                <option value="select">-select-</option>
                <option value="passport">Passport</option>
                <option value="drivingLicence">Driving Licence</option>
                <option value="other">Other</option>
             </select>
        <br><br>
          <li><label for="iddetails">ID Details:</label></li>
        <input type="text" name="iddetails" id="iddetails">
        <br>
          <li><label for="purposeofvisit">Purpose of Visit:</label></li>
              <input type="text" name="purposeofvisit" id="purposeofvisit">
        <br>
          <li><label for="visitingdepartment">Visiting Department:</label></li>
              <input type="text" name="visitingdepartment" id="visitingdepartment">
        <br>
          <li><label for="mobilenumber">Mobile Number:</label></li>
              <input type="tel" name="mobilenumber" id="mobilenumber">
        <br>
           <li><label for="visitorentrytime">Visitor Entry Time:</label></li>
              <input type="text" name="visitorentrytime" id="visitorentrytime" readonly>
              <button type="button" onclick="getCurrentTime()">Submit</button>
        <br>
           <li><label for="gatepassgenerationtime">Gate Pass Generation Time:</label></li>
              <input type="text" name="gatepassgenerationtime" id="gatepassgenerationtime" readonly>
        <br>
        <li><label for="passcreatedby" >Pass Generated By:</label></li><br>
            <select name="passcreatedby" id="passcreatedby">
              <option value="select">-select-</option>
              <option value="Rajesh">Rajesh</option>
              <option value="Suresh">Suresh</option>
              <option value="Manoj">Manoj</option>
            </select>
        <br>
      <div class="form-group">
        <br>
          <li><label for="visitorsphoto">Visitor's Photo:</label></li>
            <input type="file" name="visitorsphoto" accept="image/*" capture="camera">
      </ol>
      <br>
          <input type="submit" name="submit" value="Submit">
          <input type="print" name="" onclick="printForm()" value="Print Gate Pass">
      </div>
      <br>
      <script src="script.js"></script>
  </form>
</body>
</html>