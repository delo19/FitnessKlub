<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!--Script region-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script><!--JQUERY-->
        <script type="text/javascript" src="js/include.js"></script><!--Include fragments-->
        <script type="text/javascript" src="js/customScripts.js"></script><!--Email sender-->
        <link href="css/register.css" rel="stylesheet" />
        <title>Wynik</title>
    </head>

    <body>
        <div id="page">
            <section id="pageContent">
                <article id="content">
                    <?php

                        define('ILLEGAL_NAME', 'Podano niedozwolone imie');
                        define('PASSWORD_NOT_MATCH', '<font color="red">Hasla nie zgadzaja sie</font>');
                        
                        function printVar($var) { 
                            return($var.'<br />');
                        }

                        function printPass($pass, $pass2) {
                            if (strlen($pass) < 8) {
                                    echo printVar("Haslo za krotkie,\t system wygenerowal odpowiednie.");
                                    $pass = getRandomPass();
                                    echo printVar("Haslo to: $pass");
                            }
                            echo printVar("Zmienna 'Haslo' jest typu: ".gettype($pass));
                        }

                        function getRandomPass() {
                            return(rand(11111111, 99999999));
                        }

                        function killIfIllegalName($name) {
                            if ($name == "admin") {
                                die( ILLEGAL_NAME );
                            }
                        }

                        $name = $_POST["Name"];
                        $surname = $_POST["Surname"];
                        $monthOfBDay = $_POST["MonthOfBDay"];
                        $email = $_POST["Email"];
                        $phone = $_POST["Phone"];
                        $pass = $_POST["Password"];
                        $pass2 = $_POST["Password2"];

                        killIfIllegalName("$name");
                        if ($pass != $pass2) {
                            echo printVar( PASSWORD_NOT_MATCH );
                        } else {
                                printPass("$pass", "$pass2");
                                echo printVar("$name");
                                echo printVar("$surname");
                                echo printVar("$monthOfBDay");
                                echo printVar("$email");
                                echo printVar("$phone");
                        }

                        echo $_SERVER['HTTP_USER_AGENT'];
                        echo '<br />';
                        echo $_SERVER[REMOTE_ADDR];
                    ?>
                </article>
            </section>
        </div>
    </body>
</html>
