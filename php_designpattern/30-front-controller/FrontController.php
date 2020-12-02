<?php

namespace FrontControllerPattern;

class FrontController
{

    private Dispatcher $dispatcher;

    public function __construct()
    {
        $this->dispatcher = new Dispatcher();
    }

    private function isAuthenticUser(): bool
    {
        echo "User is authenticated successfully.";
        echo "<br>";

        return true;
    }

    private function trackRequest(string $request)
    {
        echo "Page requested: " . $request;
        echo "<br>";

    }

    public function dispatchRequest(string $request)
    {
        //log each request
        $this->trackRequest($request);

        //authenticate the user
        if ($this->isAuthenticUser()) {
            $this->dispatcher->dispatch($request);
        }
    }
}