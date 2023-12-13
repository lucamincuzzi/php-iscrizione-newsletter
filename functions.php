<?php if (isset($_POST['user-email'])) {
    if (str_contains($_POST['user-email'], '.') && str_contains($_POST['user-email'], '@')) {
        $user_email = $_POST['user-email'];
        $validation = '<div class="alert alert-success" role="alert">Email valida!</div>';
    } else {
        $validation = '<div class="alert alert-danger" role="alert">Email non valida!</div>';
    }
}