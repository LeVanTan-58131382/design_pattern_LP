<?php
require_once "AdvancedMediaPlayer.php";
class PlayMP4 implements AdvancedMediaPlayer{
  public function PlayMP4e(string $fileName)
  {
        echo "You are playing MP4, name: ".$fileName;
  }

  public function PlayVLCe(string $fileName)
  {
      // TODO: Implement PlayVLC() method.
  }
}