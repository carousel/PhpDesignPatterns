<?php 

namespace Behavioral\Command;

class BookTitleCapitalizeCommand implements BookCommandInterface
{
    public function __construct(BookCommandee $bookCommandee)
    {
        $this->bookCommandee = $bookCommandee;
    }
    public function execute()
    {
        $this->bookCommandee->capitalize();
    }
}
