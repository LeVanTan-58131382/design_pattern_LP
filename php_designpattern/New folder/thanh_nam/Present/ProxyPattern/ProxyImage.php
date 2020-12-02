<?php
class ProxyImage implements subject {
    private $realImage;

    public function __construct(RealImage $realImage)
    {
        $this->realImage = $realImage;
    }

    public function request()
    {
        if ($this->Loading()){
            echo $this->realImage->request();
        }
    }

    function Loading(){
        echo "Loading your image ........ " ."<br>";

        return true;
    }

}