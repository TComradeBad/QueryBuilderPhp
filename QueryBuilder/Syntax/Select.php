<?php
namespace tcb\QueryBuilder\Syntax;

use tcb\QueryBuilder\AbstractQuery;
use tcb\QueryBuilder\Syntax\From;

class Select extends AbstractQuery {


    public function __construct($columns)
    {
        $this->query = "SELECT ";
        if(gettype($columns)==="array")
        {
            foreach ($columns as $column)
            {
                $this->query.=$column.",";
            }
            }else
            {
                $this->query.=$columns.",";
            }



        return $this;

    }

        public function from($tables)
        {
        $this->query=substr_replace($this->query,' ',-1);
        $from = new \tcb\QueryBuilder\Syntax\From($tables,$this->query);
        return $from;
        }

        public function get()
        {
            $this->query=substr_replace($this->query,' ',-1);
            return parent::get(); // TODO: Change the autogenerated stub
        }


        public function count($columns, $asColumn= null)
        {
            if(isset($asColumn))
            {
                $this->query.="count($columns) AS $asColumn,";
            }else
            {
                $this->query.="count($columns),";
            }
            return $this;

        }



        public function min($columns, $asColumn= null)
        {
            if(isset($asColumn))
            {
                $this->query.="MIN($columns) AS $asColumn,";
            }else
            {
                $this->query.="MIN($columns),";
            }
            return $this;
        }


        public function max($columns, $asColumn= null)
         {
             if(isset($asColumn))
             {
                 $this->query.="MAX($columns) AS $asColumn,";
             }else
             {
                 $this->query.="MAX($columns),";
             }
             return $this;
         }


        public function asColumns($columns)
        {
            foreach ($columns as $key => $column)
            {
                $this->query.="$key AS $column,";
            }
            return $this;
        }


}
