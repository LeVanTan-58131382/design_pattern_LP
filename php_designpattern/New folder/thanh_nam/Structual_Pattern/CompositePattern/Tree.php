<?php
class Tree{
    private string $name;
    private string $branch;
    private array $result = array();


    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setBranch($branch){
        $this->branch = $branch;
    }
    public function getBranch(){
        return $this->branch;
    }

    public function setResult(array $result)
    {
        $this->result = $result;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function __construct(string $name, string $branch)
    {
        $this->name = $name;
        $this->branch = $branch;
    }

    public function add(Tree $tree){
        array_push($this->result, $tree);
    }

    public function remove(Tree $tree){
        foreach ($this->result as $key => $value){
            if ($value->getName() == $tree->getName()){
                unset($this->result[$key]);
            }
        }
    }

    public function toString(){
        return "Leaf: [Name: ".$this->name." Branch: ". $this->branch ."]<br>";

    }

}