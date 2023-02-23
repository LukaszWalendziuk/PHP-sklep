<?php
session_start();

class layoutClass {
    static function printHeader() {
        $conditionRender = "";

        if(isset($_SESSION['signedIn']) && $_SESSION['signedIn'] === true) {
            $conditionRender = "
                <li><a href='logout.php'>Wyloguj</a></li>
            ";
        } else {
            $conditionRender ="
                <li><a href='signInPage.php'>Wyloguj</a></li>
                <li><a href='signUpPage.php'>Zarejestruj się</a></li>
            ";
        
        }

        echo "
            <header>
            <div class='header__continer'>
                <h4>LOGO</h4>
                    <nav>
                        <ul>
                            <li><a>Home</a></li>
                            <li><a>About us </a></li>
                            <li><a>Contact</a></li>
                            $conditionRender
                        </ul>
                    </nav>
            </div>
            </header>
        ";

    }
}