<?php
require_once "Media.php";
require_once "AudioAdapter.php";
class Audio implements Media{
    private $audioAdapter = null;
    public function Play(string $typeAudio, string $fileName)
    {

        if ($typeAudio == "mp3"){
            echo "You are playing MP3 file, name: ".$fileName;
        }elseif ($typeAudio == "mp4" || $typeAudio=="vlc"){
            $this->audioAdapter = new AudioAdapter($typeAudio);
            $this->audioAdapter->Play($typeAudio,$fileName);
        }else {
            echo "HAHAHAHAHAHAHA";
        }

    }
}