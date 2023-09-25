<?php
echo "1. Learn PHP";
echo "\n2. ???";
echo "\n3. \"Success\"";

echo "Code" . "cademy";
echo "\nMy name is:" . " " . "Adrian";
echo "\n" . "tur" . "duck" . "en";

$my_name = "Adrian Mróz";
$snake_case = true;
$_secret_number = 18 / 9;
$var = "string value";
$biography = $my_name . "\nI am Polish-American. I am learning PHP!" . "\n";
$favorite_food = "\n" . "tur" . "duck" . "en";
echo "\n" . $biography;
echo $_secret_number;

$dog_name = "Tadpole";
$favorite_food = "salmon";
$color = "brown";
echo "I have a $color dog named $dog_name and her favorite food is $favorite_food.";

$noun = "cat";
$adjective = "hungry";
$verb = "eat";
echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";
echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";

$movie = "___";
$movie = "The Pirates of the Carribean";
$old_favorite = $movie;
echo "I'm a fickle person, my favorite movie used to be $movie.";
$movie = "The Matrix";
echo "\nBut now my favorite is $movie.";
echo "\n\$old_favorite = $old_favorite";


echo "I'm going on a picnic!";
$sentence = "\nI'm going on a picnic, and I'm taking apples";
echo $sentence;

$sentence .= ", berries";
echo $sentence;

$sentence .= ", cherries";
echo $sentence;

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= ", a 6-pack of beer";

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";


echo "Hello, Learner!";

echo "\nWe hope you enjoyed this lesson.";

echo "\nAre you excited?" . "\nTo learn more?";

$favorite_language = "PHP";

$message = "$favorite_language is by far our favorite language.";

$message .= " It's yours now too, right?";

echo "\n" . $message . " Right?!";
