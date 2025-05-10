## 🖥️ Tecnologias Utilizadas

- PHP
- MySQL
- HTML, CSS e JavaScript 
- XAMPP (Apache + MySQL)
- phpMyAdmin
- Bootstrap 5.x
- Git/Github

---

## ⚙️ Requisitos

- [XAMPP](https://www.apachefriends.org/pt_br/index.html) instalado

---

## 🚀 Como Executar o Projeto

### 1. Clone o repositório

```bash
git clone https://github.com/reinankaua/clone.git
```

### 2. Mova o projeto para a pasta do XAMPP

Copie o conteúdo da pasta clonada para:

```
C:\xampp\htdocs\clone
```

### 3. Inicie os serviços do XAMPP

Abra o **Painel de Controle do XAMPP** e inicie os seguintes módulos:

- Apache
- MySQL

---

## 🗃️ Configuração do Banco de Dados

### Acesse o phpMyAdmin

Abra no navegador:

```
http://localhost/phpmyadmin
```

### Crie o banco e a tabela

No menu superior, clique em **SQL** e cole o seguinte comando:

```sql
  CREATE DATABASE IF NOT EXISTS clone;
  USE clone;

  CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(100) NOT NULL,
    company VARCHAR(100) NOT NULL,
    address VARCHAR(100) NOT NULL
  );
```

Clique em **Executar**.

---

## 🔗 Conexão com o Banco de Dados

Certifique-se de que seu arquivo `conexao.php` contenha o seguinte:

```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "clone";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}
?>
```

> ⚠️ No XAMPP, o usuário padrão é `root` e a senha geralmente é vazia (`""`).

---

## 🌐 Acessar o Projeto

Após configurar tudo, acesse via navegador:

```
http://localhost/clone
```


## 🙋‍♂️ Autor

Desenvolvido por [Reinan Kauã](https://github.com/reinankaua)