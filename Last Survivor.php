<?php
// link: https://www.codewars.com/kata/609eee71109f860006c377d1/php

function lastSurvivor(string $str, array $arr): string {
  $letters = str_split($str);

  foreach ($arr as $deleteIndex) {
      array_splice($letters, $deleteIndex, 1);
  }

  return $letters[0];
}