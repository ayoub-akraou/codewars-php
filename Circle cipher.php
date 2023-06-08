<?php
//link: https://www.codewars.com/kata/634d0723075de3f97a9eb604/php

class Kata {
  public static function encode($s) {
    $length = strlen($s);
    $result = "";
    for($i = 0; $i < ceil($length / 2); $i++) {
      if($length - $i - 1 === $i) $result .= $s[$i];
      else $result .= $s[$i] . $s[$length - $i - 1];
    }
    return $result;
  }
  
  public static function decode($s) {
    $arr = str_split($s);
    $first_half_arr = array_filter($arr, fn($index) => $index % 2 === 0, ARRAY_FILTER_USE_KEY);
    $first_half = implode("", $first_half_arr);
    $last_half_arr = array_filter($arr, fn($index) => $index % 2 !== 0, ARRAY_FILTER_USE_KEY);
    $last_half = strrev(implode("", $last_half_arr));
    return $first_half . $last_half;
  }
}