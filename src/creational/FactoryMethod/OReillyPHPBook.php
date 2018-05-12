<?php

namespace Creational\FactoryMethod;

class OReillyPHPBook extends AbstractPHPBook
{
    private $author;
    private $title;
    private $subject = "PHP";

    public function __construct()
    {
        $this->author = "Rasmus Lerdorf and Kevin Tatroe\n";
        $this->title = "Programming PHP\n";
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
