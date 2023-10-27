<?php
    $id = mysqli_connect('localhost', 'root', '', 'booksharing');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
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
            <form action="zarejestruj.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="imie">Imię: </label>
                        </td>
                        <td>
                            <input type="text" name="imie">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nazwisko">Nazwisko: </label>
                        </td>
                        <td>
                            <input type="text" name="nazwisko">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nrtel">Numer telefonu: </label>
                        </td>
                        <td>
                            <input type="number" name="nrtel">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Adres e-mail: </label>
                        </td>
                        <td>
                            <input type="email" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="haslo1">Podaj hasło: </label>
                        </td>
                        <td>
                            <input type="password" name="haslo1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="haslo2">Powtórz hasło: </label>
                        </td>
                        <td>
                            <input type="password" name="haslo2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="avatar">Avatar: </label>
                        </td>
                        <td>
                            <input type="file" name="avatar">
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <input type="submit" name="register" value="ZAREJESTRUJ">
                        </td>
                    </tr>
                    <?php
                        if(isset($_POST['register'])) {
                        $name = $_POST['imie'];
                        $surname = $_POST['nazwisko'];
                        $phonenumber = $_POST['nrtel'];
                        $email = $_POST['email'];
                        $pass1 = $_POST['haslo1'];
                        $pass2 = $_POST['haslo2'];
                        // $picture = $_POST['avatar'];
                        if($pass1 != $pass2) {
                                echo '
                                    <tr>
                                        <td colspan=2>
                                            <p>Podane hasła różnią się!</p>
                                        </td>
                                    </tr>';
                                die();
                            } elseif($name == NULL || $surname == NULL || $phonenumber == NULL || $email == NULL || $pass1 == NULL) {
                                echo ' 
                                    <tr>
                                        <td colspan=2>
                                            <p>Wypełnij wszystkie dane!</p>
                                        </td>
                                    </tr>';
                                die();
                            }
                            else {
                                $hashed_password = password_hash($pass1, PASSWORD_DEFAULT);
                                $q = "INSERT INTO uzytkownik (imie, nazwisko, email, telefon, haslo)
                                VALUES('$name', '$surname', '$email', '$phonenumber', '$hashed_password')";
                                $zap = mysqli_query($id, $q);
                            }
                        }
                    ?>
                </table>
            </form>
        </div>
        <div class="prawy"></div>
    </main>
    <footer><p>Witryna stworzona przez: </p></footer>
</body>
</html>
<?php
    mysqli_close($id);
?>