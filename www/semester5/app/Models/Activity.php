<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Phase;
use App\Models\Ressource;
use App\Models\ExternalCost;


class Activity extends Model
{
    use HasFactory;

    protected $table = 'activities';

    public function user()
    {
         return $this->belongsTo(User::class);
    }

    public function phase()
    {
         return $this->belongsTo(Phase::class);
    }

    public function ressource()
    {
         return $this->belongsTo(Ressource::class);
    }

    public function externalCost()
    {
         return $this->belongsTo(ExternalCost::class);
    }
}
