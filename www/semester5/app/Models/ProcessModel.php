<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class ProcessModel extends Model
{
    use HasFactory;

    protected $table = 'process_models';

    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
