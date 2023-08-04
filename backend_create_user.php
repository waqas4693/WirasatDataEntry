<?php

// session_start();
// if(isset($_SESSION['user_id'])) {
//     header('Location: insert_data.html');
//     exit;
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_name = $_POST['user_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $designation = $_POST['designation'];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $conn = mysqli_connect('localhost', 'root', 'root', 'wirasat_task_management');

    if (mysqli_connect_errno()) {
        die('Failed to connect to database: ' . mysqli_connect_error());
    }

    $sql = "INSERT INTO users (email, password, user_name, first_name, last_name, designation) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ssssss", $email, $hashed_password, $user_name, $first_name, $last_name, $designation);

    mysqli_stmt_execute($stmt);

    // if(mysqli_stmt_affected_rows($stmt) === 1) {
    //     $_SESSION['user_id'] = mysqli_insert_id($conn);
    //     $_SESSION['email'] = $email;
    //     $_SESSION['user_name'] = $user_name;
    //     $_SESSION['first_name'] = $first_name;
    //     $_SESSION['last_name'] = $last_name;
    //     $_SESSION['designation'] = $designation;

    //     header('Location: insert_data.html');
    //     exit;
    // } else {
    //     echo 'Failed to add user data to database.';
    // }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>