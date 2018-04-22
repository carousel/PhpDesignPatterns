<?php

use Behavioral\Command\BookCommand;
use Behavioral\Command\BookTitleCapitalizeCommand;
use Behavioral\Command\BookCommandee;
use Behavioral\Command\BookStarsOnCommand;
use Behavioral\Command\BookStarsOffCommand;

class CommandTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate command class class
     */
    public function setUp()
    {
        $this->book = new BookCommandee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
        $this->book1 = new BookCommandee('Design Patterns', 'Gamma, Helm, Johnson, and Vlissides');
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function abstractVersion()
    {
        //ABSTRACT CLASS VERSION
        $starsOn = new BookStarsOnCommand($this->book);
        $starsOn->execute();
        $this->assertEquals($this->book->getTitle(), 'Design*Patterns');

        $starsOff = new BookStarsOffCommand($this->book);
        $starsOff->execute();
        $this->assertEquals($this->book->getTitle(), 'Design Patterns');
        $this->assertEquals($this->book->getAuthorAndTitle(), 'Design Patterns by Gamma, Helm, Johnson, and Vlissides');

    }
    /**
     *
     * @test
     *
     * @return void
     */
    public function interfaceVersion()
    {
        //INTERFACE VERSION
        $capitalizeCommand = new BookTitleCapitalizeCommand($this->book1);
        $capitalizeCommand->execute();
        $this->assertEquals($this->book1->getTitle(), 'DESIGN PATTERNS');
        echo "    \e[1;41m BEHAVIORAL \e[0m";
    }
        
}
