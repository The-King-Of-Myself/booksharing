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
                    <p>Podaj adres e-mail powiązany  Twoim kontem:</p>
                    </tr>
                    <tr>    
                        <td>
                            <label for="mail">Adres e-mail:</label>
                        </td>
                        <td>
                            <input type="text" name="haslo">
                        </td>
                    </tr>    
                    <tr>
                            <td colspan=2>
                            <input type="button" class="btn1" onclick="location.href='odzyskanie2.php'" value="Wyslij" />
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