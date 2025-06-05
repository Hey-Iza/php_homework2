<?php
echo "Введите первое число:\n";

do {
  $a = trim(fgets(STDIN));

  if (ctype_digit($a) === false) {  
  fwrite(STDERR, "Введите, пожалуйста, число\n");
  } 
} while (ctype_digit($a) === false);

echo "Введите второе число:\n";

do {
  $b = trim(fgets(STDIN));

  if (ctype_digit($b) === false) {  
  fwrite(STDERR, "Введите, пожалуйста, число\n");
  } 
 } while (ctype_digit($b) === false);

  if ((int)$b === 0) {

    fwrite(STDERR, "Делить на 0 нельзя. Введите число больше 0!\n");
    $b = trim(fgets(STDIN));
  }

fwrite(STDOUT, "Результат вычисления: " . $a/$b);
?>