<?php

namespace Usman\LaravelMakeHelper;

use Random\RandomException;

class HelperMakeCommand
{
    public static function exampleMFunction(): string
    {
        return bin2hex(random_bytes(10));
    }
}