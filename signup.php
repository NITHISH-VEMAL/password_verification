<?php
define('HOST','localhost');
 define('USERNAME', 'root');
 define('PASSWORD','malavelappan');
 define('DB','signup');

// Create connection
$con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);

// Check connection
$first = $_POST['fn'];
$last = $_POST['ln'];
$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "insert into signups values ('$user','$pass')";
$sq = "insert into creation values ('$first','$last','$user','$pass')";
$sql1 = "SELECT * from signups WHERE username LIKE '{$user}' AND password LIKE '{$pass}' LIMIT 1";
$result = $con->query($sql1);
if ($result->num_rows == 1) 
    {
    
    header('Location: redindex.html');
    exit;
    } 
else
{if(mysqli_query($con, $sq) && mysqli_query($con,$sql)){
 echo 'success';
 }
}

?>