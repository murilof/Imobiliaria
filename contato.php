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
                margin-left: 2%;
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
                color: red;
            }

            input[type=reset] {
                float: right;
                margin-top: 10px;
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
        <div id="box_left">
            <?php include "includes/filtros.php";
            ?>
        </div>
        <!-- Fim Menu Esquerdo !-->

        <!-- Inicio Corpo !-->
        <div id="box_right">
            <div id="container">
                <h1>Fale Conosco</h1>
                <p>Caso você tenha dúvidas, críticas ou sugestões, por favor, preencha o formulário abaixo:</p>
                <br/>
                <form name="contato"action="enviar.php" method="POST">
                    <table>
                        <tr>
                            <td>Nome<span class="ast">*</span></td>
                            <td><input type="text" name="nome" id="nome" required size="50"/><br/></td>
                        </tr>

                        <tr>
                            <td>Email<span class="ast">*</span></td>
                            <td><input type="text" name="email" id="email" required size="50"/><br/></td>
                        </tr>

                        <tr>
                            <td>Telefone</td>
                            <td><input type="text" name="telefone" id="telefone"/><br/></td>
                        </tr>

                        <tr>
                            <td>Mensagem</td>
                            <td><textarea id="mensagem" name="mensagem" rows="10" cols="39"></textarea><br/></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" value="Enviar"><input type="reset" value="Limpar"><br/></td>
                        </tr>  
                    </table>
                </form>
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
