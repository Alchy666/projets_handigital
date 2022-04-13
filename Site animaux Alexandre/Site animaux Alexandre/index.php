<!DOCTYPE html>
<html>
<?php 
include "head.php";
?>

<body>

<!------------------- NAV PART -------------------->
    <header>
        <nav>
            <p>Adopte un Meuh</p>
        </nav>
    </header>

<!------------------- HOME PART -------------------->
    <section>
        <div class="bg">
            <div class="fond-box-texte">
                <div class="box-texte">
                    <p>Affectueuse et Sensible, sont régime alimentaire se constitue 
                    de 60 à 80 KG de fourrage par jours.<br><br>
                    Aussi délicate qu'une fleur, un meuh peux peser jusqu'à 900 KG. 
                    Susceptible aussi, sont poids doit rester secret. 
                    <br><br>Certain aime l'appeler "Belle maman".</p>
                </div>
            </div>
        </div>

        <!------------------- BOX1 PART -------------------->

        <div class="meuh-joueuse">
            <img src="images/cow bugy.jpg">
            <p>Joueuse même avec les lois de la physique, un meuh reste un meuh, la nature est primordial.
            <br><br><br><br><br>Donc nous conseillons de ne pas prendre un meuh en appartement. Il en va du bien être des meuh-meuh.</p>
        </div>
        <!------------------- BOX2 PART -------------------->

        <di class="ameuh">
            <p>Ici vous trouverez votre ameuhsoeur, il vous suffit de la chercher !</p>
        </div>

        <!------------------- SEARCH PART -------------------->
        <div class="search-bg">
        <div class="search">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        </div>
            <ul id="myUL">
                <li><img src="images/1-cow.jpg"><a href="profils.php">Adele<br><font size="2">Limousine<br>Paris</font></a><p>Age: 8ans<br>Lieux: Paris<br><br> Jolie et gentille, elle broute et trotte comme une sotte.</p></li>
                <li><img src="images/2-cow.jpg"><a href="#">Agnes<br><font size="2">Holstein<br>Lyon</font></a><p>Age: 8ans<br>Lieux: Paris<br><br> Jolie et pas tres gentille, elle broute et trotte comme une sotte. Et boit beaucoup de café.</p></li>
                <li><img src="images/3-cow.jpg"><a href="#">Billy<br><font size="2">Montbeliarde<br>Toulouse</font></a><p>Age: 8ans<br>Lieux: Paris<br><br> Jolie et gentille, elle broute et trotte comme une sotte.</p></li>
                <li><img src="images/4-cow.jpg"><a href="#">Bob<br><font size="2">Highland<br>Toulouse</font></a><p>Age: 8ans<br>Lieux: Paris<br><br> Jolie et gentille, elle broute et trotte comme une sotte.</p></li>
                <li><img src="images/5-cow.jpg"><a href="#">Calvin<br><font size="2">Highland<br>Toulouse</font></a><p>Age: 8ans<br>Lieux: Paris<br><br> Jolie et gentille, elle broute et trotte comme une sotte.</p></li>
                <li><img src="images/6-cow.jpg"><a href="#">Marta<br><font size="2">Highland<br>Lyon</font></a><p>Age: 8ans<br>Lieux: Paris<br><br> Jolie et gentille, elle broute et trotte comme une sotte.</p></li>
                <li><img src="images/7-cow.jpg"><a href="#">Cindy<br><font size="2">Highland<br>Lyon</font></a><p>Age: 8ans<br>Lieux: Paris<br><br> Jolie et gentille, elle broute et trotte comme une sotte.</p></li>
                <li><img src="images/8-cow.jpg"><a href="#">Gisele<br><font size="2">Limousine<br>Paris</font></a><p>Age: 8ans<br>Lieux: Paris<br><br> Jolie et gentille, elle broute et trotte comme une sotte.</p></li>
                <li><img src="images/9-cow.jpg"><a href="#">Yakara<br><font size="2">Limousine<br>Paris</font></a><p>Age: 8ans<br>Lieux: Paris<br><br> Jolie et gentille, elle broute et trotte comme une sotte.</p></li>
                <li><img src="images/10-cow.jpg"><a href="#">Fifou<br><font size="2">Holstein<br>Paris</font></a><p>Age: 8ans<br>Lieux: Paris<br><br> Jolie et gentille, elle broute et trotte comme une sotte.</p></li>
                <li><img src="images/11-cow.jpg"><a href="#">Roger<br><font size="2">Holstein<br>Paris</font></a><p>Age: 8ans<br>Lieux: Paris<br><br> Jolie et gentille, elle broute et trotte comme une sotte.</p></li>
            </ul>

            <script>
                function myFunction() {
                    var input, filter, ul, li, a, i, txtValue;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    ul = document.getElementById("myUL");
                    li = ul.getElementsByTagName("li");
                    for (i = 0; i < li.length; i++) {
                        a = li[i].getElementsByTagName("a")[0];
                        txtValue = a.textContent || a.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            li[i].style.display = "";
                        } else {
                            li[i].style.display = "none";
                        }
                    }
                }
            </script>
        </div>
    </section>
</body>
</html>