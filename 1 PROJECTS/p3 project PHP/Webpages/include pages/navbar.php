<!-- Include navbar om op iedere pagina te kunnen plaatsen -->

<!-- Navbar code -->
<nav class="nav_container">
    <img id="IMGlogo" src="./IMAGES/1280px-Media_Markt_logo.png" alt="Mediamarkt logo PNG">

    <!-- Bovenste list -->
    <div class="list_boven_container">
        <ul class="list_boven">
            <li><a href="index.php">Homepage</a></li>
            <li><a href="webshop.php">Webshop</a></li>
            <li><a href="leveranciers.php">Leveranciers</a></li>
            <li><a href="landenoverzicht.php">Landen</a></li>
            <li><a href="Retour policy.php">Bezorgen en retour</a></li>
            <li><a href="klachten.php">Klachten en complimenten</a></li>
            <li><a href="overbedrijf.php">Over ons bedrijf</a></li>
        </ul>
    </div>
    
    <!-- Onderste list -->
    <div class="nav_onder">   
        <ul class="list_onder">
            <li class="categorie_dropdown_c">
                <div class="categorie_btn_c">
                    <a href="categorieenform.php">Categorieën bekijken</a>  
                </div>
            </li>
            <li><input type="text" id="searchbar" name="searchbar" placeholder="Zoeken"></li>
            <li class="categorie_dropdown_p">
                <div class="categorie_btn_p">
                    <svg id="dropdown_bars2" viewBox="0 0 80 80"><path d="M4.726 9.507c-2.66 0-4.56 2.279-4.56 4.938s2.28 4.56 4.94 4.56h70.283c2.66 0 4.56-1.9 4.56-4.56s-1.9-4.938-4.56-4.938H4.726zm0 25.834c-2.66 0-4.56 1.9-4.56 4.559s2.28 4.559 4.94 4.559h70.283c2.66 0 4.56-1.9 4.56-4.56s-1.9-4.558-4.56-4.558H4.726zm0 25.454c-2.66 0-4.94 2.28-4.94 4.939s2.28 4.559 4.94 4.559H75.01c2.659 0 4.938-2.28 4.938-4.94s-2.28-4.938-4.938-4.938H4.726v.38z"></path></svg>
                    <a href="">Personeel opties</a>  
                </div>
                <div class="categorie_content_p">
                    <a class="a_btn_1" href="">Klanten bekijken</a>
                    <a class="a_btn" href="">Klanten toevoegen</a>
                    <a class="a_btn" href="bestellingen.php">Bestellingen bekijken</a>
                    <a class="a_btn" href="categoriecrud.php">Categorieën overzicht</a>
                    <a class="a_btn" href="leverancierdatabase.php">Leveranciers toevoegen</a>
                    <a class="a_btn_4" href="landencrud.php">Landen toevoegen</a>
                </div>   
            </li>
        </ul>
    </div>  

    <!-- Images left side of navbar -->
    <div class="nav_imgcontainer">
        <a href=""><img src="./IMAGES/blankprofielpic.png" id="IMGprofilepic" alt="Account png"></a></li>
        <a href=""><img src="./IMAGES/shoppingcart.png" id="IMGcart" alt="Winkelwagen png"></a></li>
    </div>
</nav>