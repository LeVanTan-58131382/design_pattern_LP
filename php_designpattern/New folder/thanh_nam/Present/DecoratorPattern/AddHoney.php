<?php
class AddHoney extends DecoratorIceScream{
    public function __construct(IceScream $is)
    {
        parent::__construct($is);
    }

    public function makeIceScream()
    {
        return parent::makeIceScream(). " with Honey";
    }
}