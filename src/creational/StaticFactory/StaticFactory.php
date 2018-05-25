<?php

namespace Creational\StaticFactory;

use Helpers\Book;

class StaticFactory
{
    public static function makeBook($author, $title): Book
    {
        return new Book($author, $title);
    }
}
