<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steve Games</title>
    
</head>
<body>


<img class="banner" src="images/banner.png">
<center>
<img class="logo" src="images/logo.png">
</center>


<br>
<br>
<br>



<center>
<h1 class="titulo">Escolha a categoria</h1>
</center>



  <form method="POST" action="verifica.php">
    <center>
      <select id="seleciona" name='lerCategoria'>
          <option>Selecione</option>
          <option value="1">Consoles</option>
          <option  value="2">Jogos</option>
          <option  value="3">Controles</option>
          <option  value="4">Acessórios</option>
      </select>
      <input type="submit" value="Pesquisar">
    </center>
  </form>
<br>
<br>

   

    <?php

    if(isset($_COOKIE['codcategoria'])){
        if($_COOKIE['codcategoria']==1){
            echo ("
            <center>
            <h1 class='cat'>Consoles</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/series.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Xbox Series X</h5>
              <p class='card-text'>R$12.000,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/nintendo.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Nintendo Switch</h5>
            <p class='card-text'>R$5.000,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/ps5.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Playstation 5</h5>
              <p class='card-text'>R$12.000,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

            <br>
            <br>
            <br>
            <hr id='linha'>
            <br>

            <h1 class='cat'>Jogos</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/us.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>The last of us II</h5>
              <p class='card-text'>R$300,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/re8.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Resident Evil 8</h5>
            <p class='card-text'>R$300,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/mafia.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Mafia 3</h5>
              <p class='card-text'>R$150,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <hr id='linha'>
        <br>

        <h1 class='cat'>Controles</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/controleseries.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Controle Xbox Series X</h5>
              <p class='card-text'>R$850,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/controleps4.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Controle Playstation</h5>
            <p class='card-text'>R$300,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/controleps5.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Controle Playstation 5</h5>
              <p class='card-text'>R$850,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <hr id='linha'>
        <br>

        <h1 class='cat'>Acessórios</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/suporte.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Suporte para PS4</h5>
              <p class='card-text'>R$210,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/razer.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Fone da Razer</h5>
            <p class='card-text'>R$500,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/carrega.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Carregador controle PS4</h5>
              <p class='card-text'>R$300,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

            <br>
            <br>
        </center>
                ");
        }else if ($_COOKIE['codcategoria']==2){
            echo ("
            <center>
            

            <h1 class='cat'>Jogos</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/us.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>The last of us II</h5>
              <p class='card-text'>R$300,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/re8.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Resident Evil 8</h5>
            <p class='card-text'>R$300,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/mafia.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Mafia 3</h5>
              <p class='card-text'>R$150,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <hr id='linha'>
        <br>

        <h1 class='cat'>Consoles</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/series.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Xbox Series X</h5>
              <p class='card-text'>R$12.000,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/nintendo.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Nintendo Switch</h5>
            <p class='card-text'>R$5.000,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/ps5.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Playstation 5</h5>
              <p class='card-text'>R$12.000,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

            <br>
            <br>
            <br>
            <hr id='linha'>
            <br>

        <h1 class='cat'>Controles</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/controleseries.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Controle Xbox Series X</h5>
              <p class='card-text'>R$850,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/controleps4.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Controle Playstation</h5>
            <p class='card-text'>R$300,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/controleps5.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Controle Playstation 5</h5>
              <p class='card-text'>R$850,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <hr id='linha'>
        <br>

        <h1 class='cat'>Acessórios</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/suporte.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Suporte para PS4</h5>
              <p class='card-text'>R$210,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/razer.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Fone da Razer</h5>
            <p class='card-text'>R$500,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/carrega.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Carregador controle PS4</h5>
              <p class='card-text'>R$300,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>

        </center>


            
          ");
        }else if ($_COOKIE['codcategoria']==3){
            echo ("
            <center>
            <h1 class='cat'>Controles</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/controleseries.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Controle Xbox Series X</h5>
              <p class='card-text'>R$850,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/controleps4.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Controle Playstation</h5>
            <p class='card-text'>R$300,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/controleps5.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Controle Playstation 5</h5>
              <p class='card-text'>R$850,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <hr id='linha'>
        <br>

            <h1 class='cat'>Jogos</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/us.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>The last of us II</h5>
              <p class='card-text'>R$300,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/re8.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Resident Evil 8</h5>
            <p class='card-text'>R$300,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/mafia.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Mafia 3</h5>
              <p class='card-text'>R$150,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <hr id='linha'>
        <br>

        <h1 class='cat'>Consoles</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/series.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Xbox Series X</h5>
              <p class='card-text'>R$12.000,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/nintendo.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Nintendo Switch</h5>
            <p class='card-text'>R$5.000,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/ps5.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Playstation 5</h5>
              <p class='card-text'>R$12.000,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

            <br>
            <br>
            <br>
            <hr id='linha'>
            <br>

        

        <h1 class='cat'>Acessórios</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/suporte.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Suporte para PS4</h5>
              <p class='card-text'>R$210,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/razer.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Fone da Razer</h5>
            <p class='card-text'>R$500,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/carrega.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Carregador controle PS4</h5>
              <p class='card-text'>R$300,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>

        </center>


            
          ");
        }else if ($_COOKIE['codcategoria']==4){
            echo ("
            <center>

            <h1 class='cat'>Acessórios</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/suporte.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Suporte para PS4</h5>
              <p class='card-text'>R$210,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/razer.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Fone da Razer</h5>
            <p class='card-text'>R$500,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/carrega.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Carregador controle PS4</h5>
              <p class='card-text'>R$300,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>


            <br>
            <br>
            <br>
            <hr id='linha'>
            <br>

            <h1 class='cat'>Controles</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/controleseries.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Controle Xbox Series X</h5>
              <p class='card-text'>R$850,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/controleps4.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Controle Playstation</h5>
            <p class='card-text'>R$300,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/controleps5.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Controle Playstation 5</h5>
              <p class='card-text'>R$850,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <hr id='linha'>
        <br>

            <h1 class='cat'>Jogos</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/us.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>The last of us II</h5>
              <p class='card-text'>R$300,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/re8.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Resident Evil 8</h5>
            <p class='card-text'>R$300,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/mafia.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Mafia 3</h5>
              <p class='card-text'>R$150,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <hr id='linha'>
        <br>

        <h1 class='cat'>Consoles</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/series.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Xbox Series X</h5>
              <p class='card-text'>R$12.000,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/nintendo.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Nintendo Switch</h5>
            <p class='card-text'>R$5.000,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/ps5.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Playstation 5</h5>
              <p class='card-text'>R$12.000,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

            

        

        
        <br>
        <br>

        </center>


            
          ");
        }else{
            echo ("
            <center>
            <h1 class='cat'>Consoles</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/series.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Xbox Series X</h5>
              <p class='card-text'>R$12.000,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/nintendo.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Nintendo Switch</h5>
            <p class='card-text'>R$5.000,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/ps5.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Playstation 5</h5>
              <p class='card-text'>R$12.000,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

            <br>
            <br>
            <br>
            <hr id='linha'>
            <br>

            <h1 class='cat'>Jogos</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/us.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>The last of us II</h5>
              <p class='card-text'>R$300,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/re8.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Resident Evil 8</h5>
            <p class='card-text'>R$300,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/mafia.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Mafia 3</h5>
              <p class='card-text'>R$150,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <hr id='linha'>
        <br>

        <h1 class='cat'>Controles</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/controleseries.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Controle Xbox Series X</h5>
              <p class='card-text'>R$850,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/controleps4.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Controle Playstation</h5>
            <p class='card-text'>R$300,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/controleps5.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Controle Playstation 5</h5>
              <p class='card-text'>R$850,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

        <br>
        <br>
        <br>
        <hr id='linha'>
        <br>

        <h1 class='cat'>Acessórios</h1>
            <br>
            <div class='row'>
            <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/suporte.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Suporte para PS4</h5>
              <p class='card-text'>R$210,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
          <div class='col-sm-4'>
          <div class='card' style='width: 18rem;'>
          <img src='images/razer.png' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>Fone da Razer</h5>
            <p class='card-text'>R$500,00</p>
            <a href='#' class='btn btn-primary'>COMPRAR</a>
          </div>
        </div>
        </div>
        <div class='col-sm-4'>
            <div class='card' style='width: 18rem;'>
            <img src='images/carrega.png' class='card-img-top' alt='...'>
            <div class='card-body'>
              <h5 class='card-title'>Carregador controle PS4</h5>
              <p class='card-text'>R$300,00</p>
              <a href='#' class='btn btn-primary'>COMPRAR</a>
            </div>
          </div>
          </div>
        </div>

            <br>
            <br>
        </center>
                ");
        }
    }


    ?>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>