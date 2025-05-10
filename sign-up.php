<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Criar Conta - Alfama Web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js"></script>
</head>
<body class="d-flex flex-column min-vh-100">

  <div class="auth-container container-fluid p-0 flex-grow-1 d-flex flex-column flex-md-row">
    <div class="col-12 col-md-6 auth-form-section d-flex flex-column justify-content-between">
      <div class="auth-header px-3 px-md-0">
        <img src="./assets/logo.png" alt="Alfama Web" class="auth-logo">
        <a href="#" class="fw-bold">Saiba mais</a>
      </div>

      <div class="auth-form-section-content px-3 px-md-4 py-4 py-md-8">
        <h1 class="auth-title">Criar conta</h1>
        <form id="registerForm" class="auth-form">
          <div>
            <button type="button" class="btn btn-outline-secondary w-100 auth-social-button">
              <img class="social-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" alt="Google">
              Entrar com a conta google
            </button>
            <div class="d-flex align-items-center my-3">
              <hr class="flex-grow-1">
              <span class="px-3">ou</span>
              <hr class="flex-grow-1">
            </div>
            <div class="mb-3">
              <label for="fullName" class="fw-semibold form-label">Nome completo</label>
              <input type="fullName" class="form-control" id="fullName" placeholder="Digite seu nome completo:" required>
            </div>
            <div class="mb-3">
              <label for="email" class="fw-semibold form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Digite seu email:" required>
            </div>
            <div class="mb-2">
              <label for="password" class="fw-semibold form-label">Senha</label>
              <input type="password" class="form-control" id="password" placeholder="Insira sua senha:" required>
            </div>
            <span class="small password-details">Insirir mais de 8 caracteres</span>
            <div id="formMessage" class="mt-2"></div>
          </div>
          <button type="submit" class="w-100 fw-semibold button">Criar conta</button>
          <p class="fw-bold text-center">Já tem uma conta? <a href="index.php" class="fw-bold">Faça login</a></p>
        </form>
      </div>
    </div>

    <div class="col-12 col-md-6 d-none d-md-block auth-image-section" style="background-image: url(./assets/woman.jpg)">
      <div class="auth-image-overlay d-flex flex-column justify-content-between h-100">
        <div></div>
        <div class="auth-image-content">
          <h1 class="fw-bold auth-image-title">Lorem ipsum dolor sit conse ctetur adipis. </h1>
          <p class="auth-image-description">Lorem ipsum dolor sit amet, consectetur adipis elit. Donec euismod risus vitae libero vestibulu.</p>
          <div class="mb-1">
            <span class="text-warning">⭐⭐⭐⭐⭐</span> 5.0
          </div>
          <p>+200 comentários</p>
        </div>
        <div class="arrow-controls">
          <span class="me-3 arrow-control">&larr;</span>
          <span class="arrow-control">&rarr;</span>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
