<?php
if (isset($_POST['user-email'])) {
    if (str_contains($_POST['user-email'], '.') && str_contains($_POST['user-email'], '@')) {
        $user_email = $_POST['user-email'];
        $validation = 'email valida';
    } else {
        $validation = 'email non valida';
    }
}
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
        <?php if(isset($validation)) { ?>
            <p class="text-center mt-2"><?php echo $validation ?></p>
        <?php } ?>
    </div>
</body>

</html>