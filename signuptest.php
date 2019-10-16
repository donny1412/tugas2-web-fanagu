<?php
    include 'conn.php'; 

    $sql = "INSERT INTO signup (username, email, password)
            VALUES ('".$_POST['username']."',
                    '".$_POST['email']."',
                    '".$_POST['password']."' 
                    )";
    if ($conn->query($sql)==TRUE){
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
