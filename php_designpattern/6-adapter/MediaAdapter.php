<?php

namespace Adapter;
require_once ("Mp4Player.php");
require_once ("VlcPlayer.php");

class MediaAdapter implements MediaPlayer
{

    private $advancedMusicPlayer = null;

    function __construct(string $audioType)
    {
        if ($audioType == "vlc") {
            $this->advancedMusicPlayer = new VlcPlayer();
        } else if ($audioType == "mp4") {
            $this->advancedMusicPlayer = new Mp4Player();
        }
    }


    public function play(string $audioType, string $fileName)
    {
        if ($audioType == "vlc") {
            $this->advancedMusicPlayer->playVlc($fileName);
        } else if ($audioType == "mp4") {
            $this->advancedMusicPlayer->playMp4($fileName);
        }
    }
}