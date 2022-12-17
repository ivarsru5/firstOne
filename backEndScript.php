<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointments";

$connection = new mysqli($servername, $username, $password, $dbname);

if(!$connection){
    die("Connection failed" . $connection->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];

$sql = "INSERT INTO list (name, email, date)
VALUES ('$name', '$email', '$date')";

// for email to be actually send the app must run on internet, because from localhost it wont work.

if(!empty($name) && !empty($email)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $reciver = "rugelis.ivars@gmail.com";
        $subject = "From: $name <$email>";
        $body = "There have been made a new appointment at $date";
        $sender = "From: $email";

        if(mail($reciver, $subject, $body, $sender)){
            if($connection->query($sql)){
            echo "Appointmant made.";
        }else{
            echo "Error: " . $sql . "<br>" . $connection->connect_error;
        }
        $connection->close();
        }else{
            echo "Sorry faild to make an appointment!";
        }
    }else{
        echo "Please eneter valid email!";
    }
}else{
    echo "Fill out all fields!";
}
?>