<?php
     $students = array(
        '"Emmanuel"'  => 42,
         '"Thierry"'  => 51,
         '"Pascal"' => 45,
        '"Eric"' => 48,
        '"Nicolas"'  => 19,
);
     $totalAge = 0;

     $totalStudents = count($students);
     echo '$students = ['.PHP_EOL;
      foreach ($students as $key => $value)
      {
        echo "$key => ".$value ."".PHP_EOL;
          $totalAge += $value;
              }
        echo '];'.PHP_EOL;

       $average = $totalAge / count($students);
        echo $average;
