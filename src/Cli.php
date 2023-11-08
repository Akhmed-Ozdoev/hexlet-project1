<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

/* echo 'Welcome to the Brain Games!', PHP_EOL;
echo 'May I have your name?';
$name = trim(fgets(STDIN));
echo "Hello, {$name}!", PHP_EOL; */


line('Welcome to the Brain Games!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);