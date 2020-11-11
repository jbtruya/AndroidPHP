<?php

include 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $address = $_POST['address'];
    
    $statement = $conn->prepare("CALL registerUser(?,?,?,?,?,?,?);");

    $statement->bindParam(1, $username, PDO::PARAM_STR);
    $statement->bindParam(2, $password, PDO::PARAM_STR);
    $statement->bindParam(3, $firstname, PDO::PARAM_STR);
    $statement->bindParam(4, $middlename, PDO::PARAM_STR);
    $statement->bindParam(5, $lastname, PDO::PARAM_STR);
    $statement->bindParam(6, $dateofbirth, PDO::PARAM_STR);
    $statement->bindParam(7, $address, PDO::PARAM_STR);

  	if(($statement->execute()) == 1){
		echo "success";
	}

    $conn = null;



?>