<?php
$connect = mysqli_connect("localhost", "root", "", "contact");
$name = $_POST['name'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$message = $_POST['message'];


$query = "INSERT INTO contact (nom, prenom, email, message) VALUES ('$name', '$prenom', '$email', '$message')";
$result = mysqli_query($connect, $query);

if ($result)
{
  echo "<h3>Your message has been sent, Thank you!</h2>";
}
else
{
  echo "<h2>Your message hasn't been sent, please try again</h2>";
}

 ?>
