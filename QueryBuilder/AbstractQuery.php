<?php

namespace QueryBuilder;

abstract class AbstractQuery{

protected $query = null;


public function get(){
    return $this->query.";";
}


}
