<?php
$body_weight  = filter_input(INPUT_POST, 'weight');
$height = filter_input(INPUT_POST, 'height');
$age = filter_input(INPUT_POST, 'age');
$activty_level = filter_input(INPUT_POST, 'active');

$bmr = (66 + (6.3 * $body_weight) + (154.8 * $height) - (6.8 * $age)) * $activty_level;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    
<h1>BMR Calculator</h1>

  <label for="bmr">Recommended daily calorie intake:</label><br><br>

  <h2><?php echo $bmr ?></h2>

</body>
</html>