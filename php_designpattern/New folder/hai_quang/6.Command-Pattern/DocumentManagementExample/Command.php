<?php
interface Command{
    function undo();
    function redo();
}