<?php
function generaPassword($lunghezza) {
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ|!"£$%&/()=?^_-:.;,@ç°à#§ù*+][èé><';
    $stringaRandom = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    return $stringaRandom;
};

if (isset($_GET['lunghezzaPassword']) && is_numeric($_GET['lunghezzaPassword']) && $_GET['lunghezzaPassword'] > 0) {
    $password = generaPassword($_GET['lunghezzaPassword']);
}
?>