<?php

require 'vendor/autoload.php';
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost:3306", "root", "feb62002", "fake");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    for ($i = 1; $i <= 100; $i++) {
        $email = mysqli_real_escape_string($conn, $faker->email);
        $lastName = mysqli_real_escape_string($conn, $faker->lastname);
        $firstName = mysqli_real_escape_string($conn, $faker->firstname);
        $userName = mysqli_real_escape_string($conn, $faker->username);
        $password = mysqli_real_escape_string($conn, $faker->password);

        $query = "INSERT INTO person (id, email, lastName, firstName, userName, password) 
            VALUES ('$i', '$email', '$lastName', '$firstName', '$userName', '$password')";

        mysqli_query($conn, $query);
    }
}
?>
