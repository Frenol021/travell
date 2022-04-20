<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);

//set up for mysql Connection
$servername = 'localhost';
$username= 'root';
$password = '';
$dbname="book";
$tbl_name="book_form";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['send'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
//$address = $_POST['address'];
$location = $_POST['location'];
$guest = $_POST['guest'];
$arrival = $_POST['arrival'];
$leaving = $_POST['leaving'];

$req = "INSERT INTO book_form(name, email, phone, address, location, guest, arrival, leaving)   VALUES
('$name', '$email', '$phone', '$address', '$location', '$guest', '$arrival', '$leaving')";

}

if (mysqli_query($conn, $req)){

header("location:book.php");

} else{
    echo "something weirdo happenned";
}

mysqli_close($conn);

?>