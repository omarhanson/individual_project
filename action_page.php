<?php
$firstName = $_POST ['firstName'];
$lastName = $_POST ['lastName'];
$emailAddress = $_POST ['emailAddress'];
$contactNumber = $_POST ['contactNumber'];

// Database connection
$conn = new mysqli ('localhost' , 'root' , ' ' , 'contactdb');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contactinfo(firstName, lastName, emailAddress, contactNumber)
    values(?, ?, ?, ?)");
    $stmt->bind_param("sssi",$firstName, $lastName, $emailAddress, $contactNumber);
    $stmt->execute();
    echo "Message Send Successfully..."
    $stmt->close();
    $conn->$close();



	
}
?>