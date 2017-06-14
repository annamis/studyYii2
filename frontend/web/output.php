<?php

// включаем буфер
ob_start();

echo 'Hello<br>';

// сохраняем всё что есть в буфере в переменную $content
$content = ob_get_contents();
// отключаем и очищаем буфер
ob_clean();

$content = strtr($content, 'o', 'O');
echo $content; //HellO

//Смысл: данные попадают в буфер, чтобы сначала модифицировать их и только потом выводить.