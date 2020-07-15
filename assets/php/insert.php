<!DOCTYPE html>
<html>
<body>

<?php

$mail= $_POST["the-mail"];

$conn = new mysqli ("","root","","storeassisto");
$cmd = "INSERT into mails value('$mail')";

if (mysqli_query($conn, $cmd)) {
  echo "Successful";
//   header('Location: .../index.html');
// exit;
}
else {
  echo "Not saved, Try again";
}

?>
 
</body>
</html>
