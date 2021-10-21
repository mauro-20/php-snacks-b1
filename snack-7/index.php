<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

foreach ($students as $student) {
  echo "{$student['firstName']} {$student['lastName']} ";
  $average = averageGrades($student['grades']);
  echo "{$average}" . "<br>";
}

?>