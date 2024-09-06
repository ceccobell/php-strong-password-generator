<?php 
session_start();
include 'functions.php';
$allowRepetion = null;
$containOnlyLetter = null;
$containOnlyNumbers = null;
$containOnlySpecialChars = null;

if (isset($_GET['repeatSameCharacter']) && $_GET['repeatSameCharacter']  == 'si') {
    $allowRepetion = true;
};

if (isset($_GET['noRepeatSameCharacter']) && $_GET['noRepeatSameCharacter']  == 'no') {
    $allowRepetion = false;
};

if (isset($_GET['containOnlyLetter']) && isset($_GET['containOnlyLetter']) == 'si') {
    $containOnlyLetter = true;
};

if (isset($_GET['containOnlyNumbers']) && isset($_GET['containOnlyNumbers']) == 'si') {
    $containOnlyNumbers = true;
};

if (isset($_GET['containOnlySpecialChars']) && isset($_GET['containOnlySpecialChars']) == 'si') {
    $containOnlySpecialChars = true;
};

if (isset($_GET['lunghezzaPassword']) && is_numeric($_GET['lunghezzaPassword']) && $_GET['lunghezzaPassword'] > 0) {
    $_SESSION['password'] = generaPassword($_GET['lunghezzaPassword'], $allowRepetion ,$containOnlyLetter, $containOnlyNumbers, $containOnlySpecialChars);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passwordo generata</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Password generata:</h1>
                <h2>
                    <?php if (isset($_SESSION['password'])) {
                            echo $_SESSION['password'];
                } ?></h2>
            </div>
        </div>
    </div>
</body>
</html>