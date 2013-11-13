<html>
   <div id="destaques_rotativo">
        <script>
            document.write("<div id='slider' style='width:720px; height:220px;'></div>");

            bannerRotativo();

            function bannerRotativo(){
                setTimeout("mostraBanner1()",0000);
                setTimeout("mostraBanner2()",4000);
                setTimeout("mostraBanner3()",8000);
                setTimeout("mostraBanner4()",12000);
                setTimeout("mostraBanner5()",16000);
                setTimeout("bannerRotativo()",20000);
            }
            function mostraBanner1(){
                document.getElementById('slider').innerHTML="<a href='#'><img src='images/destaques/001.jpg'/></a>";
            }
            function mostraBanner2(){
                document.getElementById('slider').innerHTML="<a href='#'><img src='images/destaques/002.jpg'/></a>";
            }
            function mostraBanner3(){
                document.getElementById('slider').innerHTML="<a href='#'><img src='images/destaques/001.jpg'/></a>";
            }
            function mostraBanner4(){
                document.getElementById('slider').innerHTML="<a href='#'><img src='images/destaques/002.jpg'/></a>";
            }
            function mostraBanner5(){
                document.getElementById('slider').innerHTML="<a href='#'><img src='images/destaques/001.jpg'/></a>";
            } 
        </script>      
    </div>
</html>