<?php

require_once "StackWord.php";
class Document{
    /**
     * @var StackWord
     */
    private StackWord $stack;

    function write(string $text){
        $this->stack->push($text);
    }

    function eraseLast(){
        if (!$this->stack->isEmpty()){
            $this->stack->pop();
        }
    }

    function readDocument(){
        foreach (($this->stack) as &$word){
            echo $word;
        }
    }
}