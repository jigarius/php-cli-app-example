<?php

/**
 * @file
 * Examples of using $argv and $argc.
 *
 * @example
 * php ./args.php arg1 arg2 arg3
 */

// Only execute from CLI.
if (php_sapi_name() !== 'cli') exit;

echo "Argument count (\$argc): {$argc}" . PHP_EOL;
echo PHP_EOL;

echo 'Argument values ($argv):' . PHP_EOL;
print_r($argv);
echo PHP_EOL;

// The first argument is always the name of the script being executed.
echo "Script name (\$argv[0]): {$argv[0]}" . PHP_EOL;
echo PHP_EOL;

exit(0);
