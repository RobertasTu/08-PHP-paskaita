<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3ia-Uzduotis</title>
</head>
<body>

    <!-- 3. Susikurti asociatyvų masyvą "Klientai".
Kintamieji:
vardas
pavarde
asmens kodas
prisijungimo data
adresas
elpastas.

Masyve turi būti 200 klientų. Duomenis užpildyti savo nuožiūrą.
Visą "Klientai" objektų masyvą atvaizduoti lentelėje <table>.
Visas klientų masyvas saugomas COOKIE.


Papildomai: Sukurti galimybę pridėti klientą į masyvą bei ištrinti. -->

<?php 


$klientuMasyvas = array (
            $klientas = array ('Vardas', 'Pavarde', 'asmensKodas', 'prisijungData', 'adresas', 'elPastas'));

            var_dump($klientuMasyvas);

            for($i=0; $i < 200; $i++) {
                'vardas' => 'Vardas'.$i+1,
                'pavarde' => 'Pavarde'.$i+1,
                'asmensKodas' => 'asmensKodas'.$i+1,
                'prisijungData' => 'prisijungData'.$i+1,
                'adresas' => 'adresas'.$i+1,
                'elPastas' => 'elPastas'.$i+1.'gmail.com',

            }
            
            array_push($klientuMasyvas, 'Klientas'.$klientas[$i]);


        
        // }

       



                // $klientas = $i + 1;
                // for($j=0; $j < $klientas; $j++) {
                //     'vardas' => 'vardas'.$j+1,
                //     'pavarde' => 'Pavarde'.$j+1,
                //     'aKodas' => '123456789'.$j+1,
                //     'prisijungData' => 'Data'.$j+1,
                //     'adresas' => 'Adresas'.$j+1,
                //     'elPastas' => 'ElPastas'.$j+1,
                //  }

                //  array_push($klientas, $j);

            // $klientuMasyvas['Klientas'.($i+1)] = 'Klientas'.($i + 1 );

        // foreach($klientas as $elementas) {
        //     echo $elementas;
        //     echo '<br>';
        // }

      


    

    // $klientas = array('vardas', 'pavarde', 'asmensKodas', 'prisijungData', 'adresas', 'elPastas')
   



?>


    
</body>
</html>