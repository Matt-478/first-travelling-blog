<?php 
// SAVIENO
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Email_signup_form';

// PARBAUDA CONNECTION
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die("Kļūda - ".$conn->connect_error);
}

$sql = "SELECT * FROM Forms";
$result = $conn->query($sql);


// APSTRAADAA UN SUUTA UZ DB
if (isset($_POST)) {
$name = $_POST['Name'];
$email = $_POST['Email'];
}

$sql = "INSERT INTO Forms (Name, Email) VALUE ('$name', '$email')";

if($conn->query($sql) === TRUE) {
  echo 'Ieraksts nosūtīts uz DB';
} else {
  echo "kaut kas nesanāca - ".$sql.'<br>'.$conn->error;
}
?>