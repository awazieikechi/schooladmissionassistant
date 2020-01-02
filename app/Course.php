<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
     public function user() {
    
    return $this->belongsTo(User::class);
    	 
   }

    
     protected $fillable = [
     'amount', 'course_name', 'postutme_score', 'ssce_requirements'
    ];
}
