<?php
$status = array(
    'NUNCA',
    'ONLINE',
    'ALERTA',
    'OFFLINE',
    'ASSISTENCIA',
    'VISITA',
);

$grupos = array(
    'AREZZO',
    'PETROBRAS',
    'TELA_VERTICAL',
    'TELA_HORIZONTAL',
    'PAINEIS_LED',
    'PAINEIS_LED_VERTICAL',
    'PAINEIS_LED_HORIZONTAL',
);

$names = array(
    'Christopher',
    'Ryan',
    'Ethan',
    'John',
    'Zoey',
    'Sarah',
    'Michelle',
    'Samantha',
    'Walker',
    'Thompson',
    'Anderson',
    'Johnson',
    'Tremblay',
    'Peltier',
    'Cunningham',
    'Simpson',
    'Mercado',
    'Sellers'
);


echo '[';

for ($i=0;$i<=200;$i++) {
    $valor_grupo = rand(0,6);
    $valor_status = rand(0,5);
    echo 
    '{
        "id": '.$i.',
        "name": "'.$names[rand(0,17)].'",
        "group": {
            "id": '.($valor_grupo+1).',
            "name": "'.$grupos[$valor_grupo].'"
        },
        "playerStatus": {
            "id": '.($valor_status+1).',
            "name": "'.$status[$valor_status].'",
            "time": 9999999
        },
        "lastContactInMinutes": 100835,
        "geocode": {
            "lat":  '.rand(-5.9008206,-20.9008206).',
            "lng":  '.rand(-40.9274705,-60.9274705).'
        },
        "address": {
            "street": "Rua Itajubá",
            "number": "1851",
            "city": "Belo Horizonte",
            "state": "MG",
            "postalCode": "31030-430",
            "country": "Brazil",
            "complement": "Atrás da Concessionária da Chevrolet"
        },            
        "contents": {
            "total": '.rand(30,40).',
            "downloaded": '.rand(1,30).'
        }
    }';
    if($i<200){
        echo ",";
    }
};
echo ']';
?>