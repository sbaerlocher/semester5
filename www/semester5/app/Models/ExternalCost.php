<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Activity;

class ExternalCost extends Model
{
    use HasFactory;

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }

}
