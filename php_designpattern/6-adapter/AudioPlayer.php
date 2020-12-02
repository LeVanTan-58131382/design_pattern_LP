<?php

namespace Adapter;
require_once ("MediaPlayer.php");
require_once ("MediaAdapter.php");

class AudioPlayer implements MediaPlayer
{

    private $mediaAdapter = null;

    public function play(string $audioType, string $fileName)
    {
        if ($audioType == "mp3") {
            echo "Playing mp3 file. Name: " . $fileName . "<br>";
        } else if ($audioType == "mp4" || $audioType == "vlc") {
            $this->mediaAdapter = new MediaAdapter($audioType);
            $this->mediaAdapter->play($audioType,$fileName);
        }
        else{
            echo "Invalid media. " . $audioType . " format not supported";
        }
    }
}