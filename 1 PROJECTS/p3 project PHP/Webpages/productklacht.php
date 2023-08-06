<!-- This is the product complaint form -->
<!-- Author: Jack -->

<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>


<!-- Main code -->
<main>

    <header class="productklacht_header">
        <h1>Klacht over een product</h1>
    </header>

    <section>
        <form method="post" action="./productklachtaction.php"  class="productklacht_form">
            <label for="f_name">Voornaam: </label>
            <input type="text" name="f_name"> 
            <br>

            <label for="l_name">Achternaam: </label>
            <input type="text" name="l_name">
            <br>

            <label for="phone">Telefoonnummer: </label>
            <input type="number" name="phone">
            <br>

            <label for="email">Email: </label>
            <input type="text" name="email">
            <br>

            <div id="productklacht_gender">
                <label for="gender">Man</label>    
                <input type="radio" name="gender" value="Man">
                <label for="gender">Vrouw</label>   
                <input type="radio" name="gender" value="Vrouw">
            </div>
            <br>

            <label for="product_naam">Over welk product gaat het?</label>
            <input type="text" name="product_naam">
            <br>

            <label for="klacht_beschrijving">Wat is uw klacht over dit product?</label>
            <textarea type="textarea" name="klacht_beschrijving" class="productklacht_text"></textarea>
            <br>

            <label for="klacht_oplossing">Hoe wilt u dat wij dit oplossen?</label>
            <textarea name="klacht_oplossing" class="productklacht_text"></textarea>
            <br>

            <br>
            <input type="submit" value="Verzenden" name="submit_btn" id="productklacht_submit">
        </form>
    </section>

</main>


<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>
