<?php

$start = "learnig ";
echo htmlentities($start), "<br>";
$start_link = "<a href = learn.com> click here to learn </a>";
echo html_entity_decode($start_link), "<br>";
echo str_repeat($start,5), "<br>";
var_dump(empty($start));
echo "<br>";
var_dump(isset($start));

echo "<br>";
echo "email and picture file validation :";
echo "<br>";

function email_and_pic_validation ($m, $p){

    $mail = str_split($m);
    $img = explode(".", $p);


    if (in_array("@", $mail))
    {
        if(end($img) == "png")
        {
            echo "your infromation is correct !";
        }
        else echo "your picture must be in .png format";

    } else 
        echo "invalid mail address";
    }

email_and_pic_validation("hellow@", "dkjfk.png");
echo "<br>";
email_and_pic_validation("hellow@", "dkjfk.jpg");
echo "<br>";
email_and_pic_validation("hellow", "dkjfk.jpg");
echo "<br>";

$info_count = count([0, 1, 2 , 3]);
printf("your given information was %s charecter long.",$info_count);
echo "<br>";
echo "example of array_diff :" , "<br>";

$arr = [1, 2, 3, 4];
$arr2 = [1, 2, 3, 40];

var_dump(array_diff($arr, $arr2));


echo "<br>";
echo "example of array_pop :" , "<br>";
$basket = [
    "book",
    "pen",
    "newspaper"
];
echo "<pre>";
var_dump(array_pop($basket));
echo "<br>";
var_dump($basket);


echo "<br>";
echo "example of array_shift :" , "<br>";

var_dump(array_shift($basket));
var_dump($basket);

echo "<br>";
echo "example of array_push :" , "<br>";

var_dump(array_push($basket, "ball"));
var_dump($basket);

echo "<br>";
echo "example of array_unshift :" , "<br>";

var_dump(array_unshift($basket, "diary"));
var_dump($basket);

echo "<br>";
echo "example of array_reverse :" , "<br>";


var_dump(array_reverse($basket));
var_dump($basket);

echo "<pre>";


