<?php
    $formName = $_POST['formName'] ?? '';
    $formEmail = $_POST['formEmail'] ?? '';
    $formTextarea = $_POST['formTextarea'] ?? '';

    $link = mysqli_connect("localhost", "root", "", "formDB");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    $sql = "INSERT INTO userInfo (fname, email, mssg) VALUES ('$formName', '$formEmail', '$formTextarea')";

    if(mysqli_query($link, $sql)){
        echo '<script>alert("Success!"); window.location.href = "index.html";</script>';
    }else {
        echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
    }

    mysqli_close($link);
?>