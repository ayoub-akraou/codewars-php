<?php
// link: https://www.codewars.com/kata/5bb0c58f484fcd170700063d

function pillars($numberOfPillars, $dist, $width)
{
  if ($numberOfPillars === 0 || $numberOfPillars === 1) return 0;
  $gap_between_pillars = ($numberOfPillars - 1) * $dist;
  $gap_between_pillars_in_cm = $gap_between_pillars * 100;
  $pillars_width = ($numberOfPillars - 2) * $width;
  $result = $gap_between_pillars_in_cm + $pillars_width;
  return $result;
}
