<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projectdetails extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['name','Companyname','date','status'];
}
