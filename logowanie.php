<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"></head>
<body>
    <header>
        <h1><a href="./booksharing.php">BookSharing</a></h1>
        <p><a href="./onas.html">O nas</a></p>
        <p>Książki</p>
        <p><a href="./logowanie.php">Zaloguj</a></p>
        <p><a href="./zarejestruj.php">Zarejestruj</a></p>
        <p>kontakt</p>
    </header>
    <main>
        <div class="lewy"></div>
        <div class="srodek">
            <form action="">
                <table>
                    <tr>
                        <td>
                            <label for="login">Login: </label>
                        </td>
                        <td>
                            <input type="text" name="login">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="haslo">Hasło: </label>
                        </td>
                        <td>
                            <input type="text" name="haslo">
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <input type="submit" value="ZALOGUJ" class="zaloguj">
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <p><a class="nph" href="./odzyskanie_hasla.php">Nie pamiętasz hasła?</a></p>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="prawy"></div>
    </main>
    <footer>
        <p>Witryna stworzona przez:</p>
    </footer>
</body>
</html>