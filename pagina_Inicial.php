<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidigal Pokedex </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
       a{
        color: gray;
      }
      a:hover{  
        color: rgb(189, 189, 189);
      }
      .brownaside{
        background-color: lightblue;
      }
      body{
            background-color: lightgray;
            align-items: center;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }
        .cinza{
            background-color: lightgray;
            border: 1px solid;
        }
        .maior{
            justify-content: center;
            min-height: 95vh;
        }
        .telatoda{
            min-width: 100vw;
            min-height: 100vh;
        }
        .arredondada{
          border-radius: 50%;
          height: 50%;
        }
        .textomaior{
          font-size: 400%;
          font-weight: bolder;
        }
        .bold{
          font-weight: bolder;
        }

        .normal { color: rgb(189, 189, 189); }
        .fogo { color: red; }
        .agua { color: blue; }
        .eletrico { color: yellow; }
        .grama { color: green; }
        .gelo { color: lightblue; }
        .lutador { color: orange; }
        .venenoso { color: purple; }
        .terra { color: brown; }
        .voador { color: skyblue; }
        .psiquico { color: pink; }
        .inseto { color: green; }
        .pedra { color: darkgray; }
        .fantasma { color: Blue; }
        .dragao { color: darkblue; }
        .sombrio { color: black; }
        .aco { color: silver; }
        .fada { color: lightpink; }

    </style>
</head>

<body>
      <div class="container telatoda">
        <div class="row">
            <div class="col-sm-12 brownaside">
              <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="pagina_Inicial.php">Página Inicial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="treinador.php">Treinador</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pokedex.php">Pokedex</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cadastro.php">Cadastrar</a>
                </li>
              </ul>
            </div>
        </div>

        <div class="row ">
            <div class="col-sm-4 cinza maior">
                <h1 class="textomaior">Ash Ketchum</h1>
                <img class="arredondada" src="src/ash.png" alt="Foto Ash">
                <h4><span style="font-weight: bolder;">Pokemons coletados: </span>153</h4>
                <h4><span style="font-weight: bolder;">Progresso: </span>100%</h4>
            </div>

            <div class="col-sm-8 cinza maior">

              <h1><SPan style="font-weight: bolder; font-size: larger;">Pokemons Capturados por Tipo:</SPan></h1>  

              <h3><span style="font-weight: bolder; font-size: large;" class="normal">Normal </span>7</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="fogo">Fogo </span>7</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="agua">Água </span>6</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="eletrico">Elétrico </span>3</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="grama">Grama </span>7</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="gelo">Gelo </span>4</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="lutador">Lutador </span>3</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="venenoso">Venenoso </span>2</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="terra">Terra </span>3</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="voador">Voador </span>5</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="psiquico">Psíquico </span>2</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="inseto">Inseto </span>3</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="pedra">Pedra </span>4</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="fantasma">Fantasma </span>4</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="dragao">Dragão </span>6</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="sombrio">Sombrio </span>4</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="aco">Aço </span>3</h3>
              <h3><span style="font-weight: bolder; font-size: large;" class="fada">Fada </span>9</h3>  

            </div>
        </div>
    </div>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</body>
</html>