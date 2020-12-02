<?php
require_once "AdvancedMediaPlayer.php";
class PlayVLC implements AdvancedMediaPlayer{
    public function PlayVLCe(string $fileName)
    {
        echo "You are playing VLC file, name: ".$fileName;
    }

    public function PlayMP4e(string $fileName)
    {
        // TODO: Implement PlayMP4() method.
    }
}