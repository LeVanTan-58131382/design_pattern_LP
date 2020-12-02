<?php
abstract class DecoratorIceScream implements IceScream{
    protected $iceScream;

    public function __construct(IceScream $is)
    {
        $this->iceScream = $is;
    }

    public function makeIceScream()
    {
        return $this->iceScream->makeIceScream();
    }


}