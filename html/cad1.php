<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DOS ALUNOS</title>
    <link rel="stylesheet" type="text/css" href="stylephp1.css" media="screen" />
</head>
<body>   
   <header>
        <div id="container">
            <div id="item">
                    <div id="titulo">
                        <H1>resultado</H1>
                           
                               <?php
                                    $nome = $_GET["nome"];
                                    $idade = $_GET["idade"];
                                    $peso = $_GET["peso"];
                                    
                                ?>
                                <p><a href="javascript:history.go(-1)">voltar para a pagina anterior</a></p>
                           
                    </div>
            </div>
        </div>
        
    </header> 
</body>
</html>