<?php

/**
 * @file
 * A not-so-simple 'hello world' app.
 *
 * @example
 * ./hello Jerry
 * ./hello Jerry --lang=es -v
 */

if (php_sapi_name() !== 'cli') exit;

$script_name = $argv[0];

// Parse options.
$opts = getopt('v', ['lang::'], $rest_index);
$lang = $opts['lang'] ?? 'en';
$verbose = isset($opts['v']);

// Arguments excluding options.
$args = array_slice($argv, $rest_index);

// A name must be provided.
$name = $args[0] ?? NULL;
if (empty($name)) {
  echo 'Error: Argument 1 must be a valid name.' . PHP_EOL;
  echo "For example: {$argv[0]} Jerry" . PHP_EOL;
  exit(1);
}

$output = '';
switch ($lang):
  case 'en':
    $output = 'Hello @name!' . PHP_EOL;
    if ($verbose) {
      $output .= 'How are you?' . PHP_EOL;
    }
    break;

  case 'es':
    $output = '¡Hola @name!' . PHP_EOL;
    if ($verbose) {
      $output .= '¿Cómo estás?' . PHP_EOL;
    }
    break;

  case 'fr':
    $output = 'Salut @name!' . PHP_EOL;
    if ($verbose) {
      $output .= 'Comment ça va?' . PHP_EOL;
    }
    break;

  default:
    echo "Error: Unsupported language {$lang}." . PHP_EOL;
    exit(1);
endswitch;

echo str_replace('@name', $name, $output);
exit(0);
