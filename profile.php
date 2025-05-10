<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Perfil - Alfama Web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="./index.php">
      <img src="./assets/logo-2.png" alt="Alfama Web" height="20">
    </a>
    <div class="ms-auto">
      <img src="./assets/menu.svg" alt="User" height="40">
    </div>
  </nav>

  <div class="text-center my-5 position-relative">
    <img src="./assets/woman.jpg" alt="Foto de perfil" class="profile-img">
    <div class="camera-icon">
      <img src="./assets/camera.svg" alt="Camera" height="20">
    </div>
    <h5 class="text-fullname">Maria Angélica Oliveira</h5>
    <p class="text-job">Corretora</p>
  </div>

  <div class="container form-container mb-5">
    <form class="profile-form">
      <div class="row g-3">
        <div class="col-md-6">
          <label for="name" class="label">Nome Completo</label>
          <input type="text" class="form-control" id="name" placeholder="Digite seu nome:">
        </div>
        <div class="col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email:">
        </div>
        <div class="col-md-6">
          <label for="phone">Telefone</label>
          <input type="tel" class="form-control" id="phone" placeholder="Digite seu telefone:">
        </div>
        <div class="col-md-6">
          <label for="cpf">CPF</label>
          <input type="text" class="form-control" id="cpf" placeholder="Digite seu CPF:">
        </div>
        <div class="col-md-6">
          <label for="company">Empresa</label>
          <input type="text" class="form-control" id="company" placeholder="Digite sua empresa:">
        </div>
        <div class="col-md-6">
          <label for="address">Endereço</label>
          <input type="text" class="form-control" id="address" placeholder="Digite seu endereço:">
        </div>
      </div>

      <div class="text-center mt-4">
        <button type="submit" class="w-50 mb-3 button">Atualizar cadastro</button>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>
