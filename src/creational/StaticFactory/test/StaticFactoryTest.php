<?php

use Helpers\Book;
use Creational\StaticFactory\StaticFactory;

class StaticFactoryTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @test
     */
    public function factoryCanCreateBook()
    {
        $book = StaticFactory::makeBook('George Reese, Randy Jay Yarger, and Tim King', 'Managing and Using MySQL');
        $this->assertInstanceOf(Book::class, $book);
    }
}
