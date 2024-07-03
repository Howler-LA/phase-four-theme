<?php

use Log1x\Navi\Navi;

$navigation = Navi::make()->build('primary_navigation');

if ($navigation->isEmpty()) {
  return;
}

return $navigation->toArray();