<?php
session_start();
if(isset($_POST['submit'])) {
    if(empty($_POST['shipperID']) || empty($_POST['companyName']) || empty($_POST['phone'])) {
        $_SESSION['errorMessage'] = "Please fill in all fields.";
        header("Location: select.php"); 
        exit();
    }

    if(!is_numeric($_POST['shipperID'])) {
        $_SESSION['errorMessage'] = "You must enter a number for Shipper ID.";
        header("Location: select.php");
        exit();
    }

    include('includes/openDbConn.php');
    $stmt = $db->prepare("INSERT INTO shippersLab5 (ShipperID, companyName, phone) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $shipperID, $companyName, $phone);
    $shipperID = $_POST['shipperID'];
    $companyName = $_POST['companyName'];
    $phone = $_POST['phone'];
    $stmt->execute();
    $stmt->close();
    header("Location: select.php");
    exit();
} else {
    header("Location: select.php");
    exit();
}
?>
