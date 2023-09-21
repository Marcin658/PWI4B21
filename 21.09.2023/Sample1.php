<?php
// typy zmienne w PHP
// typ integer - definiujemy znakiem $
$i1 = 69; // decimal
$i2 = 0x45; // Hexa
$i3 = 0105; // oct
$i4 = 0b1000101; // 

echo "Decimal: " . $i1 . "<br />";
echo "Hexa: " . $i2 . "<br />";
echo "Oct: " . $i3 . "<br />";
echo "Binary: " . $i4 . "<br />";

// typ boolean

$b1 = true;
$b2 = false;

// float

$f1 = 3.14;

// typ string

$s1 = 'Sample 1';
$s2 = "Sample 2";

// herdoc
$s3 = <<<s3
    Sample 3
s3;

// nowdoc
$s4 = <<<'s4'
    sample 4
s4;

// typ NULL

$n1 = null;
$n2 = NULL;


// typ tablicowy

$arr1 = [

    'dgdsgsdksjiubfhdliuherdfuibvxcfkjdshvbdjkfjbdfghdfjkbnfd;jg',
    323,
    3.14
];

$arr2 = array('hnsdsh', 133 ,3.14);

// tablica asocjacyjna

$assoc = [
    'key1' => 98457,
    'k2' => "sddfs",
    3 => 3.14
];

// tablice tablic

$arrofArr = [
    [
        'fsdfd',
        2,
        4.65
    ],
    [
        5334,
        4234
    ]

];

// typ obiektowy

$o1 = new stdClass();
$o1 ->attr1 = 1233;

// funkcje

function f1() {
    echo 'Hello';
}
f1();

function f2(): void{
    echo 'world';
}
f2();

function f4(int $a1, int $a2): void {
    echo $a1 + $a2;
}

function f5() {
    return 'Hello World';
}

echo f5();


function f6(): string {
    return 'Hello World';
}
