<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Projeto Imobiliaria</title>
        <!-- Link para puxar o arquivo css !-->
        <link href="css/index_style.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="css/busca_avancada_style.css"/>

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

        <!-- Inicio Corpo !-->
        <div id="box_right">
            <div id="container">
                <fieldset>
                    <legend> Busca Avançada </legend>
                        <form action="buscaravancadai.php">
                        
                        
                        <p>Contrato
            <select name="tipo">
               
                <option value="Selecione">Selecione...</option>
                <option value="Comprar">Comprar</option>
                <option value="Alugar">Aluguar</option>
            
            </select>
        
            <label for="Cidade">Cidade</label> <input type="text" id="cidade" />
        
            <label for="Bairro">Bairro</label> <input type="text" id="bairro" />
            
            <br><br><br>Tipo de Imóvel
                             <select name="tipo">
               
                                <option value="Selecione">Selecione...</option>
                                 <option value="Casa">Casa</option>
                                 <option value="Terreno">Terreno</option>
                                  <option value="Apartamento">Apartamento</option>
                                  </select>
            
                   Área 
                            <select name="tipo">
                                <option value="Selecione">Selecione...</option>
                                <option value="m12">100 m² - 200 m²</option>
                                <option value="m23">200m² - 300m²</option>
                                <option value="m34">300m² - 400m²</option>
                                <option value="m45">400m² - 500m²</option>
                                <option value="m56">Acima de 500m²</option>
                           
                            </select>
                   
                   
                      Área Total
                            <select name="tipo">
                                <option value="Selecione">Selecione...</option>
                                <option value="m12">100 m² - 200 m²</option>
                                <option value="m23">200m² - 300m²</option>
                                <option value="m34">300m² - 400m²</option>
                                <option value="m45">400m² - 500m²</option>
                                <option value="m56">Acima de 500m²</option>
                           
                            </select>
        
      
            
                      <br><br><br> Valor Mínimo
                            <select name="tipo">
                                <option value="Selecione">Selecione...</option>
                                <option value="t12">R$50.000</option>
                                <option value="t23">R$100.000</option>
                                <option value="t34">R$250.000</option>
                                <option value="t45">R$500.000</option>
                                <option value="t56">R$750.000</option>
                                <option value="t56">Acima de R$1.000.000</option>
                            </select>
                  
                        
                            Valor Máximo
                            <select name="tipo">
                                <option value="Selecione">Selecione...</option>
                                <option value="t12">R$50.000</option>
                                <option value="t23">R$100.000</option>
                                <option value="t34">R$250.000</option>
                                <option value="t45">R$500.000</option>
                                <option value="t56">R$750.000</option>
                                <option value="t56">Acima de R$1.000.000</option>
                            </select>
                            
                            <br><br><br>Dormitórios
                            <select name="tipo">
                                <option value="Selecione">Selecione...</option>
                                <option value="d1">1 Dormitório</option>
                                <option value="d2">2 Dormitórios</option>
                                <option value="d3">3 Dormitórios</option>
                                <option value="dm">Acima de 3 Dormitórios</option>
                            </select>
                            
                              Suítes
                            <select name="tipo">
                                <option value="Selecione">Selecione...</option>
                                <option value="s1">1 Suíte</option>
                                <option value="s2">2 Suítes</option>
                                <option value="s3">3 Suítes</option>
                                <option value="sm">Acima de 3 Suítes</option>
                            </select>
                              
                                 Vagas
                            <select name="tipo">
                                <option value="Selecione">Selecione...</option>
                                <option value="v1">1 Vaga</option>
                                <option value="v2">2 Vagas</option>
                                <option value="v3">3 Vagas</option>
                                <option value="vm">Acima de 3 Vagas</option>
                            </select>

                        </p>
        
                   <input type="submit" value="Buscar"/>
               
                    
        <!-- Fim Corpo !-->
                </fieldset>
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