<form action="buscar.php">
    
    <link rel="stylesheet" href="css/busca_style.css"/>
    
    <fieldset>
        
        <legend>Busca</legend>
        
        <p>Contrato<br>
            <select name="tipo">
               
                <option value="Selecione">Selecione...</option>
                <option value="Comprar">Comprar</option>
                <option value="Alugar">Aluguar</option>
            
            </select>
        </p>
        
        <p>
            <label for="Cidade">Cidade</label> <input type="text" id="cidade" />
        </p>
        
        <p>
            <label for="Bairro">Bairro</label> <input type="text" id="bairro" />
        </p>
        
        <p>Tipo de Imóvel
            <select name="tipo">
               
                <option value="Selecione">Selecione...</option>
                <option value="Casa">Casa</option>
                <option value="Terreno">Terreno</option>
                <option value="Apartamento">Apartamento</option>
            
            </select>
        </p>
                    <p>Área do Imóvel
                    
                        <select name="tipo">
                            <option value="Selecione">Selecione...</option>
                            <option value="t12">100 m² - 200 m²</option>
                            <option value="t23">200 m² - 300 m²</option>
                            <option value="t34">300 m² - 400 m²</option>
                            <option value="t45">400 m² - 500 m²</option>
                            <option value="t56">500 m² - 600 m²</option>
                        </select>
                        
                    </p>
                   
                        <p>Valor Mínimo
                            <select name="tipo">
                                <option value="Selecione">Selecione...</option>
                                <option value="t12">R$50.000</option>
                                <option value="t23">R$100.000</option>
                                <option value="t34">R$250.000</option>
                                <option value="t45">R$500.000</option>
                                <option value="t56">R$750.000</option>
                                <option value="t56">Acima de R$1.000.000</option>
                            </select>
                        </p>
                        
                        <p>Valor Máximo
                            <select name="tipo">
                                <option value="Selecione">Selecione...</option>
                                <option value="t12">R$50.000</option>
                                <option value="t23">R$100.000</option>
                                <option value="t34">R$250.000</option>
                                <option value="t45">R$500.000</option>
                                <option value="t56">R$750.000</option>
                                <option value="t56">Acima de R$1.000.000</option>
                            </select>
                        </p>
        
                   <input type="submit" value="Buscar" />
                        
                        
        <div id="aboutus">
            <a href="buscaavancada.php"><br>Busca Avançada</a>
        </div>
                                 
        

     </fieldset>
    

</form>