<?php

function count_visitors(){
    $file = 'counter.txt';

    if (file_exists($file)) {
        $count = file_get_contents($file) + 1;
        file_put_contents($file, $count);

        return $count;
    } else {
        file_put_contents($file, 1);
        return 1;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <title>Visitor Counter</title>
</head>
<body>
    <div class="wrap">
        <h2>Visitor Counter</h2>
        <h4>Code Example</h4>
        <div class="visitors">
            <p class="number">
                <?php echo count_visitors();?>
            </p>
            <p class="text">Visits</p>
        </div>
        <p class="how">
        This counter works with PHP.
        <br />
        The number of visits it´s increased when the page is charged or recharged.
        </p>

        <p class="how">
	<a href="https://myhub.page/counter.php">You can see it working HERE</a>
        <br />
        <a href="https://github.com/jrvarelaf">Visit my Github</a> 
        </p>
    </div>
</body>
</html>