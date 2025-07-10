<?php

// Static Keyword

require_once "helper/math-helper.php"; // dir helper

use Helper\MathHelper; // namespace dan class helper

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Mochamad Abdul Rouf";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;