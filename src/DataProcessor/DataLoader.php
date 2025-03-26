<?php

namespace Krishzzi\LaravelLanguageDetect\DataProcessor;

class DataLoader
{

    protected $langData;

    public function __construct()
    {
        $this->langData = [];
    }

    public static function make(): static
    {
        return new static();
    }


    public function load(string $fileName)
    {

    }



}
