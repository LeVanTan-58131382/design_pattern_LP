<?php


class AuthenticationFilter implements Filter
{

    function execute(string $request)
    {
        // TODO: Implement execute() method.
        echo "Authenticating request: " . $request ."<br>";
    }
}