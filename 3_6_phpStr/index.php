<?php
// 1. Конкатенация строк:
// Объявите две строки, объедините их в одну.
// Подсказка: используйте оператор  .  для объединения переменных.
$hello = "Привет ";
$world = "Мир!";
$helloWorld = $hello . $world;
echo $helloWorld . "\n";

// 2. Изменение регистра:
// Преобразуйте строку в нижний и верхний регистры.
// Подсказка: используйте  strtoupper()  и  strtolower() .
$helloUp = mb_strtoupper($hello);
$worldlow = mb_strtolower($world);

echo $helloUp . $worldlow . "\n";

// 3. Сравнение строк:
// Сравните две строки, учитывая и не учитывая регистр.
// Подсказка: попробуйте операторы  == ,  ===  и функцию  strcasecmp() .
var_dump($hello == $helloUp);
var_dump($world === $worldlow);
var_dump(strcasecmp($helloWorld, $helloUp . $worldlow));

// 4. Поиск подстроки:
// Найдите позицию подстроки в строке.
// Подсказка: используйте функцию  strpos() .
$pos = strpos($helloWorld, "Мир");
echo $pos . "\n";

// 5. Замена подстроки:
// Замените одно слово в строке на другое.
// Подсказка: используйте  str_replace() .
$newHollo = str_replace("Мир", "всем", $helloWorld);
echo $newHollo . "\n";

// 6. Форматирование строки:
// Отформатируйте строку с использованием переменных.
// Подсказка: используйте функцию  sprintf()  с нужными спецификаторами.
$animal = "Кошки";
$speed = 50;
echo sprintf("Скорость %s достигает %d км/ч.", $animal, $speed) . "\n";

// 7. Разделение строки:
// Разделите строку по разделителю и объедините её обратно.
// Подсказка: используйте  explode()  и  implode() .
$string = "Понедельник вторник Среда четверг пятница Суббота воскресенье";
$weekday = explode(" ", $string);
print_r($weekday);

$string = implode(", ", $weekday);
echo $string . "\n";

// 8. Работа с многострочным текстом:
// Преобразуйте многострочный текст в HTML-разметку с  <br> .
// Подсказка: используйте  nl2br() .
echo nl2br("Это строка 1 \n А это уже строка 2") . "\n";

// 2.1. Сложная конкатенация строк:
// Объедините несколько строк и добавьте в них переменные в одном
// выражении.
// Подсказка: используйте оператор  .  для объединения строк с динамическими
// данными.
echo 'Я использую переменную $hello ' . "и интерпритирую из нее слово $hello" . "\n";

// 2.2. Изменение регистра с условиями:
// Преобразуйте строку так, чтобы каждое слово начиналось с заглавной
// буквы.
// Подсказка: используйте функции  ucwords()  и  strtolower() .
$stringUc = mb_convert_case(mb_strtolower($string), MB_CASE_TITLE, "UTF-8");
echo  $stringUc . "\n";

// 2.4. Замена подстроки с использованием массива:
// Замените несколько слов в строке одновременно, используя массивы для
// поиска и замены.
// Подсказка: примените  str_replace() , передавая массивы.
$search = ["Суббота", "Воскресенье"];
$replace = ["Выходной-1", "Выходной-2"];
echo str_replace($search, $replace, $stringUc) . "\n";

// 2.6. Разделение и объединение сложной строки:
// Разделите строку с числовыми значениями по разделителю, суммируйте
// элементы и выведите результат.
// Подсказка: используйте  explode()  и  array_sum() .
$strNum = "1,3,5,7,9";
echo array_sum(explode(",",$strNum)) . "\n";

// 2.7. Создание случайной строки:
// Напишите функцию, которая генерирует случайную строку из букв и цифр.
// Подсказка: используйте массив символов и функцию  rand() .
function gen_str()
{
	$str = '';
	$arr = ['a', 'b', 'c', 'd', 'e', '1', '2', '3', '4', '5'];
 
	for ($i = 0; $i < count($arr); $i++) {
		$str .= $arr[rand(0, count($arr) - 1)];
	}
	return $str;
}
 
echo gen_str() . "\n";

// 2.8. Проверка строки на палиндром:
// Напишите функцию, которая проверяет, является ли строка палиндромом.
// Подсказка: используйте  strrev()  для переворота строки.
function isPolindrome ($str){
    $strRev = strrev($str);
    if ($strRev == $str) {
        echo "Строка $str полиндром \n";
    } else {
        echo "Строка $str не полиндром \n";
    }

}

isPolindrome("level");







