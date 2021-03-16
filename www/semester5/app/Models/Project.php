<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProcessModel;
use App\Models\User;

class Project extends Model
{
    use HasFactory;

    public function processModel()
    {
         return $this->belongsTo(ProcessModel::class);
    }

    public function leader()
    {
         return $this->belongsTo(User::class);
    }
}
