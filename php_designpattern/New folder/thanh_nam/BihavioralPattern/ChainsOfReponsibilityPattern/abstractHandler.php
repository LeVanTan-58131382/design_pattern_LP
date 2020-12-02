<?php
abstract  class  abstractHandler implements Handle{
    protected Handle $nextHandler;

    public function handler($request)
    {
        // TODO: Implement handler() method.
        if ($this->nextHandler!=null){
            $this->nextHandler->handler($request);
        }else{
            echo "Can not handle this problems";
        }
    }

    /**
     * @param Handle $nextHandler
     */
    public function setNextHandler(Handle $nextHandler): void
    {
        $this->nextHandler = $nextHandler;
    }

}