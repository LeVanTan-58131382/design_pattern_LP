<?php


class RedCircle implements DrawAPI
{

    function drawCircle( $radius,  $x,  $y)
    {
        // TODO: Implement drawCircle() method.
        echo "Drawing Circle[ color: red, radius: "
            . $radius . ", x: " . $x . ", " . $y . "]<br>";
    }
}