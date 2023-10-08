<?php

namespace Asciito\LearningGithubActions;

class Foo
{
    /**
     * Get the current class name
     * 
     * @return string
     */
    public static function className(): string
    {
        return static::class;
    }
}