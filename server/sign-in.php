<?php
header('Content-Type: application/json');
require_once '../db/connection.php';

$data = json_decode(file_get_contents('php://input'), true);

if (!$data || !isset($data['email'], $data['password'])) {
    echo json_encode(['success' => false, 'message' => 'Dados incompletos.']);
    exit;
}

$email = trim($data['email']);
$password = $data['password'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 8) {
    echo json_encode(['success' => false, 'message' => 'E-mail ou password inválidos.']);
    exit;
}

$stmt = $pdo->prepare("SELECT id, name, password FROM usuarios WHERE email = ?");
$stmt->execute([$email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$usuario || $password != $usuario['password']) {
    echo json_encode(['success' => false, 'message' => 'E-mail ou password incorretos.']);
    exit;
}

session_start();
$_SESSION['usuario_id'] = $usuario['id'];
$_SESSION['usuario_name'] = $usuario['name'];

echo json_encode(['success' => true, 'message' => 'Login realizado com sucesso!']);
