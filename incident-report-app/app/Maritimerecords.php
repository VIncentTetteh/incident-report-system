<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Maritimerecords extends Model
{
    
    protected $fillable = [
        'name','type','date','flagstate','country','vessel','action','location','agency',
    ];
}
