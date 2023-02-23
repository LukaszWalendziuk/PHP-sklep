<?php 
require_once "systemClass.php";
require_once "layoutClass.php";
?>



<!DOCTYPE html>
<html lang="pl">
<head>
    <?php 
        SystemClass::printHead("./styles/main.css");
    ?>
</head>
<body>
    <?php layoutClass::printHeader(); ?>  
   
    <section class="hero">
        <div class="hero__container">
            <h1>Czasu jest za mało</h1>
        </div>
    </section>

    <footer>
        <div class="footer__container">
            <p>Wykonał Łukasz Walendziuk</p>
        </div> 
    </footer>
</body>
</html>