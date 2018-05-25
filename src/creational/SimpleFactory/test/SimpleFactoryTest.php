<?php

use Helpers\Book;
use Creational\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @test
     */
    public function factoryCanCreateBook()
    {
        $simpleFactory = new SimpleFactory();
        $book = $simpleFactory->makeBook('George Reese, Randy Jay Yarger, and Tim King', 'Managing and Using MySQL');
        $this->assertInstanceOf(Book::class, $book);
    }
}
