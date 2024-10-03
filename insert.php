<?php
session_start();
$errorMessage = isset($_SESSION['errorMessage']) ? $_SESSION['errorMessage'] : "";
unset($_SESSION['errorMessage']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        .menu {
            text-align: center;
        }
        .container {
            text-align: center;
            font-size: larger;
        }
    </style>
</head>
<body>
    <?php 
    include('includes/menu.php');
    ?>
    <form id="form0" method="post" action="doInsert.php">
<fieldset>
<legend>Insert into Shipper Table</legend>
<ul>
<li><label title="ShipperID" for="shipperID">ShipperID</label>
<input name="shipperID" id="shipperID" type="text" size="20" maxlength="3" /></li>
<li><label title="CompanyName" for="companyName">Company Name</label>
<input name="companyName" id="companyName" type="text" size="20" maxlength="20" />
<li><label title="Phone" for="phone">Phone #</label>
<input name="phone" id="phone" type="text" size="20" maxlength="20" /></li>
<li><span><?php echo $errorMessage; ?></span></li>
<li><input type="submit" value="Insert Info" name="submit" id="submit"></li>
</ul>
</form>
</fieldset>
</body>
</html>

