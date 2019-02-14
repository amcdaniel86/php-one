<?php
  #Array - Variable that holds multiple values
  /*
    - Indexed
    - Associative
    - Multi-dimensional
  */

  // define() is for constants

  // Indexed - key is set, value is user defined
  $people = array('Kevin', 'Jeremy', 'Sara');
  $ids = array(23, 55, 12);
  $cars = ['Honda', 'Toyota', 'Ford']; // same as array() above
  $cars[3] = 'Chevy';
  $cars[] = 'BMW';

  // functions to work with arrays
  
  // echo count($cars);
  // print_r($cars); // echo for arrays GREAT FOR DEBUGGING
  // var_dump($cars); // also shows data type

  // echo $people[3]; // arrays are always zero-based
  // echo $ids[2];
  // echo $cars[4];

  // Associative Arrays - can define key and value, 
  $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37); // 'string' => value
  $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
  // echo $people['Brad']; // input is key 'brad' will output value 35
  // echo $ids[22];
  $people['Jill'] = 42;
  // echo $people['Jill'];
  // print_r($people);
  // var_dump($people);

  // Multi-Dimensional Arrays
  // array within an array
  $cars = array(            // []
    array('Honda', 20, 10), // [0]  (0, 1, 2)
    array('Toyota', 30, 30), //[1]  (0, 1, 2)
    array('Ford', 23, 12),  // [2]  (0, 1, 2)
  );

  echo $cars[1][2];
?>