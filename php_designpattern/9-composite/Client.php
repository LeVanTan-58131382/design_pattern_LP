<?php

namespace CompositeEntity;

class Client
{
    private  $compositeEntity;

    public function __construct()
    {
        $this->compositeEntity = new CompositeEntity();
    }

    public function printData()
    {

        for ($i = 0; $i < count($this->compositeEntity->getData()); $i++) {
            echo "Data: " . $this->compositeEntity->getData()[$i] . "<br>";
        }
    }

    public function setData(string $data1, string $data2)
    {
        $this->compositeEntity->setData($data1, $data2);
    }
}