<?php
require_once "StackWord.php";
require_once "Document.php";
class DocumentInvoker{
    private StackWord $undoCommand;
    private StackWord $redoCommand;
    private ?Document $document = null;
    private Command $cmd;

    public function __construct()
    {
    }

    function undo() : void{
        if (!$this->undoCommand.isEmpty()){
            settype($cmd,"Command");
            $cmd = $this->undoCommand.pop();
            $cmd.$this->undo();
            $this->redoCommand.push($cmd);
        }else{
            echo "Nothing to undo";
        }
    }

    function redo() : void{
        if (!$this->redoCommand.isEmpty()){
            settype($cmd,"Command");
            $cmd = $this->redoCommand.pop();
            $cmd.$this->redo();
            $this->redoCommand.push($cmd);
        }else{
            echo "Nothing to redo";
        }
    }

    function write(String $text) : void{
        $cmd1 = new DocumentEditorCommand($this->document, $text);
        $this->undoCommand->push($cmd1);
        $this->redoCommand->clear();
    }

    function read() : void{
        $this->document->readDocument();
    }
}