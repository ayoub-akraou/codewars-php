<?php
// link: https://www.codewars.com/kata/5b077ebdaf15be5c7f000077/php

function countsheep($num){
  if($num === 0) return "";
  if($num === 1) return "1 sheep...";
  $arr = range(1, $num);
  $arr = array_map(fn($value) => "$value sheep..." , $arr);
  $result = implode("", $arr);
  return $result;
}
