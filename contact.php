<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!--Script region-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script><!--JQUERY-->
        <script type="text/javascript" src="js/include.js"></script><!--Include fragments-->
        <script type="text/javascript" src="js/customScripts.js"></script><!--Email sender-->
        <script type="text/javascript" src="js/dom.js"></script>
        <link href="css/contact.css" rel="stylesheet" />
        <title>Contact</title>



    </head>
    <body>

        <!--
        Here we have all page content downloaded using include.js
        You can add page content using section "content"
        -->
        <div id="page">
            <section id="pageContent">
                <article id="content">
                    <form onsubmit="contact.php" onreset="resetAlert()">
                        <p>Subskrybcja mailowa <input type="checkbox" name="nazwa" value="subscription" /></p>
                        <p>Pleć: K<input type="radio" name="sex" value="male" /> M<input type="radio" name="sex" value="female" /></p>
                        <p>Imie: <input type="text" name="Name" /></p>
                        <p>Telefon <input type="text" name="Phone" /></p>
                        <p>Wybierz: <select name="">
                            <option>Opcja 1</option>
                            <option>Opcja 2</option>
                            <option>Opcja 3</option>
                        </select></p>
                        <p>
                            <textarea name="ta" rows="4" maxlength="200" placeholder="Wpisz co ci lezy na sercu." ></textarea></p>
                        <button type="reset">Wyczyść</button>
                        <button type="submit" >Wyślij</button>
                    </form>

                    <ul>
                        <?php foreach($_SESSION['ta'] AS $text): ?>
                            <li><?php echo $text; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php
                        $isFocused = false;

                        function setFocus() { 
                            global $isFocused;
                            $isFocused = true;
                        }

                        function getTextAreaContent() {
                            return $_POST['ta'];
                        }

                        function getArrayOfWords() {
                            return explode(' ', getTextAreaContent());
                        }

                        function checkWords() {
                            $words = getArrayOfWords();
                            echo $words;
                            foreach ($words as $word) {
                                echo "$word";
                                checkWord("$word");
                            }
                        }

                        function checkWord( $word ){
                            echo "$word";
                            if( preg_match('/invalid/', $word) ) {
                                echo "<p> omg </p>";
                                $_SESSION['ta'][] = $word;
                                preg_replace('/invalid/', 'valid', $word);
                            }
                        }

                        function checkIfInvalid() {
                            global $isFocused;
                            if ( $isFocused ) {
                                checkWords();
                                $isFocused = false;
                            }
                        }

                        session_start();
                        if( !isset($_SESSION['ta']) ){
                            // set session array if not already set previously
                            $_SESSION['ta'] = array();
                        }

                        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
                            // add text to session array and escape for security
                            //$_SESSION['ta'][] = htmlspecialchars($_POST['ta'], ENT_QUOTES);
                            checkIfInvalid();
                        }
                    ?>
                </article>
            </section>
        </div>
    </body>
</html>
