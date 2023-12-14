<?php if (isset($_POST['user-email'])) {
    if (str_contains($_POST['user-email'], '.') && str_contains($_POST['user-email'], '@')) {
        $user_email = $_POST['user-email'];
        $success = true;
    } else {
        $success = false;
    }
}