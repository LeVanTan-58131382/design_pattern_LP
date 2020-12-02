<?php
class UserController{
    private UserServiceDI $email;

    public function __construct(UserServiceDI $email)
    {
        $this->email=$email;
    }

    function send():void{
        $this->email->sendEmail("For all User");
    }
}