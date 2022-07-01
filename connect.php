<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $DOB = $_POST['DOB'];

    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into usermaster (firstname,lastname,DOB,email,gender,password)
        values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$firstname,$lastname,$DOB,$email,$gender,$assword);
        $stmt->execute();
        echo "Registration Successfully....";
        $stmt->close();
        $conn->close();
    }
?>