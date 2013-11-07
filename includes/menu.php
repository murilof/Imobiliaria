<html>
    <head>
        <title>Menu</title>
            
        <style type="text/css">
            ul {
                float: left;
                list-style-type: none;
                margin: 1px;
                padding: 1px;
                padding-top:7px;
                padding-bottom:5px;
            }

            li {
                float:left;
                position:relative; 
                padding-right: auto; 
                display:inline;
            }

            a:link,a:visited {
                font-weight:bold;
                text-align:center;
                padding:6px;
                text-decoration: aliceblue;
                text-transform:uppercase;
            }

            a:hover,a:active *{
                background-color: azure;
            }
            
            #horizontalmenu li ul {
                display:none;
                position:absolute;
            }

            #horizontalmenu li:hover ul{
                display:block;
                background:azure;
                height:auto; 
                width:8em;
            }
            
            #horizontalmenu li ul li{
                clear:both;
                border-style:none;
            }

        </style>
    </head>
    
    <body>
    
        <div id="horizontalmenu"> 
        
            <ul> <li> <a href="#"> Home </a> </li> </ul>

            <ul> <li><a href="#Quem somos">Quem somos</a>
                <ul> <li> <a href="#">Unifal</a></li> <li><a href="#">Tribit Jr.</a></li></ul> </li>
                
            <li> <a href="#CONTATO">Contato</a>
                <ul> <li> <a href="#">Endereço</a></li> <li><a href="#">Telefone</a></li> </ul> </li>
            
            <li> <a href="#MAPAS">Mapas</a>
                <ul> <li> <a href="#">Casas</a></li> <li><a href="#">Prédios</a></li> </ul> </li>
            
            <li> <a href="#ADMIN">Admin</a>
                <ul> <li> <a href="#">Login</a></li>
                
        </div>
        
    </body>
    
</html>
