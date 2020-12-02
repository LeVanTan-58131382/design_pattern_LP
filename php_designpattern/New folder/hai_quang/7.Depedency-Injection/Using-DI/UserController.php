<?php
require_once "UserService.php";
class UserController{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService=$userService;
    }

    public function send(): void{
        $this->userService->sendMessage("For new employee");
        echo "<br>";
    }
}