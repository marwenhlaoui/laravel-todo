<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = "todo";


    public function tags(){ 
    	if (!empty($this->tags)) {
    		return explode(' , ', $this->tags);
    	}

    }
}
