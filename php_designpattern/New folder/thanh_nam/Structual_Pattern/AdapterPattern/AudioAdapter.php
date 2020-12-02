<?php
require_once "PlayMP4.php";
require_once "PlayVLC.php";
require_once "Media.php";
class AudioAdapter implements Media{
    private $advancedMedia = null;

    function __construct(string $typeAudio)
    {
        if ($typeAudio=="mp4"){
            $this->advancedMedia = new PlayMP4();
        }elseif ($typeAudio=="vlc"){
            $this->advancedMedia = new PlayVLC();
        }
    }

    public function Play(string $typeAudio, string $fileName)
    {
        if ($typeAudio=="mp4"){
            $this->advancedMedia->PlayMP4e($fileName);
        }elseif ($typeAudio=="vlc"){
            $this->advancedMedia->PlayVLCe($fileName);
        }
    }
}