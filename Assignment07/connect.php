

<?php

// This .php script creates a connection with a database named petsdb.
// It can be used as a template to create  a connection to any databases
try {

//create the data source. This statement assumes that you have a MySQL database installed in your system
$dsn = 'mysql:host=localhost; dbname=books_sc';

// provide user and password information. This assumes that when you installed XAMPP,
//you did not set a password for the user 'root'

$username = 'root'; //LATER, CHANGE THIS TO roots TO CAUSE AN EXCEPTION
$password = '';

// create the data connection
$db = new PDO($dsn, $username, $password); // PDO has been instantiated and $db is holding the object

//echo 'you are now connected';


} catch (Exception $e) {

$errorMessage = $e->getMessage();
//echo 'Error connecting to the databse';
//echo "Error message: $errorMessage ";


}

?>