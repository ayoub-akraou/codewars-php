<?php
// link: https://www.codewars.com/kata/60908bc1d5811f0025474291/php

function findsquares($num){
  $i = 0;
  while(true) {
    $i++;
    $bigger = ($i + 1) ** 2;
    $smaller = $i ** 2;
    if($bigger - $smaller === $num) return "$bigger-$smaller";
  };
}