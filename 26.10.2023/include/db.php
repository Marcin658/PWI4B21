<?php


/*
$conn = mysqli_connect(
    hostname: '127.0.0.1',
    hostname: 'PHP',
    password: 'php',
    database: '4b2g',
);

if (mysqli_connect_errno()){
    echo "Failed to connect to mySQL" . mysqli_connect_errno();
    else {
        echo "Conection succesful"
    }
}

*/




// wersja obiektowa

$conn = new mysqli(
hostname: '127.0.0.1',
username: 'PHP',
password: 'php',
database: '4B2G',
port: 3306
);

if($conn->connect_errno){
    echo "Failed to connect to mySQL" . mysqli_connect_errno();
    die;
}


function storemessage (string $email, string $message): bool{
    global $conn;

    $sql = sprintf(
        'INSERT INTO contact_messages (email, message) values ("%s" , "%s")'
        $email,
        $message
    );
$result = $conn->query($sql);

$conn->close();

return $result;
}