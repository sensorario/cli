<?php

final class Cli
{
    const red = "\033[0;31m";

    const green = "\033[0;32m";

    const yellow = "\033[0;33m";

    const blue = "\033[0;34m";

    const reset = "\033[0m";

    public static function println(string $color, string $stringa) : void
    {
        echo $color . $stringa . Cli::reset . "\n";
    }
}
