<?php

namespace App\Models;

use CodeIgniter\Model;

class GenModel extends Model
{
    protected $table = 'generation';

    public function getGenData(){
        return $this->findAll();
    }
}