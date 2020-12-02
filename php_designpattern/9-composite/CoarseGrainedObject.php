<?php

namespace CompositeEntity;

class CoarseGrainedObject
{
    private  $do1;
    private  $do2;

    public function __construct()
    {
        $this->do1 = new DependentObject1();
        $this->do2 = new DependentObject2();
    }

    public function setData(string $data1, string $data2)
    {
        $this->do1->setData($data1);
        $this->do2->setData($data2);
    }

    public function getData(): array
    {
        return [$this->do1->getData(), $this->do2->getData()];
    }
}