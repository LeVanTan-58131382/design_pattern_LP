<?php

namespace CompositeEntity;

class DependentObject1
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