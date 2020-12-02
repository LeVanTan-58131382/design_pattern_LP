<?php

namespace CompositeEntity;

class CompositeEntity {
    private  $cgo;

    public function __construct()
    {
        $this->cgo = new CoarseGrainedObject();
    }

   public function setData(string $data1, string $data2){
      $this->cgo->setData($data1, $data2);
   }

public function getData():array {
      return $this->cgo->getData();
   }
}