<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

$db = [
  'teachers' => [
    [
      'name' => 'Michele',
      'lastname' => 'Papagni'
    ],
    [
      'name' => 'Fabio',
      'lastname' => 'Forghieri'
    ]
  ],
  'pm' => [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini'
    ],
    [
      'name' => 'Federico',
      'lastname' => 'Pellegrini'
    ]
  ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snack 6</title>
  <style>
    .teachers {
      display: inline-block;
      padding: 30px;
      background-color: gray;
    }
    .pm {
      display: inline-block;
      padding: 30px;
      background-color: green;
    }
  </style>
</head>

<body>
  <div class="teachers">
    <ul>
      <?php foreach ($db['teachers'] as $teacher) : ?>
        <li>
          <?= "{$teacher['name']}  {$teacher['lastname']}" ?>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
  <div class="pm">
    <ul>
      <?php foreach ($db['pm'] as $person) : ?>
        <li>
          <?= "{$person['name']}  {$person['lastname']}" ?>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</body>

</html>