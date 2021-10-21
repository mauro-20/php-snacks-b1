<?php

function averageGrades($grades)
{
  $sum = 0;
  foreach ($grades as $grade) {
    $sum += $grade;
  };
  return round($sum / count($grades), 2);
}

