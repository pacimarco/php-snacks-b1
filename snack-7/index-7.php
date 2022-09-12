<?php


$alunni=[
    [
        'nome'=>'Sabrina',
        'cognome'=>'Rossi',
        'voto_1'=>'8',
        'voto_2'=>'5',
        'voto_3'=>'7',
    ],
    [
        'nome'=>'Giada',
        'cognome'=>'Bianchi',
        'voto_1'=>'6',
        'voto_2'=>'4',
        'voto_3'=>'6',
    ],
    [
        'nome'=>'Ugo',
        'cognome'=>'Verdi',
        'voto_1'=>'9',
        'voto_2'=>'5',
        'voto_3'=>'9',
    ],
];
function mediaVoto($alunni){
    return (($alunni[$i]['voto_1'] + $alunni['voto_2'] + $alunni['voto_3'])/3);
}
for($i=0;count($alunni);$i++){
$datiAlunno = $alunni[$i];

    echo($alunni[$i]['nome'] . " " . $alunni[$i]['cognome'] . " " . mediaVoto($alunni));
}

?>

