<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Projeto Imobiliaria</title>
        <!-- Link para puxar o arquivo css !-->
        <div><link href="css/index_style.css" type="text/css" rel="stylesheet" /></div>
        
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
                <form name="cadastro" method="POST" action="gravarCasa.php">
                    <table>
                        <tr>
                            <td>Rua</td>
                            <td><input type="text" name="rua" id="rua" required/></td>
                        </tr>
                        <tr>
                            <td>Numero</td>
                            <td><input type="text" name="numero" id="numero" required/></td>
                                                        <td>Complemento</td>
                            <td><input type="text" name="complemento" id="complemento"/></td>
                        </tr>
                        <tr>
                            <td>Bairro</td>
                            <td><input type="text" name="bairro" id="bairro" required/></td>
                        </tr>
                        <tr>
                            <td>Cidade</td>
                            <td><input type="text" name="cidade" id="cidade" required/></td>
                        </tr>
                        <tr>
                            <td>Preco</td>
                            <td><input type="text" name="preco" id="preco" required/></td>
                        </tr>
                        <tr>
                            <td>Numero de Quartos</td>
                            <td><input type="text" name="nQuartos" id="nQuartos" required/></td>
                            <td>Numero de Banheiros</td>
                            <td><input type="text" name="nBanheiros" id="nBanheiros" required/></td>
                            <td>Numero de Suites</td>
                            <td><input type="text" name="nSuites" id="nSuites" required/></td>
                        </tr>
                        <tr>
                            <td>Area Total</td>
                            <td><input type="text" name="areaTotal" id="areaTotal" required/></td>
                            <td>Area Construida</td>
                            <td><input type="text" name="areaConstruida" id="areaConstruida" required/></td>
                        </tr>
                        <tr>
                            <td>Quantidade de vagas na garagem</td>
                            <td><input type="text" name="garagem" id="garagem" required/></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><select id="status" name="status" required>
                                    <option></option>
                                    <option value="disponivel">Disponivel</option>
                                    <option value="indisponivel">Indisponivel</option>
                                    <option value="alugado">Alugado</option>
                                    <option value="vendido">Vendido</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Categoria</td>
                            <td><select id="categoria" name="categoria" required>
                                    <option></option>
                                    <option value="aluguel">Aluguel</option>
                                    <option value="venda">Venda</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Destaque</td>
                            <td>
                                <input type="radio" name='destaque' value='sim'>Sim</input>
                                <input type="radio" name='destaque' value='nao'>Nao</input>
                            </td>
                        </tr>
                        <tr>
                            <td>Enviar imagem de destaque</td>
                            <td><input type="file" name='imgDestaque' id="imgDestaque"/></td>
                        </tr>
                        <tr>
                            <td>Descricao</td>
                            <td><textarea name="descricao" id="descricao" rows='5' cols='10'></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Enviar"><input type="reset" value="Limpar"><br/></td>
                        </tr> 
                    </table>
                </form>
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