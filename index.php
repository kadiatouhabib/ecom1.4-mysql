<?php
$server = 'localhost';
$userName = "root";
$pwd = "";
$db = "ecom1";

$conn = mysqli_connect($server, $userName, $pwd, $db);
if ($conn){
    echo "Connected to the $db database successfully";
} else {
    echo "Error : Not connected to the $db database";
}

$result = mysqli_query ($conn, "SELECT * FROM user");
$Data1 = mysqli_fetch_row($result);

//$result2 = mysqli_query ($conn, "SELECT * FROM user");
$Data2 = mysqli_fetch_assoc($result);

//$result3 = mysqli_query ($conn, "SELECT * FROM user");
$Data3 = mysqli_fetch_assoc($result);

echo '</br>';
echo '</br>';

echo"first fetch";
echo '</br>';
var_dump ($Data1);
echo '</br>';
echo '</br>';

echo"second fetch";
echo '</br>';
var_dump ($Data2);
echo '</br>';
echo '</br>';

echo"third fetch";
echo '</br>';
var_dump ($Data3);
echo '</br>';
echo '</br>';