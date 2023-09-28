<?php
// rodzaje tablic

//tablica

$arr1 = [1,2,3,4,5,6];

var_dump($arr1);

echo "<br />";

//tabnlice asocjacyjne

$arr2 = [
    'k1' => 'v1',
    'k2' => 'v2',
    'papież' => 'kremówka',
    69 => 420,
    'jp2' => 2137
];

var_dump($arr2);

echo "<br />";

//tablica tablic

$arr3 = [
    [1,2,3,4,5,6],
    [7,8,9,0]
];

var_dump($arr3);

echo "<br />";

//tablica z for

echo "<ul>";

for($i = 0; $i < count($arr1); $i++){
    echo "<li>{$arr1[$i]}</li>";
}

echo "</ul>";

echo "<br />";

// tablica foreach

echo "<ul>";

foreach($arr1 as $item){
    echo "<li>{$item}</li>";
}

echo "</ul>";

echo "<br />";

echo "<ul>";

foreach($arr2 as $key => $item){
    echo "<li>{$key} => {$item}</li>";
}

echo "</ul>";

echo "<br />";