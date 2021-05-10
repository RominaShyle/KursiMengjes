<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "projekt2";

$conn = new mysqli($servername, $username, $password,$database);

//kontrollojme nese eshte bere lidhja me serverin


if($conn->connect_error){

    die('<br>Sorry, check your credentials and try again!');
}

echo "<pre>";
    var_dump($conn);
    echo "</pre>";



//$sql = "CREATE DATABASE IF NOT EXISTS projekt2";

//if($conn->query($sql) === TRUE){

$sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL ,
        password VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        UNIQUE(email)
        )";

        if($conn->query($sql) === TRUE){

          //  ECHO "Tabela users u krijua me sukses!";

          //menyra e pasigurt:
            // $sql = "INSERT INTO users 
            // (firstname, lastname, email, password) VALUES ('John', 'Doe', 'john@email.com','1234');";
            
            // $sql .= "INSERT INTO users 
            // (firstname, lastname, email, password)
            // VALUES ('Jane', 'Doe', 'jane@email.com','123456');";
          
            //menyra e sigurt me prepared statements

            $sql = "INSERT INTO users 
         (firstname, lastname, email, password) VALUES (?, ?, ?, ?);";
            $stmt= $conn->prepare($sql);
            $stmt->bind_param('ssss', $firstname, $lastname, $email, $pass);

            $firstname = "Ann";
            $lastname = "Smith";
            $email = "Ann@email.com";
            $pass = "1234";

          if(!$stmt->execute()){
              echo("Nuk u be");
          }
          
          $firstname = "Annaa";
            $lastname = "Smith";
            $email = "Annaaaaaa@email.com";
            $pass = "1234";
            if(!$stmt->execute()){
                echo("Nuk u be");
            }
           
           
           
            $firstname = "lali";
            $lastname = "Smith";
            $email = "lali@email.com";
            $pass = "1234";
            $stmt->execute();
            
            // if($conn->query($sql)){

            //     echo "lali";
            // }
            // else {
            //     die('Useri nuk u krijua' . $conn->error);
            // }

        }
        else 
        
        die('Error! Tabela nuk u krijua' . $conn->error);

//}
//else 

//die('<br>ka ndodhur nje error, databaza nuk u krijua.' . $conn->error);

$conn->close();
