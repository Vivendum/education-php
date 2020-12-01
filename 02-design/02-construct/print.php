<?php
  print 'print — языковая конструкция которая выводит ОДНУ строку.' . PHP_EOL;
  print PHP_EOL;

  print 'Синтаксис конструкции: print \'текст\';' . PHP_EOL;
  print 'Синтаксис как функция: print (\'текст\');' . PHP_EOL;
  print PHP_EOL;

  print 'Хоть print и является конструкцией, но ведёт себя как функция. В том смысле, что возвращает значение, а именно еденицу (1).' . PHP_EOL;
  print PHP_EOL;

  print
'Для того что бы вывести многострочную строку
можно использовать переводы на новую строку
с помощью клавиши Enter.'
  . PHP_EOL;
  print PHP_EOL;

  print 'В текст строки можно вставлять \n или любой другой зарезервированный языком код — всё будет отображено.' . PHP_EOL;
  print 'Экранирование символов делается с помощью символа \ обратного слеша.' . PHP_EOL;
  print PHP_EOL;

  $variable_text_1 = '\'текст\'';
  $variable_text_2 = "\"текст\"";
  $variable_number_1 = 12345;
  $variable_array = array(1, 2, 3, 4, 5);

  print
"Языковая конструкция print может выводить значение переменных:
значение текстовой переменной 1 — $variable_text_1;
значение текстовой переменной 2 — $variable_text_2;
значение числовой переменной 1 — $variable_number_1;
значение переменной с массивом [1 2 3 4 5], с индексом 2 — {$variable_array[2]}.
Только код такой строки нужно оборачивать в \" двойные кавычки, иначе все символы будут отображены как текст."
  . PHP_EOL;
  print PHP_EOL;

  print 'Если не используются другие сиволы, то переменные можно выводить сразу: print $variable;' . PHP_EOL;
  print $variable_text_1 . PHP_EOL;
  print $variable_text_2 . PHP_EOL;
  print $variable_number_1 . PHP_EOL;
  print $variable_array[2] . PHP_EOL;
?>
