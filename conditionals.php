<?php

    # CONDITIONALS

    /*
        ==  matches value, not data type
        === matches value AND data type
        <   less than
        >   greater than
        <=  less than equal to
        >=  greater than equal to
        !=  not equals to value
        !== not equal to value and data type
    */
    /*
    $num = 4;

    if($num == 5){
      echo '5 passed';
    } else if($num == 6){
      echo '6 passed';
    } else {
      echo 'did not pass';
    }
  */

    # NESTING IF

    $num = 6;

    /*
    if($num > 4){
        if($num < 10){
            echo "$num passed";
        } else {
          echo 'whatever';
        }
    }
    */

    /*
        LOGICAL OPERATORS
        
        and &&
        or ||
        xor exclusive or
    */

    //  AND
    /*
      if($num > 4 && $num < 10){ // can use AND or &&
        echo "$num passed";
      }
      */

    //  OR
      // if($num > 4 OR $num < 10){ // can use OR or ||
      //   echo "$num passed";
      // }

    //  XOR, only or, one true, not both true
    /*
      if($num > 4 XOR $num < 10){ // can use OR or ||
        echo "$num passed";
      }
*/

      # SWITCH

      $favColor = 'yel';

      switch($favColor){
          case 'red':
          echo 'Your favorite color is red';
          break;
          case 'blue':
          echo 'Your favorite color is blue';
          break;
          case 'green':
          echo 'Your favorite color is green';
          break;
          default:
          echo 'Your favorite color is something else';
      }
?>