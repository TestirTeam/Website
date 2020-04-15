<?php
class UserManager extends Model{

    public function getUser(){
        $this->getAll('clients');
    }
}