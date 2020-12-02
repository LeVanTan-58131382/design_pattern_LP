<?php


class NameRepository implements Container
{

    public function getIterator()
    {
        // TODO: Implement getIterator() method.
        return new NameIterator();
    }
}