<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!--Script region-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script><!--JQUERY-->
        <script type="text/javascript" src="js/include.js"></script><!--Include fragments-->
        <script type="text/javascript" src="js/customScripts.js"></script><!--Email sender-->
        <link href="css/register.css" rel="stylesheet" />
        <title>Zarejestruj</title>



    </head>
    <body>

        <!--
        Here we have all page content downloaded using include.js
        You can add page content using section "content"
        -->
        <div id="page">
            <section id="pageContent">
                <article id="content">
                    
                    <form action="wynik.php" method="post" autocomplete="on">
                        <p>Imie: <input type="text" name="Name" autofocus="true" /></p>
                        <p>Nazwisko: <input type="text" name="Surname" required /></p>
                        <p>Miesiac urodzin: <input list="months" name="MonthOfBDay" /></p>
                            <datalist id="months">
                                <option value="Styczeń">
                                <option value="Luty">
                                <option value="Marzec">
                                <option value="Kwiecień">
                                <option value="Maj">
                                <option value="Czerwiec">
                                <option value="Lipiec">
                                <option value="Sierpień">
                                <option value="Wrzesień">
                                <option value="Październik">
                                <option value="Listopad">
                                <option value="Grudzień">
                            </datalist>
                        <p>Podaj hasło: <input type="text" name="Password" required /></p>
                        <p>Powtorz hasło: <input type="text" name="Password2" required /></p>
                        <p>Email: <input type="email" name="Email" required /></p>
                        <p>Telefon: <input type="tel" name="Phone" pattern="^([0-9]{9})|(([0-9]{3}-){2}[0-9]{3})$"/></p>
                        <button type="reset">Wyczyść</button>
                        <button onclick="SendEmail(); return false">Wyślij</button>
                    </form>
                    <?php

                        $jakisString="dtring";
                        echo $jakisString;

                    ?>
                </article>
            </section>
        </div>
    </body>
</html>
