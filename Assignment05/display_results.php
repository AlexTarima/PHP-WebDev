<?php
    // get the data from the form
    $user_name = filter_input(INPUT_POST, 'customer_name');
    $bread_type = filter_input(INPUT_POST, 'bread_type');
	
	$sauces_display = '';
	
	$sauces = filter_input(INPUT_POST, 'sauce',
		FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
	if ($sauces !== NULL) {
		foreach($sauces as $key => $value) {
			$sauces_display .= '<br>' . $value;
		}
	} else {
		$sauces_display = "no sauces were selected";
	}
	
	$bread_length = filter_input(INPUT_POST, 'size');
	if ($bread_length == NULL) {
		$bread_length = 'unknown';
	}
	
    // format the unformatted input
    $user_name_formatted = htmlspecialchars($user_name);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Processed Order</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Processed Order</h1>

        <label>Customer Name:</label>
        <span><?php echo $user_name_formatted; ?></span><br>

        <label>Bread Type:</label>
        <span><?php echo $bread_type; ?></span><br>

        <label>Sauces:</label>
        <span><?php echo $sauces_display . '<br>' ?></span><br>

        <label>Sandwich Size:</label>
        <span><?php echo $bread_length; ?></span><br>

    </main>
</body>
</html>