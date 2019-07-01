<?php
namespace QueryBuilder\Syntax;


class Select extends AbstractQuery {
    
    public function __construct() {
        $this->query = "SELECT ";
    }

    public function from($columns = null){
        if(!isset($columns)){
            $this->query=$this->query."* ";
        }
        return $this;
        
    }
}
