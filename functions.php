<?php
//var_dump($_GET);

function pass_generator(int $num, bool $letters, bool $numbers, bool $symbols) : string {

    $chars = "";

    if ($letters) {
        $chars .= "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }

    if ($numbers) {
        $chars .= "0123456789";
    }

    if ($symbols) {
        $chars .= ",.!£$%&/()^+;:@#";
    }

    //se nessuna checkbox selezionata
    if ($chars === "") {
        return "Seleziona almeno un tipo di carattere";
    }

    $newPassword = "";

                //prende l'ultimo indice valido della stringa
                //-1 perchè la lunghezza parte da 1 mentre l'indice da 0
    $maxIndex = strlen($chars) - 1;

    for ($i = 0; $i < $num; $i++) {
        $randomIndex = random_int(0, $maxIndex);
        $newPassword .= $chars[$randomIndex];
    }

    return $newPassword;
}

$password = "";

if (isset($_GET["pass_length"])) {

    $length = (int) $_GET["pass_length"];

    $letters = isset($_GET["letters"]);
    $numbers = isset($_GET["numbers"]);
    $symbols = isset($_GET["symbols"]);

    $password = pass_generator($length, $letters, $numbers, $symbols);
}

//var_dump($password);

?>