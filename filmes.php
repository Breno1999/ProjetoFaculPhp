<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">

    <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">

    <style>
      body{
        background-color: black;
        color: white;
      }

      .card{
        width: 600px;
        height: 440px;
      }

      #rodapé{
        width: 290px;
        height: 30px;
      }

      
    </style>
    
    <?php 
        session_start();//Inicia uma nova sessão ou resume uma sessão existente



        if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();//remove todas as variáveis de sessão
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'index.php';
                </script>";

        }
        $logado = $_SESSION['email'];
    ?>

    <title>Filmes</title>

  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-danger">
      <div class="container">
      
        <a class="navbar-brand navbar-dark h5 mb-0" href="pagina_inicial.php">Inicio</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
          <spam class="navbar-toggler-icon"></spam>
        </button>
      

      <div class="collapse navbar-collapse" id="navbarSite">
        
          <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                <a class="nav-link" href="filmes.php">Filmes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="series.php">Séries</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contato.php">Contato</a>
              </li>

          </ul> 
          
          <ul class="navbar-nav ml-auto">

             <li class="nav-item mr-5">
                   <a class="nav-link font-weight-bold"  href="deslogar.php">Sair</a>
            </li>

          </ul>


      </div>

      </div>
   </nav>
   <br>
   <br>
   <br>
   <br>


  <div id="carouselSite" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
      <li data-target="#carouselSite" data-slide-to="1"></li>
      <li data-target="#carouselSite" data-slide-to="2"></li>
      <li data-target="#carouselSite" data-slide-to="3"></li>
    </ol>
    
    <div class="carousel-inner" align="center"  width="500px" height="10px">

       <div class="carousel-item active">
         <a href="#">
            <img src="https://qph.fs.quoracdn.net/main-qimg-13e13269013e778c4ec9b976535cbe86" class="img-fluid d-block" class="img-fluid d-block"  width="650px" height="10px"></a>
       </div>  

       <div class="carousel-item">
         <a href="#">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuIIKawOQX6jP3cAkSue2ZqeRsyv0rxOH_3Kox3dWlb-TcoktHCA&s" class="img-fluid d-block" 
            width="650px" height="10px"></a>
       </div>

       <div class="carousel-item">
         <a href="#">
            <img src="https://dvqlxo2m2q99q.cloudfront.net/000_clients/1026022/page/1026022L7oPIvak.png" class="img-fluid d-block"  width="650px" height="10px"></a>
       </div>

       <div class="carousel-item">
         <a href="#">
            <img src="https://i.ytimg.com/vi/O34MP1nTtoo/maxresdefault.jpg" class="img-fluid d-block"  
            width="650px" height="10px"></a>
       </div>

    </div>

    <div>
        <br>
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
      
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
      
          <span class="carousel-control-next-icon"></span>
          <span class="sr-only">Avançar</span>
        </a>
    </div>
   </div> 
    <br>
    <br>
    <br>
    <br>

  <div class="container" id="Titulo">
    <div class="row">
      <div class="col-12">
        <h1 class="ml-0">Filmes</h1>
        <br>
        <br>
        <br>
      </div>  
    </div>
  </div>

  <div class="container" align="center">
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://ingresso-a.akamaihd.net/img/cinema/cartaz/20542-cartaz.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Aquaman</h5>
            <a class="btn btn-primary btn-sm" href="Download_Aquaman.html" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://br.web.img3.acsta.net/pictures/19/01/17/16/28/3541107.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Dumbo</h5>
            <a class="btn btn-primary btn-sm" href="Download_Dumbo.html" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuhGJJNjtQsSK5gdUZAf8VUOl1xKXOCKUqvOi4hL3ryCyfbRyJ3Q&s" width="250px" height="290px">
            <br>
            <br>
            <h5 class="card-title">Velozes e Furiosos: Hobbs & Shaw</h5>
            <a class="btn btn-primary btn-sm" href="Download_HobseShaw.html" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://http2.mlstatic.com/dvd-filme-creed-2-2019-dub-hd-stallone-michael-b-jordan-D_NQ_NP_880958-MLB29398622282_022019-F.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Creed 2</h5>
            <a class="btn btn-primary btn-sm" href="Download_creed.html" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://ingresso-a.akamaihd.net/img/cinema/cartaz/21308-cartaz.jpg" width="250px" height="290px">
            <br>
            <br>
            <h5 class="card-title">Homem Aranha: Longe de casa</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://is3-ssl.mzstatic.com/image/thumb/Video113/v4/cb/2b/96/cb2b96dd-7cd0-ba41-e742-e90045218c3e/DIS_AV_ENDGAME_BRP_FINAL_BR_ARTWORK_PT-BR_2000x3000_1OWPBJ00000FMO.lsr/268x0w.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Vingadores: Ultimato</h5>
            <a class="btn btn-primary btn-sm" href="Download_VingadoresUltimato.html" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://www.revistanossa.com.br/midias/artigos/Imagens/P_HO00006038-1560261456.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Aladdin</h5>
            <a class="btn btn-primary btn-sm" href="Download_Alladin.html" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcS9Qct2NfoZfKg0N-QhrhwKfBG2YPN-yMtXkDKS-hBwh6RpjB&s" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Jhon Wick 3</h5>
            <a class="btn btn-primary btn-sm" href="Download_JhonWick3.html" role="button">Download</a>
          </div>
        </div> 
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="http://br.web.img2.acsta.net/pictures/18/11/30/21/49/3142885.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Vidro</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-body">
            <img src="https://upload.wikimedia.org/wikipedia/pt/thumb/5/59/Captain_Marvel_%282018%29.jpg/250px-Captain_Marvel_%282018%29.jpg" width="250px" height="310px">
            <br>
            <br>
            <h5 class="card-title">Capitã Marvel</h5>
            <a class="btn btn-primary btn-sm" href="#" role="button">Download</a>
          </div>
        </div> 
  </div>
  <br>

  <div class="container bg-danger" id="rodapé">
    <div class="row">
      <div class="col-12 text-center">
        <p class="ml-0" align="center">
          <a class="text-white" href="filmes.php"> 1 </a>
          <a class="text-white" href="#"> 2 </a>
          <a class="text-white" href="#"> 3 </a>
          <a class="text-white" href="#"> 4 </a>
        </p>
      </div>
    </div>
</div> 


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

  </body>
</html>