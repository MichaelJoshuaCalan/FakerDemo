<?php
  
require 'vendor/autoload.php';
$faker = Faker\Factory::create();
$conn = mysqli_connect("localhost:3306", "root", "feb62002", "fake");

if(!$conn)
{   
    die("Connection failed: " . $conn->connect_error);
}  

for ($i=0; $i <= 20; $i++){   
$sql = "INSERT INTO cardDetail(ccid, creditCardType, creditCardNumber, creditCardExpirationDate, userIdNumber) 
values('".$faker->ccid."','".$faker->creditCardType."', '".$faker->creditCardNumber."', '".$faker->creditCardExpirationDate."', '".$faker->userIdNumber(0, 100)."')";     

mysqli_query($conn, $sql);

}



?>