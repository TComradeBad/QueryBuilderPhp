<?php

namespace QueryBuilder;

class AbstractQuery{

protected $query = null;


public function get(){
    return $this->query.";";
}


}
