<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$query = $_POST['query'];


$conn = new mysqli('localhost','root','','gym');
if($conn->connect_error) {
    die('Connection Failed : '.$conn->connect_error);
}
else {
    $stmt = $conn->prepare("insert into contact(name, email, mobile, query)
    values(?, ?, ?, ?)");
    $stmt->bind_param("ssis",$name, $email, $mobile, $query);
    $stmt->execute();
    echo "Request Submit Successfully............!!!!!!!!";
    $stmt->close();
    $conn->close();
}

?>