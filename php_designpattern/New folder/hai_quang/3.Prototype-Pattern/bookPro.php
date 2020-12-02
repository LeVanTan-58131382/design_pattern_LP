<?php

abstract class bookPro{
    protected $title;
    protected $topic;

    abstract function __clone();

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTopic()
    {
        return $this->topic;
    }


}
