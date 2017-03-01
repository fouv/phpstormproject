<?php
     $students = array(
        '"Emmanuel"'  => array(42),
         '"Thierry"'  => array(51),
         '"Pascal"' => array(45),
        '"Eric"' => array(48),
        '"Nicolas"'  => array(19),
);
     echo '$students = ['.PHP_EOL;
  foreach ($students as $key => $favorite) {
      echo "$key => ";
      foreach ($favorite as $content) {
          echo $content . "";
      }
      echo PHP_EOL;
  }
  echo '];'.PHP_EOL;
  $moyAge = (42 + 51 + 45 + 48 + 19)/5;
    echo "Moyenne des ages : ".$moyAge;