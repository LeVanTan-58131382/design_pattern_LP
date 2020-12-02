<?php
abstract class DecoratorFactory implements GiongCayTrongFactory{

    protected $factory;

    public function __construct(GiongCayTrongFactory $factory)
    {
        $this->factory= $factory;
    }

    public function chonGiong(Giong $giong)
    {
        return $this->factory->chonGiong($giong);
    }

    abstract public function addPhanBon();
}