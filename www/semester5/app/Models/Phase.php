<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Project;

class Phase extends Model
{
    use HasFactory;


    public function processModel()
    {
//         return $this->belongsTo(ProcessModel::class);
    }

    public function visum()
    {
         return $this->belongsTo(User::class);
    }

    public function project()
    {
         return $this->belongsTo(Project::class);
    }
}
