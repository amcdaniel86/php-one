<?php

  // echo date('d'); // Day
  // echo date('m'); // Month
  // echo date('Y'); // Year
  // echo date('l'); // day of the week

  // echo date('Y/m/d'); // date formats
  // echo date('m-d-Y'); // date formats

  // echo date('h'); // Hour
  // echo date('i'); // Min
  // echo date('s'); // Seconds
  // echo date('a'); // AM OR PM

  // Set Time Zone
  date_default_timezone_set('America/New_York');

  // echo date('h:i:sa');

  $timestamp = mktime(10, 14, 54, 9, 10, 1981); // UNIX timestamp time that has passed in seconds since Jan 1st, 1970 until date specified.
  
  // echo $timestamp;

  // echo date('m/d/Y h:i:sa', $timestamp);
  
$timestamp2 = strtotime('7:00 pm March 22 2016');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');
$timestamp5 = strtotime('+2 Months');
$timestamp6 = strtotime('+2 Days');

  // echo $timestamp2;


  echo date('m/d/Y h:i:sa', $timestamp6);

  ?>