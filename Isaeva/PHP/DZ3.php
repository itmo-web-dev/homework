<?php
//<!--
//Задача 1
////Дана радиокнопка
//$radio_but = "<input type='radio' name='php' ";
//echo $radio_but ."><br>"; // неактивная радиокнопка
////напишите функцию make_checked, которая сделает радиокнопку активной (атрибут checked)
//make_checked($radio_but); // вызов функции
//echo $radio_but ."><br>"; // активная радиокнопка-->

//При подаче в функцию в качестве аргумента '' -  кнопка не прочекана, при подаче checked - прочекана

function make_checked($a) {

$radio_but = "<input type='radio' name='php' $a>";

echo $radio_but." <br>" ;
} 

make_checked(checked);


//Задача 4
//Написать функцию - конвертер строки. 
//Возможности:
//перевод всех символов в верхний регистр,
//перевод всех символов в нижний регистр,
//перевод всех символов в нижний регистр и первых символов слов в верхний регистр.
//Это должна быть одна функция

//$stroka = '';

function converter($stroka) {
	$nizn = strtolower($stroka);
	echo $nizn." <br>";
	echo strtoupper($stroka)." <br>";
	echo ucwords($nizn)." <br>";
	
}
 converter ('let mE iNtroduce mYsElf');

//Задача 5
//Используя функцию удаления HTML и PHP-тегов из строки, выведите на экран строку «<h1>Hello, world!</h1>». 
//Строка не должна выглядеть как заголовок первого уровня – все теги должны быть удалены.

$str = '<h1>Hello, world!</h1>';
$newstr = strip_tags ($str);
echo $str;
echo ($newstr)." <br>";

//Задача 7
//В переменной $date лежит дата в формате '30-11-2017'. Преобразуйте эту дату в формат '2017.11.30'.


$date = '30-11-2017';
$date1 = date("Y.m.d", strtotime($date));
echo ($date1)." <br>";
//$date2 = date_create_from_format('j.M.Y', '$date1');
//echo $date2;
//echo date_format($date2, 'Y-m-d');


//Задача 9
//Дана строка 'просто строка.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim


$prosto = 'просто строка';
$prostonull = rtrim($prosto, ".").".";
echo ($prostonull)." <br>";


//Задача 10
//Написать функцию, которая выводит количество дней, оставшихся до нового года.
//Функция должна корректно работать при запуске в любом году.
	
//$today = date(d.m.Y);
//echo $today;

function zhdem_NG() {
	if (date(L)==1) {
		$day_NG = 366 - date(z);
	}
		$day_NG = 365 - date(z);
	echo $day_NG." <br>";
	}
zhdem_NG();

//Задача 2
//создать функцию с аргументом для вывода приветствия (Например, "Здравствуйте, ИМЯ"). 
//Установить значение по умолчанию для аргумента равное «Гость»

function privet($name='Гость') {
	echo "Здравствуйте, "."$name"." <br>";
}
privet();

//Задача 3
//Допустим, пользователь вводит названия городов через пробел. Вы их присваиваете переменной.
//Переставьте названия так, чтобы названия были упорядочены по алфавиту.

$gorod1 = 'Казань';
$gorod2 = 'Москва';
$gorod3 = 'Архангельск';

$mass = array();
array_push($mass, $gorod1, $gorod2, $gorod3);
asort($mass);
foreach ($mass as $value) {
	echo $value." <br>";
}