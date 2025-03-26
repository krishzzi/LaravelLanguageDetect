<?php

namespace Krishzzi\LaravelLanguageDetect;

use Krishzzi\LaravelLanguageDetect\DataProcessor\TextParser;

class LaravelLanguageDetect
{

    protected bool $hasUnicode = false;


    public function __construct()
    {
    }


    public static function make(): self
    {
        return new static();
    }

    public function hasUnicode(bool $enable = true): self
    {
        $this->hasUnicode = $enable;
        return $this;
    }



    public function detect(string $text,int $limit = 0):array
    {
        if (!TextParser::isValidString($text))
        {
            return [];
        }
        $textParser = TextParser::make($text);

        $textParser->enableTriGramCounting();
        if ($this->hasUnicode)
        {
            $textParser->prepareUnicode();
        }

        $textParser->enableTextPadding();
        $textParser->analyze();


    }




}
