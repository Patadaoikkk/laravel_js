<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ETEC ZONA LESTE</title>
    <link rel="icon" href="imgs/icone.png" type="image/png"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('/js/app.js')}}" rel="script">
  </head>
  <body>

  <style>
      footer{
      background-color: #FF0000;
    }
     nav{
        background-color:#FFF8DC; 
      }
      body {
    font-family: Arial, sans-serif;
    background-color: #F8F8FF;
    margin: 0;
    padding: 0;}
    img{
      margin: 100px auto;
      display:flex;
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




<div>
  <img src=https://www.eteczonaleste.com.br/wp-content/uploads/2023/11/logo-etec.png>
<h1>Etec Zona Leste no seu futuro</h1>
<p>Bem-vindo à nossa escola, onde a excelência acadêmica se une ao cuidado e apoio individualizado. Nossa missão é proporcionar um ambiente de aprendizado estimulante, <br>
onde cada aluno pode alcançar seu máximo potencial. Com uma equipe dedicada de educadores apaixonados e uma abordagem centrada no aluno, buscamos não apenas transmitir <br>
conhecimento, mas também cultivar habilidades para a vida, criatividade e uma sede contínua de aprendizado. Junte-se a nós nesta jornada educacional, onde cada aluno é <br>
valorizado e encorajado a brilhar.</p>
<a href="/sobrenos"><button type="button" class="btn btn-outline-danger">Sobre Nós</button></a>
</div>

<div>
<h1>Novidades</h1>
<p>Mantenha-se atualizado com as últimas notícias e acontecimentos. Nossa página de notícias é o seu destino para informações frescas e relevantes sobre os temas que <br>
mais importam para você. Explore os artigos mais recentes, análises aprofundadas e cobertura em tempo real. Não perca nenhum detalhe do que está acontecendo no mundo - <br>
mergulhe em nossas notícias agora!
</p>
<a href="/noticia"><button type="button" class="btn btn-outline-danger">Novidades</button></a>
</div>

<div>
<h1>Tire suas dúvidas</h1>
<p>Tem alguma pergunta, sugestão ou apenas quer dizer "oi"? Ficaremos felizes em ouvir de você! Utilize o formulário abaixo para nos contatar diretamente ou encontre <br>
nossas informações de contato detalhadas. Estamos ansiosos para conversar!</p>
<a href="/contato"><button type="button" class="btn btn-outline-danger">Contato</button></a>
</div>
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
