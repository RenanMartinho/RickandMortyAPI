    <?php 
    include("/xampp/htdocs/rick-and-morty-api/conexao.php");
        
    $sql_code = "SELECT * FROM personagem";   
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();    
    
    //Paginação
    $itens_por_pagina = 8;
    $pagina = intval($_GET['pagina']); //define a página atual
    $sql_code = "select id, nome, status, specie, gender, image from personagem LIMIT $pagina, $itens_por_pagina"; //filtra pelo MySQL
    $execute = $mysqli->query($sql_code) or die($mysqli->error);
    $dado = $execute->fetch_assoc();
    $num= $execute-> num_rows;
    //pega a quantidade total de objetos no banco
    $num_total = $mysqli->query("select id, nome, status, specie, gender, image from personagem")->num_rows;
    $num_paginas = ceil($num_total/$itens_por_pagina);
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Banco de Dados MySQL</title>
    </head>
    <body>
    <h1> LISTA DE PERSONAGENS </h1>
    <?php if ($num> 0) {?>
    <table>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Status</td>
            <td>Specie</td>
            <td>Gender</td>
            <td>Image</td>
            <td>Ação</td>
        </tr>
        <?php do{ ?>   
        <tr>
            <td><?php echo $dado['id']; ?></td>
            <td><?php echo $dado['nome']; ?></td>
            <td><?php echo $dado['status']; ?></td>
            <td><?php echo $dado['specie']; ?></td>
            <td><?php echo $dado['gender']; ?></td>
            <td><?php echo $dado['image']; ?></td>

            <td>
                <a href ="javascript: if(confirm('Tem certeza que desejar deletar o personagem <?php echo $dado['status']; ?>?'))
                location.href='deletar.php?p=deletar&personagem=<?php echo $dado['id'];?>';">Excluir</a>
            </td>
        </tr>
        <?php } while($dado = $execute->fetch_assoc()); ?>
    </table>
            <nav>
        <ul class="pagination">
            <li>
            <a class="page-link" href="bd.php?pagina=0" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
            </li>
            <?php 
            for($i=0; $i< $num_paginas;$i++){
                $estilo = " ";
                if($pagina ==$i)
                   $estilo= "class=\"active\"";
                
            ?>
            <li class="page-link" <?php echo $estilo; ?>><a href="bd.php?pagina=<?php echo $i;?>"><?php echo $i+1; ?></a></li>
            <?php }?>
            <a class="page-link" href="bd.php?pagina=<?php echo $num_paginas-1;?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
            </li>
        </ul>
        </nav>
    <?php }?>
    <a href="index.php"><button type="button" class="btn btn-primary">Voltar</button></a>
    </body>
    </html>