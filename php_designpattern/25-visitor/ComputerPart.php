<?php


interface ComputerPart
{
    function accept(ComputerPartVisitor $computerPartVisitor);
}