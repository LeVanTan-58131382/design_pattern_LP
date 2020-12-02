<?php


interface State
{
    function doAction(Context $context);
}