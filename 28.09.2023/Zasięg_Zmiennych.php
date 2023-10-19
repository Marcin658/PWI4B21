<?php
$variable = 'aaaaa';

echo $variable . "<br />";

$variable = 'bbb';

echo $variable . "<br />";

function a(){
    $variable = 'ccc';
}
a();

echo $variable . "<br />";

function b(){
    global $variable;
    $variable = 'ddd';
}
b();

echo $variable . "<br />";

function c() {
    global $new;
    $new = 'juhsdfcgb';
}
c();

global $new;

echo $new . "<br />";

include './cw2.php';

global $othervariable;

echo $othervariable . "<br />";

d();

$a = 5;

echo $a . "<br />";

function e($a){
    $a = 10;
}

e($a);

echo $a . "<br />";

function f(&$a){
    $a = 10;
}

f($a);

echo $a . "<br />";