<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Projeto Imobiliaria</title>
        <!-- Link para puxar o arquivo css !-->
        <link href="css/index_style.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <!-- Inicio Banner !-->
            <div id="box_top">
                <div id="imgbanner">
                <?php include "includes/banner.php"; 
                ?>
                </div>
            </div>
        <!-- Fim Banner !-->
        <!-- Inicio Pagina !-->
        <div id="box_index">
            
            
            <!-- Inicio Menu Superior !-->            
            <div id="box_title">
                <?php include "includes/menu.php"; 
                ?>
            </div>
            <!-- Fim Menu Superior !-->
            
            <div id="espaco">    
            </div>
            
            <!-- Inicio Menu Esquerdo !-->
            <div id="box_left">
                <?php include "includes/filtros.php"; 
                ?>
            </div>
            <!-- Fim Menu Esquerdo !-->
            
            <!-- Inicio Corpo !-->
            <div id="box_right">
                <?php include "includes/home.php";
                ?>
            </div>
            <!-- Fim Corpo !-->
            
            <!-- Inicio Rodape !-->
            <div id="box_bottom">
                <?php include "includes/rodape.php"; 
                ?>
            </div>
            <!-- Fim Rodape !-->
            
        </div>
        <!-- Inicio Pagina !-->
    </body>
</html>