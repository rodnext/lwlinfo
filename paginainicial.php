<!DOCTYPE html>

<?php
@session_start();
include('conexao.php');
?>

<html lang="pt-br">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>


 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


<style type="text/css">
.map-responsive{
    overflow:hidden;
    padding-bottom:50%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
   body {
    background-image: url(img/body1.jpg); 
  }
  .container { 
    background-color:  #ffffff;
  }
  #rodape {
  width: 50%;  
  margin: 0 auto;
}
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
 
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
 
#local{
	position: relative;
	padding: 4em 0em 1em 0em;
	background-size: cover;
	text-align: center;
}
#locali
{
	margin-bottom: 0em;
	font-size: 2em;
}

#rodape
{
	overflow: hidden;
	padding: 2em 0em;
}

#rodape p
{
	text-align: center;
	font-size: 1em;
	color: #000000 ; 
}

#rodape a
{
	text-decoration: none;
	color: #000000 ; 
}
.centralizar
{
	overflow: hidden;
	margin: 0em auto;
	width: 1200px;
}
</style>

<link href="carousel.css" rel="stylesheet">
</head>
<body>


<div class="container" ><main role="main">
<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="img/pcgamer2.jpg" width="320" height="305">
      <div class="container">
        <div class="carousel-caption text-left">
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="img/pcgamer.jpg" width="320" height="305">
     <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="img/rtx.jpg" width="320" height="305">
    <div class="container">
        <div class="carousel-caption text-right">
        </div>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>

<main role="main">

<div class="container marketing">

<div class="row" >

  <div class="col-lg-4">
  
  <img src="img/i7.jpg" alt="100px" height="150px" width"240px">

    <h2>Processador Intel Core i7-9700 </h2>
    <p>A memória Intel Optane é uma nova e revolucionária classe de memória não volátil que fica entre
     a memória de sistema e o armazenamento para aumentar o desempenho.
      </p>
    <p><a class="btn btn-secondary" href="exibeprodutos.php" role="button"> &laquo; Produtos &raquo;</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
  <img src="img/pcgamer2.jpg" alt="100px" height="150px" width"240px">

    <h2>PC gamer</h2>
    <p>configuração:

- Placa mãe MSI fm2+
- Processador AMD A6 7480 3.8ghz
- HD 320GB
- Memória 4GB DDR3
- Placa de video integrada APU AMD R5 Series 2GB
- Fonte 230w Real
- Monitor 17 polegadas semi - novo (passível a ter marcas de uso)
- Kit gamer brinde
- Wifi
        </p>
    <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
  </div>
  <div class="col-lg-4">
 <img src="img/RTX2080Ti.png" alt="100px" height="150px" width"240px">

    <h2>RTX2080Ti</h2>
    <p>A Nvidia é o principal fabricante de placas gráficas; sua qualidade garante uma experiência positiva no desenvolvimento do motor gráfico do seu computador.
     Além disso, seus processadores utilizam tecnologia de ponta para que você possa desfrutar de um produto rápido e durável.</p>
    <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
  </div>
</div>

<hr class="featurette-divider">


<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading"> Onikuma K1-B <span class="text-muted"></span></h2>
    <p class="lead">Experimente a adrenalina de mergulhar na cena de outra maneira! Ter os fones de ouvido específicos apra jogar muda completamente sua experiência em cada jogo. Com os Onikuma K1-B, você poderá ouvir o áudio como foi projetado pelos criadores.

O formato perfeito para você
Sendo Headset você poderá ouvir seus álbuns favoritos, manter ligações telefónicas e jogar on-line no seu PC sem perder nenhum detalhe.</p>
  </div>
  <div class="col-md-5">
  <img src="img/fone.png" alt="100px" height="250px" width"400px">


  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Redragon Centrophorus <span class="text-muted"></span></h2>
    <p class="lead">O melhor aliado que você precisa. Use seu Redragon Centrophorus no escritório, em casa ou onde quiser e navegue nos seus dispositivos sem limites.

A um clique de distância
O mouse para jogos permitirá que você faça a diferença e tire proveito dos seus jogos. Sua conectividade e sensor flexível o ajudarão a se mover rapidamente pela tela. Além disso, seu sistema óptico de detecção de movimento permitirá que você mova o cursor de maneira mais precisa e sensível do que nos sistemas tradicionais. Com seus 5 botões você poderá ter maiscontrole e independência para executar.</p>
  </div>
  <div class="col-md-5 order-md-1">
  <img src="img/mouse.png" alt="100px" height="250px" width"400px">
  </div>
</div>

<hr class="featurette-divider">


<div id="local">
		<div name="locali" id="locali">
			<h2>LOCALIZAÇÃO</h2> <br>
		</div>
<div class="container-fluid">
    <div class="map-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.4328930247407!2d-46.5826470844057!3d-23.624663269819518!2m3!1f0!2f0!3f0!3m2!1i1024!2
      i768!4f13.1!3m3!1m2!1s0x94ce5cf264a1bf6b%3A0xadf636876f34c152!2sLWL%20Sistemas%20Corporativos%20Ltda!5e0!3m2!1spt-BR!2sbr!4v1581683834296!5m2!1spt-BR!2sbr"
       width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="">
      </iframe>
   </div>
</div>
	</div>
	</div>


<hr>

<div id="rodape" class="centralizar">
	<p>&copy; LWL. | FT <a href="#">Informática</a> 
		| Sistemas <a href="#" rel="nofollow">LTDA</a>.</p>
</div>
<!-- /END THE FEATURETTES -->

</div><!-- /.container -->

</main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>