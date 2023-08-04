<?php
session_start();

if (isset($_SESSION['user_name'])) {
  echo "This is already login";
  header("Location: insert_data.php");
  exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user_name = $_POST['username'];
  $password = $_POST['password'];

  $conn = mysqli_connect('localhost', 'dataentr_wirasat_db_user', '%hZ#H4QEVYhG', 'dataentr_wirasat_task_management');

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT user_id, first_name, user_name, password FROM users WHERE user_name = ?";
  $stmt = mysqli_prepare($conn, $sql);

  mysqli_stmt_bind_param($stmt, "s", $user_name);
  mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    if (password_verify($password, $user['password'])) {
      $_SESSION['user_id'] = $user['user_id'];
      $_SESSION['user_name'] = $user['user_name'];
      $_SESSION['first_name'] = $user['first_name'];

      header("Location: insert_data.php");
      exit;
    } else {
      $_SESSION['error'] = "Invalid username or password";
      header("Location: index.php");
    }
  } else {
    $_SESSION['error'] = "Invalid username or password";
    header("Location: index.php");
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
?>