<?php

namespace Creational\AbstractFactory;

abstract class AbstractBookFactory
{
    abstract protected function makePHPBook();

    abstract protected function makeMySQLBook();
}
