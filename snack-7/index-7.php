<?php


$alunni=[
    [
        'nome'=>'Sabrina',
        'cognome'=>'Rossi',
        'voti'=>[5,7,8]
        
    ],
    [
        'nome'=>'Giada',
        'cognome'=>'Bianchi',
        'voti'=>[7,9,8]
    ],
    [
        'nome'=>'Ugo',
        'cognome'=>'Verdi',
        'voti'=>[5,2,4]
    ],
];
for ($i=0;$i<count($alunni);$i++){
    $alunno = $alunni [$i];
    $somma=0;
    $voti = $alunno["voti"];
    for ($j=0;$j<count($alunno)["$voti"];$j++){
        $somma += $voti[$j];
    }

    $media = $somma / count($voti);

    echo $alunno["nome"] . ' ' . $alunno["cognome"] . ' ' . $media . '<br>';
}

?>

