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
      body {
    font-family: Arial, sans-serif;
    background-color: #F8F8FF;
    margin: 0;
    padding: 0;}
    footer{
      background-color: #FF0000;
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


<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Feira Tecnológica</h5>
    <p class="card-text">Descubra o incrível mundo da inovação e tecnologia na nossa Feira Tecnológica! Venha conhecer projetos emocionantes e participar de demos interativas. Junte-se a nós e inspire-se no futuro!</p>
    <a href="https://www.cps.sp.gov.br/etec-zona-leste-realiza-feira-tecnologica-nesta-sexta-e-sabado/" class="btn btn-primary">Veja mais</a>
  </div>
</div>
<br>


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