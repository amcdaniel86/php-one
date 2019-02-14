<!-- execute a block of code a set number of times, based on some sort of conditions -->

<?php
  # LOOPS - Execute code set number of times

  /*
    For
    While
    Do..While
    Foreach
  */

  # For Loop - if known number of times loop will be executed
  # @params - init, condition, increment

  // for($i = 0;$i <= 10;$i++){ // at 0, up by 1, then 1 up by 1, etc
  //     echo 'Number '.$i;
  //     echo '<br>';
  // }

  #While Loop - used if set condition is not known.
  # @params - condition only, (setting variable, iteration outside)

  // $i = 0; // (outside the loop)

  // while($i < 10){ // (condition $i < 10 only thing in loop)
  //     echo $i;
  //     echo '<br>'; // when echoing html tags, always in '';
  //     $i++;
  // }

  # Do...While - always runs at least once
  # @params - condition

  // $i = 0;

  // do{ // do has curly braces in this case, not while
  //     echo $i;
  //     echo '<br>';
  //     $i++;
  // }

  //   while($i < 10);

  # forEach Loop - meant to work with Arrays
  
  $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'will@gmail.com');

  foreach($people as $person => $email) { // as __ singular of plural,foreach
      echo $person.': '.$email;
      echo '<br>';
  }
  
?>