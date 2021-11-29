<?php
$long_paragraph = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lacus nisl, vestibulum faucibus turpis non, mollis maximus massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas tincidunt, lorem ut vestibulum auctor, ipsum nisi convallis lacus, eget consectetur nulla elit vel augue. Sed a lorem sit amet enim bibendum cursus. Duis gravida purus ut velit consequat, quis tincidunt nulla vestibulum. Donec tincidunt pharetra ipsum non sodales. Pellentesque magna lacus, sagittis a efficitur eu, suscipit a mauris. Duis nisl dui, condimentum eget aliquam a, sollicitudin et mi. Nunc fringilla ante mauris, et porta elit pulvinar nec. Phasellus ac ligula maximus, sodales erat vitae, placerat mi. Vivamus rhoncus et arcu at condimentum.Duis ipsum dui, sagittis eget velit vitae, molestie lacinia enim. Nullam mattis nisl et turpis sollicitudin, eget tincidunt erat scelerisque. Sed sit amet ultrices eros, quis aliquet turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In hac habitasse platea dictumst. In viverra nunc at dolor ultricies sagittis. Proin finibus tincidunt scelerisque. Mauris id justo ut lacus efficitur sagittis. Vestibulum maximus tellus in magna dapibus, in congue sapien eleifend. In hac habitasse platea dictumst. Mauris aliquet fringilla eros in commodo.";
// Suddivido in tanti paragrafi per ogni punto
$new_paragraphs = explode(". ", $long_paragraph);
// var_dump($new_paragraphs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-4</title>
</head>

<body>
    <h1>Paragrafo</h1>
    <p><?php echo $long_paragraph ?></p>
    <h1>Diviso in nuovi paragrafi</h1>
    <ul>
        <?php for ($i = 0; $i < count($new_paragraphs); $i++) {
            $single_p = $new_paragraphs[$i]
        ?>
            <li><?php echo $single_p ?></li>
        <?php }
        ?>
    </ul>

</body>

</html>