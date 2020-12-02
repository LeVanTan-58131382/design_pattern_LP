<?php

namespace Adapter;

class VlcPlayer implements AdvancedMediaPlayer{

    public function playVlc(string $fileName)
    {
        echo "Playing vlc file. Name: ". $fileName ;
        echo "<br>";
    }

    public function playMp4(string $fileName)
    {
        // TODO: Implement playMp4() method.
    }

}