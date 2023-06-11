<?php
// link: https://www.codewars.com/kata/633874ed198a4c00286aa39d/php

function newGame($frank, $sam, $tom){
  $counter1 = 0;
  $counter2 = 0;
  $compare = function ($el, &$numbers) {
    foreach($numbers as $num) {
      if($el > $num) {
        $numbers = array_filter($numbers, fn($e) => $e !== $num);
        return true;
      };       
    };
  };
  
  foreach ($frank as $element) {
    if($compare($element, $sam)) $counter1++;
    if($compare($element, $tom)) $counter2++;
   } ;
  return min($counter1, $counter2) >= 2;
}