<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'metall');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tel = $_POST['tel'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT fio, email, password, role FROM users WHERE tel = ?");
    $stmt->bind_param("s", $tel);
    $stmt->execute();
    $stmt->bind_result($fio, $email, $hashed_password, $role);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        $_SESSION['tel'] = $tel;
        $_SESSION['fio'] = $fio;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $role; 

        if ($role === 'admin') {
            header("Location: admin.php"); // Страница для администраторов
        } else {
            header("Location: ../index.php"); // Страница для пользователей
        }
        exit();
    } else {
        echo "Неверный логин или пароль.";
    }
    $stmt->close();
}

$conn->close();
?>