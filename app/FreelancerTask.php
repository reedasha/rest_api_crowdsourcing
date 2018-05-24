<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FreelancerTask extends Model
{
    protected $fillable = ['finished'];

    protected $guarded = ['id', 'idFreelancer', 'idTask']; 

}
