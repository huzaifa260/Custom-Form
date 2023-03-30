<?php
$name = $_POST["fname"];
$lname = $_POST["lname"];
$telnum = $_POST["Tel_num"];
$date = $_POST['date'];
$email = $_POST["email"];
$message = $_POST["message"];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = $_POST['title'];
  echo "'Thank You: " . $title." ";
}
echo $name." ".$lname."'"."</br>";
echo "You have submitted the following details:"."<br>";
echo "Date of Birth: " . $date."<br>";
echo "Telephone: ".$telnum."<br>";
echo "Email: ".$email."<br>";
echo "Message: ".$message;
?>