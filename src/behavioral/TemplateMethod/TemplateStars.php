<?php

namespace Behavioral\TemplateMethod;

class TemplateStars extends TemplateAbstract
{
    protected function processTitle($title)
    {
        return Str_replace(' ', '*', $title);
    }
    protected function processAuthor($author)
    {
        return $author;
    }
}


