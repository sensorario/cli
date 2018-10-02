<?php

passthru("clear");

require_once __DIR__ . "/../vendor/autoload.php";

Cli::println(Cli::red, "red");

Cli::println(Cli::green, "green");

Cli::println(Cli::yellow, "yellow");

Cli::println(Cli::blue, "blue");

Cli::println(Cli::violet, "violet");
