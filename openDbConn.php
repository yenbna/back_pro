<?php 
@ $db=mysqli_connect("127.0.0.1","root","Nurila_2004");
mysqli_select_db($db,"nurila") or die(mysqli_error($db));

if (!$db)
{
    echo "Error: could not connect to database.Please try again later";
}
?>
