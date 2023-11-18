<?php
$name = $_POST['name'];
$password = $_POST['userPass'] ?? '';

$link = mysqli_connect("localhost", "root", "", "formDB");

if($link === false){
    die("Error: ".mysqli_connect_error());
}

$sql = "SELECT * FROM admin where name='$name' and password='$password'";

$result = $link->query($sql);

if ($result->num_rows > 0) {
    echo '<script>alert("Login Successful!"); window.location.href = "messages.php";</script>';
    }

else {
    echo '<script>alert("Login failed...."); window.location.href = "login.html";</script>';
}

mysqli_close($link);

?>