<?php 

namespace Behavioral\State;

class BookTitleStateExclaim implements BookTitleStateInterface
{
    private $titleCount = 0;

    public function showTitle($context_in)
    {
        $title = $context_in->getBook()->getTitle();
        $context_in->setTitleState(new BookTitleStateQuestionMark());
        return str_replace(' ', '!', $title);
    }
}

