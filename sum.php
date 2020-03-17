
//課題１

<?php

$sum1 = 10;

$sum2 = ($sum1) *2;

echo $sum2;

?>

 
//課題２ 

<?php

$a = 10;
$b = 8;

function plus ($a , $b){
    $sum = $a + $b;
    return $sum;
}

$sum =plus($a ,$b );

echo "結果".$sum."です";

?>


//課題３ 

<?php

$arr = array(1, 3, 5, 7, 9);

echo array_product( $arr);

?>

//課題４

<?php

$arr = [0, 1, 2, 3, 4, 5];

function max_array($arr) {
    
    $max_number = $arr[0];
    foreach ($arr as $a){
        if($max_number < $a)
        $max_number = $a;
    }
    return $max_number;
}

echo max_array($arr);

?>


//課題５

//strip_tags
<?php
$text = '<p>Text paragraph.</p><! --Comment -- ><a href ="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

echo strip_tags($text, '<p><a>');
?>


//array_push
<?php
$stack = array("orange", "banana");
array_push ($stack, "apple", "raspberry");
print_r($stack);
?>


//array_merge
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color"=> "green", "shape" => "trapezoid" , 4);
$result = array_merge($array1, $array2);
print_r($result);
?>


//time, mktime
<?php
date_default_timezone_set('UTC');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo date('c', mktime(20, 26, 3, 3, 17, 2020));
?>


//data
<?php
echo date(DATE_RFC2822);
echo "\n";
?>

