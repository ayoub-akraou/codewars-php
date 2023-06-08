<?php
// https://www.codewars.com/kata/5ce9c1000bab0b001134f5af

function quarterOf($month)
{
  switch ($month) {
    case $month <= 3:
      $result = 1;
      break;
    case $month <= 6:
      $result = 2;
      break;
    case $month <= 9:
      $result = 3;
      break;
    default:
      $result = 4;
  };
  return $result;
}
