<?php

//Setting up connection
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Failed to connect:" . mysqli_connect_error());
} else {
    echo "Conection Esatablished!<br>";
}

//Creating database 
$sql = "CREATE DATABASE Basic_Bank";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Failed to create database. <br>";
} else {
    echo "DATABASE Created!<br>";
}

//Creating table customers
$sql = "CREATE TABLE `basic_bank`.`user_data` ( `User_ID` INT NOT NULL AUTO_INCREMENT , `User_Name` VARCHAR(11) NOT NULL , `User_Email` VARCHAR(40) NOT NULL , `Amount` FLOAT(30) NOT NULL , PRIMARY KEY (`User_ID`)) ";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Failed to create table.<br>";
} else {
    echo "User_Data Table in Database Created!<br>";
}

//Adding 10 dummey data into table customers
$sql = "INSERT INTO `basic_bank`.`user_data` (`User_ID`, `User_Name`, `User_Email`, `Amount`) VALUES 
('1', 'Ahmed', 'ahmed.khan@email.com', '1000.00'), 
('2', 'Ali', 'ali.sherazi@email.com', '500.00'), 
('3', 'Fatima', 'fatima.jinnah@email.com', '300.00'), 
('4', 'Hassan', 'hassan.ibrahim@email.com', '10000.00'), 
('5', 'Irfan', 'irfan.khan@email.com', '50000.00'), 
('6', 'Javed', 'javed.akhtar@email.com', '7500.00'), 
('7', 'Khalid', 'khalid.malik@email.com', '65000.00'), 
('8', 'Laraib', 'laraib.khan@email.com', '500.00'), 
('9', 'Mariam', 'mariam.javed@email.com', '64000.00'), 
('10', 'Naveed', 'naveed.ahmed@email.com', '505000.00')";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Failed to add entries to table. <br>";
} else {
    echo "Entries added!<br>";
}

//Creating transaction table customers
$sql = "CREATE TABLE `basic_bank`.`transaction` ( `Tran_ID` INT NOT NULL AUTO_INCREMENT , `FromUser` VARCHAR(11) NOT NULL , `ToUser` VARCHAR(11) NOT NULL , `Amount` DECIMAL NOT NULL , PRIMARY KEY (`Tran_ID`))";

$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Failed to create table.<br>";
} else {
    echo "Transaction Table Created!<br>";
}

?>