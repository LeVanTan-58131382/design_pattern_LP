<?php


namespace CompositeEntity;

class DependentObject2
{

    private  $data;

    public function setData(string $data)
    {
        $this->data = $data;
    }

    public function getData(): string
    {
        return $this->data;
    }
}