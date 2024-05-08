<?php
    $vinyls= [
        [
            "title"=> "New Jersey",
            "author"=> "Bon Jovi",
            "year"=> 1988,
            "poster"=> "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
            "genre"=> "Rock"
        ],
        [
            "title"=> "Live at Wembley 86",
            "author"=> "Queen",
            "year"=> 1992,
            "poster"=> "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
            "genre"=> "Pop"
        ],
        [
            "title"=> "Ten\"s Summoner\"s Tales",
            "author"=> "Sting",
            "year"=> 1993,
            "poster"=> "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
            "genre"=> "Pop"
        ],
    ];

    header('Content-type: application/json');

    $data = [
        'results' => $vinyls,
        
      ];

    echo json_encode($data);

?>