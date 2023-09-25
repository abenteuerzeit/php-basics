<?php
function greetLearner()
{
  echo "Hello, Learner!\n";
  echo "I hope you're enjoying PHP!\n";
  echo "Love, Codecademy";
}
greetLearner(); 

function announceRunning()
{
  echo "The first function is running!\n";
  return "This is the return value of the first function.";
}

$first_result = announceRunning();
echo $first_result;

function first()
{
  return "You did it!\n";
}

function second()
{
  return "You're amazing!\n";
}

function third()
{
  return "You're a coding hero!\n";
}

echo first() . second() . third();


function increaseEnthusiasm($string) 
{
  return $string . "!";
}

echo increaseEnthusiasm("Wow");

function repeatThreeTimes($string) 
{
  return $string . $string . $string;
}

echo repeatThreeTimes("/\\_");
echo increaseEnthusiasm(repeatThreeTimes("Haha"));

function greetFriend($name = "old chum")
{
  echo "Hello, $name!";
};

function printLine($input = "")
{
  echo $input . "\n";
}


function calculateTip($totalCost, $percentTip = 20)
{
  $tip = ($percentTip / 100) * $totalCost;
  return $totalCost + $tip;
}

printLine(calculateTip(100, 25));
printLine(calculateTip(100));
printLine();
printLine(calculateTip(65, 15));
function addXPermanently (&$param)
{
  $param = $param . "X";
  echo $param;
};
$word = "Hello";
addXPermanently($word);
echo $word;



$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

function convertToQuestion(&$reference_str)
{
  $reference_str = "Do you think " . $reference_str . "?\n";
}

convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);

echo $string_one;
echo $string_two;
echo $string_three;

$language = "PHP";
$topic = "scope";

function generateLessonName($concept)
{
  global $language;
  return $language . ": " . $concept;
}

echo generateLessonName($topic);


echo strrev(".pu ti peeK .taerg gniod er'uoY");
echo strtolower("SOON, tHiS WILL Look NoRmAL.");
echo str_repeat("\nThere's no place like home.\n", 3);

$essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different though.";
  
$essay_two = "Obviously this is a really good book. You obviously would not have made us read it if it wasn't. I felt like the ending was too obvious though. It was so obvious who did it right away. I think the thing with the light was obviously a metaphor for life. It would have been better if the characters were less obvious about their secrets.";  

echo substr_count($essay_one, "really") . "\n";
echo substr_count($essay_two, "obvious");


function calculateDistance($x, $y) 
{
  return abs($x - $y);
}

function calculateTipFloat($total_cost, $tip = 0.18)
{
  return round($total_cost + ($total_cost * $tip));
}
$max = getrandmax(); 

echo $max;

echo rand();
echo rand(1, 52);

$a = 29;
$b = "You did it!";
$c = STR_PAD_BOTH;
$d = "*~*";
echo str_pad($b, $a,  $d, STR_PAD_BOTH);

function convertToShout($string)
{
  return strtoupper($string) . "!";
}

echo convertToShout("woah there, buddy");
echo "\n";
echo convertToShout("i just don't know");
echo "\n";
echo convertToShout("oh, ok, that's fine");
echo "\n";
echo convertToShout("it's nice to meet you");
echo "\n";

function tipGenerously($cost, $tip = 0.20)
{
  return ceil($cost + $cost * $tip);
}

echo tipGenerously(100.00);
echo "\n";
echo tipGenerously(982.27);
echo "\n";
echo tipGenerously(15.67);
echo "\n";
echo tipGenerously(66.18);
echo "\n";
echo tipGenerously(21.65);
echo "\n";

function calculateCircleArea($d)
{
  return ($d/2)**2 * pi(); // M_PI * 
}

echo calculateCircleArea(25);
echo "\n";
echo calculateCircleArea(30);
echo "\n";
echo calculateCircleArea(872);
echo "\n";
echo calculateCircleArea(6);
echo "\n";
echo calculateCircleArea(29);