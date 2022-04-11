

<?php
require("head.php");
?>


<body>
  <div id="root">
    <div class="logo">
      <img src="./images/Logo.jpg">
    </div>
    <div id="topnav" class="topnav">
      <a id="topnav_hamburger_icon" href="javascript:void(0);" onclick="showResponsiveMenu()">
        <!-- Some spans to act as a hamburger -->
        <span></span>
        <span></span>
        <span></span>
      </a>
    <!------------------------------------------ Classic Menu ------------------------------------------>
      <div id="menu_classic">
        <a id="home_link" class="topnav_link" href="/">ABOUT</a>
        <br>
        <hr style="width:70%; color: #333;">
        <br>
        <a id="home_link" class="topnav_link" href="/">SKILLS</a>
        <br>
        <hr style="width:70%; color: #333;">
        <br>
        <a id="home_link" class="topnav_link" href="/">PORTFOLIO</a>
        <br>
        <hr style="width:70%; color: #333;">
        <br>
        <a id="home_link" class="topnav_link" href="/">CONTACT</a>
        <br>
        <hr style="width:70%; color: #333;">

        <div id="mySidepanel" class="sidepanel">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
          <a href="./admin/connection.php">CONNECTION</a>
        </div>
        
          
      

        <div class="download">
          <svg xmlns="http://www.w3.org/2000/svg" width="36.822" height="36.822" viewBox="0 0 36.822 36.822">
            <path id="Icon_awesome-download" data-name="Icon awesome-download" d="M15.534,0h5.753a1.722,1.722,0,0,1,1.726,1.726V13.808h6.307a1.436,1.436,0,0,1,1.014,2.452L19.4,27.207a1.393,1.393,0,0,1-1.963,0L6.48,16.261a1.436,1.436,0,0,1,1.014-2.452h6.314V1.726A1.722,1.722,0,0,1,15.534,0ZM36.822,27.041V35.1A1.722,1.722,0,0,1,35.1,36.822H1.726A1.722,1.722,0,0,1,0,35.1V27.041a1.722,1.722,0,0,1,1.726-1.726h10.55L15.8,28.839a3.685,3.685,0,0,0,5.221,0l3.524-3.524H35.1A1.722,1.722,0,0,1,36.822,27.041ZM27.9,33.37a1.438,1.438,0,1,0-1.438,1.438A1.443,1.443,0,0,0,27.9,33.37Zm4.6,0a1.438,1.438,0,1,0-1.438,1.438A1.443,1.443,0,0,0,32.507,33.37Z"/>
          </svg>
          <p>DOWLOAD RESUME</p>
        </div>        
      </div>

      <button class="openbtn" onclick="openNav()">☰ Toggle Sidepanel</button>
    
      
          <!--------------------------------------- Responsive Menu ------------------------------------------>

          <nav role="navigation" id="topnav_responsive_menu">
            <ul>
              <li><a href="/">ABOUT</a></li>
              <li><a href="/about">SKILLS</a></li>
              <li><a href="/contact-us">PORTFOLIO</a></li>
              <li><a href="/privacy-policy">CONTACT</a></li>
              <li><a href="/terms-and-conditions">DOWLOAD CV</a></li>
            </ul>  
          </nav>
        </div>
      </div>

        <!--------------------------------------- Carousels ------------------------------------------>

      <div class="carousel0">
        <div class="carousel">
            <div class="carousel-inner">
                <div style="background-color: orange;" class="carousel-item"><img src="images/BusStopBillboardAlchy.jpg" alt="alchy bus stop"></div>
                <div style="background-color: greenyellow;"  class="carousel-item"><h1>Second slide</h1></div>
                <div style="background-color: rgb(37, 150, 255);" class="carousel-item"><h1>Third slide</h1></div>
                <div style="background-color: rgb(192, 192, 192);" class="carousel-item"><h1>Fourth slide</h1></div>
            </div>
            <div class="carousel-controls">
                <span class="prev"></span>
                <span class="next"></span>
            </div>
            <div class="carousel-indicators"></div>
        </div>
      </div>
      <script src="script.js"></script>

    <!--------------------------------------- Makshift carousel ------------------------------------------>
    <div id="makeshift">
      <div class="col-sm-7 mx-auto">
        <header class="section-header text-center">
          <span class="h1 d-block">
            <span>❝</span>
          </span>
          <h2>SKILLS</h2>
        </header>
      </div>
  
      <div id="flex-container" class="testimonials">
        <div id="left-zone">
          <ul class="list">
            <li class="item">
              <input type="radio" id="radio_testimonial-1" name="basic_carousel" checked="checked" />
              <label class="label_testimonial-1" for="radio_testimonial-1">Infographie</label>
              <div class="content-test content_testimonial-1">
                <span class="picto"></span>
                <h1>INFOGRAPHISTE</h1>
                <p> Photopshop </p>
                <p> Illustrator </p>
                <p> Indesign </p>
                <p> Adobe XD </p>
              
              </div>
            </li>
            <li class="item">
              <input type="radio" id="radio_testimonial-2" name="basic_carousel" />
              <label class="label_testimonial-2" for="radio_testimonial-2">Web design</label>
              <div class="content-test content_testimonial-2">
                <span class="picto"></span>
                <h1>WEB DESIGN</h1>
                <p> CMS </p>
                <p> Framworks </p>
                <p> HTML / CSS </p>
                <p> PHP, JS, Jquery </p>
                <p> ... </p>
                <br>
              </div>
            </li>
            <li class="item">
              <input type="radio" id="radio_testimonial-3" name="basic_carousel" />
              <label class="label_testimonial-3" for="radio_testimonial-3">Languages</label>
              <div class="content-test content_testimonial-3">
                <span class="picto"></span>
                <h1>LANGUAGES</h1>
                <p> French (native)</p>
                <p> English (fluent)</p>
                <p> Spanish(notions) </p>
                <p> Thaï(notions) </p>
              </div>
            </li>
            <li class="item">
              <input type="radio" id="radio_testimonial-4" name="basic_carousel" />
              <label class="label_testimonial-4" for="radio_testimonial-4">Educations</label>
              <div class="content-test content_testimonial-4">
                <span class="picto"></span>
                <h1>EDUCATIONS</h1>
                <p> Handigital (back end)</p>
                <p> MII (webdesign)</p>
                <p class="testimonialFrom"> Aries (Infographiste) </p>
                <p> Thaï(notions) </p>
                <!-- <p class="testimonialFrom">Mark, Owner</p>
                <p class="testimonialState">Somerset, VA</p> -->
                <br>
              </div>
            </li>
          </ul>
        </div>
        <div id="right-zone"></div>
      </div>
    </div>


          <!--------------------------------------- I AM... ------------------------------------------>

      <div class="iam">
      <span class="h1 d-block">
            <span>❝</span>
          </span>
        <h2>I AM...</h2>
          <p>
            Je me présente, je voudrais parler des mes formations ainsi que des mes acquis. <br><br>Je suis depuis un bout de temps un "Infographiste"
            et un "Web Designer" avec 3 ans de formations qui travaille en general sur des projets dans le domaines du privée depuis maintenant plus de 5 ans.
            J'ai mes passions dans les sports de combats et les jeux video ! Comme beaucoup de GEEK qui se respecte ! <br><br>
            Je suis actuelement dans la branche du devellopement informatique dit "Full Stack", donc un touche à tous. Du Front au Back, je fait aussi des choses qui complete le domaine.
            De la photo à sont montage, comme pour la video. 
          </p>
      </div>

      <div id="titremp">
        <span class="h1 d-block">
              <span>❝</span>
            </span>
          <h2>Montage / Photo</h2>
      </div>

      <div class="row"> 
        <div class="column">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
        </div>
        
        <div class="column">
        <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
        </div> 
        
        <div class="column">
        <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
          <img src="images/BusStopBillboardAlchy.jpg" style="width:100%">
        </div>
      </div>
      <div id="titrep">
        <span class="h1 d-block">
              <span>❝</span>
            </span>
          <h2>PROJETS...</h2>
      </div>

      <div class="projets">
      
        <div class="projet">
          <h3>Jeux</h3>
              <p>
                Je me présente, je voudrais parler des mes formations ainsi que des mes acquis. <br><br>Je suis depuis un bout de temps un "Infographiste"
                et un "Web Designer" avec 3 ans de formations qui travaille en general sur des projets dans le domaines .
              </p>
        </div>
        <div class="projet">
          <h3>Photo</h3>
              <p>
                Je me présente, je voudrais parler des mes formations ainsi que des mes acquis. <br><br>Je suis depuis un bout de temps un "Infographiste"
                et un "Web Designer" avec 3 ans de formations qui travaille en general sur des projets dans le domaines .
              </p>
        </div>
        <div class="projet">
          <h3>Montage</h3>
              <p>
                Je me présente, je voudrais parler des mes formations ainsi que des mes acquis. <br><br>Je suis depuis un bout de temps un "Infographiste"
                et un "Web Designer" avec 3 ans de formations qui travaille en general sur des projets dans le domaines .
              </p>
        </div>   
      </div>

    <footer>
      <?php
        require("footer.php");
      ?>
    </footer>

</body>
</html>