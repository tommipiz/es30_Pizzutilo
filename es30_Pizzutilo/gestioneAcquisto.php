<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione acquisto</title>
</head>
<body>
<?php
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $codice_fiscale = $_POST['codice_fiscale'];
    $settore = $_POST['settore'];
    $codice_sconto = $_POST['codice_sconto'];
    $tipo_biglietto = $_POST['tipo_biglietto'];


    $prezzi = [
        'curva' => 30,
        'tribuna_centrale' => 80,
        'tribuna_donore' => 120
    ];


    $totale = $prezzi[$settore];

 
    $sconto = 0;
    if ($codice_sconto === 'FIRENZE5') {
        $sconto = $totale * 0.05;
        $totale -= $sconto;
    } elseif ($codice_sconto !== '') {
        $errore_sconto = "Codice inesistente";
    }

   
    $biglietti_aggiuntivi = [];
    if ($tipo_biglietto == 'multiplo') {
        $num_biglietti = $_POST['num_biglietti_agg'];
        for ($i = 1; $i <= $num_biglietti; $i++) {
            if (isset($_POST["agg$i"])) {
                $biglietti_aggiuntivi[] = $_POST["agg$i"];
            }
        }
    }


    echo "<h1>Dettaglio Acquisto</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Cognome:</strong> $cognome</p>";
    echo "<p><strong>Codice Fiscale:</strong> $cod";

    ?>
    
</body>
</html>