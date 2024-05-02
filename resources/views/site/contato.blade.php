<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ETEC ZONA LESTE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('/js/app.js')}}" rel="script">
  </head>
  <body>
    <style>
      nav{
        background-color:#FFF8DC;
      }
      </style>
  <nav class="navbar navbar-expand-lg bg-body-tertiary-custon">
  <div class="container-fluid">
  <a class="navbar-brand" href="principal.blade.php">
     
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sobrenos">Sobre nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contato">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/noticia">Notícias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Registro</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
     footer{
      background-color: #FF0000;
    }
    body {
    font-family: Arial, sans-serif;
    background-color: #F8F8FF;
    margin: 0;
    padding: 0;
}

.login-container {
    width: 300px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

h2 {
    text-align: center;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
  </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <form action="#">
            <h2>Contato</h2>
            <div class="input-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" placeholder="Digite seu usuário" required>
            </div>
            <div class="input-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            </div>
            <div class="input-group">
                <label for="mensagem">Comentarios:</label>
                <input type="texto" id="mensageiro" name="mensagens" placeholder="Escreva" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
  </body>
  <footer>
    <div class="footer-content">
        <p>© 2024 Nome da Sua Empresa. Todos os direitos reservados.</p>
        <ul>
            <li><a href="#">Política de Privacidade</a></li>
            <li><a href="#">Termos de Serviço</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </div>
</footer>
</html>