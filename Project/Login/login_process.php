<?php
session_start();
require_once "users.php";

if (isset($_POST['login'])) {

    // Step 1: Input sanitization
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Step 2: Validation
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "All fields are required";
        header("Location: login.php");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format";
        header("Location: login.php");
        exit();
    }

    // Step 3: Authentication
    $foundUser = false;

    foreach ($users as $user) {
        if ($user['email'] === $email) {
            $foundUser = true;

            if (password_verify($password, $user['password'])) {

                // Step 4: Session creation
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name']    = $user['name'];
                $_SESSION['role']    = $user['role'];

                // Step 5: Role-based redirect
                if ($user['role'] === 'admin') {
                    header("Location: admin/dashboard.php");
                } elseif ($user['role'] === 'doctor') {
                    header("Location: doctor/dashboard.php");
                } else {
                    header("Location: patient/dashboard.php");
                }
                exit();

            } else {
                $_SESSION['error'] = "Incorrect password";
                header("Location: login.php");
                exit();
            }
        }
    }

    if (!$foundUser) {
        $_SESSION['error'] = "User not found";
        header("Location: login.php");
        exit();
    }
}
?>
