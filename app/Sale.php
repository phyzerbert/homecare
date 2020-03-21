<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guarded = [];
    
    public function bank() {
        return $this->belongsTo(Bank::class);
    }
}
