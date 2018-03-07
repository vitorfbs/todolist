<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   public $timestamps = false;

   protected $fillable = [
       'title','content',
   ];

   //called upon click, it changes the status of the task to the opposite one,
   //meaning if it is uncomplete, it will be complete and vice versa
   public function  toggleStatus(){
     $this->status = ! $this->status;
     return $this;
   }
}
