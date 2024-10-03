<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 6 - Select</title>
    <style>
        .center {
            margin: 0 auto;
            width: 50%; 
            font-size: large;
            text-align: center;
            margin-top: 20px;
        }
        table {
           margin: 20px auto;
           border-collapse: collapse;
           width: 80%;
           background-color: #fff;
        }

        th, td {
          padding: 8px;
          border: 1px solid #ddd;
          text-align: left;
        }

        th {
          background-color: cadetblue;
          color: black;
         }

    </style>
</head>
<body>
    
<div class="center">
 <h1>Lab 6 - Select</h1>
    <?php

    include 'includes/menu.php';
    include 'includes/openDbConn.php';

    $sql = "SELECT UserID, LastName, FirstName, Title FROM usersLab5";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>UsersLab5 Table</h2>"; 
        echo "<table><tr><th>UserID</th> <th>LastName</th> <th>FirstName</th> <th>Title</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["UserID"]."</td><td>".$row["LastName"]."</td><td>".$row["FirstName"]."</td><td>".$row["Title"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $sql = "SELECT ShipperID, CompanyName, Phone FROM shippersLab5";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>shippersLab5 Table</h2>"; 
        echo "<table><tr><th>ShipperID</th><th>CompanyName</th><th>Phone</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["ShipperID"]."</td><td>".$row["CompanyName"]."</td><td>".$row["Phone"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
   include 'includes/closeDbConn.php';
    ?>
</div>
</body>
</html>
