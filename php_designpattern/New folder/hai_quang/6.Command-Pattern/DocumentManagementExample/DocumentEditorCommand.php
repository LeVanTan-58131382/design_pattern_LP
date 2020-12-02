<?php
require_once "CommandDocument.php";
require_once "Document.php";
class DocumentEditorCommand implements CommandDocument{

    private Document $document;
    private String $text;

    public function __construct(Document $document, String $text)
    {
        $this->document=$document;
        $this->text=$text;
        $this->document->write($text);
    }

    function undo()
    {
        // TODO: Implement undo() method.
        $this->document->eraseLast();
    }

    function redo()
    {
        // TODO: Implement redo() method.
        $this->document->write($this->text);
    }
}