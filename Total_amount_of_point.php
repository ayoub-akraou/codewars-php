<?php

//problem's link: https://www.codewars.com/kata/5bb904724c47249b10000131 

function points(array $games): int
{
  $result = array_reduce($games, function ($acc, $item) {
    $our_points = $item[0];
    $opponent_points = $item[2];
    if ($our_points > $opponent_points) return $acc + 3;
    elseif ($our_points === $opponent_points) return $acc + 1;
    else return $acc + 0;
  });
  return $result;
}
