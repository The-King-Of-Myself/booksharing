<?php
    
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><a href="./booksharing.php">BookSharing</a></h1>
        <p><a href="./onas.html">O nas</a></p>
        <p>Książki</p>
        <a href="./logowanie.php"><p>Zaloguj</p></a>
        <a href="./zarejestruj.php"><p>Zarejestruj</p></a>
        <p>kontakt</p>
        <!-- Profil tylko widoczny gdy użytkownik zalogowany -->
        <a href="./profil.php"><p id="link">Profil</p></a>
    </header>
    <main>
        <div class="lewy" ></div>
        <div class="srodek" >
        <div id="info" >
            <img src="./profilowe.jpeg" alt="profilowe">
            <div id="dane">
                <p id="dana">imie i nazwisko</p>
                <p id="dana">adress email</p>
                <p id="dana">numer telefonu</p>
                <p id="dana">liczba książek x</p>
            </div>
            <div id="zyczenia">
                <p style="text-align: center ; margin-top: 10px;"><strong>Lista życzeń</strong></p>
                <ul>
                    <li id="zyczenie">ksiazka</li>
                </ul>   
            </div>
        </div>
        <hr>
        <div id="ksiazki">
            <div id="ksiazka">
                <img src="placeholder.png" alt="tytul">
                <p>tytul książki</p>
                <p>Autor książki</p>
            </div>
          
        </div>
        </div>
        <div class="prawy" ></div>
    </main>
    <footer><p>Witryna stworzona przez: </p></footer>
</body>
</html>