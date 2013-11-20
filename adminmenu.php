    <!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Projeto Imobiliaria</title>
        <!-- Link para puxar o arquivo css !-->
        <div><link href="css/index_style.css" type="text/css" rel="stylesheet" /></div>
        <div><link rel="stylesheet" href="css/admin_menu_style.css"/></div>
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
        <!-- Inicio Menu Superior !-->            
            <div id="box_title">
                <div id="menu_top">
                    <?php include "includes/menu.php"; 
                    ?>
                </div>
            </div>
        <!-- Fim Menu Superior !-->
        <!-- Inicio Pagina !-->
        <div id="box_index">
            
            <div id="espaco">    
            </div>
            
            <!-- Inicio Menu Esquerdo !-->
            <!-- Fim Menu Esquerdo !-->
            
            <!-- Inicio Corpo !-->
             <center>
                 <nav>
                 <ul class="admNav">
                 <p><h2>Menu do Administrador</h2></p>
                 <br><li id="inserir"><a href="insereTipoImovel.php" class="addtypeIcon">Inserir novo imóvel</a></li>
                 <li id="cadastro"><a href="cadastroCasa.php" class="addnewIcon">Cadastro de imóvel</a></li>
                 <li id="tipo"><a href="formTipoImovel.php" class="insertnewIcon">Inserir novo tipo de imóvel</a></li>
                 </ul>
                 </nav>
             </center>
            <!-- Fim Corpo !-->
            
        </div>
        <!-- Inicio Pagina !-->
        <!-- Inicio Rodape !-->
            <div id="box_bottom">
                <div id="info_rodape">
                    <?php include "includes/rodape.php"; 
                    ?>
                </div>
            </div>
        <!-- Fim Rodape !-->
    </body>
</html>

