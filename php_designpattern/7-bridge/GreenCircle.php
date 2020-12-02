<?php


class GreenCircle implements DrawAPI
{

    function drawCircle( $radius,  $x,  $y)
    {
        // TODO: Implement drawCircle() method.
        echo "Drawing Circle[ color: green, radius: "
            . $radius . ", x: " . $x . ", " . $y . "]<br>";
    }
}