<?php



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['wallet'])) {
    $email = $_POST['email'];
    $wallet = $_POST['wallet'];
    $plan = $_POST['plan'];
    $txid= $_POST['txid'];
}else{
    die('error-1');
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "binancevpn.com";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `accounts` (email, wallet, plan,txid)
VALUES ('$email', '$wallet', '$plan', '$txid')";

if ($conn->query($sql) === TRUE) {
    echo "Your information signed successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

