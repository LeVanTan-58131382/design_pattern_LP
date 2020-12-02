<?php

namespace Adapter;

require_once ("AdvancedMediaPlayer.php");

class Mp4Player implements AdvancedMediaPlayer
{
    public function playMp4(string $fileName)
    {
        echo "Playing Mp4 file. Name: " . $fileName;
        echo "<br>";
    }

    public function playVlc(string $fileName)
    {
        // TODO: Implement playVlc() method.
    }
}