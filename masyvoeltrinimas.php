<?php 

$masyvas = array(1,2,3,4,5,6,7,8,9,10);

//mes turime istrinti kazkuri elementa is masyvo

//Reikia istrinti skaiciu 5 ir skaiciu 10 is turimo masyvo
//mes turime zinoti elemento vieta masyve
var_dump($masyvas);

echo $masyvas[4]; //5

//cia yra paskutinis masyvo elementas
$elementuSkaiciusMasyve = count($masyvas); //masyve elementu yra 10
//nesvarbu kokio ilgio masyvas, mes visa laika pasirenkame paskutini
echo $masyvas[$elementuSkaiciusMasyve-1]; //10
echo $masyvas[9]; //10

unset($masyvas[4]);
unset($masyvas[$elementuSkaiciusMasyve-1]);

var_dump($masyvas);

//foreach

foreach ($masyvas as $elementas) {
    echo $elementas;
    echo '<br>';
}

//for
//atkurti numeracija (po elementu istrynimo)
$masyvas = array_values($masyvas);

var_dump($masyvas);



for($i=0; $i< count($masyvas); $i++) {
    //8 elementai 0-7
    echo $masyvas[$i];
    echo '<br>';

}

//atlikti veiksmus su asociatyviu masyvu

$asoc_masyvas = array(
    'elementas1' => '1',
    'elementas2' => '2',
    'elementas3' => '3',
    'elementas4' => '4',
    'elementas5' => '5',
    'elementas6' => '6',    
    
);

var_dump ($asoc_masyvas);

unset($asoc_masyvas['elementas4']);
unset($asoc_masyvas['elementas6']);

//istrinti paskutini elementas4
 

var_dump ($asoc_masyvas);

//foreach
foreach($asoc_masyvas as $elementas) {
    echo $elementas;
    echo '<br>';
}

//Elementu skaiciavimo sistema

$kitas_asoc_masyvas = array(
    'elementas10' => '1',
    'elementas11' => '2',
    'elementas12' => '3',
    'elementas13' => '4',
    'elementas14' => '5',
    'elementas15' => '6',    
    
);
var_dump($kitas_asoc_masyvas);

for($i=10; $i<16; $i++) {
    echo $kitas_asoc_masyvas['elementas'.$i];
    echo '<br>';

}
//Dvimaciam masyvui. Paprastas

$dvimatismasyvas = array (
        array(1,2,3,4,5,6,7,8,9),  //0
        array(1,2,3,4,5),          //1
        array(987,654,321),        //2
        array('987','654','321'),  //3
        array(1,2,3,4,5,6,7,8,9),  //4
        array(1,2,3,4,5),          //5
        array(987,654,321),        //6
        array('987','654','321'),  //7

);

var_dump ($dvimatismasyvas);

//Kaip istrinti visa lentynele?

//norime istrinti paskutne masyvo lentynele
//kaip pasirinkti paskutine masyvo lentynele?
unset($dvimatismasyvas[3]);
unset($dvimatismasyvas[7]);
//sugriuvo lentyneliu eiliskumas

$dvimatismasyvas = array_values($dvimatismasyvas);

var_dump ($dvimatismasyvas);

//Kaip istrinti pavieni lentyneles elementa?
//unset f-ja ir zinoti kaip kreiptis i pavieni elementa
//Istrinti 5lentynele 5 elementa

unset($dvimatismasyvas[4][4]);
var_dump($dvimatismasyvas);

//reikia atstatyti 5os lentyneles numeracija
$dvimatismasyvas[4]=array_values($dvimatismasyvas[4]);
var_dump($dvimatismasyvas);


//dvimatis masyvas, o jo elementai yra asociatyvus masyvai

$klientai = array();

for($i=0; $i< 10; $i++){
    //klientai masyva sitas ciklas turi pildyti visa lentyna
    //turi prideti nauja masyva i klientai masyva
    $klientas = array(
        "id" => $i+1,
        "vardas" => "vardas".($i+1), 
        "pavarde" => "pavarde".($i+1), 
        "asmens_kodas" => rand(3,6).rand(0,99).rand(1,12).rand(1,31).rand(1000,9999), //38512300000

        //atsitiktiniu budu sugeneruota data
        "prisijungimo_data" => rand(1950, 2021)."-".rand(1,12)."-".rand(1,31), 
        "adresas" => "adresas".($i+1), 
        "elpastas" => "vardas".($i+1)."pavarde".($i+1)."@pastas.lt"
    );

    //kaip dabar papildyti masyva $klientai?
    array_push($klientai, $klientas);

}

//istrinti visa lentynele - klienta 3
//ir kaip istrinti 7 kliento 'adresas'

var_dump($klientai);

unset($klientai[2]);

var_dump($klientai);

$klientai = array_values($klientai);
var_dump($klientai);

unset($klientai[6]['adresas']);
var_dump($klientai);

//Mes susikursime masyva 1.2.3.4.5.6
//Is sito masyvo istrinsime skaicius 3 ir 5
//Tada si masyva pasiversime i teksta
//ir po to teksta pasiversime atgal i masyva

$skaiciu_masyvas = array(1,2,3,4,5,6);
var_dump($skaiciu_masyvas);
unset($skaiciu_masyvas[2]);
unset($skaiciu_masyvas[4]);
//masyva paverciame i teksta


$skaiciu_masyvo_tekstas = implode(',',$skaiciu_masyvas);
//Teksta paverciame i masyva

$skaiciu_masyvas = explode(',',$skaiciu_masyvo_tekstas);

var_dump($skaiciu_masyvas);


//dvimatis masyvas, o jo elementai yra asociatyvus masyvai

$klientai = array();

for($i=0; $i< 10; $i++){
    //klientai masyva sitas ciklas turi pildyti visa lentyna
    //turi prideti nauja masyva i klientai masyva
    $klientas = array(
        "id" => $i+1,
        "vardas" => "vardas".($i+1), 
        "pavarde" => "pavarde".($i+1), 
        "asmens_kodas" => rand(3,6).rand(0,99).rand(1,12).rand(1,31).rand(1000,9999), //38512300000

        //atsitiktiniu budu sugeneruota data
        "prisijungimo_data" => rand(1950, 2021)."-".rand(1,12)."-".rand(1,31), 
        "adresas" => "adresas".($i+1), 
        "elpastas" => "vardas".($i+1)."pavarde".($i+1)."@pastas.lt"
    );

    //kaip dabar papildyti masyva $klientai?
    array_push($klientai, $klientas);

}

//Is sito masyvo istrinsime  3 ir 5 klientus
//Tada si masyva pasiversime i teksta
//ir po to teksta pasiversime atgal i masyva


//implode implode


for($i=0; $i < count($klientai); $i++) {
    $klientai[$i] = implode(',', $klientai[$i]);

}

unset($klientai[2]);
unset($klientai[5]);

$klientu_tekstas = implode(',', $klientai);

echo $klientu_tekstas;

$klientai = explode('|', $klientu_tekstas);

for ($i=0; $i< count($klientai); $i++) {
$klientai[$i] = explode(',', $klientai[$i]);



}
var_dump ($klientai);




?>