<?php
	$first_name = filter_input(INPUT_POST, 'first_name');	
	$last_name = filter_input(INPUT_POST, 'last_name');
	$score_1 = filter_input(INPUT_POST, 'score_1');
	$score_2 = filter_input(INPUT_POST, 'score_2');
	$score_3 = filter_input(INPUT_POST, 'score_3');
	
	$average = ($score_1 + $score_2 + $score_3) / 3;
        
	$list_scores = $score_1 . ', ' . $score_2 . ', ' . $score_3;
    $average_f = "$".number_format($average, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Assignment 2</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
		<h1>Assignment 2</h1>
        <label>Student Name:</label>
        <span><?php echo htmlspecialchars($first_name . ' ' . $last_name); ?></span><br>

        <label>Your scores:</label>
        <span><?php echo htmlspecialchars($list_scores); ?></span><br>

        <label>Average:</label>
        <span><?php echo $average_f ?></span><br>
    </main>
</body>
</html>