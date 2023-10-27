<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="./booksharing.php"><h1>BookSharing</h1></a>
        <p><a href="./onas.html">O nas</a></p>
        <p>Książki</p>
        <a href="./logowanie.php"><p>Zaloguj</p></a>
        <a href="./zarejestruj.php"><p>Zarejestruj</p></a>
        <p>kontakt</p>
    </header>
    <main>
        <div class="lewy"></div>
        <div class="srodek">
            <form action="">
                <table>
                    <tr>
                        <p>Wpisz nowe hasło</p>
                    <tr>
                        <td>
                            <label for="nhaslo">Nowe Haslo: </label>
                        </td>
                        <td>
                            <input type="text" name="nhaslo">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nhaslo1">Powtórz Haslo: </label>
                        </td>
                        <td>
                            <input type="text" name="nhaslo1">
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <input type="button" class="btn3" onclick="location.href='nowe_haslo.php'" value="Gotowe" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="prawy"></div>
    </main>
    <footer><p>Witryna stworzona przez: </p></footer>
</body>
</html>