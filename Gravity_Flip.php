<?php
// link: https://www.codewars.com/kata/5f70c883e10f9e0001c89673

function flip(string $dir, array $arr): array
{
  if ($dir === "L")  rsort($arr);
  elseif ($dir === "R")  sort($arr);
  return $arr;
}
