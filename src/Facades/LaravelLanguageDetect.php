<?php

namespace Krishzzi\LaravelLanguageDetect\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Krishzzi\LaravelLanguageDetect\LaravelLanguageDetect
 */
class LaravelLanguageDetect extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Krishzzi\LaravelLanguageDetect\LaravelLanguageDetect::class;
    }
}
