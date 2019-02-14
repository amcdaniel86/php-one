<!-- to write in php, you must surround the code in php tags -->
<!-- can wrap the php code in html tags, like <h1> <p> etc, it'll alter the code accordingly. -->


<?php
// Comments
  // Single line comment
  # single line comment
  /*
    multi
    line
    comment
  */


// Variables (basically a container) (also, they can vary, literally. why variable)
  /* Rules
    - Prefix $ everytime or it'll be seen as a constant
    - Must start with a letter or an underscore, cannot with number
    - Only letters, numbers and underscores
    - Case sensitive 
  */

  #DATA TYPES
  /*

    String - wrapped in quotes, either single or double
    Integers - (numbers, positive or negative)
    floats - decimal numbers
    Booleans - true or false
    Arrays
    Objects
    NULL
    Resource (return or reference to a function, etc, not actual data type)

  */

  $output = 'Hello World!';
  $num1 = 4; // with quotes would be string
  $num2 = 10;
  $sum = $num1 + $num2;

$string1 = 'Hello';
$string2 = 'World';
$greeting = $string1 .' '. $string2.'!'; // concatenate = use a dot .
$greeting2 = "$string1 $string2"; // single quotes will echo literally what is typed, php will not parse teh variables, with double quotes php will parse.

// escaping characters - single quote string, \backslash needed, double quote string, escaping not necessary
$string3 = 'They\'re Here'; 

  $float1 = 4.4;
  $bool1 = true;

  // Constants define('constant name', 'constant value', 'true: case-insensitive or no')
  define('GREETING', 'Hello Everyone', 'true');

  // echo $string1; // for variables, dollar sign $ in front
  echo greeting; // for constants, no dollar sign
?>
<!-- echo returns no value, print returns a value of 1 as well as printing information like echo does, but echo is faster to print. -->