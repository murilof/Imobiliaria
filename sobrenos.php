<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Projeto Imobiliaria</title>
        <!-- Link para puxar o arquivo css !-->
        <link href="css/index_style.css" type="text/css" rel="stylesheet" />

        <style>

            #container {
                height: 90%;
                width: 100%;

                display: inline-block;
                text-align: left;
                border: 1px solid rgba(0,0,0,0.3);
                border-radius: 5px;
                padding: 5px;
                box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.3);
                background: #FFF;
                font-family: verdana;
            }
            .ast {
                color: red;
                font-size: 15px;
            }
            h1 {
                font-size: 25px;
                display: block;
                text-align: center;
                font-weight: normal;
                font-family: arial;
            }

            input[type=submit] {
                float: right;
                margin-top: 10px;
            }

            textarea {
                resize: none;
            }
            
        </style>

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
            <div id="menu_top"
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
        <div id="box_left">
            <?php include "includes/filtros.php";
            ?>
        </div>
        <!-- Fim Menu Esquerdo !-->

        <!-- Inicio Corpo !-->
        <div id="box_right">
            <div id="container">
                
                <h1>Sobre Nós</h1>
                
                <p>A imobiliária xxxxxxxx, com os seus longos anos de mercado procura, de uma forma amigável e ágil, trazer conforto e inúmeras possibilidades aos seus clientes.</p>
                <p>Contando com uma linha de excelente funcionários, buscamos suprir as necessidades dos nossos numerosos clientes oferencendo-os uma fácil mobilidade e diversos meio de encontrar o imóvel melhor associado à este.</p>
                <p>Faça uma visita a uma das nossas inúmeras filiais e, encontre o que você procura à um preço excelente.</p>
                <p>Imobiliária xxxxx, fazendo buscas virar sonhos</p>
                <p>Fim do texto clichê</p>
               
                
            </div>
        </div>
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