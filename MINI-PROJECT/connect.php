<?php
$productname = $_POST['productname'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$quantity = $_POST['quantity'];
$size = $_POST['size'];
$address = $_POST['address'];

$conn = new mysqli("localhost", "root", "", "project");
if ($conn->connect_error){
    die ("Connection failed: ".$conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO orders(productname, name, contact, quantity, size, address)values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiiss", $productname, $name, $contact, $quantity, $size, $address);
    $stmt->execute();
    echo "Order has been confirmed successfully!";
    $stmt->close();
    $conn->close();
    }
?>

