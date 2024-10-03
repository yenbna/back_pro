<?php
session_start();
include('includes/openDbConn.php');
if(isset($_POST['submit'])) {
    if(empty($_POST['companyName']) || empty($_POST['phone'])) {
        $_SESSION['errorMessage'] = "Please fill in all fields.";
        header("Location: select.php"); 
        exit();
    }
    $shipperID = $_POST['shipperID'];
    $companyName = addslashes($_POST['companyName']);
    $phone = addslashes($_POST['phone']);
    $sql = "UPDATE shippersLab5 SET CompanyName='$companyName', Phone='$phone' WHERE ShipperID=$shipperID";
    $result = mysqli_query($db, $sql);
    include("includes/closeDbConn.php");
    header("Location: select.php");
    exit();
} else {
    header("Location: select.php");
    exit();
}
?>
