<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MBA ADMISSIONS - 2016-17</title>
</head>

<body>

<?php  $servername = "sql6.freemysqlhosting.net";
$username = "sql6125192";
$password = "EQBIpmAMNx";
$dbname = "sql6125192";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$conn->close();
/*
// sql to create table
$sql = "CREATE TABLE mbaadm2016 (
FomNo INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Test VARCHAR(5)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table mbaadm2016 created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();*/
?>

</body>
</html>