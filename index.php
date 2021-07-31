<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08-PHP-paskaita</title>
</head>
<body>


<!-- 1. Sukurkite funkciją, kurią iškvietus, masyvą galima papildyti norimu elementu. Masyvas išsaugomas į COOKIE.
Informacija paimama iš input laukelio. Funkcija iškviečiama paspaudus mygtuką.

. -->


<form action='index.php' method='get'>
<input type='text' name='elementas'></input>
<button type='submit' name='patvirtinti'>Patvirtinti</button>
</form>




<?php 

function pridetiElementa() {
    if(isset($_GET['elementas']) && !empty($_GET['elementas'])) {
        $elementas = $_GET['elementas'];

        //neturetu buti tuscias. TY jis tuscias tol kol nera sausainiuko
        //kai cookie yra , sitas elementas tb cookie reiksme paversta i masyva

        if(isset($_COOKIE['elementas'])) {
            $elementuMasyvas = explode('|', $_COOKIE['elementas']);
            echo $_COOKIE['elementas'];
        } else {
             $elementuMasyvas = array();
        }
        
        array_push($elementuMasyvas, $elementas);

        //masyvas issaugomas i cookie. I cookie galima issaugoti tik teksta
        //reikalinga f-ja kuri masyva paverstu i teksta - explode pavercia teksta i masyva
        //implode - f-ja kuri masyva pavercia i teksta
        setcookie('elementas',implode('|', $elementuMasyvas), time() + 1200, '/' );


    }
    
}
if(isset($_GET['patvirtinti'])) {
 pridetiElementa();
}
?>





    
</body>
</html>