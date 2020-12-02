<?php

use Adapter\AudioPlayer;

require_once ("AudioPlayer.php");

$mediaPlayer = new AudioPlayer();
$mediaPlayer->play("mp3", "beyond the horizon.mp3");
echo "<br>";

$mediaPlayer->play("mp4", "alone.mp4");
echo "<br>";

$mediaPlayer->play("vlc", "far far away.vlc");
echo "<br>";

$mediaPlayer->play("avi", "mind me.avi");
echo "<br>";