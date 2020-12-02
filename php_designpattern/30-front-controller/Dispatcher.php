<?php

namespace FrontControllerPattern;

class Dispatcher
{
    private StudentView $studentView;
    private HomeView $homeView;

    public function __construct()
    {
        $this->studentView = new StudentView();
        $this->homeView = new HomeView();
    }

    public function dispatch(string $request)
    {
        if ($request == "STUDENT") {
            $this->studentView->show();
        } else {
            $this->homeView->show();
        }
    }
}