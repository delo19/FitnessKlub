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
                        $query = "SELECT * FROM illegals";           
                        if ( !( $database = mysql_connect( "localhost", "psw1", "psw1" ) ) )
                           die( "<p>Nie moge polaczyc sie z baza</p></body></html>" );

                        
                        if ( !mysql_select_db( "psw", $database ) )
                           die( "<p>Nie moge otworzyc bazy</p></body></html>" );
                        
                        if ( !( $result = mysql_query( $query, $database ) ) )
                        {
                           print( "<p>Nie moge wykonac zapytania!</p>" );
                           die( mysql_error() . "</body></html>" );
                        } 

                        session_start();
                        if( !isset($_SESSION['ta']) ) {
                            $_SESSION['ta'] = array();
                        }

                        if( $_SERVER['REQUEST_METHOD'] == 'POST'  && strlen($_POST['ta']) > 0 ) {
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
                            <textarea name="ta" rows="4" maxlength="200" placeholder="Wpisz co ci lezy na sercu."><?php showMessage(); ?></textarea></p>
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
                            $replaceWord = ["/invalid/" => "valid",];
                            $words = explode(' ', $_POST['ta']);
                            $i = 0;
                            $message = "";
                            $isIllegalMessage = false;
                            foreach ($words as $word) {
                                foreach ($replaceWord as $invalidWord => $validWord) {
                                    if( preg_match($invalidWord, $word) ) {
                                        $illegalWords[$i] = $word;
                                        $i++;
                                        $isIllegalMessage = true;
                                        $message = $message . " " . $validWord;
                                    } else {
                                        $message = $message . " " . $word;
                                    }
                                }
                            }
                            if( $isIllegalMessage ) {
                                $_COOKIE['textarea'] = substr($message, 1); 
                            } else {
                                $_COOKIE['textarea'] = "";
                            }
                            return $illegalWords;
                        }

                        function showMessage() {
                            echo $_COOKIE['textarea'];
                            #setcookie('textarea', 'value', time()*3600);
                        }
                    ?>
                </article>
            </section>
        </div>
    </body>
</html>
