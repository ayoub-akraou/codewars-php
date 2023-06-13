<?php
// link: https://www.codewars.com/kata/5f77d62851f6bc0033616bd8/php

function valid_spacing($s) {
  $correct_version = trim($s);
  $arr = str_split($correct_version);
  $correct_version = array_reduce(array_keys($arr), function($acc, $index) use ($arr) {
    $previous = $arr[$index - 1] ?? "_";
    $current = $arr[$index];
    if($previous === " " && $current === " ") return $acc;
    else return $acc . $current;
  }, "");
  return $s === $correct_version;
}