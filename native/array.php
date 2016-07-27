<?php




$number = [[1,2,3],[1,10,[1,'k']]];

echo  $number[1][1]; // 10

/*  คอมเม้น  */
echo "<hr>";
echo $number[1][2][1]; //k

echo "<hr>";
echo "<pre>";
print_r($number); // แสดงทุก member
echo "</pre>";

echo "<hr>";

$people = [
    'Mr.A'=>35,
    'Mr.B'=>40,
    'Ms.C'=>23
];

echo "<pre>";
print_r($people);
echo "</pre>";

echo "<hr>";
echo $people['Mr.B'];


