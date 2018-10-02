<?php

final class Cli
{
    const green = "\033[0;32m";

    const yellow = "\033[0;33m";

    const red = "\033[0;31m";

    const reset = "\033[0m";

    public static function println(string $color, string $stringa) : void
    {
        echo $color . $stringa . Cli::reset . "\n";
    }
}
