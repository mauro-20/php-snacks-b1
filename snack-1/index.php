<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

  $round4 = [
    [
      'homeTeam' => 'Olimpia Milano',
      'awayTeam' => 'Reyer Venezia',
      'homeTeamScore' => 93,
      'awayTeamScore' => 68
    ],
    [
      'homeTeam' => 'Pallacanestro Brescia',
      'awayTeam' => 'GeVi Napoli',
      'homeTeamScore' => 98,
      'awayTeamScore' => 88
    ],
    [
      'homeTeam' => 'Treviso Basket',
      'awayTeam' => 'Dinamo Sassari',
      'homeTeamScore' => 64,
      'awayTeamScore' => 71
    ],
    [
      'homeTeam' => 'Virtus Bologna',
      'awayTeam' => 'Pallacanestro Trieste',
      'homeTeamScore' => 94,
      'awayTeamScore' => 79
    ],
    [
      'homeTeam' => 'VL Pesaro',
      'awayTeam' => 'Derthona Basket',
      'homeTeamScore' => 81,
      'awayTeamScore' => 90
    ],
  ];

  for ($i=0; $i<count($round4); $i++) {
    echo "{$round4[$i]['homeTeam']} - {$round4[$i]['awayTeam']} | {$round4[$i]['homeTeamScore']}-{$round4[$i]['awayTeamScore']}" . "<br>";
  }

?>
