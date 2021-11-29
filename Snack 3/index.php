<?php
$numbers = [];
for ($i = 0; $i < 15; $i++) {
    $number = rand(0, 100);
    // l’array non deve contenere lo stesso numero più di una volta
    if (!in_array($number, $numbers)) {
        $numbers[] = $number;
    } else {
        $i--;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-3</title>
</head>

<body>
    <h1>15 Random and Unique numbers</h1>
    <ul>
        <?php
        for ($i = 0; $i < count($numbers); $i++) {
            $number = $numbers[$i]
        ?>
            <li><?php echo $number ?></li>
        <?php } ?>
    </ul>
</body>

</html>