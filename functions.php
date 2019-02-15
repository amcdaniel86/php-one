<?php
    # FUNCTION = Block of code that can be repeatedly called

    /*
        Camel Case - myFunction()
        Lower Case - my_function() underscore between words
        Pascal Case - MyFunction() ONLY for classes
    */

    // Create Simple Function
    function simpleFunction(){
      echo 'Hello World';
    }

    // Run Simple Function
    // simpleFunction(); // - runs whatever code is in defined function above

    // Function with Param
    function sayHello($name = 'World'){ // $name param subed below with value. IF = '_' exists, then that is default, if fxn called with no param/arg
        echo "Hello $name<br>";
    }

    // sayHello('Joe');
    // sayHello('Bob');
    // sayHello(22);
    // sayHello(); // will work if $name = 'World'
    // sayHello('Tim');

    // Return values from functions
    function addNumbers($num1, $num2){
        return $num1 + $num2; // echo here, no echo when called
    }

  //  echo addNumbers(2,3);

   // Passing arguments by reference

   $myNum = 10;

   function addFive($num){ // by value, default
      $num += 5;
   }

   function addTen(&$num){ // & ampersand is by reference
      $num += 10;
   }

   addFive($myNum);

   echo "Value: $myNum<br>";

   addTen($myNum);

   echo "Value: $myNum<br>"
?>