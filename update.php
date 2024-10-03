<?php
session_start();
if (!isset($_SESSION["errorMessage"])) {
    $_SESSION["errorMessage"] = "";
}

include('includes/openDbConn.php');
$sql = "SELECT * FROM shippersLab5 WHERE ShipperID = 2";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $companyName = $row["CompanyName"];
    $phone = $row["Phone"];
} else {
    echo "Shipper with ShipperID = 2 not found.";
    exit();
}

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Shipper</title>
    <style>
        .container {
            text-align: center;
            font-size: larger;
        }
    </style>
</head>
<body>
<div class="container">
<form id="form0" method="post" action="doUpdate.php">
    <fieldset>
        <legend>Update Shipper</legend>
        <ul>
            <li><label title="ShipperID" for="shipperID">ShipperID</label></li>
            <input name="shipperID" id="shipperID" type="text" size="20" maxlength="3" value="2" readonly /></li>
            <li><label title="CompanyName" for="companyName">Company Name</label></li>
            <input name="companyName" id="companyName" type="text" size="20" maxlength="20" value="<?php echo $companyName; ?>" />
            <li><label title="Phone" for="phone">Phone #</label></li>
            <input name="phone" id="phone" type="text" size="20" maxlength="20" value="<?php echo $phone; ?>" /></li>
            <li><input type="submit" value="Update Info" name="submit" id="submit"></li>
        </ul>
    </fieldset>
</form>
</div>
</body>
</html>
