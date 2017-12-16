<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_rfcs extends Model
{
    //
     protected $fillable = [
        'rfcnumber','rfctitle','description','executionstart','executionend','created_at'
    ];
}
