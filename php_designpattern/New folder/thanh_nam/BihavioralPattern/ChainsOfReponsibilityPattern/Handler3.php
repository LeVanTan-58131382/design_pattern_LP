<?php
class Handler3 extends abstractHandler{
    public function handler($request)
    {
        if ($request<=3){
            echo "Handle Successful";
        }else {
            echo "Handler 3 can not handle this problems, pls handle that!";
            echo "<br>";
            parent::handler($request); // TODO: Change the autogenerated stub
        }
    }
}