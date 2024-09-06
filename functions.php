<?php
function generaPassword($lunghezza, $allowRepetionChars) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ|!"£$%&/()=?^_-:.;,@ç°à#§ù*+][èé><';
    $stringaRandom = '';

    if ($allowRepetionChars) {
        for ($i = 0; $i < $lunghezza; $i++) {
            $num_rand = rand(0, strlen($caratteri) - 1);
            $stringaRandom .= $caratteri[$num_rand];
        }
    } else {
        while (strlen($stringaRandom) < $lunghezza) {
            $num_rand = rand(0, strlen($caratteri) - 1);
            if (!str_contains($stringaRandom, $caratteri[$num_rand])) {
                $stringaRandom .= $caratteri[$num_rand];
            }
        }
    }
    return $stringaRandom;
};
?>