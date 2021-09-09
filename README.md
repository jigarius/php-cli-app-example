# Example: PHP CLI Applications

A demo of how to write CLI apps with PHP.

## Contents

### help.php

Demonstrates the use of PHP elements that help in CLI app development.

- `$argc`
- `$argv`
- `getopt()`
- `exit()`

### hello.php

Contains a more realistic example, i.e. a hello world app that takes a
person's name and says hello to them in 3 languages.

### hello

Demonstrates how to run a PHP script with a `shebang`. 

## Usage

This project uses Docker Compose. Here's how you see the code in action.
- Run the project with Docker Compose.
  - `docker compose up -d`
  - `docker compose start`
- Run a shell in the PHP container with `make ssh`
- Now you can use the scripts as follows:
  - `php ./args.php`
  - `php ./getopt.php`
  - `./hello --lang=es Kitty`

## References

- [Executing PHP files](https://www.php.net/manual/en/features.commandline.usage.php)
- Brought to you by [Symetris](https://symetris.ca/).
