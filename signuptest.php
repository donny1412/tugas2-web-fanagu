<?php
    include 'conn.php'; 

    $hass=hash('sha256',$_POST['password']);
    $sql = "INSERT INTO signup (username, email, password)
            VALUES ('".$_POST['username']."',
                    '".$_POST['email']."',
                    '".$hass."' 
                    )";
    if ($conn->query($sql)==TRUE){
        echo "New record created successfully";
        header("location:login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>