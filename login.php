<?php
define('HOST','localhost');
 define('USERNAME', 'root');
 define('PASSWORD','malavelappan');
 define('DB','signup');

// Create connection
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

   # check connection
if ($con->connect_errno)
{
    echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
    exit();
}

$username = $_POST['user'];
$password = $_POST['pass'];

$sql = "SELECT * from signups WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
$result = $con->query($sql);
if (!$result->num_rows == 1) 
    {
     header('Location: redsignup.html');
    exit;
    } 
else {
        echo "<p>Logged in successfully</p>";
        // do stuffs
     }
?>