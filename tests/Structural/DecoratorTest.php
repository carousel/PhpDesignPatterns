<?php

use Structural\Decorator\BookTitleDecorator;
use Structural\Decorator\BookTitleStarDecorator;
use Structural\Decorator\BookTitleExclaimDecorator;
use Helpers\Book;

class DecoratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Instantiate objects
     */
    public function setUp()
    {
        $this->patternBook = new Book("Gamma, Helm, Johnson, and Vlissides", 'Design Patterns');
        $this->decorator = new BookTitleDecorator($this->patternBook);
        $this->starDecorator = new BookTitleStarDecorator($this->decorator);
        $this->exclaimDecorator = new BookTitleExclaimDecorator($this->decorator);
        $this->exclaimStarDecorator = new BookTitleExclaimDecorator($this->starDecorator);
        $this->starExclaimStarDecorator = new BookTitleStarDecorator($this->exclaimStarDecorator);
    }

    /**
     * @test
     *
     * @return void
     */
    public function decorator()
    {
        $this->assertEquals($this->decorator->showTitle(), "Design Patterns");

        $this->starDecorator->starTitle();
        $this->assertEquals($this->starDecorator->showTitle(), "***Design Patterns***");

        $this->exclaimDecorator->exclaimTitle();
        $this->assertEquals($this->exclaimDecorator->showTitle(), "!!!Design Patterns!!!");

        $this->exclaimStarDecorator->exclaimTitle();
        $this->assertEquals($this->exclaimStarDecorator->showTitle(), "!!!***Design Patterns***!!!");

        $this->starExclaimStarDecorator->starTitle();
        $this->assertEquals($this->starExclaimStarDecorator->showTitle(), "***!!!***Design Patterns***!!!***");

        echo "      \e[1;44m STRUCTURAL \e[0m";
    }
}
