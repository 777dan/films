<?php
$films = [
    "Фантомас" => ["Юнебель", 1964],
    "Пятый элемент" => ["Бессон", 1997],
    "Маска" => ["Рассел", 1994],
    "Титаник" => ["Кэмерон", 1997],
    "Операция \"Ы\"" => ["Гайдай", 1965]
];
//СОРТИРОВКА ПО ФАМИЛИИ РЕЖИССЁРОВ
// function sort($a, $b)
// {
//     return ($a[0] <=> $b[0]);
// }
// uasort($films, "sortName");

//СОРТИРОВКА ПО ГОДУ ВЫПУСКА 
// function sort($a, $b)
// {
//     return ($a[1] <=> $b[1]);
// }
// uasort($films, "sortName");

//СОРТИРОВКА ПО НАЗВАНИЮ
ksort($films);
function output($value,$key){
echo "<p style='font-size:20px;margin:0;color:red;'>Режиссёр фильма <span style='color:green;font-family:Impact;'>\"$key\"</span>: <span style='font-family:segoe print;'>$value[0]</span>. Год выпуска: $value[1].</p><br>";
}
array_walk($films, "output");
