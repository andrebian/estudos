<?php

namespace Application\Model;


class Entity
{
    
    protected $id;
    protected $created;
    protected $modified;
    
    
    public function __construct()
    {
        $this->created = date('Y-m-d H:i:s');
        $this->modified = date('Y-m-d H:i:s');
    }
    
    public function getId()
    {
        return $this->id;
    }

}
