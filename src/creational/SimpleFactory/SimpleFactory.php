<?php

namespace Creational\SimpleFactory;

use Helpers\Book;

class SimpleFactory
{
    public function makeBook($author, $title): Book
    {
        return new Book($author, $title);
    }
}
