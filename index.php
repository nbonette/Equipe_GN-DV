<!DOCTYPE html>
<html>
<head>
    <title>Equipe de Desenvolvimento</title>
    <style>
        /* Estilos CSS para a página */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .developer {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }
        .developer img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-right: 20px;
        }
        .developer .info {
            flex: 1;
        }
        .developer h2 {
            margin-top: 0;
        }
        .developer p {
            margin-bottom: 10px;
        }
        .software {
            margin-bottom: 40px;
        }
        .software h2 {
            margin-top: 0;
        }
        .software p {
            margin-bottom: 10px;
        }
        .contact {
            text-align: center;
        }
        .contact p {
            margin-bottom: 5px;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
</head>
<body>

<nav class="navbar col-12 position-fixed navbar-expand-lg navbar-dark bg-dark" style="z-index: 999;">
  <div class="container-fluid col-11 m-auto">
    <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="100px"> Guear National DeVelopmentes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Equipe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="www.ish.app.br" target="_blank">App-ISH Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="www.ish.app.br/pescador" target="_blank">App-ISH Pescador</a>
        </li>
        </ul>
      </div>
  </div>
</nav>
<br><br><br><br>
    
    <div class="container">
        <section>
            <h2 align="center"><br>Nossa Equipe<br><br></h2>
            
            <div class="developer">
                <img src="img/juninho.jpg" alt="Foto do Desenvolvedor 1">
                <div class="info">
                    <h3>Nelson Bonette Junior</h3>
                    <p>Cargo: Desenvolvedor Full Stack</p>
                    <p>Cidade: Cananeia/SP</p>
                </div>
            </div>
            
            <div class="developer">
                <img src="img/guilherme.jpg" alt="Foto do Desenvolvedor 2">
                <div class="info">
                    <h3>Guilherme Miamoto</h3>
                    <p>Cargo: Desenvolvedor Frontend</p>
                    <p>Cidade: Registro/SP</p>
                </div>
            </div>
            
            <div class="developer">
                <img src="img/vinicius.jpg" alt="Foto do Desenvolvedor 3">
                <div class="info">
                    <h3>Vinicius de Souza</h3>
                    <p>Cargo: Desenvolvedor Backend</p>
                    <p>Cidade: Registro/SP</p>
                </div>
            </div>
            
            <div class="developer">
                <img src="img/derick.jpg" alt="Foto do Desenvolvedor 4">
                <div class="info">
                    <h3>Derick</h3>
                    <p>Cargo: Desenvolvedor de Banco de Dados</p>
                <p>Cidade: Sete Barras/SP</p>
            </div>
        </div>
    </section>
</div>
<footer class="page-footer font-small blue p-3" style="background-color: #333;">
  <div class="text-center">
    <a href="#" target="_blank"> Copyright © <GN-DV> – Webdesign 2023 Todos os direitos reservados </a>
  </div>
</footer>
</body>
</html>