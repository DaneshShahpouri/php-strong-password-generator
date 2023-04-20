<?php 
include_once __DIR__ . '/partials/function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Strong Password Generator</title>
</head>
<body>
    <h3>Crea la tua passWord</h3>
    <form action="" method="get">
        <input type="number" placeholder="Lunghezza Password" name="passwordLength">
        <input type="submit">
    </form>

  <?php echo $newPassWord; ?>

</body>
</html>