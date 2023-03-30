<?php
/*$name = $_POST["fname"];
$lname = $_POST["lname"];

echo "Thank You".$name.$lname."</br>";
echo $lname."</br>";*/
$name = $_POST["fname"];
$lname = $_POST["lname"];
$telnum = $_POST["Tel_num"];
$date = $_POST['date'];
$fileup = $_POST["file"];
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
echo "Message: ".$message;

?>