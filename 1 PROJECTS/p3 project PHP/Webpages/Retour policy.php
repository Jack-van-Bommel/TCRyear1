<!-- This is retour policy page page -->
<!-- Author: Dylan -->

<!-- Include head.php -->
    <?php 
    include "../Webpages/include pages/head.php";
    ?>
<!-- Include navbar.php -->
    <?php 
    include "../Webpages/include pages/navbar.php";
    ?>

<!-- Include Retour policy.js -->
    <script 
    type="text/javascript" src="RP.js">
    </script>

<body>
<!-- Main code -->
<main id="RP_main">
    <header class="RP_header">  
        <h1 class="RPheader_1">Retour policy uitleg.</h1>
        <h5 class="RPheader_2">Een product retourneer je binnen 30 dagen na ontvangst, compleet, in nieuwstaat en, indien redelijkerwijs mogelijk, in de originele verpakking. Je mag het product gerust bekijken en proberen zoals je dat ook in onze winkel kunt doen. <br> We verzoeken je om het product zodanig te retourneren dat wij het product via onze MediaMarkt Outlet een tweede leven kunnen geven. Zo dragen wij samen bij aan een duurzaam gebruik van consumentenelektronica. </h5>
    </header>
    
    <div class="RP_section1">
    <div class="RPkop_1">Hoe moet ik retourneren/omruilen?</div>
    <div class="RPkop_2">Problemen met mijn bestelling</div>
    <div class="RPkop_3">Overige vragen</div>
    </div>    

    <br>
    
    <div class="RP-rows">

    <div class="RP-row_1">
    <div class="RPdropdown_1" onclick="toggleRPdropdown_1()">
  <path role="button">Mag ik mijn product retourneren?</path> 
</div>

<div class="RPdropdown_2" onclick="toggleRPdropdown_2()">
  <path role="button">Mijn bestelling is incompleet geleverd</path> 
</div>

<div class="RPdropdown_3" onclick="toggleRPdropdown_3()">
  <path role="button">Ik ben mijn aankoopbon kwijt, kan ik een kopie krijgen?</path> 
  </div>
</div>

<div class="RPdropdown_1-content" id="RPdropdown_ID_1">
  <h1>text</h1>
</div>
<div class="RPdropdown_2-content" id="RPdropdown_ID_2">
    <h1>text</h1>
</div>
<div class="RPdropdown_3-content" id="RPdropdown_ID_3">
    <h1>text</h1>
</div>

  <div class="RP-row_2">
  <div class="RPdropdown_4" onclick="toggleRPdropdown_4()">
  <path role="button">Hoe kan ik mijn product retourneren?</path> 
    <div class="RPdropdown_4-content" id="RPdropdown_ID_4">
    <h1>text</h1>
    </div>
  </div>

  <div class="RPdropdown_5" onclick="toggleRPdropdown_5()">
  <path role="button">Ik mis een onderdeel van mijn product</path> 
    <div class="RPdropdown_5-content" id="RPdropdown_ID_5">
    <h1>text</h1>
    </div>
  </div>

  <div class="RPdropdown_6" onclick="toggleRPdropdown_6()">
  <path role="button">Hoe annuleer ik mijn bestelling?</path> 
    <div class="RPdropdown_6-content" id="RPdropdown_ID_6">
    <h1>text</h1>
    </div>
    </div>
  </div>

  <div class="RP-row_3">
  <div class="RPdropdown_7" onclick="toggleRPdropdown_7()">
  <path role="button">Kan mijn product omgeruild worden?</path> 
    <div class="RPdropdown_7-content" id="RPdropdown_ID_7">
    <h1>text</h1>
    </div>
  </div>

  <div class="RPdropdown_8" onclick="toggleRPdropdown_8()">
  <path role="button">Het product is met schade geleverd</path> 
    <div class="RPdropdown_8-content" id="RPdropdown_ID_8">
    <h1>text</h1>
    </div>
  </div>

  <div class="RPdropdown_9" onclick="toggleRPdropdown_9()">
  <path role="button">Mijn bestelling is al onderweg, kan ik het nog annuleren?</path> 
    <div class="RPdropdown_9-content" id="RPdropdown_ID_9">
    <h1>text</h1>
    </div>
    </div>
</div>

<div class="RP-row_4">
  <div class="RPdropdown_10" onclick="toggleRPdropdown_10()">
  <path role="button">Krijg ik bij het terugbrengen van een product mijn hele aankoopbedrag terug?</path> 
    <div class="RPdropdown_10-content" id="RPdropdown_ID_10">
    <h1>text</h1>
    </div>
  </div>

  <div class="RPdropdown_11" onclick="toggleRPdropdown_11()">
  <path role="button">Het product is net bezorgd, maar doet het niet</path> 
    <div class="RPdropdown_11-content" id="RPdropdown_ID_11">
    <h1>text</h1>
    </div>
  </div>

  <div class="RPdropdown_12" onclick="toggleRPdropdown_12()">
  <path role="button">Hoe kan ik mijn bestelling annuleren die opgehaald moet worden in de winkel?</path> 
    <div class="RPdropdown_12-content" id="RPdropdown_ID_12">
    <h1>text</h1>
    </div>
    </div>
  </div>
 </div>
</main>

<!-- Include footer.html -->

<?php
include "../Webpages/include pages/footer.php";
?>

</body>



