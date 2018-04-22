<?php

use Behavioral\Command\BookCommand;
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
    }

    /**
     *
     * @test
     *
     * @return void
     */
    public function command()
    {
        $starsOn = new BookStarsOnCommand($this->book);
        $starsOn->execute();
        $this->assertEquals($this->book->getTitle(), 'Design*Patterns');

        $starsOff = new BookStarsOffCommand($this->book);
        $starsOff->execute();
        $this->assertEquals($this->book->getTitle(), 'Design Patterns');
        $this->assertEquals($this->book->getAuthorAndTitle(), 'Design Patterns by Gamma, Helm, Johnson, and Vlissides');
        echo "      \e[1;41m BEHAVIORAL \e[0m";
    }
}
