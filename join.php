<?php
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$area = $_POST['area'];
$mobile = $_POST['mobile'];

$conn = new mysqli('localhost','root','','gym');
if($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
}
else {
    $stmt = $conn->prepare("insert into joinus(name, age, gender, area, mobile)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi",$name, $age, $gender, $area, $mobile);
    $stmt->execute();
    echo "Request Submit Successfully............!!!!!!!!";
    $stmt->close();
    $conn->close();
}

?>