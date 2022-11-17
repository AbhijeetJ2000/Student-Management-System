<?php
    $con = mysqli_connect('localhost', 'root', '','db_contact');

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $country = $_POST['country'];

    $sql = "INSERT INTO `tbl_contact` (`Id`, `First Name`, `Last Name`, `Email`, `Country`) VALUES ('0', '$firstName', '$lastName', '$email', '$country')";

    $rs = mysqli_query($con, $sql);

    if($rs){
    	echo "Contact Records Inserted";
    }

?>

