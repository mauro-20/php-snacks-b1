<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$students = [
  [
    'firstName' => 'Italo',
    'lastName' => 'Guerriero',
    'grades' => [3, 4, 2, 5, 6, 5]
  ],
  [
    'firstName' => 'Roberto',
    'lastName' => 'Baggio',
    'grades' => [7, 6, 8, 5, 6, 5]
  ],
  [
    'firstName' => 'Giuseppe',
    'lastName' => 'Garibaldi',
    'grades' => [6, 9, 4, 5, 4, 5]
  ],
  [
    'firstName' => 'Gianni',
    'lastName' => 'Morandi',
    'grades' => [5, 6, 5, 8, 9]
  ],
  [
    'firstName' => 'Daniele',
    'lastName' => 'Bossari',
    'grades' => [3, 4, 7, 8, 6, 5]
  ],
  [
    'firstName' => 'Penelope',
    'lastName' => 'Cruz',
    'grades' => [7, 9, 6, 8, 4, 6]
  ],
];

function averageGrades ($grades) {
  $sum = 0;
  foreach($grades as $grade) {
    $sum += $grade;
  };
  $average = $sum / count($grades);
  return $average;
}

foreach($students as $student) {
  echo "{$student['firstName']}". " ";
  echo "{$student['lastName']}" . " ";
  $average = averageGrades($student['grades']);
  echo "{$average}" ."<br>";
}

?>