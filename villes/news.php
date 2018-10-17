<?php
// $connect = mysqli_connect("localhost", "root", "", "news");
// $email = $_POST['email'];
//
// $query ="INSERT INTO users (email) VALUES ('$email')";
// $result = mysqli_query($connect,$query);
//
//   if($result)
//   {
//       echo "<h2>Merci de vous être Inscrits !!!</h2>";
//   }
//   else
//   {
//     echo "<h2>Caractére non valide!!!</h2>";
//     }


$connect = mysqli_connect("localhost", "root", "", "news");
$email = $_POST['email'];

$query = "INSERT INTO users (email) VALUES ('$email')";
$result = mysqli_query($connect, $query);

if ($result)
{
  echo "<h3>Merci de vous etre inscrit!!</h3>";
}
else
{
  echo "<h3>L'inscription n'a pas abouti</h3>";
}

 ?>
