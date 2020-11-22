<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constituency extends Model
{
    use HasFactory;

    public function region()
    {
        return $this->belongsTo('App\Models\Region');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }

    public function winner()
    {
        return $this->belongsTo('App\Models\Party');
    }

    public function nearest()
    {
        return $this->belongsTo('App\Models\Party');
    }
}
