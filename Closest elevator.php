<?php
// link: https://www.codewars.com/kata/5c374b346a5d0f77af500a5a/php

function elevator($left, $right, $call)
{
  if (abs($right - $call) <= abs($left - $call)) return 'right';
  else return 'left';
}
