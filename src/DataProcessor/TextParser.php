<?php

namespace Krishzzi\LaravelLanguageDetect\DataProcessor;

class TextParser
{

    protected string $text;
    protected bool $compileNGram = false;
    protected bool $compileUnicode = false;

    protected bool $textPadding = false;


    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }


    public static function make(string $text): static
    {
        return new static($text);
    }


    public static function isValidString(string $text):bool
    {
        return !empty($text) && strlen($text) > 3 && preg_match('/\S/', $text);
    }

    public function enableTriGramCounting(bool $enable = true)
    {
        $this->compileNGram = $enable;
    }

    public function prepareUnicode(bool $enable = true)
    {
        $this->compileUnicode = $enable;
    }

    public function enableTextPadding(bool $enable = true)
    {
        $this->textPadding = $enable;
    }

    public function analyze()
    {
        $length = strlen($this->text);
        $byteCounter = 0;

        if ($this->compileUnicode)
        {
            $blocks = $this->
        }


    }


}
