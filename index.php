<?php
include __DIR__ . './functions.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Iscrizione Newsletter</title>
</head>

<body>
    <div class="container mt-5 d-flex flex-column justify-content-center align-items-center">
        <form class="d-flex align-items-center gap-2" action="index.php" method="POST">
            <label for="user-email">Inserisci la tua email:</label>
            <input type="text" id="user-email" name="user-email">
            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
        <?php if(isset($success) && $success) { ?>
            <div class="alert alert-success mt-2" role="alert">Email valida!</div>
        <?php } ?>

        <?php if(isset($success) && !$success) { ?>
            <div class="alert alert-danger mt-2" role="alert">Email non valida!</div>
        <?php } ?>
    </div>
</body>

</html>