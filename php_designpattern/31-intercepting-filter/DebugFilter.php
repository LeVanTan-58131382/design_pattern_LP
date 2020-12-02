<?php


class DebugFilter implements Filter
{

    function execute(string $request)
    {
        // TODO: Implement execute() method.
        echo "request log: " . $request . "<br>";
    }
}