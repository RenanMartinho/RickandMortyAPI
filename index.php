<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="src/main.js" defer></script>
        <title>Rick and Morty API</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light margin">

        <a class="navbar-brand" href="#">
            <img src="img/rick-morty.jpg" alt="01" width="300" height="150">
        </a>

        <div class="collapse navbar-collapse" >

        <ul class = "navbar-nav">

            <li class="nav-item">

                <a class="nav-link" href="#Home"><h2>Home</h2></a>
            </li>
            <li class="nav-item">

                <a class="nav-link" href="#card-group"><h2>Personagens</h2></a>
            </li>

            <li class="nav-item">

                <a class="nav-link" href="bd.php"><h2> Banco de Dados</h2></a>
            </li>   

            <li class="nav-item">
                <form action="" class="search">
                <input type="search" class="search-input" placeholder="Busque um personagem">
                <button class="search-button">Buscar</button>
                </form>
                <section class="person">
                </section>
                    
                
            </li>
       
        </ul>
    
        </div>
    </nav>
   <div
    id= "card-group"
    class="container-fluid"
    width="300px"
    height="300px"
    
    ></div>

<!-- 

  <div class="paginador">
  <a href="#" id="anterior">Anterior</a>
  <a href="#" id="proximo">Proximo</a>
  
  </div>
-->
 
</body>
</html>