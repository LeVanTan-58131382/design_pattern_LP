<?php
require_once "DocumentInvoker.php";
require_once "DocumentEditorCommand.php";

$instance = new DocumentInvoker();
$instance->write("1st once ");
$instance->undo();
$instance->read();

$instance->redo();
$instance->read();