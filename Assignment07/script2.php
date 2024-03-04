<?php
 // include the code from conect.php here
 require_once('connect.php');
 
 // create a string variable holding the command to query the pets table
 $query = 'SELECT * FROM books';
 
 //prepare the statement for execution
 $statement = $db->prepare($query);
 
 //execute the statement
 $statement->execute();
 
 //we now have the result set and want to fetch data from the first record
 $books = $statement->fetchall();
 
 $statement->closeCursor();
 
 ?>
 
 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Shop</title>
	<link rel="stylesheet" href="main.css">
</head>

<body>
	<h1 style="margin-left: 40px">Books Shop</h1>
    <h2 style="margin-left: 40px">Books List</h2>
	
    <ul>
        <?php
        // display the values for a column
        foreach ($books as $book) {
            echo "<li>";
            echo $book['title'] . ' by ' . $book['author'];
            echo "</li>";
        }
        ?>
    </ul>

    <?php
    $statement->closeCursor();
    ?>
</body>

</html>