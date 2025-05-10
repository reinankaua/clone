<?php
ob_start();

header('Content-Type: application/json');

require_once '../db/connection.php';

try {
    $data = json_decode(file_get_contents('php://input'), true);

    if (!$data || !isset($data['name'], $data['email'], $data['password'])) {
        throw new Exception('Dados incompletos.');
    }

    $name  = trim($data['name']);
    $email = trim($data['email']);
    $password = $data['password'];

    if (strlen($name) < 3 || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 8) {
        throw new Exception('Dados inválidos.');
    }

    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->fetch()) {
        throw new Exception('E-mail já cadastrado.');
    }

    $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$name, $email, $password]);

    $response = ['success' => true, 'message' => 'Conta criada com sucesso!'];

} catch (Exception $e) {
    $response = ['success' => false, 'message' => $e->getMessage()];
} catch (PDOException $e) {
    $response = ['success' => false, 'message' => 'Erro ao salvar no banco.'];
}

ob_end_clean();

echo json_encode($response);
