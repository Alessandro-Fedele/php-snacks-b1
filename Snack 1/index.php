<?php
$result = "";
// isset serve per verificare se quella variabile esiste
if (isset($_GET["name"]) && (isset($_GET["email"]) && (isset($_GET["age"])))) {
    // filter_var e FILTER_VALIDATE_EMAIL controllano se l'email è valida 
    if (strlen($_GET["name"]) > 3 && filter_var($_GET["email"], FILTER_VALIDATE_EMAIL) && is_numeric($_GET["age"])) {
        $result = "Accesso riuscito";
    } else {
        $result = "Accesso negato";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>

<body>
    <form>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="name">EMail</label>
        <input type="email" name="email" id="email">
        <label for="name">Age</label>
        <input type="number" name="age" id="age">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h2><?php echo $result ?></h2>
</body>

</html>