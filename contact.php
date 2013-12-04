<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script><!--JQUERY-->
        <script type="text/javascript" src="js/include.js"></script><!--Include fragments-->
        <script type="text/javascript" src="js/customScripts.js"></script><!--Email sender-->
        <script type="text/javascript" src="js/dom.js"></script>
        <link href="css/contact.css" rel="stylesheet" />
        <title>Contact</title>
    </head>
    <body>
        <div id="page">
            <section id="pageContent">
                <article id="content">
                    <?php 
                        session_start();
                        if( !isset($_SESSION['ta']) ){
                            $_SESSION['ta'] = array();
                        }

                        if( $_SERVER['REQUEST_METHOD'] == 'POST'  && strlen($_POST['ta']) > 0 ){
                            $_SESSION['ta'] = checkWords();
                        }
                    ?>
                    <form method="POST" onreset="resetAlert()">
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
                            <li><?php echo "$text"; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <?php
                        function checkWords() {
                            $words = explode(' ', $_POST['ta']);
                            $i = 0;
                            foreach ($words as $word) {
                                if( preg_match('/invalid/', $word) ) {
                                    preg_replace('/invalid/', 'valid', $word);
                                    $illegalWords[$i] = $word;
                                    $i++;
                                }
                            }
                            return $illegalWords;
                        }
                    ?>
                </article>
            </section>
        </div>
    </body>
</html>
