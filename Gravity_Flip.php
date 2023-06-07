<?php
function flip(string $dir, array $arr): array
{
  if ($dir === "L")  rsort($arr);
  elseif ($dir === "R")  sort($arr);
  return $arr;
}
