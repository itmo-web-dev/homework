'use strict';

//Есть три вершины. 
//Координаты X, Y, Z заданы как целые числа. 
//Нужно определить - является ли треугольник с заданными координатами прямоугольным.
//В решении использовать только математические и логические операторы. 
//Результат в консоль.
//Обязательное условие: все вычисления производить только с целыми числами. 
//Любой переход в дробные числа запрещен!

//Решение задачи заключается в установлении соотношения сторон прямоугольного треугольника: сумма квадратов длин катетов равна квадрату длины гепотенузы.

//Даны три вершины треугольника

//A = (x1, y1);
//B = (x2, y2);
//C = (x3, y3);

// со сторонами a, b, c; где a = AB, b = BC, c = CA


var x1 = 2;
var y1 = 5;
var x2 = 4;
var y2 = 2;
var x3 = 2;
var y3 = 2;

var a2 = ((Math.pow((x2-x1),2)) + (Math.pow((y2-y1),2))); //квадрат длины стороны а
var b2 = ((Math.pow((x2-x3),2)) + (Math.pow((y2-y3),2))); //квадрат длины стороны b
var c2 = ((Math.pow((x3-x1),2)) + (Math.pow((y3-y1),2))); //квадрат длины стороны c

console.log(a2);
console.log(b2);
console.log(c2);


if (a2 === c2+b2 || b2 === a2+c2 || c2 === a2+b2) {
    console.log('треугольник прямоугольный')
} else {
    console.log('треугольник не прямоугольный')
}


