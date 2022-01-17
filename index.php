<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
</head>
<body>

    <?php
        /** CONSEGNA:
         * 
         * DEFINIRE CLASSE Film:
         *      Attributi:
         *      - titolo
         *      - sottotiolo
         *      - regista
         * 
         *      Metodi:
         *      - costruttore che accetta titolo
         *      - getFullTitle: 
         *          Se sottotitolo presente:
         *            restituisce "titolo: sottotitolo" 
         *          Se sottotiolo assente:
         *            restituisce "titolo" 
         *      - __toString: 
         *          Se regista presente:
         *            restituisce "fullTitle | regista"
         *          Se regista assente:
         *            restituisce "fullTitle | ???"
         * 
         * UTILIZZO OGGETTI Film:
         * 
         *      Generare 3 istanze della classe Film:
         *      - uno con solo il titolo
         *      - uno con titolo e sottotitolo
         *      - uno con titolo, sottotiolo e regista
         * 
         *      Stampare tutti gli oggetti tramite toString (implicito)
         * 
         *  RISULTATO ATTESO:
         * 
         *      Matrix | ???
         *      Fantozzi 2: il ritorno di fantozzi | ???
         *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
         */

        class Film {

            public $title;
            public $subtitle;
            public $director;

            public function __construct($title) {

                $this -> title = $title;
            }

            public function getFullTitle() {
                // Se sottotitolo presente:
                //      restituisce "titolo: sottotitolo" 
                // Se sottotiolo assente:
                //      restituisce "titolo"
                if (!empty($subtitle)) {
                    return $this -> title . " | " . "???";
                } else {
                    return $this -> title . " | " . $this -> subtitle;                   
                }
            }

            public function __toString() {
                // Se regista presente:
                //      restituisce "fullTitle | regista"
                // Se regista assente:
                //      restituisce "fullTitle | ???"
                if (!empty($director)) {
                    return $this -> getFullTitle() . " | " . "???";
                } else {
                    return $this -> getFullTitle() . " | " . $this -> director;
                }
            }
        }

        $f1 = new Film("Matrix");
        $f2 = new Film("Fantozzi 2");
        $f3 = new Film("Peter Pan");

        $f1 -> subtitle = "";
        $f2 -> subtitle = "il ritorno di fantozzi";
        $f3 -> subtitle = "il ritorno all'isola che non c'e'";

        $f1 -> director = "";
        $f2 -> director = "";
        $f3 -> director = "Robin Budd";

        echo $f1 . "<br>";
        echo $f2 . "<br>";
        echo $f3 . "<br>";
    ?>

</body>
</html>