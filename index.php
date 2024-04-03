<?php
// 1 esercizio

//$namee = "luigi";
//echo 'ciao a tutti sono' . $namee . "\n";
//echo "e sono di Grumo";

//esercizio 2
//$text1 = "Marco";
//$text2 = "hai";
//$text3 = "sete";
//$text4 = "?";
//$text5 = "Perchè";
//$text6 = '$text2';
//$text7 = 'bevuto';
//$text8 = "tutto";

//echo "$text1 $text2 $text3 $text4 $text5 $text2 $text7 $text8";

//esercizio 3

$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
  [
    'oscura',
    'era',
    89,
    [
    'mezzo',
    [
      'cammin',
      'Nel',
      [
        'selva',
        'la',
        [
          'via',
          'una',
          true,
        ]
      ],
    ]
  ],
      'ritrovai',
      'per'
    ],
  'diritta'
  ];

  $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
      'Virgilio',
      'smarrita',
      'ché'
    ]
  ];
  

  $parola="di";
  $space=' ';
  $result = $words1 [6][3][1][1] .$space .$words1 [6][3][0] .$space .$parola .$space .$words1[6][3][1][0];
  print_r ($result);