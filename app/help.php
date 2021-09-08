<?php

/**
 * @file
 * Commonly used tools for building a command-line app.
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

/**
 * Options
 *
 * Short options look like: -v
 * Long options look like: --name
 *
 * @example
 * php ./help.php -r=required -o=optional -vvv
 */
$opts = getopt(
  // r: is required
  // o:: is optional
  // nv do not take values
  'r:o::nv',
  ['name::'],
);
var_dump($opts);

// Writing the error stream.
fwrite(STDERR, "Error: A kitten has escaped.");

// Exit codes. 0 is success.
exit(0);
