<?php
session_start();
$_SESSION['fio'] = $_POST['fio'];
$_SESSION['tel'] = $_POST['tel'];
$_SESSION['email'] = $_POST['email'];
$conn = new mysqli('localhost', 'root', '', 'metall');

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $tel = $_POST['tel']; 
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password']; 

    if ($password !== $confirm_password) {
        die("Пароли не совпадают.");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (fio, email, tel, password, role) VALUES (?, ?, ?, ?, 'user')");
    
    if ($stmt === false) {
        die("Ошибка подготовки запроса: " . $conn->error);
    }

    $stmt->bind_param("ssss", $fio, $email, $tel, $hashed_password);

    if ($stmt->execute()) {
        
        header("Location: ../index1.php"); 
        exit(); 
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>