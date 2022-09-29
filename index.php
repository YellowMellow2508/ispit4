<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="newcss.css" rel="stylesheet" type="text/css"/>
        <script src="jquery-3.6.1.min.js" type="text/javascript"></script>

    </head>
    <body>
        <?php include 'funkcije.php'; ?>
        <div id="sredisnje" class="sredisnje">
            <div hidden="" id="povrsinaJS">
                <div>
                    <h1 class="stil-normalnitekst">Izaberite dužinu stranica:</h1></br>
                    <div class="klizac">    
                        <div class="klizac1">
                            A:<br><input type="range" id="A"  min="0" max="100" value="2" onchange="izracunaj()"/><P>Dužina stranice A: <span id="vrijednostA"></P>
                        </div>
                        <div class="klizac2">
                            <br>B:<br><input type="range" id="B" min="0" max="100" value="3" onchange="izracunaj()"/><p>Dužina stranice B: <span id="vrijednostB"></p> 
                        </div>
                    </div> 
                    <div><span id="rezultat"></div><br> 
                </div>
            </div>
           
            <?php
            if(isset($_GET['jednako'])) {
                echo '<div id="povrsina">';
            } else {
                echo '<div hidden="" id="povrsinaphp">';
            } ?>
                <form action="" method="get">
                    <h1>Unesite dva ulazna argumenta kako bi dobili površinu ili opseg pravokutnika: </h1>
                    Visina: <input type="text" name="a" placeholder="a"><br><br>
                    Sirina: <input type="text" name="b" placeholder="b"><br><br>
                    <select name="operator">
                         <option selected>Odaberi matematičku operaiju nad pravokutnikom</option>
                         <option>Izračunaj površinu</option>
                         <option>Izračunaj opseg</option>
                     </select>
                    <button name="jednako">=</button>
                    <?php if (isset($_GET['jednako'])) {
                        povrsina();
                     } ?>
                </form><br>
                         </div>
            <div hidden="" id="bazaprikaz" name="bazaprikaz">
                <h1>Baza Pravokutnik</h1><br>
                <?php
                 tablica(date());
                 
                ?>
             
            </div>
        </div>
        
            <div id="desno" class="desno">
                 <div hidden="" id="obavijest">
                     <h1 class="stil-naslova" id="promijeniTekst">Programski alati 3</h1>
                     <button name="klikZaPromjenu" class="BUTONZAPROMJENU" id="klikZaPromjenu">Molim klikni</button><br>
                 </div>
                
                
                <div class="vertical-center">
                    <button type="button" id="Povrsina JS" name="Povrsina JS" onclick="povrsinaJs()">Povrsina JS</button></br></br></br>
                    <button type="button" id="Obavijest" name="Obavijest" onclick="obavijest()">Obavijest</button></br></br></br>
                    <button type="button" id="Povrsina PHP" name="Povrsina PHP" onclick="povrsinaPhp()" >Povrsina PHP</button></br></br></br>
                    <button type="button" id="Baza" name="Baza" onclick="baza()" >Baza</button>
                </div>
            </div>
        <div id="footer" class="footer">
            <div id="datum"></div>
            <div id="vrijeme"></div>
        </div>
     <script src="newjavascript.js" type="text/javascript"></script>   
    </body>
    
</html>
