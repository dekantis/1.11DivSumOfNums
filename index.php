<?php

/* Задача: Напечатать   те   элементы   последовательности
    натуральных   чисел n0 ,n1,...,nm , которые делятся на сумму своих цифр.
*/

//Функция, суммирующая цифры в числе
function SumOfNumbs(int $numb) : int
{
    return $numb = $numb>9 ? $numb%10 + SumOfNumbs($numb/10) : $numb;

}
$n=23; // Число последовательности

//перебор чисел
for ($i=1; $i<=$n;$i++) {
    if ($i % SumOfNumbs($i)==0){
        echo $i."\n";
    }
}

