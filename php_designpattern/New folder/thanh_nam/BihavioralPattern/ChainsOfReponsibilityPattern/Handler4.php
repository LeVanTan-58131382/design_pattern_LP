<?php
class Handler4 extends abstractHandler{
    public function handler($request)
    {
        if ($request <= 4) {
            echo "Handle Successful";
        } else {
            echo "Handler 4 can not handle this problems, pls handle that!";
            echo "<br>";
            parent::handler($request); // TODO: Change the autogenerated stub
        }
    }
}