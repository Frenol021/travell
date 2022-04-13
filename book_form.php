<?php

//set up for mysql Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db_name="book";
$tbl_name="book_form";


$conn = mysqli_connect('locahost', 'root', '', 'book');

if(isset($_POST['send'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$guest = $_POST['guest'];
$arrival = $_POST['arrival'];
$leaving = $_POST['leaving'];

$req = "INSERT INTO 'book_form'(name, email, phone, address, location, guest, arrival, leaving) values
('$name', '$email' '$phone', '$address', '$location', '$guest', '$arrival', '$leaving')";

mysqli_query($conn, $req);

header("location:book.php");

} else{
    echo "something weirdo happenned";
}

?>