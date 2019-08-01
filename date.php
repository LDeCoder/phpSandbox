<?php
// echo date('d');  //day
// echo date('m'); //month
// echo date('y'); //year-2 digits
// echo date('Y'); //year-4 digits

// echo date('l'); //day of week

// echo date('m/d/y');
// echo date('m-d-Y');

// TIME:

// echo date('h'); //hour
// echo date('i'); //minutes
// echo date('s'); //seconds
// echo date('a'); //am/pm

//set TIMEZONE
date_default_timezone_set('America/Chicago');

// echo date('h:i:sa');

// TIMESTAMP
// The Unix timestamp is a long integer 
// containing the number of seconds between 
// the Unix Epoch (January 1 1970 00:00:00 GMT) 
// and the time specified.
// $timestamp = mktime(07,52,55,10,05,1975);
// echo $timestamp;
// echo date('m/d/Y h:i:sp', $timestamp);

// strtotime = STRING TO TIME
// $timestamp2 = strtotime('7:00pm March 22 2016');
// echo $timestamp2;
// echo date('m/d/Y h:i:sp', $timestamp2);

$timestamp3 = strtotime('now');
echo date('m/d/Y h:i:s', $timestamp3);

// $timestamp4 = strtotime('next Friday');
// echo date('m/d/Y h:i:s', $timestamp4);

// $timestamp5 = strtotime('+2 Days');
// echo date('m/d/Y', $timestamp5);

// // FOR MORE DATES AND TIMESTAMPS:
// // php.net
// // DATES: https://php.net/manual/en/function.date.php


// echo 'Stephen\'s birthday','<br>';
// $timestamp = mktime(02,00,00,12,01,1970);
// echo $timestamp;
// echo date('m/d/Y h:i:sa', $timestamp);
// ?>