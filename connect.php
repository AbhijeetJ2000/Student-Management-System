<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $r1 = $_POST['Gender'];
    $country = $_POST['country'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if($conn -> connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(id, firstName, lastName, email, password, Gender, country values($firstName, $lastname, $email, $password, $Gender, $country)");
        $stmt -> blind_param("issssss", 0, $firstName, $lastName, $email, $password, $Gender, $country);
        $stmt -> execute();
        echo "registration successfully.....";
        $stmt -> close();
        $conn -> close();
    }
?>


