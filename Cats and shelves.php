<?php
// link: https://www.codewars.com/kata/62c93765cef6f10030dfa92b/php

function cats(int $start, int $finish): int {
  $numbers_of_shelves = $finish - $start;
  $long_jumps = intval(($numbers_of_shelves) / 3);
  $short_jumps = $numbers_of_shelves % 3;
  return $long_jumps + $short_jumps;
}