<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podaci</title>
</head>
<body>
    <a href="formaZaPodatke.html">Dodaj još vrenosti</a><br>
</body>
</html>
<?php
    if(isset($_POST["submit"]))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test1";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $ime=$_POST['fname'];
        $prezime=$_POST['lname'];
        $mail=$_POST['mail'];
        $sql = "INSERT INTO MyGuests (firstname, lastname, email)
        VALUES ('$ime', '$prezime', '$mail')";

        if ($conn->query($sql) === TRUE) {
            echo "Unete vrednosti";
        } else {
            echo "Greska: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>