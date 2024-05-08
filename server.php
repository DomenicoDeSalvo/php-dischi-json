<?php
    //Ottenre stringa da file json
    $data_string = file_get_contents('vinyls.json');
    //Trasformare stringa in array associativo
    $vinyls = json_decode($data_string, true);

    header('Content-type: application/json');

    $data = [
        'results' => $vinyls,
        'success' => true
      ];

    echo json_encode($data);

?>