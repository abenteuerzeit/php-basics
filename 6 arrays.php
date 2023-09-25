<?php
// Using array() to construct an array:
$prime_numbers = array(2, 3, 5, 7, 11, 13, 17);  
  
// Using short array syntax:
$animals = ["dog", "cat", "turtle", "cow"];  

// Printing with print_r():
print_r($prime_numbers);

echo "\n\n";

// Printing with echo and implode()
echo implode(", ", $animals);

// Adding an element with square brackets:
$prime_numbers[] = 19;

// Accessing an array element:
$favorite_animal = $animals[0];
echo "\nMy favorite animal: " . $favorite_animal;

// Reassigning an element:
$animals[1] = "tiger";

// Using array_pop():
echo "\nBefore pop: " . implode(", ", $animals);
array_pop($animals);
echo "\nAfter pop: " . implode(", ", $animals);

// Using array_push():
echo "\nBefore push: " . implode(", ", $prime_numbers);
array_push($prime_numbers, 23, 29, 31, 37, 41);
echo "\nAfter push: " . implode(", ", $prime_numbers);

//Using array_shift():
echo "\nBefore shift: " . implode(", ", $animals);
array_shift($animals);
echo "\nAfter shift: " . implode(", ", $animals);

//Using array_unshift():
echo "\nBefore unshift: " . implode(", ", $animals);
array_unshift($animals, "horse", "zebra", "lizard");
echo "\nAfter unshift: " . implode(", ", $animals);

//Using chained operations with nested arrays:
$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];

echo "\nWe found " . $treasure_hunt[3][4][2][0];

$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];

$doge_meme["new value"] = "Woah I'm new";

echo "\n" . $doge_meme["new value"];

array_push($doge_meme, "just an example");

echo "\n" . $doge_meme[0] . "\n";

unset($doge_meme[0]);
unset($doge_meme["new value"]);

$doge_meme["description"] = "A wonderful dog picture with a brand new description.";

function createMeme ($meme) 
{
  $meme["top_text"] = "Much PHP";
  $meme["bottom_text"] = "Very programming. Wow.";
  return $meme;
}  

$php_doge = createMeme($doge_meme);

print_r($doge_meme);

print_r($php_doge);

function fixMeme (&$meme) 
{
  $meme["top_text"] = "I can haz";
  $meme["bottom_text"] = "PHP, plz?";
} 

$lame_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "An very fat cat looks happy."];

print_r($lame_meme);

fixMeme ($lame_meme);

print_r($lame_meme);

$nested_arr = [ [1, 2, 3], [4, 5, 6], [7, 8, 9] ];
$num = 2;
echo $nested_arr[$num - 1][$num * 0];
$nested_arr = [ 1, 2, [3, 4 , 5, [5, 6], 7], [ [8, [9, 10, 11, [12, 13] ], [14], [15, [16, 17, 18], 19 ] ] ] ];
echo $nested_arr[3][0][1][1];

$arr = ["breakfast" => "eggs", "lunch" => "eggs", "dinner" => "eggs", "dessert" => "cadbury cream eggs"]; 

$arr["brunch"] = 0; 

unset($arr["lunch"]);

unset($arr["brunch"]); 

array_push($arr, "I’m full"); 

unset($arr["dinner"]);

echo count($arr);


$arr = ["hello", "there"]; 
$arr["young"] = "wizard"; 
$arr[] = ["you", "have"]; 
$arr[0] = "careful"; 
$arr[4] = "power"; 
$arr[3] = "terrifying"; 
$arr[] = "!";

print_r($arr);
$a1 = ["Alex" => "Sara", "Sara" => "Kat", "Kat" => "Toshi", "Dan" => "Dan"];
$a2 = ["Dan", "Kat", "Sara", "Alex", "Toshi"];
echo $a1[$a2[1]];

$a1 = ["frog" => "toad", "oats" => "chaf", "bull" => "cow", "dog" => "bone", "north" => "south"];

$a2=["bull" => "row", "dog" => "phone", "syrup" => "wig"];

$a3 = $a1 + $a2;

$arr = $a3 + ["north" => "mouth", "bread" => "head"];

print_r($arr);

function f1(&$array_param)
{
  $array_param["a"] = "changed";
}

function f2($array_param)
{
  $return_arr = f1($array_param);
  return $return_arr;
}

$arr1 = ["a" => "Tadpole"];
$arr2 = ["a" => "Lily"];

$run1 = f1($arr1);
$run2 = f2($arr2);

echo $arr1["a"] . " " . $arr2["a"];