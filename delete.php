<?php
session_start();

include('includes/openDbConn.php');
$shipperIDToDelete = 2;
$stmt = $db->prepare("DELETE FROM shippersLab5 WHERE ShipperID = ?");
$stmt->bind_param("i", $shipperIDToDelete);
$stmt->execute();
$stmt->close();
header("Location: index.php");
exit();
?>
