<?php

/**
 * @file
 * Example of using getopt() to add options/switches.
 *
 * Short options look like: -v
 * Long options look like: --name
 *
 * @example
 * php ./getopt.php -r=required -o=optional -vvv --name=Niki
 */

// Only execute from CLI.
if (php_sapi_name() !== 'cli') exit;

$opts = getopt(
  // r: is required
  // o:: is optional
  // nv do not take values
  'r:o::nv',
  // name is optional
  ['name::'],
);
var_dump($opts);

// Writing to the error stream.
fwrite(STDERR, "Error: Sample error.");
exit(1);
